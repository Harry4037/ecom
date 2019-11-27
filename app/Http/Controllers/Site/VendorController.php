<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VendorController extends Controller {

    public function register(Request $request) {
        if ($request->isMethod("post")) {

            $fullname = $request->get('fullname');
            $username = $request->get('username');
            $email = $request->get('email');
            $contact = $request->get('contact');
            $pass = $request->get('pass');
            $expirydate = $request->get('expirydate');
            $registrationno = $request->get('registrationno');
            $businessid = $request->get('businessid');
            $storename = $request->get('storename');
            $tradename = $request->get('tradename');
            $phoneno = $request->get('phoneno');
            $pickupaddress = $request->get('pickupaddress');
            $country = $request->get('country');
            $city = $request->get('city');
            $zone = $request->get('zone');
            $iban = $request->get('iban');
            $iso = $request->get('iso');
            $ibancheckdigits = $request->get('ibancheckdigits');
            $bban = $request->get('bban');
            $bank = $request->get('bank');
            $accountno = $request->get('accountno');
            $sepa = $request->get('sepa');
            $vendor_doc = $request->file('vendor_doc');


            $user = new User();
            $user->fullname = $fullname;
            $user->user_type_id = 2;
            $user->username = $username;
            $user->eamil = $email;
            $user->contact = $contact;
            $user->password = $pass;
            $user->save();

            return redirect()->route('site.vendor.register')->with('status', 'You have successfully registered with us.');
        } else {

            return view('site.vendor');
        }
    }

}
