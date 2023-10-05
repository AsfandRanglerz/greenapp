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
                                    <div id="docField1" class="doc-fields">

                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Company Attachment<span class="required"> *</span></label>
                                                <select id="selectDocument" name="doc_type" class="form-control"
                                                        required>
                                                        <option selected disabled>Select Document</option>
                                                        <option value="Trade License"{{ $data->doc_type == 'Trade License' ? 'selected' : '' }}>Trade License</option>
                                                        <option value="Establishment Card"{{ $data->doc_type == 'Establishment Card' ? 'selected' : '' }}>Establishment Card </option>
                                                        <option value="Trade Name"{{ $data->doc_type == 'Trade Name' ? 'selected' : '' }}>Trade Name</option>
                                                        <option value="Tenancy"{{ $data->doc_type == 'Tenancy' ? 'selected' : '' }}>Tenancy</option>
                                                        <option value="Memorandum of Association"{{ $data->doc_type == 'Memorandum of Association' ? 'selected' : '' }}>Memorandum of Association
                                                        </option>
                                                        <option value="Power of Attorney"{{ $data->doc_type == 'Power of Attorney' ? 'selected' : '' }}>Power of Attorney</option>
                                                        <option value="Civil Defense Certificate"{{ $data->doc_type == 'Civil Defense Certificate' ? 'selected' : '' }}>Civil Defense Certificate
                                                        </option>
                                                        <option value="Other"{{ $data->doc_type == 'Other' ? 'selected' : '' }}>Other</option>
                                                    </select>
                                                    @error('doc_type')
                                                        <div class="text-danger p-2">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Select File<span class="required"> *</span></label>
                                                <input type="file" name="file" value="{{ $data['file'] }}"
                                                    class="form-control">
                                                @error('file')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group other-show  mb-2">
                                                <label>Document Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Document Name" name="doc_name"
                                                    id="doc_name" value="{{ $data['doc_name'] }}" class="form-control" required>
                                                @error('doc_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('change', '#selectDocument', function() {
                if($(this).val()=='Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input').attr('required', true);
                } else {
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input').attr('required', false);
                }
            });

        });
    </script>



@endsection
