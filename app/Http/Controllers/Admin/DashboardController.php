<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller {

    public function index() {

        $activeUsers = User::where(["account_verified" => 1, "user_type_id" => 3])->count();
        $inactiveUsers = User::where(["account_verified" => 0, "user_type_id" => 3])->count();
        $css = [
            'vendors/bootstrap-daterangepicker/daterangepicker.css',
        ];
        $js = [
            'vendors/moment/min/moment.min.js',
            'vendors/bootstrap-daterangepicker/daterangepicker.js',
        ];

        return view('admin.dashboard.dashboard', [
            "activeUsers" => $activeUsers,
            "inactiveUsers" => $inactiveUsers,
            "js" => $js,
            "css" => $css
        ]);
    }

}
