<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function index() {
        return view('site.index');
    }

    public function demomultistep()
    {
    	return view('site.multistep');
    }

}
