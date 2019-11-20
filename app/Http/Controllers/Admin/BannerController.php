<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon;
use Validator;

class BannerController extends Controller {

    public function index(Request $request) {
        $css = [
            'vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
        ];
        $js = [
            'vendors/datatables.net/js/jquery.dataTables.min.js',
            'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js',
        ];
        return view('admin.banner.index', [
            'js' => $js,
            'css' => $css,
        ]);
    }

    public function bannerList(Request $request) {
        try {
            $offset = $request->get('start') ? $request->get('start') : 0;
            $limit = $request->get('length');
            $searchKeyword = $request->get('search')['value'];

            $query = Banner::query();
            $data['recordsTotal'] = $query->count();
            $data['recordsFiltered'] = $query->count();
            $banners = $query->take((int) $limit)->offset($offset)->latest()->get();

            $bannersArray = [];
            foreach ($banners as $k => $banner) {
                $bannersArray[$k]['banner'] = '<img class="img-bordered" height="100" width="200" src=' . $banner->image_name . '>';
                $bannersArray[$k]['page_url'] = $banner->page_url;
                $checked_status = $banner->is_active ? "checked" : '';
                $bannersArray[$k]['status'] = "<label class='switch'><input  type='checkbox' class='banner_status' id=" . $banner->id . " data-status=" . $banner->is_active . " " . $checked_status . "><span class='slider round'></span></label>";
                $bannersArray[$k]['action'] = '<a href="' . route('admin.banner.edit', $banner) . '" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>&nbsp;'
                        . '<a href="javaScript:void(0);" class="btn btn-danger btn-xs delete" id="' . $banner->id . '" ><i class="fa fa-trash"></i> Delete </a>';
            }

            $data['data'] = $bannersArray;
            return $data;
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function bannerCreate(Request $request) {
        try {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                            'banner_image' => ['bail', 'required', 'mimes:jpeg,jpg,png'],
                            'banner_status' => ['bail', 'required']
                ]);
                if ($validator->fails()) {
                    return redirect()->route('admin.banner.create')->withErrors($validator)->withInput();
                }
                $banner_image = $request->file("banner_image");
                $banner = Storage::disk('public')->put('banner', $banner_image);
                $banner_file_name = basename($banner);

                $banner = new Banner();
                $banner->image_name = $banner_file_name;
                $banner->page_url = $request->page_url;
                $banner->is_active = $request->banner_status;
                $banner->created_by = auth()->user()->id;

                if ($banner->save()) {
                    return redirect()->route('admin.banner.index')->with('status', 'Banner has been added successfully.');
                } else {
                    return redirect()->route('admin.banner.index')->with('error', 'Something went be wrong.');
                }
            }

            return view('admin.banner.create');
        } catch (\Exception $e) {
            return redirect()->route('admin.banner.index')->with('error', $ex->getMessage());
        }
    }

    public function bannerStatus(Request $request) {
        try {
            if ($request->isMethod('post')) {
                $banner = Banner::findOrFail($request->record_id);
                $banner->is_active = $request->status;
                $banner->updated_at = Carbon::now();
                if ($banner->save()) {
                    return ['status' => true, 'data' => ["status" => $request->status, "message" => "Status updated successfully."]];
                } else {
                    return ['status' => false, "message" => "Something went be wrong."];
                }
            } else {
                return ['status' => false, "message" => "Method not allowed."];
            }
        } catch (\Exception $e) {
            return ['status' => false, "message" => $e->getMessage()];
        }
    }

    public function bannerDelete(Request $request) {
        try {
            $banner = Banner::find($request->id);
            if ($banner) {
                $banner->delete();
                return ['status' => true, "message" => "Banner deleted."];
            } else {
                return ['status' => false, "message" => "Something went be wrong."];
            }
        } catch (\Exception $ex) {
            return ['status' => false, "message" => $ex->getMessage()];
        }
    }

    public function bannerEdit(Request $request, Banner $banner) {
        try {

            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                            'banner_image' => ['bail', 'mimes:jpeg,jpg,png'],
                            'banner_status' => ['bail', 'required']
                ]);
                if ($validator->fails()) {
                    return redirect()->route('admin.banner.edit', $banner->id)->withErrors($validator)->withInput();
                }
                if ($request->hasFile('banner_image')) {
                    $banner_image = $request->file("banner_image");
                    $bannerImage = Storage::disk('public')->put('banner', $banner_image);
                    $banner_file_name = basename($bannerImage);
                    $banner->image_name = $banner_file_name;
                }
                $banner->is_active = $request->banner_status;
                $banner->page_url = $request->page_url;

                if ($banner->save()) {
                    return redirect()->route('admin.banner.edit', $banner)->with('status', 'Banner has been updated successfully.');
                } else {
                    return redirect()->route('admin.banner.edit', $banner)->with('error', 'Something went be wrong.');
                }
            }

            return view('admin.banner.edit', [
                'banner' => $banner
            ]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.banner.index')->with('error', $ex->getMessage());
        }
    }

}
