@extends('user.layout.master')
@section('content')
    <div class="mb-5 admin-main-content-inner">
        <h4>Company Dashboard</h4>
        <p><span class="fa fa-users"></span> - Employees</p>
        <div class="text-right">
            <a href="{{ route('employee.create') }}" class="mb-3 btn btn-success"><span class="fa fa-plus mr-2"></span>Add
                Employee</a>
        </div>
        <div class="p-4 rounded light-box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 employees text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">image</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Religion</th>
                            <th scope="col">Data-Of-birth</th>
                            <th scope="col">Document</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body">
                        @foreach ($employees as $employee)
                            <tr>
                                <td>#{{ $loop->iteration }}</td>
                                <td>{{ $employee->name }}</td>
                                <td><a href="{{ asset(''). '' .$employee->image }}">
                                    <img src="{{ asset(''). '' .$employee->image }}" alt="" height="50" width="50" class="image"></a>
                                    </td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->nationality }}</td>
                                <td>{{ $employee->religion }}</td>
                                <td>{{ $employee->dob }}</td>
                                <td>
                                    <a
                                    href="{{ route('employee.show', ['employee' => $employee->id]) }}"><span class="fa fa-eye text-success"></span></a>
                                    </td>
                                <td class="text-center">
                                    <a href="{{ route('employee.edit', $employee->id) }}" class="mx-2"><span class="fa fa-edit text-info"></span></a>
                                    <form method="post" action="{{ route('employee.destroy', $employee->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="border" type="submit"><span class="fa fa-trash text-danger show_confirm"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('script')
@if (\Illuminate\Support\Facades\Session::has('message'))
<script>
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
</script>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function() {
            /*datatable search*/
            $('.employees').DataTable({
                "pageLength": 10,
                aaSorting: [
                    [0, "asc"]
                ],
                "fnDrawCallback": function(oSettings) {
                    if ($('.employees-body > tr').length < 4) {
                        $('.dataTables_paginate').hide();
                    }
                },
                /*"columnDefs": [{"type": "date", "targets": 0}]*/
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
    });
    </script>
@endsection
