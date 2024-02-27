<!DOCTYPE html>
<html>

@extends('company.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-book"></span> - Documents/Attachments</p>
            <form action="{{ route('company.employeeDocument.update', $data->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-book"></span> - Employee Documents</h6>

                    </div>
                    {{-- <input type="hidden" name="employee_id" value="{{ $empId }}"> --}}
                    <div class="form-row position-relative doc-fields" id="docField1">
                        <div class="form-group col-md-6">
                            <label>Select Document Type<span class="required"> *</span></label>
                            <select id="selectDocument" class="form-control category" name="doc_type"
                                value="{{ $data['doc_type'] }}" required>
                                <option value="Personal Photo"
                                    {{ $data['doc_type'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                </option>
                                <option value="Passport" {{ $data['doc_type'] == 'Passport' ? 'selected' : '' }}>
                                    Passport</option>
                                <option value="Visit Visa" {{ $data['doc_type'] == 'Visit Visa' ? 'selected' : '' }}>
                                    Visit Visa</option>
                                <option value="Offer Letter"
                                    {{ $data['doc_type'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                <option value="MOL Job Offer"
                                    {{ $data['doc_type'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                <option value="Signed MOL Job Offer"
                                    {{ $data['doc_type'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                    Offer</option>
                                <option value="MOL MB Contract"
                                    {{ $data['doc_type'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                </option>
                                <option value="Signed MOL MB Offer"
                                    {{ $data['doc_type'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                    Offer</option>
                                <option value="Preapproval Work Permit"
                                    {{ $data['doc_type'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                    Work Permit</option>
                                <option value="Dubai Insurance"
                                    {{ $data['doc_type'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                </option>
                                <option value="Entry Permit Visa"
                                    {{ $data['doc_type'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                </option>
                                <option value="Stamped Entry Visa"
                                    {{ $data['doc_type'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                    Visa</option>
                                <option value="Change of Visa Status"
                                    {{ $data['doc_type'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                    Status</option>
                                <option value="Medical Fitness Receipt"
                                    {{ $data['doc_type'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                    Fitness Receipt</option>
                                <option value="Tawjeeh Receipt"
                                    {{ $data['doc_type'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                </option>
                                <option value="Emirates Id Application form"
                                    {{ $data['doc_type'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                    Emirates Id Application form</option>
                                <option value="Stamped EID Application form"
                                    {{ $data['doc_type'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                    EID Application form</option>
                                <option value="Residence Visa"
                                    {{ $data['doc_type'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                </option>
                                <option value="Work Permit" {{ $data['doc_type'] == 'Work Permit' ? 'selected' : '' }}>
                                    Work Permit</option>
                                <option value="Health Insurance Card"
                                    {{ $data['doc_type'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                    Insurance Card</option>
                                <option value="National Identity Card"
                                    {{ $data['doc_type'] == 'National Identity Card' ? 'selected' : '' }}>National
                                    Identity Card</option>
                                <option value="Emirates Identity Card"
                                    {{ $data['doc_type'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                    Identity Card</option>
                                <option value="Vehicle Registration Card"
                                    {{ $data['doc_type'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                    Registration Card</option>
                                <option value="Driving License"
                                    {{ $data['doc_type'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                </option>
                                <option value="Birth Certificate"
                                    {{ $data['doc_type'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                </option>
                                <option value="Marriage Certificate"
                                    {{ $data['doc_type'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                    Certificate</option>
                                <option value="School Certificate"
                                    {{ $data['doc_type'] == 'School Certificate' ? 'selected' : '' }}>School
                                    Certificate</option>
                                <option value="Diploma" {{ $data['doc_type'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                </option>
                                <option value="University Degree"
                                    {{ $data['doc_type'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                </option>
                                <option value="Salary Certificate"
                                    {{ $data['doc_type'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                    Certificate</option>
                                <option value="Tenancy Contract"
                                    {{ $data['doc_type'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                </option>
                                <option value="MOL Cancellation form"
                                    {{ $data['doc_type'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                    Cancellation form</option>
                                <option value="Signed MOL Cancellation Form"
                                    {{ $data['doc_type'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                    MOL Cancellation Form</option>
                                <option value="Work Permit Cancellation Approval"
                                    {{ $data['doc_type'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                    Work Permit Cancellation Approval</option>
                                <option value="Residency Cancellation Approval"
                                    {{ $data['doc_type'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                    Residency Cancellation Approval</option>
                                <option value="Modify MOL Contract"
                                    {{ $data['doc_type'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                    Contract</option>
                                <option value="Work Permit Application"
                                    {{ $data['doc_type'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                    Application</option>
                                <option value="Work Permit Renewal Application"
                                    {{ $data['doc_type'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                    Permit Renewal Application</option>
                                <option value="Signed Work Permit Renewal"
                                    {{ $data['doc_type'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>Signed
                                    Work Permit Renewal</option>
                                <option value="Application" {{ $data['doc_type'] == 'Application' ? 'selected' : '' }}>
                                    Application</option>
                                <option value="Submission Form"
                                    {{ $data['doc_type'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                </option>
                                <option value="Receipts" {{ $data['doc_type'] == 'Receipts' ? 'selected' : '' }}>
                                    Receipts</option>
                                <option value="Other" {{ $data['doc_type'] == 'Other' ? 'selected' : '' }}>Other
                                </option>
                            </select>
                            @error('doc_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Select File<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file" value="{{ $data['file'] }}"
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
                                    value="Preapproval of work permit receipt"{{ $data['receipt'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                    Preapproval of work permit</option>
                                <option
                                    value="Dubai Insurance receipts"{{ $data['receipt'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                    Dubai Insurance</option>
                                <option
                                    value="Preapproval work permit fees receipt"{{ $data['receipt'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                    Preapproval work permit fees</option>
                                <option
                                    value="Work permit Renewal Fees Receipt"{{ $data['receipt'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                    Work permit Renewal Fees</option>
                                <option
                                    value="Entry Visa Application Receipt"{{ $data['receipt'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                    Entry Visa Application</option>
                                <option
                                    value="Change of Visa Status Application"{{ $data['receipt'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                    Change of Visa Status Application</option>
                                <option value="Medical"{{ $data['receipt'] == 'Medical' ? 'selected' : '' }}>Medical
                                </option>
                                <option value="Tawjeeh"{{ $data['receipt'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                </option>
                                <option
                                    value="Heath Insurance"{{ $data['receipt'] == 'Heath Insurance' ? 'selected' : '' }}>
                                    Health Insurance</option>
                                <option
                                    value="Emirates ID Application"{{ $data['receipt'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                    Emirates ID Application</option>
                                <option
                                    value="Residency Visa Application"{{ $data['receipt'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                    Residency Visa Application</option>
                                <option value="Visa Fines"{{ $data['receipt'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                    Fines</option>
                                <option
                                    value="Emirates ID Fines"{{ $data['receipt'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                    Emirates ID Fines</option>
                                <option value="Other fines"{{ $data['receipt'] == 'Other fines' ? 'selected' : '' }}>
                                    Other fines</option>
                                <option
                                    value="Health Insurance Fines"{{ $data['receipt'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                    Health Insurance Fines</option>
                                <option
                                    value="Immigration Application"{{ $data['receipt'] == 'Immigration Application' ? 'selected' : '' }}>
                                    Immigration Application</option>
                                <option
                                    value="MOHRE Application"{{ $data['receipt'] == 'MOHRE Application' ? 'selected' : '' }}>
                                    MOHRE Application</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 other-show d-none">
                            <label>Document Name<span class="required"> *</span></label>
                            <input type="text" name="doc_name" value="{{ $data['doc_name'] }}"
                                placeholder="Enter Document Name" class="form-control"
                                >
                            @error('doc_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Issue Date</label>
                            <div class="input-group">
                                <input type="date" name="issue_date" placeholder="dd.mm.yyyy"
                                    value="{{ $data['issue_date'] }}" class="form-control issue-date">
                            </div>
                            @error('issue_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Expiry Date</label>
                            <div class="input-group">
                                <input type="date" name="expiry_date" placeholder="dd.mm.yyyy"
                                    value="{{ $data['expiry_date'] }}" class="form-control expire-date">
                            </div>
                            @error('expiry_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="form-group col-12 w-100">
                            <label>Comments</label>
                            <textarea type="text" name="comment" placeholder="Enter Your Comments ..." class="form-control" rows="5">{{ $data['comment'] ?? '' }}</textarea>
                        </div> --}}
                        <div class="form-group col-12">
                            <a type="button" class="btn btn-danger remove-btn" style="position: unset"><span
                                    class="fa fa-trash mr-2"></span>Remove</a>
                        </div>
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
