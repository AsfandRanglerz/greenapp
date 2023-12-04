@extends('user.layout.master')
@section('content')
<style>
    .common-btn {
        background-color: var(--theme-clr);
    }
</style>

<body>
<div class="admin-main-content-inner">

     <div class="mb-5 admin-main-content-inner">
            <h4>Dashboard</h4>
        <p><span class="fa fa-book"></span> - Dependents</p>
        <div class="text-right">
            <a href="{{ route('user.create-dependent') }}" class="mb-3 btn btn-success"><span class="fa fa-plus mr-2"></span>Add
                Dependent</a>
        </div>
        <div class="p-4 rounded light-box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 dependants text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Dependent type</th>
                            <th scope="col">Request type</th>
                            <th scope="col">File</th>
                            <th scope="col">Response</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body"></tbody>
                </table>
            </div>
        </div>
    </div>
</body>

@endsection
@section('script')
<script type="text/javascript">
        $(function() {
            $(document).on('click', '.add-btn', function() {
                // get the last DIV which ID starts with ^= "docField"
                var $div = $('div[id^="docField"]:first');

                // Read the Number from that DIV's ID (i.e: 3 from "klon3")
                // And increment that number by 1
                var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

                // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
                var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end()
                    .show();
                html.find('.other-show, .other-none, .receipts-show').addClass('d-none');
                $($div).before(html);
            });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.doc-fields').remove();
            });
        });
    </script>

<!-- <script type="text/javascript">
    $(function() {
        /*datatable search*/
        $('.dependants').DataTable({
            "pageLength": 10,
            aaSorting: [
                [0, "asc"]
            ]
        });
        /*datatable search*/

        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#uploadedImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button-removeDrop").on('click', function() {
            $(this).siblings('.file-upload').click();
        });
    });
</script> -->

@endsection
