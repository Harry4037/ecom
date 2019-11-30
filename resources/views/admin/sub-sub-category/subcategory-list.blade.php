<select class="form-control" name="sub_category_id" id="sub_category_id">
    <option value="">Select Option</option>
    @if($subCategories->count() > 0)
    @foreach($subCategories as $subCategory)
    <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
    @endforeach
    @else
    <option value="">No Sub Category Found</option>
    @endif
</select>