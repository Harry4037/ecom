<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function sendOTP($mobileNumber, $otp) {
        $msg = "Dear Customer, your One Time Verification (OTP) code is " . $otp;
        $msg = urlencode($msg);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.msg91.com/api/sendhttp.php?mobiles=$mobileNumber&authkey=213038AyKnB5sSlD385ae69d3f&route=4&sender=TESTIN&message=$msg&country=91",
            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 30,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
//        if ($err) {
//            dd($err->getInfo());
//            echo "cURL Error #:" . $err->getInfo();
//        } else {
//            echo $response;
//        }
//        die;
        return true;
    }

    public function sendForgetLink($mobileNumber, $link) {
        $msg = "Dear Customer, Please click on this link to reset your password " . $link;
        $msg = urlencode($msg);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.msg91.com/api/sendhttp.php?mobiles=$mobileNumber&authkey=213038AyKnB5sSlD385ae69d3f&route=4&sender=TESTIN&message=$msg&country=91",
            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 30,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
//        if ($err) {
//            dd($err->getInfo());
//            echo "cURL Error #:" . $err->getInfo();
//        } else {
//            echo $response;
//        }
//        die;
        return true;
    }

}
