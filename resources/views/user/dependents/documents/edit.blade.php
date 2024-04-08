<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            @if (Auth::guard('web')->user()->emp_type == 'self')
                <h4>Dashboard</h4>
            @else
                <h4>Employee Dashboard</h4>
            @endif

            <p><span class="fa fa-book"></span> - Dependents Documents/Attachments</p>
            <form action="{{ route('user.dependent-document-update', ['document' => $document->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        @if (Auth::guard('web')->user()->emp_type == 'self')
                            <h6><span class="fa fa-book"></span> - Documents</h6>
                        @else
                            <h6><span class="fa fa-book"></span> - Employee Documents</h6>
                        @endif
                    </div>
                    <div class="form-row position-relative doc-fields" id="docField1">
                        <div class="form-group col-md-6">
                            <label>Select Document Type<span class="required"> *</span></label>
                            <select id="selectDocument" class="form-control category" name="doc_type"
                                value="{{ $document['doc_type'] }}" required>
                                <option value="Personal Photo"
                                    {{ $document['doc_type'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                </option>
                                <option value="Passport" {{ $document['doc_type'] == 'Passport' ? 'selected' : '' }}>
                                    Passport</option>
                                <option value="Visit Visa" {{ $document['doc_type'] == 'Visit Visa' ? 'selected' : '' }}>
                                    Visit Visa</option>
                                <option value="Offer Letter"
                                    {{ $document['doc_type'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                <option value="MOL Job Offer"
                                    {{ $document['doc_type'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                <option value="Signed MOL Job Offer"
                                    {{ $document['doc_type'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                    Offer</option>
                                <option value="MOL MB Contract"
                                    {{ $document['doc_type'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                </option>
                                <option value="Signed MOL MB Offer"
                                    {{ $document['doc_type'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                    Offer</option>
                                <option value="Preapproval Work Permit"
                                    {{ $document['doc_type'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                    Work Permit</option>
                                <option value="Dubai Insurance"
                                    {{ $document['doc_type'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                </option>
                                <option value="Entry Permit Visa"
                                    {{ $document['doc_type'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                </option>
                                <option value="Stamped Entry Visa"
                                    {{ $document['doc_type'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                    Visa</option>
                                <option value="Change of Visa Status"
                                    {{ $document['doc_type'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                    Status</option>
                                <option value="Medical Fitness Receipt"
                                    {{ $document['doc_type'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                    Fitness Receipt</option>
                                <option value="Tawjeeh Receipt"
                                    {{ $document['doc_type'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                </option>
                                <option value="Emirates Id Application form"
                                    {{ $document['doc_type'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                    Emirates Id Application form</option>
                                <option value="Stamped EID Application form"
                                    {{ $document['doc_type'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                    EID Application form</option>
                                <option value="Residence Visa"
                                    {{ $document['doc_type'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                </option>
                                <option value="Work Permit" {{ $document['doc_type'] == 'Work Permit' ? 'selected' : '' }}>
                                    Work Permit</option>
                                <option value="Health Insurance Card"
                                    {{ $document['doc_type'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                    Insurance Card</option>
                                <option value="National Identity Card"
                                    {{ $document['doc_type'] == 'National Identity Card' ? 'selected' : '' }}>National
                                    Identity Card</option>
                                <option value="Emirates Identity Card"
                                    {{ $document['doc_type'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                    Identity Card</option>
                                <option value="Vehicle Registration Card"
                                    {{ $document['doc_type'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                    Registration Card</option>
                                <option value="Driving License"
                                    {{ $document['doc_type'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                </option>
                                <option value="Birth Certificate"
                                    {{ $document['doc_type'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                </option>
                                <option value="Marriage Certificate"
                                    {{ $document['doc_type'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                    Certificate</option>
                                <option value="School Certificate"
                                    {{ $document['doc_type'] == 'School Certificate' ? 'selected' : '' }}>School
                                    Certificate</option>
                                <option value="Diploma" {{ $document['doc_type'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                </option>
                                <option value="University Degree"
                                    {{ $document['doc_type'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                </option>
                                <option value="Salary Certificate"
                                    {{ $document['doc_type'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                    Certificate</option>
                                <option value="Tenancy Contract"
                                    {{ $document['doc_type'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                </option>
                                <option value="MOL Cancellation form"
                                    {{ $document['doc_type'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                    Cancellation form</option>
                                <option value="Signed MOL Cancellation Form"
                                    {{ $document['doc_type'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                    MOL Cancellation Form</option>
                                <option value="Work Permit Cancellation Approval"
                                    {{ $document['doc_type'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                    Work Permit Cancellation Approval</option>
                                <option value="Residency Cancellation Approval"
                                    {{ $document['doc_type'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                    Residency Cancellation Approval</option>
                                <option value="Modify MOL Contract"
                                    {{ $document['doc_type'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                    Contract</option>
                                <option value="Work Permit Application"
                                    {{ $document['doc_type'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                    Application</option>
                                <option value="Work Permit Renewal Application"
                                    {{ $document['doc_type'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                    Permit Renewal Application</option>
                                <option value="Signed Work Permit Renewal"
                                    {{ $document['doc_type'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>Signed
                                    Work Permit Renewal</option>
                                <option value="Application" {{ $document['doc_type'] == 'Application' ? 'selected' : '' }}>
                                    Application</option>
                                <option value="Submission Form"
                                    {{ $document['doc_type'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                </option>
                                <option value="Receipts" {{ $document['doc_type'] == 'Receipts' ? 'selected' : '' }}>
                                    Receipts</option>
                                <option value="Other" {{ $document['doc_type'] == 'Other' ? 'selected' : '' }}>Other
                                </option>
                            </select>
                            @error('doc_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Select File<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file" value="{{ $document['file'] }}"
                                    style="line-height: 1">
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                            @error('file')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 receipts-show d-none">
                            <label>Receipts<span class="required"> *</span></label>
                            <select id="selectReceipt" name="receipt" class="form-control">
                                <option value="" selected disabled>Select Receipt</option>
                                <option
                                    value="Preapproval of work permit receipt"{{ $document['receipt'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                    Preapproval of work permit</option>
                                <option
                                    value="Dubai Insurance receipts"{{ $document['receipt'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                    Dubai Insurance</option>
                                <option
                                    value="Preapproval work permit fees receipt"{{ $document['receipt'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                    Preapproval work permit fees</option>
                                <option
                                    value="Work permit Renewal Fees Receipt"{{ $document['receipt'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                    Work permit Renewal Fees</option>
                                <option
                                    value="Entry Visa Application Receipt"{{ $document['receipt'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                    Entry Visa Application</option>
                                <option
                                    value="Change of Visa Status Application"{{ $document['receipt'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                    Change of Visa Status Application</option>
                                <option value="Medical"{{ $document['receipt'] == 'Medical' ? 'selected' : '' }}>Medical
                                </option>
                                <option value="Tawjeeh"{{ $document['receipt'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                </option>
                                <option
                                    value="Heath Insurance"{{ $document['receipt'] == 'Heath Insurance' ? 'selected' : '' }}>
                                    Health Insurance</option>
                                <option
                                    value="Emirates ID Application"{{ $document['receipt'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                    Emirates ID Application</option>
                                <option
                                    value="Residency Visa Application"{{ $document['receipt'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                    Residency Visa Application</option>
                                <option value="Visa Fines"{{ $document['receipt'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                    Fines</option>
                                <option
                                    value="Emirates ID Fines"{{ $document['receipt'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                    Emirates ID Fines</option>
                                <option value="Other fines"{{ $document['receipt'] == 'Other fines' ? 'selected' : '' }}>
                                    Other fines</option>
                                <option
                                    value="Health Insurance Fines"{{ $document['receipt'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                    Health Insurance Fines</option>
                                <option
                                    value="Immigration Application"{{ $document['receipt'] == 'Immigration Application' ? 'selected' : '' }}>
                                    Immigration Application</option>
                                <option
                                    value="MOHRE Application"{{ $document['receipt'] == 'MOHRE Application' ? 'selected' : '' }}>
                                    MOHRE Application</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 other-show d-none">
                            <label>Document Name<span class="required"> *</span></label>
                            <input type="text" name="doc_name" value="{{ $document['doc_name'] }}"
                                placeholder="Enter Document Name" class="form-control">
                            @error('doc_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Issue Date</label>
                            <div class="input-group">
                                <input type="date" name="issue_date" placeholder="dd.mm.yyyy"
                                    value="{{ $document['issue_date'] }}" class="form-control issue-date">
                            </div>
                            @error('issue_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Expiry Date</label>
                            <div class="input-group">
                                <input type="date" name="expiry_date" placeholder="dd.mm.yyyy"
                                    value="{{ $document['expiry_date'] }}" class="form-control expire-date">
                            </div>
                            @error('expiry_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (Auth::guard('web')->user()->emp_type == 'company')
                            <div class="form-group col-12">
                                <a type="button" class="btn btn-danger remove-btn" style="position: unset"><span
                                        class="fa fa-trash mr-2"></span>Remove</a>
                            </div>
                        @endif
                    </div>
                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                        <button type="submit" class="btn-bg">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    </div>
@endsection
@section('script')
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

            /*Avatar upload*/
            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#uploadedImage').attr('src', e.target.result);
                        $('.header-profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function() {
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(this).siblings('.file-upload').click();
            });
            /*Avatar upload*/
        });
    </script>
@endsection
