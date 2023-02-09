@extends('admin.layout.app')

@section('title', 'index')

@section('content')

    <div class="main-content" style="min-height: 562px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <h4>Documents</h4>

                                </div>
                                {{-- @dd($data) --}}
                            </div>
                            {{-- @dd($data) --}}
                            <div class="card-body table-striped table-bordered table-responsive">
                                <a class="btn btn-primary mb-3" href="{{ route('user.store') }}">Back</a>
                                <a class="btn btn-success mb-3"
                                    href="{{ route('user-document.create', $data['user_id']) }}">Add Document</a>
                                <table class="table" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Document Name</th>
                                            <th>File</th>
                                            <th>Issue Date</th>
                                            <th>Expiry Date</th>
                                            <th>Comment</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['user'] as $document)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $document->doc_type }}</td>
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
                                                <td>{{ $document->issue_date }}</td>
                                                <td>{{ $document->expiry_date }}</td>
                                                <td>{{ $document->comment }}</td>




                                                <td
                                                    style="display: flex;align-items: center;justify-content: center;column-gap: 8px">


                                                    <a class="btn btn-info"
                                                        href="{{ route('user-document.edit', $document->id) }}">Edit</a>
                                                    <form method="get"
                                                        action="{{ route('user-document.destroy', $document->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-danger btn-flat show_confirm"
                                                            data-toggle="tooltip">Delete</button>
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
        </section>
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
            $('#table_id_events').DataTable()

        })
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
@endsection
