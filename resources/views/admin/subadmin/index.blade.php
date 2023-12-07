@extends('admin.layout.app')

@section('title', 'index')

@section('content')
    <style>
        .btn_warning {
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
                                    <h4>Sub Admins</h4>
                                </div>
                            </div>
                            <div class="card-body table-striped table-bordered table-responsive">
                                <a class="btn btn-success mb-3" href="{{ route('create-sub-admin') }}">Add Sub Admin</a>
                                <table class="table text-center" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th scope="col">Permissions</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($sub_admins as $sub_admin)
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $sub_admin->name }}</td>
                                                <td>{{ $sub_admin->email }}</td>
                                                <td><a target="_black" href="{{ asset('') . '/' . $sub_admin->image }}">
                                                        <img src="{{ asset('') . '/' . $sub_admin->image }}" alt=""
                                                            height="50" width="50" class="image"></a>
                                                </td>

                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                            @if($sub_admin->permissions->isEmpty())
                                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                            data-target="#notesModel1-{{$sub_admin->id}}">
                                                            <span class="fa fa-pen"></span>
                                                        </button>
                                                        @else
                                                        <button  class="btn btn-info" data-toggle="modal"
                                                        data-target="#notesModel2-{{$sub_admin->id}}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                          @endif
                                                    </div>
                                                </td>

                                                <td class="">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a style="margin-right:10px" class="btn p-0 btn-info"
                                                            href="{{route('edit-sub-admin',$sub_admin->id)}}">Edit</a>
                                                        <form method="post" action="{{route('delete-sub-admin',$sub_admin->id)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-flat show_confirm"
                                                                data-toggle="tooltip">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            {{-- @dd($permissions); --}}

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    {{-- {{-Add permission model-}} --}}
    @foreach ($sub_admins as $sub_admin)
        <div class="modal fade" id="notesModel1-{{$sub_admin->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="notesModelLabel" aria-hidden="true">
            <form action="{{ route('add-sub-admin-permission', $sub_admin->id) }}" method="POST">
                @csrf
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="notesModelLabel"><span
                                    class="fa fa-edit text-success mr-2"></span>Assign Permissions to {{ $sub_admin->name }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="permission-container  py-2 px-3">
                                @foreach ($permissions as $permission)
                                <div class="form-check">
                                    <input name='permission[]' class="form-check-label" type="checkbox"
                                        value="{{ $permission->id }}" id="create-{{$sub_admin->id}}-{{$permission->id}}"
                                        >
                                    <label class="form-check-label" for="create-{{$sub_admin->id}}-{{$permission->id}}">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
    {{-- {{-Update permission model -}} --}}
    @foreach ($sub_admins as $sub_admin)
        <div class="modal fade" id="notesModel2-{{$sub_admin->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="notesModelLabel" aria-hidden="true">
            <form action="{{ route('update-sub-admin-permission', $sub_admin->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="notesModelLabel"><span
                                    class="fa fa-edit text-success mr-2"></span>Update Permissions of {{$sub_admin->name}}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="permission-container  py-2 px-3">
                                @foreach ($permissions as $permission)
                                    <div class="form-check">
                                        <input name='permission[]' class="form-check-label" type="checkbox"
                                            value="{{ $permission->id }}" id="update-{{$sub_admin->id}}-{{$permission->id}}"
                                              {{ $sub_admin->permissions->contains('permission_id', $permission->id) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="update-{{$sub_admin->id}}-{{$permission->id}}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach

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
        $('.company-data').click(function() {
            var id = $(this).attr('id');
            // console.log(id);
            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}', // Corrected csrf_token() usage
                },
                url: "{{ url('admin/company-view') }}",
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
