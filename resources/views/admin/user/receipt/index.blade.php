@extends('admin.layout.app')

@section('title', 'index')

@section('content')
<style>
    .btn_warning{
    background: #ef9e09;
    padding: 9px 14px;
    border-radius: 9px;
    box-shadow: 0 2px 6px #82d3f8;
    }
</style>
    <div class="main-content" style="min-height: 562px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <h4>Employees</h4>

                                </div>
                                {{-- @dd($data) --}}
                            </div>
                            {{-- @dd($data) --}}
                            <div class="card-body table-striped table-bordered table-responsive">
                                {{-- <a class="btn btn-primary mb-3"
                                href="{{route('admin.user.index')}}">Back</a> --}}
                                {{-- <a class="btn btn-success mb-3" href="{{ route('receipt-user-index') }}">Back</a> --}}

                                <table class="table text-center" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Email</th>
                                            <th>Receipts</th>
                                            {{-- <th scope="col">Action</th> --}}
                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $employee)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td><a target="_black" href="{{ asset('') . '/' . $employee->image }}">
                                                        <img src="{{ asset('') . '/' . $employee->image }}" alt=""
                                                            height="50" width="50" class="image"></a>
                                                </td>
                                                <td>{{ $employee->email }}</td>

                                                <td>
                                                    <a href="{{ route('user-receipts', $employee->id) }}">View</a>
                                                </td>

                                                {{-- <td
                                                    style="display: flex;align-items: center;justify-content: center;column-gap: 8px">

                                                    <a id="{{ $employee->id }}" data-toggle="modal"
                                                        data-target=".bd-example-modal-lg" class="employee-data btn_warning"><span
                                                            class="fa fa-eye text-white"></span></a>
                                                    <a class="btn btn-info"
                                                        href="{{ route('user.edit', $employee->id) }}">Edit</a>
                                                    <form method="post"
                                                        action="{{ route('user.destroy', $employee->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-danger btn-flat show_confirm"
                                                            data-toggle="tooltip">Delete</button>
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg scrol employee-details-model" id="mymodal">
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        @if (\Illuminate\Support\Facades\Session::has('success'))
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
        @endif

        @if (\Illuminate\Support\Facades\Session::has('error'))
            toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
        @endif
    </script>

    <script>
        $(document).ready(function() {
            $('#table_id_events').DataTable();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
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
    </script>
    <script>
        $('.employee-data').click(function() {
            var id = $(this).attr('id');
            // console.log(id);
            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}', // Corrected csrf_token() usage
                },
                url: "{{ url('admin/employee-view') }}",
                data: {
                    'id': id,
                },
                success: function(response) {
                    $("#mymodal").html(response);
                }
            });
        });
    </script>
@endsection
