@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('user-document.index', $data['user_id']) }}">Back</a>

                    <form id="add_student" action="{{ route('user-document.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Edit Document</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Document Type<span class="required"> *</span></label>
                                                <select id="selectDocument" class="form-control category" name="doc_type[]"
                                                    value="{{ $data['doc_type'] }}" required>

                                                    <option value="" selected disabled>Select Document</option>
                                                    <option value="Passport"
                                                        {{ $data['doc_type'] == 'Passport' ? 'selected' : '' }}>Passport
                                                    </option>
                                                    <option value="Identitiy Card"
                                                        {{ $data['doc_type'] == 'Identitiy Card' ? 'selected' : '' }}>
                                                        Identitiy Card</option>
                                                    <option value="Visa"
                                                        {{ $data['doc_type'] == 'Visa' ? 'selected' : '' }}>Visa</option>
                                                    <option value="Insurance Card"
                                                        {{ $data['doc_type'] == 'Insurance Card' ? 'selected' : '' }}>
                                                        Insurance Card</option>
                                                    <option value="Work Permit"
                                                        {{ $data['doc_type'] == 'Work Permit' ? 'selected' : '' }}>Work
                                                        Permit</option>
                                                    <option value="Driving License"
                                                        {{ $data['doc_type'] == 'Driving License' ? 'selected' : '' }}>
                                                        Driving License</option>
                                                    <option value="Other"
                                                        {{ $data['doc_type'] == 'Other' ? 'selected' : '' }}>Other</option>
                                                </select>
                                                @error('doc_type')
                                                    <div class="text-danger">{{ $message }}</div>
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
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3 other-show d-none">
                                            <div class="form-group mb-2">
                                                <label>Document Name<span class="required"> *</span></label>
                                                <input type="text" name="doc_name[]" value="{{ old('doc_name[]') }}"
                                                    placeholder="Enter Document Name" class="form-control" required>
                                                @error('doc_name')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Issue Date<span class="required"> *</span></label>
                                                <input type="date" name="issue_date" value="{{ $data['issue_date'] }}"
                                                    id="issue_date" class="form-control" placeholder="Issue Date">
                                                @error('issue_date')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Expiry Date<span class="required"> *</span></label>
                                                <input type="date" name="expiry_date" value="{{ $data['expiry_date'] }}"
                                                    id="expiry_date" class="form-control" placeholder="Expiry Date">
                                                @error('expiry_date')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-12 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Comments</label>
                                                <textarea placeholder="Enter Your Comments ..." name="comment" id="comment"  class="form-control">{{ $data['comment'] ?? '' }}</textarea>
                                                @error('comment')
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
    <script type="text/javascript">
        $(function() {
            $(document).on('change', '#selectDocument', function() {
                if($(this).val()=='Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input').attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none').find('input').attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none').find('input').attr('required', false);
                } else {
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input').attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none').find('input').attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none').find('input').attr('required', true);
                }
            });
        });
    </script>
@endsection
