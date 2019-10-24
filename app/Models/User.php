<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use Notifiable;


//    public function role() {
//        return $this->belongsTo('App\Models\UserType', 'user_type_id');
//    }
//
//    public function hasRole($role) {
//        return $this->role->name === $role;
//    }

}
