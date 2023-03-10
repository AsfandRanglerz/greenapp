<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-book"></span> - Documents/Attachments</p>
            <form action="{{ route('user.document.update', ['document' => $document->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-book"></span> - Employee Documents</h6>
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
                                <option value="Entry Permit Visa"
                                    {{ $document['doc_type'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                </option>
                                <option value="Change of Status Visa"
                                    {{ $document['doc_type'] == 'Change of Status Visa' ? 'selected' : '' }}>Change of
                                    Status Visa</option>
                                <option value="Emirates Identity Card"
                                    {{ $document['doc_type'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                    Identity Card</option>
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
                                <option value="CV" {{ $document['doc_type'] == 'CV' ? 'selected' : '' }}>CV</option>
                                <option value="Other" {{ $document['doc_type'] == 'Other' ? 'selected' : '' }}>
                                    Other(Resume)</option>
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
                        <div class="form-group col-md-6 other-show d-none">
                            <label>Document Name<span class="required"> *</span></label>
                            <input type="text" name="doc_name" value="{{ $document['doc_name'] }}"
                                placeholder="Enter Document Name" class="form-control" required>
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
                if ($(this).val() == 'Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none')
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none')
                } else {
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none')
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none')
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
