<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Eloquent {

    use SoftDeletes;

    public function getThumbnailAttribute($value) {
        return $value ? asset('storage/category/' . $value) : "";
    }

    public function subcategories() {
        return $this->hasMany('App\Models\SubCategory', "category_id");
    }

}
