<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Car;

class TestController extends Controller {

    public function test() {
        $car = new Car();
        $car->carcompany = 'abc';
        $car->model = 'xyz';
        $car->price = 100;
        $car->save();
        $cars = DB::collection('cars')->get();
        dd($cars);
    }

    public function demomultistep()
    {
    	return view('site.multistep');
    }


}
