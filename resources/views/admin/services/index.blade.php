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

        .textarea-content textarea:focus {
            outline: 2px solid #108d0cfa;
            border-radius: 4px;
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
                                    <h4>Services Request</h4>
                                </div>
                            </div>
                            <div class="card-body table-striped table-bordered table-responsive">

                                <table class="table text-center" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Request Type</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Response</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="content-parent">
                                        @foreach ($service_requests as $req)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $req->user->name }}</td>
                                                <td>{{ $req->user->email }}</td>
                                                <td>{{ $req->req_type }}</td>
                                                <td class="word_wrap">{{ $req->comment }}</td>
                                                <form action="{{ route('response-against-requests', $req->id) }}"
                                                    method="POST" enctype="multipart/form-data" class='d-flex'>
                                                    @csrf
                                                    <td class="word_wrap">
                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-2">
                                                                <select name="response" style="min-width: 200px"
                                                                    class="form-control select-content" id="">
                                                                    <option value="" hidden>Pending</option>
                                                                    @if (!$req->file)
                                                                        <option value="Upload your document">Upload your
                                                                            document</option>
                                                                    @endif
                                                                    <option value="Returned" {{ $req->response == 'Returned' ? 'selected' : '' }}>Returned</option>
                                                                    <option value="Approved" {{ $req->response == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                                    <option value="Completed"{{ $req->response == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                                    <option value="Rejected" {{ $req->response == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                                                </select>

                                                                <div class="d-none file-content" style="width: 300px">
                                                                    <div class="mt-3">
                                                                        <div class="input-group">
                                                                            <input type="file" class="form-control"
                                                                                name="file" style="line-height: 1">
                                                                            <div class="input-group-prepend">
                                                                                <small class="input-group-text"><span
                                                                                        class="fa fa-paperclip"></span></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 d-none textarea-content">
                                                                    <textarea name="reason" id="" cols="40" rows="2" placeholder="Enter Reason" class='pt-1 pl-1'></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="word_wrap">
                                                        @if ($req->status == 'Pending' || $req->status == 'Upload your document')
                                                            <div class="badge badge-shadow btn-warning text-black">Pending
                                                            </div>
                                                        @elseif ($req->status == 'Returned')
                                                            <div class="badge badge-success badge-shadow">Returned</div>
                                                        @elseif ($req->status == 'Approved')
                                                            <div class="badge badge-success badge-shadow">Approved</div>
                                                        @elseif ($req->status == 'Completed')
                                                            <div class="badge badge-success badge-shadow">Completed</div>
                                                        @elseif ($req->status == 'Hold')
                                                            <div class="badge badge-success badge-shadow">Hold</div>
                                                        @elseif ($req->status == 'Skip')
                                                            <div class="badge badge-success badge-shadow">Skip</div>
                                                        @else
                                                            <div class="badge badge-danger badge-shadow">Rejected</div>
                                                        @endif
                                                    </td>
                                                    @php
                                                        $file_name = $req->file;
                                                        $ext = explode('.', $file_name);
                                                    @endphp
                                                    <td>
                                                        @if ($ext)
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
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div
                                                            style="display: flex;align-items: center;justify-content: center;column-gap: 8px">
                                                            <button type="submit"
                                                                class="btn btn-success ml-1 form-control">Send</button>
                                                        </div>
                                                    </td>
                                                </form>
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
            // Response functionalit
        });
        $('.content-parent').on('change','.select-content', function() {
    $('.file-content').each(function() {
        $(this).addClass('d-none');
    });

    $('.textarea-content').each(function() {
        $(this).addClass('d-none');
    });
    if ($(this).val() == 'Rejected' || $(this).val() == 'Returned') {
        $(this).siblings('.file-content').removeClass('d-none');
        $(this).siblings('.textarea-content').removeClass('d-none');
    } else if ($(this).val() == 'Approved' || $(this).val() == 'Completed') {
        $(this).siblings('.file-content').removeClass('d-none');
        $(this).siblings('.textarea-content').addClass('d-none');
    }
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
                url: "{{ url('admin/self-employee-view') }}",
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
