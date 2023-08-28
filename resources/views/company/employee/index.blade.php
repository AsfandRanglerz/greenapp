@extends('company.layout.master')
@section('content')
    <div class="mb-5 admin-main-content-inner">
        <h4>Company Dashboard</h4>
        <p><span class="fa fa-users"></span> - Employees</p>
        <div class="text-right">
            <a href="{{ route('company.employee.create') }}" class="mb-3 btn btn-success"><span
                    class="fa fa-plus mr-2"></span>Add
                Employee</a>
        </div>
        <div class="p-4 rounded light-box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 employees text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Email</th>
                            {{-- <th scope="col">Phone</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Religion</th>
                            <th scope="col">Data-Of-birth</th> --}}
                            <th scope="col">Document</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body">
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $employee->name }}</td>
                                <td><a target="_black" href="{{ asset('') . '' . $employee->image }}">
                                        <img src="{{ asset('') . '' . $employee->image }}" alt="" height="50"
                                            width="50" class="rounded-circle"></a>
                                </td>
                                <td>{{ $employee->email }}</td>
                                {{-- <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->nationality }}</td>
                                <td>{{ $employee->religion }}</td>
                                <td>{{ $employee->dob }}</td> --}}
                                <td>
                                    <a href="{{ route('company.employee.show', ['employee' => $employee->id]) }}"><span
                                            class="fa fa-eye text-success"></span></a>
                                </td>
                                <td class="text-center">
                                    <a type="button" data-toggle="modal" data-target="#employeeDetails"><span class="fa fa-eye text-success"></span></a>
                                    <a href="{{ route('company.employee.edit', $employee->id) }}" class="mx-2"><span
                                            class="fa fa-edit text-info"></span></a>
                                    <form class="d-inline" method="post"
                                        action="{{ route('company.employee.destroy', $employee->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a class="form-btn" type="submit"><span
                                                class="fa fa-trash text-danger show_confirm"></span></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="employeeDetails" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="employeeDetailsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="employeeDetailsLabel"><span class="fa fa-user"></span> - Employee Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fa fa-times"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            @foreach ($employees as $employee)
                            <div class="col-12 mb-sm-3 mb-2 text-center">
                                <img src="{{ asset('') . '' . $employee->image }}" alt="" height="90"
                                    width="90" class="rounded-circle">
                            </div>
                            <div class="col-sm-6 mb-sm-3 mb-2">
                                <label>Name</label>
                                <input type="text" value="{{ $employee->name }}" class="form-control" readonly>
                            </div>
                            <div class="col-sm-6 mb-sm-3 mb-2">
                                <label>Email</label>
                                <input type="text" value="{{ $employee->email }}" class="form-control" readonly>
                            </div>
                            <div class="col-sm-6 mb-sm-3 mb-2">
                                <label>Phone</label>
                                <input type="text" value="{{ $employee->phone }}" class="form-control" readonly>
                            </div>
                            <div class="col-sm-6 mb-sm-3 mb-2">
                                <label>Nationality</label>
                                <input type="text" value="{{ $employee->nationality }}" class="form-control" readonly>
                            </div>
                            <div class="col-sm-6 mb-sm-3 mb-2">
                                <label>Religion</label>
                                <input type="text" value="{{ $employee->religion }}" class="form-control" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label>Data-Of-birth</label>
                                <input type="text" value="{{ $employee->dob }}" class="form-control" readonly>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-bg" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
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
        });
    </script>
@endsection
