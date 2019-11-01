<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    public function register(Request $request) {
        if ($request->isMethod("post")) {
            $user_mobile_number = $request->get('user_mobile_number');
            $user_password = $request->get('user_password');

            $exist = User::where(["mobile_number" => $user_mobile_number, "user_type_id" => 3])->first();
            if ($exist) {
                return response()->json([
                            'status' => false,
                            'msg' => 'You have already registered with this mobile number.'
                ]);
            } else {
                $user = new User();
                $user->user_type_id = 3;
                $user->email_id = '';
                $user->name = '';
                $user->mobile_number = $user_mobile_number;
                $user->password = bcrypt($user_password);
                $user->save();

                return response()->json([
                            'status' => true,
                            'msg' => 'You have successfully registered.'
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
