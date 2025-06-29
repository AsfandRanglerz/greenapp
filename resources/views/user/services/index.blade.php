@extends('user.layout.master')
@section('content')
    <style>
        .word_wrap {
            white-space: normal;
        }
    </style>
    <div class="mb-5 admin-main-content-inner">
        @if (Auth::guard('web')->user()->emp_type == 'self')
            <h4>Dashboard</h4>
        @else
            <h4>Employee Dashboard</h4>
        @endif

        <p><span class="fa fa-book"></span> - Services</p>
        <div class="text-right">
            <a href="{{ route('user.request-service') }}" class="mb-3 btn btn-success"><span class="fa fa-plus mr-2"></span>Add
                Request</a>
        </div>
        <div class="p-4 rounded light-box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 employees text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Request Type</th>
                            <th scope="col">Comment</th>
                            <th scope="col">File</th>
                            <th scope="col">Admin Comment</th>
                            <th scope="col">Admin Attachement</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body">
                        @foreach ($service_request as $req)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $req->req_type }}</td>
                                <td class="word_wrap">{{ $req->comment }}</td>

                                @if ($req->file)
                                    @php
                                        $file_name = $req->file;
                                        $ext = explode('.', $file_name);
                                    @endphp
                                    <td>
                                        <a target="_black" href="{{ asset('' . '/' . $req->file) }}">
                                            @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                            @elseif($ext[1] == 'docx')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                            @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                            @else
                                                <img src="{{ asset('' . '/' . $req->file) }}"
                                                    style="height: 50px;width:50px">
                                            @endif
                                        </a>
                                    </td>
                                @else
                                    <td>N/A</td>
                                @endif
                                <td class="word_wrap">
                                    @if (!$req->reason)
                                        <span class="text-danger">Waiting for admin response!</span>
                                    @else
                                        {{ $req->reason }}
                                    @endif
                                </td>

                                @if ($req->admin_file)
                                @php
                                    $file_name = $req->admin_file;
                                    $ext = explode('.', $file_name);
                                @endphp
                                <td>
                                    <a target="_black" href="{{ asset('' . '/' . $req->admin_file) }}">
                                        @if ($ext[1] == 'pdf')
                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @elseif($ext[1] == 'docx')
                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @elseif($ext[1] == 'pptx')
                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @else
                                            <img src="{{ asset('' . '/' . $req->admin_file) }}"
                                                style="height: 50px;width:50px">
                                        @endif
                                    </a>
                                </td>
                            @else
                                <td>N/A</td>
                            @endif

                            <td class="word_wrap">
                                @if ($req->status == 'Pending' || $req->status == 'Upload your document')
                                    <div class="badge badge-shadow py-2 btn-warning text-black">Pending</div>
                                @elseif ($req->status == 'Returned')
                                    <div class="badge badge-success badge-shadow py-2">Returned</div>
                                @elseif ($req->status == 'Approved')
                                    <div class="badge badge-success badge-shadow py-2">Approved</div>
                                @elseif ($req->status == 'Completed')
                                    <div class="badge badge-success badge-shadow py-2">Completed</div>
                                @elseif ($req->status == 'Hold')
                                    <div class="badge badge-success badge-shadow py-2">Hold</div>
                                @elseif ($req->status == 'Skip')
                                    <div class="badge badge-success badge-shadow py-2">Skip</div>
                                @else
                                    <div class="badge badge-danger badge-shadow py-2">Rejected</div>
                                @endif
                            </td>

                                <td>
                                    <a href="{{ route('user.edit-request', $req->id) }}" class="mx-2"><span
                                        class="fa fa-edit text-info"></span></a>
                                    <form class="d-inline" method="post"
                                        action="{{ route('user.request-delete', $req->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a class="form-btn" type="submit"><span
                                                class="fa fa-trash text-danger show_confirm"></span></a>
                                    </form>
                                </td>
                        @endforeach
                    </tbody>
                    {{-- <td class="text-center">
                                    @php
                                        $file_name = $document->file;
                                        $ext = explode('users/', $file_name);
                                    @endphp
                                    <a href="{{ route('user.document.download', $ext[1]) }}"><span
                                            class="fa fa-download text-success"></span></a>
                                    @if (Auth::guard('web')->user()->emp_type == 'self')
                                        <a href="{{ route('user.document.edit', $document->id) }}" class="mx-2"><span
                                                class="fa fa-edit text-info"></span></a>

                                    @endif
                                </td>
                            </tr> --}}
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    {{-- <script>
        @if (\Illuminate\Support\Facades\Session::has('success'))
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
        @endif

        @if (\Illuminate\Support\Facades\Session::has('error'))
            toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
        @endif
        </script> --}}
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
