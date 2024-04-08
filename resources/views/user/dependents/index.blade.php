@extends('user.layout.master')
@section('content')
<style>
    .common-btn {
        background-color: var(--theme-clr);
    }
</style>


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
                <table class="table table-bordered table-striped mb-0 employees text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Dependent Name</th>
                            <th scope="col">Dependent Type</th>
                            <th scope="col">Document Type</th>
                            <th scope="col">File</th>
                            <th scope="col">Issue Date</th>
                            <th scope="col">Expiry Date</th>
                            {{-- <th scope="col">Response</th> --}}
                            {{-- <th scope="col">Comment</th> --}}
                            <th scope="col">Documents</th>
                            <th scope="col">Visa Process</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body">
                        @foreach ($dependents as $dependent)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $dependent->name }}</td>
                            <td class="word_wrap">{{ $dependent->dependent_type }}</td>
                            <td>{{ $dependent->doc_type }}</td>

                            @php
                                $file_name = $dependent->file;
                                $ext = explode('.', $file_name);
                                // dd($ext[1]);
                            @endphp
                            <td>
                                <a target="_black" href="{{ asset('' . '/' . $dependent->file) }}">
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
                                        <img src="{{ asset('' . '/' . $dependent->file) }}"
                                            style="height: 50px;width:50px">
                                    @endif
                                </a>
                            </td>
                            {{-- <td>{{ $dependent->doc_type }}</td> --}}
                            <td>{{ $dependent->issue_date }}</td>
                            <td>{{ $dependent->expiry_date }}</td>
                            <td>
                                <a href="{{route('user.dependent-document-index',$dependent->id)}}" class='btn btn-success'>
                                    view
                                </a>
                            </td>
                            <td>
                                <a href="{{route('user.dependent-visa-process',$dependent->id)}}">Click</a>
                            </td>
                            <td>
                                <form class="d-inline" method="post"
                                    action="{{ route('user.delete-dependent', $dependent->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="form-btn" type="submit"><span
                                            class="fa fa-trash text-danger show_confirm"></span></button>
                                </form>
                            </td>
                        @endforeach
                    </tbody>
                </table>
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
