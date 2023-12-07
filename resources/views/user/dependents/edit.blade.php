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

            <p><span class="fa fa-book"></span> - Dependents</p>
            <form action="{{ route('user.document.update', $dependent->id) }}" method="POST"
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
                            <label>Select Dependent<span class="required"> *</span></label>
                            <select id="selectDocument" name="dependent_type[]" value="{{ old('dependent_type[]') }}"
                                class="form-control" required>
                                <option value="" disabled selected>Select Dependent</option>
                                <option  value="Father"{{ $dependent->dependent_type == 'Father' ? 'selected' : '' }}>Father</option>
                                <option  value="Mother"{{ $dependent->dependent_type == 'Mother' ? 'selected' : '' }}>Mother</option>
                                <option  value="Wife"{{ $dependent->dependent_type == 'Wife' ? 'selected' : '' }}>Wife</option>
                                <option  value="Son"{{ $dependent->dependent_type == 'Son' ? 'selected' : '' }}>Son</option>
                                <option  value="Daughter"{{ $dependent->dependent_type == 'Daughter' ? 'selected' : '' }}>Daughter</option>
                            </select>
                            @error('dependent_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-xl-6 col-lg-6 col-md-4">
                            <label>Select Request<span class="required"> *</span></label>
                                <select id="selectDocument" name="request_type[]" value="{{ old('request_type[]') }}"
                                    class="form-control" required>
                                    <option value="" disabled selected>Select Request</option>
                                    <option value="Parents"{{ $dependent->dependent_type == 'Parents' ? 'selected' : '' }}>Parents</option>
                                    <option value="Wife"{{ $dependent->dependent_type == 'Wife' ? 'selected' : '' }}>Wife</option>
                                    <option value="Son"{{ $dependent->dependent_type == 'Son' ? 'selected' : '' }}>Son</option>
                                    <option value="Daughter"{{ $dependent->dependent_type == 'Daughter' ? 'selected' : '' }}>Daughter</option>
                                </select>
                                @error('request_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                            </div>
                        <div class="form-group col-md-6">
                            <label>Select File<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file" value="{{ $dependent->file }}"
                                    style="line-height: 1">
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                            @error('file')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 other-none">
                            <label>Issue Date</label>
                            <div class="input-group">
                                <input type="date" name="issue_date" placeholder="dd.mm.yyyy"
                                    value="{{ $dependent->issue_date }}" class="form-control issue-date">
                            </div>
                            @error('issue_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Expiry Date</label>
                            <div class="input-group">
                                <input type="date" name="expiry_date" placeholder="dd.mm.yyyy"
                                    value="{{ $dependent->expiry_date }}" class="form-control expire-date">
                            </div>
                            @error('expiry_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
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
            // $('#selectDocument').each(function() {
            //     var notIssueExpiryOther = $(this).val() == 'Personal Photo' || $(this).val() ==
            //         'Offer Letter' || $(this).val() == 'MOL Job Offer' || $(this).val() ==
            //         'Signed MOL Job Offer' || $(this).val() == 'MOL MB Contract' || $(this).val() ==
            //         'Signed MOL MB Offer' || $(this).val() == 'Preapproval Work Permit' || $(this).val() ==
            //         'Dubai Insurance' || $(this).val() == 'Tawjeeh Receipt' || $(this).val() ==
            //         'Emirates Id Application form' || $(this).val() == 'Stamped EID Application form' || $(
            //             this).val() == 'Birth Certificate' || $(this).val() == 'Marriage Certificate' || $(
            //             this).val() == 'School Certificate' || $(this).val() == 'Diploma' || $(this)
            //         .val() == 'University Degree' || $(this).val() == 'Salary Certificate' || $(this)
            //         .val() ==
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

            // $(document).on('change', '#selectDocument', function() {
            //     var notIssueExpiryOther = $(this).val() == 'Personal Photo' || $(this).val() ==
            //         'Offer Letter' || $(this).val() == 'MOL Job Offer' || $(this).val() ==
            //         'Signed MOL Job Offer' || $(this).val() == 'MOL MB Contract' || $(this).val() ==
            //         'Signed MOL MB Offer' || $(this).val() == 'Preapproval Work Permit' || $(this).val() ==
            //         'Dubai Insurance' || $(this).val() == 'Tawjeeh Receipt' || $(this).val() ==
            //         'Emirates Id Application form' || $(this).val() == 'Stamped EID Application form' || $(
            //             this).val() == 'Birth Certificate' || $(this).val() == 'Marriage Certificate' || $(
            //             this).val() == 'School Certificate' || $(this).val() == 'Diploma' || $(this)
            //         .val() == 'University Degree' || $(this).val() == 'Salary Certificate' || $(this)
            //         .val() ==
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
