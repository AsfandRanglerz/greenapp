@extends('company.layout.master')
@section('content')
    <div class="mb-5 admin-main-content-inner">
        <h4>Company Dashboard</h4>
        <p><span class="fa fa-users"></span> - Employee Visa Process</p>
        <div class="text-right">
            {{-- <a href="{{ route('company.employee.create') }}" class="mb-3 btn btn-success"><span
                    class="fa fa-plus mr-2"></span>Add
                Employee</a> --}}
        </div>


    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function() {
            /*datatable search*/
            $('.employees').DataTable({
                "pageLength": 10,
                aaSorting: [
                    [0, "asc"]
                ]
            });
            /*datatable search*/

            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
            $(document).on('click', '.employee-data', function() {
                var id = $(this).attr('id');
                // alert(id);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    url: "{{ url('company/employee-view') }}",
                    data: {
                        'id': id,

                    },
                    success: function(response) {
                        $("#mymodal").html(response);

                    }
                });
            });

        });
    </script>
@endsection
