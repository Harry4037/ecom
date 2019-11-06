<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginOtp;

class UserController extends Controller {

    public function register(Request $request) {
        if ($request->isMethod("post")) {
            $user_mobile_number = $request->get('user_email_id');
            $user_password = $request->get('user_password');

            $exist = User::where(["email_id" => $user_mobile_number, "user_type_id" => 3])->first();
            if ($exist) {
                return response()->json([
                            'status' => false,
                            'msg' => 'You have already registered with this email.'
                ]);
            } else {
                $user = new User();
                $user->user_type_id = 3;
                $user->email_id = $user_mobile_number;
                $user->otp = 9999;
                $user->name = '';
                $user->mobile_number = '';
                $user->email_verified = 0;
                $user->password = bcrypt($user_password);
                $user->save();

                try {
                    Mail::to($request->email_id)->send(new LoginOtp($OTP));
                } catch (\Exception $e) {
                    
                }

                return response()->json([
                            'status' => true,
                            'msg' => 'You have successfully registered. We have sent the OTP to you.',
                            'user_id' => $user->id
                ]);
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
                $user->email_verified = 1;
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
                        'status' => true,
                        'msg' => 'Method not allowed.'
            ]);
        }
    }

}
