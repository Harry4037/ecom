@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @include('layouts.admin.breadcrumbs')
        @include('errors.errors-and-messages')
        <div class="x_panel">
            <div class="x_title">
                <h2>Create Banner </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>

                <form class="form-horizontal form-label-left" action="{{ route('admin.banner.create') }}" method="post" id="addBannerForm" enctype="multipart/form-data">
                    @csrf
                    @include('admin.banner._form')
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                            <a class="btn btn-default" href="{{ route('admin.banner.index') }}">Cancel</a>
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

        $("#addBannerForm").validate({
            rules: {
                banner_image: {
                    required: true,
                    accept: "image/*",
                },
                page_url: {
                    required: true,
                    url: true
                },
                banner_status: {
                    required: true
                },
            },
            messages: {
                banner_image: {
                    accept: "Not valid image type"
                }
            }
        });

    });
</script>

@endsection