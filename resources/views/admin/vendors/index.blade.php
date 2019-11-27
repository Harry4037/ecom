@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @include('errors.errors-and-messages')
        <div class="x_panel">
            <div class="x_title">
                <h2>Vendors</h2>
                <div class="pull-right">

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="list" class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <!--<th>Sr.No.</th>-->
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Mobile Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>

    var t = $('#list').DataTable({
        lengthMenu: [[10, 25, 50], [10, 25, 50]],
        searching: true,
        processing: true,
        serverSide: true,
        stateSave: true,
        language: {
            'loadingRecords': '&nbsp;',
            'processing': '<i class="fa fa-refresh fa-spin"></i>'
        },
        ajax: "{{route('admin.vendor.list')}}",
        "columns": [
//                {"data": null,
//                    render: function (data, type, row, meta) {
//                        return meta.row + meta.settings._iDisplayStart + 1;
//                    }
//                },
            {"data": "name", sortable: false},
            {"data": "email", sortable: false},
            {"data": "mobileno", sortable: false},
            {"data": "action", sortable: false},
        ]
    });

    $(document).ready(function () {

        $(document).on("click", ".delete", function () {
            var record_id = this.id;
            deletePopup(
                    "Deleting User",
                    "Are you sure want to delete this user?",
                    record_id,
                    "{{route('admin.vendor.delete')}}"
                    );
        });
    });
</script>
@endsection
