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

            <p><span class="fab fa-servicestack"></span> - Services</p>
            <form action="{{ route('user.request-update',$request_get->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        @if (Auth::guard('web')->user()->emp_type == 'self')
                        <h6><span class="fa fa-bell"></span> - Requests</h6>
                        @else
                        <h6><span class="fa fa-book"></span> - Employee Documents</h6>
                        @endif

                        {{-- <a type="button" class="mb-3 btn btn-success add-btn"><span class="fa fa-plus mr-2"></span>Add
                            More</a> --}}
                    </div>
                    <div class="form-row position-relative doc-fields" id="docField1">
                        {{-- @if (Auth::guard('web')->user()->emp_type == 'self') --}}
                        <div class="form-group col-md-6">
                            <label>Select Request Type<span class="required"> *</span></label>
                            <select id="selectDocument" name="req_type" value="{{ old('doc_type[]') }}"
                                class="form-control" required disabled>
                                <option value="" selected disabled>Select Request</option>
                                <option value="Request to Apply for Golden Visa Nomination" {{ $request_get->req_type == 'Request to Apply for Golden Visa Nomination' ? 'selected' : '' }}>Request to Apply for Golden Visa Nomination</option>
                                <option value="Request for Documents Attestation" {{ $request_get->req_type == 'Request for Documents Attestation' ? 'selected' : '' }}>Request for Documents Attestation</option>
                                <option value="Request for Legal Translation" {{ $request_get->req_type == 'Request for Legal Translation' ? 'selected' : '' }}>Request for Legal Translation</option>
                                <option value="Request for Equivalency of Abroad Certificate" {{ $request_get->req_type == 'Request for Equivalency of Abroad Certificate' ? 'selected' : '' }}>Request for Equivalency of Abroad Certificate</option>
                                <option value="Request for Visit Visa Services" {{ $request_get->req_type == 'Request for Visit Visa Services' ? 'selected' : '' }}>Request for Visit Visa Services</option>
                                <option value="Request to process housemaid visa application" {{ $request_get->req_type == 'Request to process housemaid visa application' ? 'selected' : '' }}>Request to process housemaid visa application</option>
                                <option value="Traffic services" {{ $request_get->req_type == 'Traffic services' ? 'selected' : '' }}>Traffic services</option>
                                <option value="New Business setup inquiry" {{ $request_get->req_type == 'New Business setup inquiry' ? 'selected' : '' }}>New Business setup inquiry</option>
                                <option value="Request for Vehicle Insurance" {{ $request_get->req_type == 'Request for Vehicle Insurance' ? 'selected' : '' }}>Request for Vehicle Insurance</option>
                            </select>
                            @error('doc_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Select File</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file"
                                    style="line-height: 1">
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                            @error('file')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- @dd($request_get->comment); --}}
                            <div class="form-group w-100">
                                <label>Comments</label>
                                <input required type="text" name="comment" value="{{$request_get->comment}}"
                                    class="form-control" rows="5" disabled></textarea>
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
            // $('#selectDocument').select2({
            //     placeholder: 'Select Document'
            // });

            // $(document).on('change', '#selectDocument', function() {
            //     var notIssueExpiryOther = $(this).val() == 'Personal Photo' || $(this).val() ==
            //         'Offer Letter' || $(this).val() == 'MOL Job Offer' || $(this).val() ==
            //         'Signed MOL Job Offer' || $(this).val() == 'MOL MB Contract' || $(this).val() ==
            //         'Signed MOL MB Offer' || $(this).val() == 'Preapproval Work Permit' || $(this).val() ==
            //         'Dubai Insurance' || $(this).val() == 'New Business setup inquiry Receipt' || $(this).val() ==
            //         'Emirates Id Application form' || $(this).val() == 'Stamped EID Application form' || $(
            //             this).val() == 'Birth Certificate' || $(this).val() == 'Marriage Certificate' || $(
            //             this).val() == 'School Certificate' || $(this).val() == 'Diploma' || $(this)
            //     .val() == 'University Degree' || $(this).val() == 'Salary Certificate' || $(this).val() ==
            //         'Tenancy Contract' || $(this).val() == 'MOL Cancellation form' || $(this).val() ==
            //         'Signed MOL Cancellation Form' || $(this).val() ==
            //         'Work Permit Cancellation Approval' || $(this).val() ==
            //         'Residency Cancellation Approval' || $(this).val() == 'Modify MOL Contract' || $(this)
            //         .val() == 'Work Permit Application' || $(this).val() ==
            //         'Work Permit Renewal Application' || $(this).val() == 'Signed Work Permit Renewal' || $(
            //             this).val() == 'Application' || $(this).val() == 'Submission Form';
            //     if ($(this).val() == 'Other') {
            //         $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
            //             .attr('required', true);
            //         $(this).closest('.doc-fields').find('.other-none').addClass('d-none');
            //         $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
            //     } else if (notIssueExpiryOther) {
            //         $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
            //         $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
            //     } else if ($(this).val() == 'Receipts') {
            //         $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
            //         $(this).closest('.doc-fields').find('.receipts-show').removeClass('d-none');
            //     } else {
            //         $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
            //         $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
            //             .attr('required', false);
            //         $(this).closest('.doc-fields').find('.other-none').removeClass('d-none');
            //     }
            // });

            // $(document).on('click', '.add-btn', function() {
            //     // get the last DIV which ID starts with ^= "docField"
            //     var $div = $('div[id^="docField"]:first');

            //     // Read the Number from that DIV's ID (i.e: 3 from "klon3")
            //     // And increment that number by 1
            //     var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

            //     // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
            //     var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end()
            //         .show();
            //     html.find('.other-show, .other-none, .receipts-show').addClass('d-none');
            //     $($div).before(html);
            // });

            // var docCounter = 0;
            // $(document).on('click', '.add-btn', function() {
            //      // get the last DIV which ID starts with ^= "docField"
            //      var $div = $('div[id^="docField"]:first');
            //     var docFields = $('.doc-fields').clone();
            //     docFields.find('#selectDocument').attr('selectDocument' + docCounter);
            //     $($div).before(docFields);
            //     docCounter++;
            // });

            // $(document).on('click', '.remove-btn', function() {
            //     $(this).closest('.doc-fields').remove();
            // });
        });
    </script>
@endsection