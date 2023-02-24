@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ url()->previous() }}">Back</a>

                    <form id="add_student" action="{{ route('user-document.update', $document->id) }}" method="POST"
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
                                                    <label>Select Document Type<span class="required"> *</span></label>
                                                    @if ($document->user->emp_type == 'self')
                                                        <select id="selectDocument" class="form-control category"
                                                            name="doc_type" value="{{ $document->doc_type }}" required>
                                                            <option value="Personal Photo"
                                                                {{ $document->doc_type == 'Personal Photo' ? 'selected' : '' }}>
                                                                Personal Photo
                                                            </option>
                                                            <option value="Passport"
                                                                {{ $document->doc_type == 'Passport' ? 'selected' : '' }}>
                                                                Passport</option>
                                                            <option value="Visit Visa"
                                                                {{ $document->doc_type == 'Visit Visa' ? 'selected' : '' }}>
                                                                Visit Visa</option>
                                                            <option value="Entry Permit Visa"
                                                                {{ $document->doc_type == 'Entry Permit Visa' ? 'selected' : '' }}>
                                                                Entry Permit Visa
                                                            </option>
                                                            <option value="Change of Status Visa"
                                                                {{ $document->doc_type == 'Change of Status Visa' ? 'selected' : '' }}>
                                                                Change of
                                                                Status Visa</option>
                                                            <option value="Emirates Identity Card"
                                                                {{ $document->doc_type == 'Emirates Identity Card' ? 'selected' : '' }}>
                                                                Emirates
                                                                Identity Card</option>
                                                            <option value="Residence Visa"
                                                                {{ $document->doc_type == 'Residence Visa' ? 'selected' : '' }}>
                                                                Residence Visa
                                                            </option>
                                                            <option value="Work Permit"
                                                                {{ $document->doc_type == 'Work Permit' ? 'selected' : '' }}>
                                                                Work Permit</option>
                                                            <option value="Health Insurance Card"
                                                                {{ $document->doc_type == 'Health Insurance Card' ? 'selected' : '' }}>
                                                                Health
                                                                Insurance Card</option>
                                                            <option value="National Identity Card"
                                                                {{ $document->doc_type == 'National Identity Card' ? 'selected' : '' }}>
                                                                National
                                                                Identity Card</option>
                                                            <option value="Birth Certificate"
                                                                {{ $document->doc_type == 'Birth Certificate' ? 'selected' : '' }}>
                                                                Birth Certificate
                                                            </option>
                                                            <option value="Marriage Certificate"
                                                                {{ $document->doc_type == 'Marriage Certificate' ? 'selected' : '' }}>
                                                                Marriage
                                                                Certificate</option>
                                                            <option value="School Certificate"
                                                                {{ $document->doc_type == 'School Certificate' ? 'selected' : '' }}>
                                                                School
                                                                Certificate</option>
                                                            <option value="Diploma"
                                                                {{ $document->doc_type == 'Diploma' ? 'selected' : '' }}>
                                                                Diploma
                                                            </option>
                                                            <option value="University Degree"
                                                                {{ $document->doc_type == 'University Degree' ? 'selected' : '' }}>
                                                                University Degree
                                                            </option>
                                                            <option value="Salary Certificate"
                                                                {{ $document->doc_type == 'Salary Certificate' ? 'selected' : '' }}>
                                                                Salary
                                                                Certificate</option>
                                                            <option value="Tenancy Contract"
                                                                {{ $document->doc_type == 'Tenancy Contract' ? 'selected' : '' }}>
                                                                Tenancy Contract
                                                            </option>
                                                            <option value="CV"
                                                                {{ $document->doc_type == 'CV' ? 'selected' : '' }}>CV
                                                            </option>
                                                            <option value="Other"
                                                                {{ $document->doc_type == 'Other' ? 'selected' : '' }}>
                                                                Other(Resume)</option>
                                                        </select>
                                                    @else
                                                        <select id="selectDocument" class="form-control category"
                                                            name="doc_type" value="{{ $document->doc_type }}" required>

                                                            <option value="" selected disabled>Select Document
                                                            </option>
                                                            <option value="Passport"
                                                                {{ $document->doc_type == 'Passport' ? 'selected' : '' }}>
                                                                Passport
                                                            </option>
                                                            <option value="Identitiy Card"
                                                                {{ $document->doc_type == 'Identitiy Card' ? 'selected' : '' }}>
                                                                Identitiy Card</option>
                                                            <option value="Visa"
                                                                {{ $document->doc_type == 'Visa' ? 'selected' : '' }}>Visa
                                                            </option>
                                                            <option value="Insurance Card"
                                                                {{ $document->doc_type == 'Insurance Card' ? 'selected' : '' }}>
                                                                Insurance Card</option>
                                                            <option value="Work Permit"
                                                                {{ $document->doc_type == 'Work Permit' ? 'selected' : '' }}>
                                                                Work
                                                                Permit</option>
                                                            <option value="Driving License"
                                                                {{ $document->doc_type == 'Driving License' ? 'selected' : '' }}>
                                                                Driving License</option>
                                                            <option value="Other"
                                                                {{ $document->doc_type == 'Other' ? 'selected' : '' }}>
                                                                Other
                                                            </option>
                                                        </select>
                                                    @endif
                                                    @error('doc_type')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                                <div class="form-group mb-2">
                                                    <label>Select File<span class="required"> *</span></label>
                                                    <input type="file" name="file" value="{{ $document->file }}"
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
                                                    <input type="text" name="doc_name" value="{{ $document->doc_name }}"
                                                        placeholder="Enter Document Name" class="form-control" required>
                                                    @error('doc_name')
                                                        <div class="text-danger p-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Issue Date<span class="required"> *</span></label>
                                                    <input type="date" name="issue_date"
                                                        value="{{ $document->issue_date }}" id="issue_date"
                                                        class="form-control" placeholder="Issue Date">
                                                    @error('issue_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Expiry Date<span class="required"> *</span></label>
                                                    <input type="date" name="expiry_date"
                                                        value="{{ $document->expiry_date }}" id="expiry_date"
                                                        class="form-control" placeholder="Expiry Date">
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
                                                    <textarea placeholder="Enter Your Comments ..." name="comment" id="comment" class="form-control">{{ $document->comment ?? '' }}</textarea>
                                                    @error('comment')
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
        $(function() {
            $('#selectDocument').each(function() {
                if ($(this).val() == 'Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none').find('input')
                        .attr('required', false);
                } else {
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none').find('input')
                        .attr('required', true);
                }
            });

            $(document).on('change', '#selectDocument', function() {
                if ($(this).val() == 'Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none').find('input')
                        .attr('required', false);
                } else {
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none').find('input')
                        .attr('required', true);
                }
            });
        });
    </script>
@endsection
