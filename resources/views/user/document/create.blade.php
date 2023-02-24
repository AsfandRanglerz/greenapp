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
                                <select id="selectDocument" name="doc_type[]" value="{{ old('doc_type[]') }}" class="form-control" required>
                                    <option value="" selected disabled>Select Document</option>
                                    <option value="Personal Photo">Personal Photo</option>
                                    <option value="Passport">Passport</option>
                                    <option value="Visit Visa">Visit Visa</option>
                                    <option value="Entry Permit Visa">Entry Permit Visa</option>
                                    <option value="Change of Status Visa">Change of Status Visa</option>
                                    <option value="Emirates Identity Card">Emirates Identity Card</option>
                                    <option value="Residence Visa">Residence Visa</option>
                                    <option value="Work Permit">Work Permit</option>
                                    <option value="Health Insurance Card">Health Insurance Card</option>
                                    <option value="National Identity Card">National Identity Card</option>
                                    <option value="Birth Certificate">Birth Certificate</option>
                                    <option value="Marriage Certificate">Marriage Certificate</option>
                                    <option value="School Certificate">School Certificate</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="University Degree">University Degree</option>
                                    <option value="Salary Certificate">Salary Certificate</option>
                                    <option value="Tenancy Contract">Tenancy Contract</option>
                                    <option value="CV">CV</option>
                                    <option value="Other">Other(Resume)</option>
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
                        <div class="form-group col-md-6 other-none">
                            <label>Issue Date<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="date" name="issue_date[]" placeholder="dd.mm.yyyy"
                                    value="{{ old('issue_date[]') }}" class="form-control issue-date" required>
                            </div>
                            @error('issue_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Expiry Date<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="date" name="expiry_date[]" placeholder="dd.mm.yyyy"
                                    value="{{ old('expiry_date[]') }}" class="form-control expire-date" required>
                            </div>
                            @error('expiry_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-100">
                            <label>Comments</label>
                            <textarea type="text" name="comment[]" placeholder="Enter Your Comments ..." value="{{ old('comment[]') }}"
                                class="form-control" rows="5"></textarea>
                        </div>
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

            $(document).on('click', '.add-btn', function() {
                // get the last DIV which ID starts with ^= "docField"
                var $div = $('div[id^="docField"]:first');

                // Read the Number from that DIV's ID (i.e: 3 from "klon3")
                // And increment that number by 1
                var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

                // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
                var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end()
                    .show();

                $($div).before(html);
            });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.doc-fields').remove();
            });
        });
    </script>
@endsection
