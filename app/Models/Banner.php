<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Banner extends Eloquent {
    
	public function getImageNameAttribute($value){
		return $value ? asset('storage/banner/'.$value) : "";
	}
}
