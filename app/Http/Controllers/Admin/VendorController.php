<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class VendorController extends Controller {

    public function userIndex() {

        $css = [
            'vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
        ];
        $js = [
            'vendors/datatables.net/js/jquery.dataTables.min.js',
            'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js',
        ];
        return view('admin.vendors.index', ['js' => $js, 'css' => $css]);
    }

    public function usersList(Request $request) {
        try {
            $offset = $request->get('start') ? $request->get('start') : 0;
            $limit = $request->get('length');
            $searchKeyword = $request->get('search')['value'];

            $query = User::query();
            $query->where(["user_type_id" => 2, "deleted_at" => NULL]);
            if ($searchKeyword) {
                $query->where("fullname", "LIKE", "%$searchKeyword%")
                        ->orWhere("contact", "LIKE", "%$searchKeyword%")
                        ->orWhere("eamil", "LIKE", "%$searchKeyword%");
            }
            $data['recordsTotal'] = $query->count();
            $data['recordsFiltered'] = $query->count();
            $users = $query->take((int) $limit)->offset($offset)->latest()->get();

            $usersArray = [];
            $i = 0;
            foreach ($users as $user) {
                $usersArray[$i]['name'] = $user->fullname;
                $usersArray[$i]['email'] = $user->eamil;
                $usersArray[$i]['mobileno'] = $user->contact;
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
                return ['status' => true, "message" => "Vendor deleted."];
            } else {
                return ['status' => false, "message" => "Something went be wrong."];
            }
        } catch (\Exception $ex) {
            return ['status' => false, "message" => $ex->getMessage()];
        }
    }

}
