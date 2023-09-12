<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-book"></span> - Documents/Attachments</p>
            <form action="{{ route('user.document.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-book"></span> - Employee Documents</h6>
                        <a type="button" class="mb-3 btn btn-success add-btn"><span class="fa fa-plus mr-2"></span>Add
                            More</a>
                    </div>
                    <div class="form-row position-relative doc-fields" id="docField1">
                        @if (Auth::guard('web')->user()->emp_type == 'self')
                            <div class="form-group col-md-6">
                                <label>Select Document Type<span class="required"> *</span></label>
                                <select id="selectDocument" name="doc_type[]" value="{{ old('doc_type[]') }}"
                                    class="form-control" required>
                                    <option value="" disabled selected>Select Document</option>
                                    <option value="Personal Photo">Personal Photo</option>
                                    <option value="Passport">Passport</option>
                                    <option value="Visit Visa">Visit Visa</option>
                                    <option value="Offer Letter">Offer Letter</option>
                                    <option value="MOL Job Offer">MOL Job Offer</option>
                                    <option value="Signed MOL Job Offer">Signed MOL Job Offer</option>
                                    <option value="MOL MB Contract">MOL MB Contract</option>
                                    <option value="Signed MOL MB Offer">Signed MOL MB Offer</option>
                                    <option value="Preapproval Work Permit">Preapproval Work Permit</option>
                                    <option value="Dubai Insurance">Dubai Insurance</option>
                                    <option value="Entry Permit Visa">Entry Permit Visa</option>
                                    <option value="Stamped Entry Visa">Stamped Entry Visa</option>
                                    <option value="Change of Status Visa">Change of Visa Status</option>
                                    <option value="Medical Fitness Receipt">Medical Fitness Receipt</option>
                                    <option value="Tawjeeh Receipt">Tawjeeh Receipt</option>
                                    <option value="Emirates Id Application form">Emirates Id Application form</option>
                                    <option value="Stamped EID Application form">Stamped EID Application form</option>
                                    <option value="Residence Visa">Residence Visa</option>
                                    <option value="Work Permit">Work Permit</option>
                                    <option value="Health Insurance Card">Health Insurance Card</option>
                                    <option value="National Identity Card">National Identity Card</option>
                                    <option value="Emirates Identity Card">Emirates Identity Card</option>
                                    <option value="Vehicle Registration Card">Vehicle Registration Card</option>
                                    <option value="Driving License">Driving License</option>
                                    <option value="Birth Certificate">Birth Certificate</option>
                                    <option value="Marriage Certificate">Marriage Certificate</option>
                                    <option value="School Certificate">School Certificate</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="University Degree">University Degree</option>
                                    <option value="Salary Certificate">Salary Certificate</option>
                                    <option value="Tenancy Contract">Tenancy Contract</option>
                                    <option value="MOL Cancellation form">MOL Cancellation form</option>
                                    <option value="Signed MOL Cancellation Form">Signed MOL Cancellation Form</option>
                                    <option value="Work Permit Cancellation Approval">Work Permit Cancellation Approval</option>
                                    <option value="Residency Cancellation Approval">Residency Cancellation Approval</option>
                                    <option value="Modify MOL Contract">Modify MOL Contract</option>
                                    <option value="Work Permit Application">Work Permit Application</option>
                                    <option value="Work Permit Renewal Application">Work Permit Renewal Application</option>
                                    <option value="Signed Work Permit Renewal">Signed Work Permit Renewal</option>
                                    <option value="Application">Application</option>
                                    <option value="Submission Form">Submission Form</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('doc_type')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        @else
                            <div class="form-group col-md-6">
                                <label>Select Document Type<span class="required"> *</span></label>
                                <select id="selectDocument" name="doc_type[]" value="{{ old('doc_type[]') }}"
                                    class="form-control" required>
                                    <option value="" selected disabled>Select Document</option>
                                    <option value="Passport">Passport</option>
                                    <option value="Identity Card">Identity Card</option>
                                    <option value="Visa">Visa</option>
                                    <option value="Insurance Card">Insurance Card</option>
                                    <option value="Work Permit">Work Permit</option>
                                    <option value="Driving License">Driving License</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('doc_type')
                                    <div class="text-danger p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        @endif

                        <div class="form-group col-md-6">
                            <label>Select File<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file[]" value="{{ old('file[]') }}"
                                    style="line-height: 1" required>
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                            @error('file')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-show d-none">
                            <label>Document Name<span class="required"> *</span></label>
                            <input type="text" name="doc_name[]" value="{{ old('doc_name[]') }}"
                                placeholder="Enter Document Name" class="form-control">
                            @error('doc_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none d-none">
                            <label>Issue Date</label>
                            <div class="input-group">
                                <input type="date" name="issue_date[]" placeholder="dd.mm.yyyy"
                                    value="{{ old('issue_date[]') }}" class="form-control issue-date">
                            </div>
                            @error('issue_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none d-none">
                            <label>Expiry Date</label>
                            <div class="input-group">
                                <input type="date" name="expiry_date[]" placeholder="dd.mm.yyyy"
                                    value="{{ old('expiry_date[]') }}" class="form-control expire-date">
                            </div>
                            @error('expiry_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (Auth::guard('web')->user()->emp_type == 'company')
                            <div class="form-group w-100">
                                <label>Comments</label>
                                <textarea type="text" name="comment[]" placeholder="Enter Your Comments ..." value="{{ old('comment[]') }}"
                                    class="form-control" rows="5"></textarea>
                            </div>
                        @endif
                        <div class="form-group col-12">
                            <a type="button" class="btn btn-danger remove-btn" style="position: unset"><span
                                    class="fa fa-trash mr-2"></span>Remove</a>
                        </div>
                    </div>
                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                        <button type="submit" class="btn-bg">Save</button>
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
            // $('#selectDocument').select2({
            //     placeholder: 'Select Document'
            // });

            $(document).on('change', '#selectDocument', function() {
                var notIssueExpiryOther = $(this).val() == 'Personal Photo' || $(this).val() == 'Offer Letter' || $(this).val() == 'MOL Job Offer' || $(this).val() == 'Signed MOL Job Offer' || $(this).val() == 'MOL MB Contract' || $(this).val() == 'Signed MOL MB Offer' || $(this).val() == 'Preapproval Work Permit' || $(this).val() == 'Dubai Insurance' || $(this).val() == 'Tawjeeh Receipt' || $(this).val() == 'Emirates Id Application form' || $(this).val() == 'Stamped EID Application form' || $(this).val() == 'Birth Certificate' || $(this).val() == 'Marriage Certificate' || $(this).val() == 'School Certificate' || $(this).val() == 'Diploma' || $(this).val() == 'University Degree' || $(this).val() == 'Salary Certificate' || $(this).val() == 'Tenancy Contract' || $(this).val() == 'MOL Cancellation form' || $(this).val() == 'Signed MOL Cancellation Form' || $(this).val() == 'Work Permit Cancellation Approval' || $(this).val() == 'Residency Cancellation Approval' || $(this).val() == 'Modify MOL Contract' || $(this).val() == 'Work Permit Application' || $(this).val() == 'Work Permit Renewal Application' || $(this).val() == 'Signed Work Permit Renewal' || $(this).val() == 'Application' || $(this).val() == 'Submission Form';
                if ($(this).val() == 'Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none');
                } else if (notIssueExpiryOther) {
                    $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
                }
                else {
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none');
                }
            });

            $(document).on('click', '.add-btn', function() {
                // get the last DIV which ID starts with ^= "docField"
                var $div = $('div[id^="docField"]:first');

                // Read the Number from that DIV's ID (i.e: 3 from "klon3")
                // And increment that number by 1
                var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

                // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
                var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end()
                    .show();
                html.find('.other-show').addClass('d-none');
                $($div).before(html);
            });

            // var docCounter = 0;
            // $(document).on('click', '.add-btn', function() {
            //      // get the last DIV which ID starts with ^= "docField"
            //      var $div = $('div[id^="docField"]:first');
            //     var docFields = $('.doc-fields').clone();
            //     docFields.find('#selectDocument').attr('selectDocument' + docCounter);
            //     $($div).before(docFields);
            //     docCounter++;
            // });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.doc-fields').remove();
            });
        });
    </script>
@endsection
