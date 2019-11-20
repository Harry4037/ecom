<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Eloquent {

    use SoftDeletes;

    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function getThumbnailAttribute($value) {
        return $value ? asset('storage/subcategory/' . $value) : "";
    }

}
