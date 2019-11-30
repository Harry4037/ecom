<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubSubCategory extends Eloquent {

    use SoftDeletes;

    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function subcategory() {
        return $this->belongsTo('App\Models\SubCategory', 'sub_category_id');
    }

    public function getThumbnailAttribute($value) {
        return $value ? asset('storage/subsubcategory/' . $value) : "";
    }

}
