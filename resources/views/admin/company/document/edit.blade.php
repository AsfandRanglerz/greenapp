@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('company-document.index', $data['company_id']) }}">Back</a>

                    <form id="add_student" action="{{ route('company-document.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Edit Document</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
<<<<<<< HEAD
                                                <label>Document Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Document Name" name="doc_name"
                                                    id="doc_name" value="{{ $data['doc_name'] }}" class="form-control">
=======
                                                <label>Document Name</label>
                                                <input type="text" placeholder="Document name" name="doc_name"
                                                    id="doc_name" value="{{ $data['doc_name'] }}" class="form-control" required>
>>>>>>> d29290acef46d201556d4c78828ce3d52ae45fd6
                                                @error('doc_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Select File<span class="required"> *</span></label>
                                                <input type="file" name="file" value="{{ $data['file'] }}"
                                                    class="form-control" required>
                                                @error('file')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card-footer text-center row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success mr-1 btn-bg"
                                                id="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
@endsection

@section('js')
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif



@endsection
