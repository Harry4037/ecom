<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Select Banner @if(!isset($banner))<span class="error">*</span>@endif</label>
    <div class="col-md-4 col-sm-6 col-xs-6">
        <input type="file" class="form-control" name="banner_image" id="banner_image">
    </div>
</div>
@if(isset($banner))
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Banner Preview</label>
    <div class="col-md-4 col-sm-6 col-xs-6">
        <img class="img-bordered" src="{{$banner->image_name}}" style="width: 50%">
    </div>
</div>
@endif
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Page Url <span class="error">*</span></label>
    <div class="col-md-4 col-sm-6 col-xs-6">
        <input type="text" class="form-control" name="page_url" id="page_url" placeholder="Page Url" value="@if(isset($banner)){{$banner->page_url}}@endif">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Is Active <span class="error">*</span></label>
    <div class="col-md-4 col-sm-6 col-xs-6">
        <select class="form-control" name="banner_status" id="banner_status">
            @if(isset($banner))
            <option value="">Choose option</option>
            <option value="1" @if($banner->is_active == 1){{"selected"}}@endif>Yes</option>
            <option value="0"@if($banner->is_active == 0){{"selected"}}@endif>No</option>
            @else
            <option value="">Choose option</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            @endif
        </select>
    </div>
</div>