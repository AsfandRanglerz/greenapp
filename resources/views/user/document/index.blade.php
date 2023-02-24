@extends('user.layout.master')
@section('content')
    <div class="mb-5 admin-main-content-inner">
        <h4>Employee Dashboard</h4>
        <p><span class="fa fa-user"></span> - Employee Details </p>
        <div class="text-right">
            <a href="{{ route('user.document.create') }}" class="mb-3 btn btn-success"><span class="fa fa-plus mr-2"></span>Add
                Document</a>
        </div>
        <div class="p-4 rounded light-box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 employees text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Document</th>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Issue Date</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body">
                        @foreach ($documents as $document)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @php
                                    $file_name = $document->file;
                                    $ext = explode('.', $file_name);
                                @endphp
                                <td>
                                    <a target="_black" href="{{ asset('' . '/' . $document->file) }}">
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
                                            <img src="{{ asset('' . '/' . $document->file) }}"
                                                style="height: 50px;width:50px">
                                        @endif
                                    </a>
                                </td>
                                <td>{{ $document->doc_type }}</td>
                                <td>{{ $document->doc_name }}</td>
                                <td>{{ $document->issue_date }}</td>
                                <td>{{ $document->expiry_date }}</td>
                                <td>{{ $document->comment }}</td>
                                <td class="text-center">
                                    <a href="{{ route('user.document.download', $document->id) }}"><span
                                            class="fa fa-download text-success"></span></a>
                                    @if (Auth::guard('web')->user()->emp_type == 'self')
                                        <a href="{{ route('user.document.edit', $document->id) }}" class="mx-2"><span
                                                class="fa fa-edit text-info"></span></a>
                                        <form class="d-inline" method="post"
                                            action="{{ route('user.document.destroy', $document->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <a class="form-btn" type="submit"><span
                                                    class="fa fa-trash text-danger show_confirm"></span></a>
                                        </form>
                                    @endif
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
