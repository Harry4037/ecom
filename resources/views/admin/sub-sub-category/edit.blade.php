@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @include('layouts.admin.breadcrumbs')
        @include('errors.errors-and-messages')
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Sub Category </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>

                <form class="form-horizontal form-label-left" action="{{ route('admin.sub-sub-category.edit', $subsubcategory) }}" method="post" id="editSubCategoryForm" enctype="multipart/form-data">
                    @csrf
                    @include('admin.sub-sub-category._form')
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                            <a class="btn btn-default" href="{{ route('admin.sub-sub-category.index') }}">Cancel</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script>
    $(document).ready(function () {

        $("#editSubCategoryForm").validate({
            rules: {
                category_image: {
                    accept: "image/*",
                },
                category_id: {
                    required: true
                },
                sub_category_id: {
                    required: true
                },
                sub_sub_category_name: {
                    required: true
                },
                is_active: {
                    required: true,
                },
            }
        });

        $(document).on("change", "#category_id", function () {
            var cat_id = $("#category_id").val();
            $.ajax({
                url: "{{route('admin.sub-sub-category.sub-category')}}",
                type: 'post',
                data: {cat_id: cat_id},
                dataType: 'html',
                beforeSend: function () {
                    $(".overlay").show();
                },
                success: function (res) {
                    $(".overlay").hide();
                    console.log(res);
                    $("#sub_category_div").html(res);
                }
            });
        });

    });
</script>

@endsection