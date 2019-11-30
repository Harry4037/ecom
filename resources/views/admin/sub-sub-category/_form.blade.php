<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Select Thumbnail @if(!isset($subsubcategory))<span class="error">*</span>@endif</label>
    <div class="col-md-4 col-sm-6 col-xs-6">
        <input type="file" class="form-control" name="category_image" id="category_image">
    </div>
</div>
@if(isset($subsubcategory))
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Thumbnail Preview</label>
    <div class="col-md-4 col-sm-6 col-xs-6">
        <img class="img-bordered" src="{{$subsubcategory->thumbnail}}" style="width: 30%">
    </div>
</div>
@endif
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Category<span class="error">*</span></label>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <select class="form-control" name="category_id" id="category_id">
            <option value="">Select Option</option>
            @if($categories)
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if(isset($subsubcategory) && isset($category) && ($category->id == $subsubcategory->category_id)){{'selected'}}@endif>{{$category->name}}</option>
            @endforeach
            @endif
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Sub Category<span class="error">*</span></label>
    <div class="col-md-4 col-sm-4 col-xs-4" id="sub_category_div">
        <select class="form-control" name="sub_category_id" id="sub_category_id">
            <option value="">Select Option</option>
            @if(isset($subcategories))
            @foreach($subcategories as $subcategory)
            <option value="{{$subcategory->id}}" @if(isset($subsubcategory) && isset($subcategory) && ($subcategory->id == $subsubcategory->sub_category_id)){{'selected'}}@endif>{{$subcategory->name}}</option>
            @endforeach
            @endif
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Sub Sub Category Name<span class="error">*</span></label>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <input  type="text" class="form-control" placeholder="Sub Sub Category Name" name="sub_sub_category_name" id="sub_sub_category_name" value="@if(isset($subsubcategory)){{ $subsubcategory->name }}@endif">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Status<span class="error">*</span></label>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <select class="form-control" name="is_active" id="is_active">
            <option value="">Select Option</option>
            <option value="1" @if(isset($subsubcategory) && ($subsubcategory->is_active == 1)){{'selected'}}@endif>Yes</option>
            <option value="0" @if(isset($subsubcategory) && ($subsubcategory->is_active == 0)){{'selected'}}@endif>No</option>
        </select>
    </div>
</div>