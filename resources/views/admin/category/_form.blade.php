<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Customer Name*</label>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <input  type="text" class="form-control" placeholder="Name" name="category_name" id="category_name" value="@if(isset($category)){{ $category->name }}@endif">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Status*</label>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <select class="form-control" name="is_active" id="is_active">
            <option value="">Select Option</option>
            <option value="1" @if(isset($category) && ($category->is_active == 1)){{'selected'}}@endif>Yes</option>
            <option value="0" @if(isset($category) && ($category->is_active == 0)){{'selected'}}@endif>No</option>
        </select>
    </div>
</div>