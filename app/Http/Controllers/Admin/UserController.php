<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    public function userIndex() {

        $css = [
            'vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
        ];
        $js = [
            'vendors/datatables.net/js/jquery.dataTables.min.js',
            'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js',
        ];
        return view('admin.users.index', ['js' => $js, 'css' => $css]);
    }

    public function usersList(Request $request) {
        try {
            $offset = $request->get('start') ? $request->get('start') : 0;
            $limit = $request->get('length');
            $searchKeyword = $request->get('search')['value'];

            $query = User::query();
            $query->where(["user_type_id" => 3, "deleted_at" => NULL]);
            if ($searchKeyword) {
                $query->where("user_name", "LIKE", "%$searchKeyword%")
                        ->orWhere("mobile_number", "LIKE", "%$searchKeyword%")
                        ->orWhere("email_id", "LIKE", "%$searchKeyword%");
            }
            $data['recordsTotal'] = $query->count();
            $data['recordsFiltered'] = $query->count();
            $users = $query->take((int) $limit)->offset($offset)->latest()->get();

            $usersArray = [];
            $i = 0;
            foreach ($users as $user) {
                $usersArray[$i]['name'] = $user->name;
                $usersArray[$i]['email'] = $user->email_id;
                $usersArray[$i]['mobileno'] = $user->mobile_number;
                $usersArray[$i]['action'] = '<a href="javaScript:void(0);" class="btn btn-danger btn-xs delete" id="' . $user->id . '" ><i class="fa fa-trash"></i> Delete </a>';
                $i++;
            }
            $data['data'] = $usersArray;
            return $data;
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function userDelete(Request $request) {
        try {
            $user = User::find($request->id);
            if ($user) {
                $user->delete();
                return ['status' => true, "message" => "User deleted."];
            } else {
                return ['status' => false, "message" => "Something went be wrong."];
            }
        } catch (\Exception $ex) {
            return ['status' => false, "message" => $ex->getMessage()];
        }
    }

}
