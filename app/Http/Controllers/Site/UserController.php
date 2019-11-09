<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginOtp;
use App\Mail\sendForgetLink;
use Illuminate\Support\Facades\URL;

class UserController extends Controller {

    public function register(Request $request) {
        if ($request->isMethod("post")) {
            $user_email_mobile = $request->get('user_email_mobile');
            $user_password = $request->get('user_password');

            $exist = User::where(["user_type_id" => 3, "deleted_at" => NULL])->where(function($query) use($user_email_mobile) {
                        $query->where("email_id", $user_email_mobile)->orWhere("mobile_number", $user_email_mobile);
                    })->first();
            if ($exist) {
                return response()->json([
                            'status' => false,
                            'msg' => 'You have already registered with these details.'
                ]);
            } else {
                if (preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $user_email_mobile) || strlen($user_email_mobile) == 10) {
                    $otp = rand(1000, 9999);
                    $user = new User();
                    $user->user_type_id = 3;
                    if (preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $user_email_mobile)) {
                        $user->email_id = $user_email_mobile;
                        $user->mobile_number = '';
                        try {
                            Mail::to($user_email_mobile)->send(new LoginOtp($otp));
                        } catch (\Exception $e) {
                            
                        }
                    }
                    if (strlen($user_email_mobile) == 10) {
                        $user->email_id = '';
                        $user->mobile_number = $user_email_mobile;
                        try {
                            $this->sendOTP($user_email_mobile, $otp);
                        } catch (\Exception $e) {
                            
                        }
                    }

                    $user->otp = $otp;
                    $user->name = $request->user_name;
                    $user->account_verified = 0;
                    $user->password = bcrypt($user_password);
                    $user->deleted_at = NULL;
                    $user->save();

                    return response()->json([
                                'status' => true,
                                'msg' => 'You have successfully registered. We have sent the OTP to you.',
                                'user_id' => $user->id
                    ]);
                } else {
                    return response()->json([
                                'status' => false,
                                'msg' => 'Please enter valid email address or mobile number.',
                    ]);
                }
            }
        } else {

            return response()->json([
                        'status' => true,
                        'msg' => 'Method not allowed.'
            ]);
        }
    }

    public function verifyOTP(Request $request) {
        if ($request->isMethod("post")) {
            $userOTP = $request->get('user_OTP');
            $userId = $request->get('user_otp_id');

            $user = User::find($userId);
            if ($user) {
                if ($user->otp == $userOTP) {
                    $user->account_verified = 1;
                    $user->save();

                    return response()->json([
                                'status' => true,
                                'msg' => 'OTP verified successfully.'
                    ]);
                } else {
                    return response()->json([
                                'status' => false,
                                'msg' => 'Incorrect OTP.'
                    ]);
                }
            } else {

                return response()->json([
                            'status' => false,
                            'msg' => 'Incorrect OTP.'
                ]);
            }
        } else {
            return response()->json([
                        'status' => true,
                        'msg' => 'Method not allowed.'
            ]);
        }
    }

    public function sendForgetPasswordLink(Request $request) {
        if ($request->isMethod("post")) {
            $user_email_mobile = $request->get('forget_email_id');

            $exist = User::where(["user_type_id" => 3, "deleted_at" => NULL])->where(function($query) use($user_email_mobile) {
                        $query->where("email_id", $user_email_mobile)->orWhere("mobile_number", $user_email_mobile);
                    })->first();
            if ($exist) {
                if (preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $user_email_mobile) || strlen($user_email_mobile) == 10) {

                    $passkey = md5(time());
                    $forgetLink = route('site.user.reset-password', ['passcode' => $passkey]);
                    if (preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $user_email_mobile)) {
                        try {
                            Mail::to($user_email_mobile)->send(new sendForgetLink($forgetLink));
                        } catch (\Exception $e) {
                            
                        }
                    }
                    if (strlen($user_email_mobile) == 10) {
                        try {
                            $this->sendForgetLink($user_email_mobile, $forgetLink);
                        } catch (\Exception $e) {
                            
                        }
                    }

                    $exist->forget_key = $passkey;
                    $exist->save();

                    return response()->json([
                                'status' => true,
                                'msg' => 'We have sent a reset password link to you.',
                    ]);
                } else {
                    return response()->json([
                                'status' => false,
                                'msg' => 'Please enter valid email address or mobile number.',
                    ]);
                }
            } else {
                return response()->json([
                            'status' => false,
                            'msg' => 'Record not found with these details.'
                ]);
            }
        } else {

            return response()->json([
                        'status' => true,
                        'msg' => 'Method not allowed.'
            ]);
        }
    }

    public function resetPassword(Request $request, $passcode) {
        $user = User::where("forget_key", $passcode)->first();
        if (!$user) {
            return view('site.reset-password-invalid');
        }
        if ($request->isMethod('post')) {
            $exist = User::find($request->user_id);
            if (!$exist) {
                return view('site.reset-password-invalid');
            }

            $exist->password = bcrypt($request->new_password);
            $exist->forget_key = '';
            $exist->save();

            return view('site.reset-password', [
                'passcode' => $passcode,
                'user' => $user,
                'msg' => 'Congratulations!! Your pasword reset successfully.'
            ]);
        }
        return view('site.reset-password', [
            'passcode' => $passcode,
            'user' => $user,
        ]);
    }

}
