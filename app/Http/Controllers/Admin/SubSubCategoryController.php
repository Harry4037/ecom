<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class SubSubCategoryController extends Controller {

    public function subcategoryIndex() {

        $css = [
            'vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
        ];
        $js = [
            'vendors/datatables.net/js/jquery.dataTables.min.js',
            'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js',
        ];
        return view('admin.sub-sub-category.index', ['js' => $js, 'css' => $css]);
    }

    public function subcategoryList(Request $request) {
        try {
            $offset = $request->get('start') ? $request->get('start') : 0;
            $limit = $request->get('length');
            $searchKeyword = $request->get('search')['value'];

            $query = SubSubCategory::query();
            $query->with('category')->with('subcategory')->where(["deleted_at" => NULL]);
            if ($searchKeyword) {
                $query->where("name", "LIKE", "%$searchKeyword%");
            }
            $data['recordsTotal'] = $query->count();
            $data['recordsFiltered'] = $query->count();
            $categories = $query->take((int) $limit)->offset($offset)->latest()->get();
            $categoryArray = [];
            $i = 0;
            foreach ($categories as $category) {
                $categoryArray[$i]['name'] = $category->name;
                $categoryArray[$i]['thumbnail'] = '<img class="img-bordered" height="50" width="50" src=' . $category->thumbnail . '>';
                $categoryArray[$i]['cat_name'] = $category->category ? $category->category->name : '';
                $categoryArray[$i]['sub_cat_name'] = $category->subcategory ? $category->subcategory->name : '';
                $checked_status = $category->is_active ? "checked" : '';
                $categoryArray[$i]['status'] = "<label class='switch'><input  type='checkbox' class='subcategory_status' id=" . $category->id . " data-status=" . $category->is_active . " " . $checked_status . "><span class='slider round'></span></label>";
                $categoryArray[$i]['action'] = '<a href="' . route('admin.sub-sub-category.edit', $category) . '" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>'
                        . '<a href="javaScript:void(0);" class="btn btn-danger btn-xs delete" id="' . $category->id . '" ><i class="fa fa-trash"></i> Delete </a>';
                $i++;
            }
            $data['data'] = $categoryArray;
            return $data;
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function subcategoryCreate(Request $request) {
        try {
            $categories = Category::where("deleted_at", NULL)->get();
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                            'sub_sub_category_name' => [
                                'bail',
                                'required',
                            ],
                ]);
                if ($validator->fails()) {
                    return redirect()->route('admin.sub-sub-category.add')->withErrors($validator)->withInput();
                }
                $category_image = $request->file("category_image");
                $categoryImg = Storage::disk('public')->put('subsubcategory', $category_image);
                $category_file_name = basename($categoryImg);

                $subCategory = new SubSubCategory();
                $subCategory->thumbnail = $category_file_name;
                $subCategory->category_id = $request->category_id;
                $subCategory->sub_category_id = $request->sub_category_id;
                $subCategory->name = $request->sub_sub_category_name;
                $subCategory->is_active = $request->is_active;

                if ($subCategory->save()) {

                    return redirect()->route('admin.sub-sub-category.index')->with('status', 'Sub Sub Category has been added successfully.');
                } else {
                    return redirect()->route('admin.sub-sub-category.index')->with('error', 'Something went be wrong.');
                }
            }

            return view('admin.sub-sub-category.create', [
                'categories' => $categories
            ]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.sub-sub-category.index')->with('error', $ex->getMessage());
        }
    }

    public function subcategoryEdit(Request $request, SubSubCategory $subsubcategory) {
        try {

            $categories = Category::where("deleted_at", NULL)->get();
            $subcategories = SubCategory::where(["category_id" => $subsubcategory->category_id, "is_active" => "1", "deleted_at" => NULL])->get();

            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                            'sub_sub_category_name' => [
                                'bail',
                                'required',
                            ],
                ]);
                if ($validator->fails()) {
                    return redirect()->route('admin.sub-sub-category.edit', [
                                'subsubcategory' => $subsubcategory
                            ])->withErrors($validator)->withInput();
                }
                if ($request->hasFile('category_image')) {
                    $category_image = $request->file("category_image");
                    $categoryImage = Storage::disk('public')->put('subsubcategory', $category_image);
                    $category_file_name = basename($categoryImage);
                    $subsubcategory->thumbnail = $category_file_name;
                }
                $subsubcategory->category_id = $request->category_id;
                $subsubcategory->sub_category_id = $request->sub_category_id;
                $subsubcategory->name = $request->sub_sub_category_name;
                $subsubcategory->is_active = $request->is_active;

                if ($subsubcategory->save()) {

                    return redirect()->route('admin.sub-sub-category.edit', [
                                'subsubcategory' => $subsubcategory,
                            ])->with('status', 'Sub Sub Category has been updated successfully.');
                } else {
                    return redirect()->route('admin.sub-sub-category.edit', [
                                'subsubcategory' => $subsubcategory,
                            ])->with('error', 'Something went be wrong.');
                }
            }

            return view('admin.sub-sub-category.edit', [
                'categories' => $categories,
                'subcategories' => $subcategories,
                'subsubcategory' => $subsubcategory,
            ]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.sub-sub-category.index')->with('error', $ex->getMessage());
        }
    }

    public function subcategoryDelete(Request $request) {
        try {
            $category = SubSubCategory::find($request->id);
            if ($category) {
                $category->delete();
                return ['status' => true, "message" => "Sub Category deleted."];
            } else {
                return ['status' => false, "message" => "Something went be wrong."];
            }
        } catch (\Exception $ex) {
            return ['status' => false, "message" => $ex->getMessage()];
        }
    }

    public function subcategoryStatus(Request $request) {
        try {
            if ($request->isMethod('post')) {
                $banner = SubSubCategory::findOrFail($request->record_id);
                $banner->is_active = $request->status;
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

    public function subcategoryListHtml(Request $request) {
        $subCategories = SubCategory::where(["category_id" => $request->cat_id, "is_active" => "1", "deleted_at" => NULL])->get();
        return view('admin.sub-sub-category.subcategory-list', ['subCategories' => $subCategories]);
    }

}
