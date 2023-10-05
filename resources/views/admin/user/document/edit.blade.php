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
                                                    <select id="selectDocument" class="form-control category"
                                                        name="doc_type" value="{{ $document['doc_type'] }}" required>
                                                        <option value="Personal Photo"
                                                            {{ $document['doc_type'] == 'Personal Photo' ? 'selected' : '' }}>
                                                            Personal Photo
                                                        </option>
                                                        <option value="Passport"
                                                            {{ $document['doc_type'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa"
                                                            {{ $document['doc_type'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $document['doc_type'] == 'Offer Letter' ? 'selected' : '' }}>
                                                            Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $document['doc_type'] == 'MOL Job Offer' ? 'selected' : '' }}>
                                                            MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $document['doc_type'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>
                                                            Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $document['doc_type'] == 'MOL MB Contract' ? 'selected' : '' }}>
                                                            MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $document['doc_type'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>
                                                            Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $document['doc_type'] == 'Preapproval Work Permit' ? 'selected' : '' }}>
                                                            Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $document['doc_type'] == 'Dubai Insurance' ? 'selected' : '' }}>
                                                            Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $document['doc_type'] == 'Entry Permit Visa' ? 'selected' : '' }}>
                                                            Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $document['doc_type'] == 'Stamped Entry Visa' ? 'selected' : '' }}>
                                                            Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $document['doc_type'] == 'Change of Visa Status' ? 'selected' : '' }}>
                                                            Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $document['doc_type'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>
                                                            Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $document['doc_type'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>
                                                            Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $document['doc_type'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $document['doc_type'] == 'Stamped EID Application form' ? 'selected' : '' }}>
                                                            Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $document['doc_type'] == 'Residence Visa' ? 'selected' : '' }}>
                                                            Residence Visa
                                                        </option>
                                                        <option value="Work Permit"
                                                            {{ $document['doc_type'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $document['doc_type'] == 'Health Insurance Card' ? 'selected' : '' }}>
                                                            Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $document['doc_type'] == 'National Identity Card' ? 'selected' : '' }}>
                                                            National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $document['doc_type'] == 'Emirates Identity Card' ? 'selected' : '' }}>
                                                            Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $document['doc_type'] == 'Vehicle Registration Card' ? 'selected' : '' }}>
                                                            Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $document['doc_type'] == 'Driving License' ? 'selected' : '' }}>
                                                            Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $document['doc_type'] == 'Birth Certificate' ? 'selected' : '' }}>
                                                            Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $document['doc_type'] == 'Marriage Certificate' ? 'selected' : '' }}>
                                                            Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $document['doc_type'] == 'School Certificate' ? 'selected' : '' }}>
                                                            School
                                                            Certificate</option>
                                                        <option value="Diploma"
                                                            {{ $document['doc_type'] == 'Diploma' ? 'selected' : '' }}>
                                                            Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $document['doc_type'] == 'University Degree' ? 'selected' : '' }}>
                                                            University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $document['doc_type'] == 'Salary Certificate' ? 'selected' : '' }}>
                                                            Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $document['doc_type'] == 'Tenancy Contract' ? 'selected' : '' }}>
                                                            Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $document['doc_type'] == 'MOL Cancellation form' ? 'selected' : '' }}>
                                                            MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $document['doc_type'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>
                                                            Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $document['doc_type'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $document['doc_type'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $document['doc_type'] == 'Modify MOL Contract' ? 'selected' : '' }}>
                                                            Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $document['doc_type'] == 'Work Permit Application' ? 'selected' : '' }}>
                                                            Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $document['doc_type'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>
                                                            Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal"
                                                            {{ $document['doc_type'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>
                                                            Signed
                                                            Work Permit Renewal</option>
                                                        <option value="Application"
                                                            {{ $document['doc_type'] == 'Application' ? 'selected' : '' }}>
                                                            Application</option>
                                                        <option value="Submission Form"
                                                            {{ $document['doc_type'] == 'Submission Form' ? 'selected' : '' }}>
                                                            Submission Form
                                                        </option>
                                                        <option value="Receipts"
                                                            {{ $document['doc_type'] == 'Receipts' ? 'selected' : '' }}>
                                                            Receipts</option>
                                                        <option value="Other"
                                                            {{ $document['doc_type'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>

                                                    </select>
                                                    @error('doc_type')
                                                        <div class="text-danger p-2">{{ $message }}</div>
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
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 receipts-show d-none">
                                                <div class="form-group mb-2">
                                                    <label>Receipts<span class="required"> *</span></label>
                                                    <select id="selectReceipt" name="receipt" class="form-control">
                                                        <option value="" selected disabled>Select Receipt</option>
                                                        <option value="Preapproval of work permit receipt"{{ $document['receipt'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>Preapproval of work permit</option>
                                                        <option value="Dubai Insurance receipts"{{ $document['receipt'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>Dubai Insurance</option>
                                                        <option value="Preapproval work permit fees receipt"{{ $document['receipt'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>Preapproval work permit fees</option>
                                                        <option value="Work permit Renewal Fees Receipt"{{ $document['receipt'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>Work permit Renewal Fees</option>
                                                        <option value="Entry Visa Application Receipt"{{ $document['receipt'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>Entry Visa Application</option>
                                                        <option value="Change of Visa Status Application"{{ $document['receipt'] == 'Change of Visa Status Application' ? 'selected' : '' }}>Change of Visa Status Application</option>
                                                        <option value="Medical"{{ $document['receipt'] == 'Medical' ? 'selected' : '' }}>Medical</option>
                                                        <option value="Tawjeeh"{{ $document['receipt'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh</option>
                                                        <option value="Heath Insurance"{{ $document['receipt'] == 'Heath Insurance' ? 'selected' : '' }}>Health Insurance</option>
                                                        <option value="Emirates ID Application"{{ $document['receipt'] == 'Emirates ID Application' ? 'selected' : '' }}>Emirates ID Application</option>
                                                        <option value="Residency Visa Application"{{ $document['receipt'] == 'Residency Visa Application' ? 'selected' : '' }}>Residency Visa Application</option>
                                                        <option value="Visa Fines"{{ $document['receipt'] == 'Visa Fines' ? 'selected' : '' }}>Visa Fines</option>
                                                        <option value="Emirates ID Fines"{{ $document['receipt'] == 'Emirates ID Fines' ? 'selected' : '' }}>Emirates ID Fines</option>
                                                        <option value="Other fines"{{ $document['receipt'] == 'Other fines' ? 'selected' : '' }}>Other fines</option>
                                                        <option value="Health Insurance Fines"{{ $document['receipt'] == 'Health Insurance Fines' ? 'selected' : '' }}>Health Insurance Fines</option>
                                                        <option value="Immigration Application"{{ $document['receipt'] == 'Immigration Application' ? 'selected' : '' }}>Immigration Application</option>
                                                        <option value="MOHRE Application"{{ $document['receipt'] == 'MOHRE Application' ? 'selected' : '' }}>MOHRE Application</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-show d-none">
                                                <div class="form-group mb-2">
                                                    <label>Document Name<span class="required"> *</span></label>
                                                    <input type="text" name="doc_name" value="{{ $document->doc_name }}"
                                                        placeholder="Enter Document Name" class="form-control">
                                                    @error('doc_name')
                                                        <div class="text-danger p-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Issue Date</label>
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
                                                    <label>Expiry Date</label>
                                                    <input type="date" name="expiry_date"
                                                        value="{{ $document->expiry_date }}" id="expiry_date"
                                                        class="form-control" placeholder="Expiry Date">
                                                    @error('expiry_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>
                                        @if ($document->user->emp_type == 'company')
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
                                        @endif

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
                var notIssueExpiryOther = $(this).val() == 'Personal Photo' || $(this).val() ==
                    'Offer Letter' || $(this).val() == 'MOL Job Offer' || $(this).val() ==
                    'Signed MOL Job Offer' || $(this).val() == 'MOL MB Contract' || $(this).val() ==
                    'Signed MOL MB Offer' || $(this).val() == 'Preapproval Work Permit' || $(this).val() ==
                    'Dubai Insurance' || $(this).val() == 'Tawjeeh Receipt' || $(this).val() ==
                    'Emirates Id Application form' || $(this).val() == 'Stamped EID Application form' || $(
                        this).val() == 'Birth Certificate' || $(this).val() == 'Marriage Certificate' || $(
                        this).val() == 'School Certificate' || $(this).val() == 'Diploma' || $(this)
                    .val() == 'University Degree' || $(this).val() == 'Salary Certificate' || $(this)
                    .val() ==
                    'Tenancy Contract' || $(this).val() == 'MOL Cancellation form' || $(this).val() ==
                    'Signed MOL Cancellation Form' || $(this).val() ==
                    'Work Permit Cancellation Approval' || $(this).val() ==
                    'Residency Cancellation Approval' || $(this).val() == 'Modify MOL Contract' || $(this)
                    .val() == 'Work Permit Application' || $(this).val() ==
                    'Work Permit Renewal Application' || $(this).val() == 'Signed Work Permit Renewal' || $(
                        this).val() == 'Application' || $(this).val() == 'Submission Form';
                if ($(this).val() == 'Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                } else if (notIssueExpiryOther) {
                    $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                } else if ($(this).val() == 'Receipts') {
                    $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').removeClass('d-none');
                } else {
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none');
                }
            });

            $(document).on('change', '#selectDocument', function() {
                var notIssueExpiryOther = $(this).val() == 'Personal Photo' || $(this).val() ==
                    'Offer Letter' || $(this).val() == 'MOL Job Offer' || $(this).val() ==
                    'Signed MOL Job Offer' || $(this).val() == 'MOL MB Contract' || $(this).val() ==
                    'Signed MOL MB Offer' || $(this).val() == 'Preapproval Work Permit' || $(this).val() ==
                    'Dubai Insurance' || $(this).val() == 'Tawjeeh Receipt' || $(this).val() ==
                    'Emirates Id Application form' || $(this).val() == 'Stamped EID Application form' || $(
                        this).val() == 'Birth Certificate' || $(this).val() == 'Marriage Certificate' || $(
                        this).val() == 'School Certificate' || $(this).val() == 'Diploma' || $(this)
                    .val() == 'University Degree' || $(this).val() == 'Salary Certificate' || $(this)
                    .val() ==
                    'Tenancy Contract' || $(this).val() == 'MOL Cancellation form' || $(this).val() ==
                    'Signed MOL Cancellation Form' || $(this).val() ==
                    'Work Permit Cancellation Approval' || $(this).val() ==
                    'Residency Cancellation Approval' || $(this).val() == 'Modify MOL Contract' || $(this)
                    .val() == 'Work Permit Application' || $(this).val() ==
                    'Work Permit Renewal Application' || $(this).val() == 'Signed Work Permit Renewal' || $(
                        this).val() == 'Application' || $(this).val() == 'Submission Form';
                if ($(this).val() == 'Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                } else if (notIssueExpiryOther) {
                    $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                } else if ($(this).val() == 'Receipts') {
                    $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').removeClass('d-none');
                } else {
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none');
                }
            });
        });
    </script>
@endsection
