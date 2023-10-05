<!DOCTYPE html>
<html>

@extends('company.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-book"></span> - Documents/Attachments</p>
            <form action="{{ route('company.document.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-book"></span> - Company Documents</h6>
                        <a type="button" class="mb-3 btn btn-success add-btn"><span class="fa fa-plus mr-2"></span>Add More</a>
                    </div>
                    <div class="form-row position-relative doc-fields" id="docField1">
                        <div class="form-group col-md-6">
                            <label>Company Attachment<span class="required"> *</span></label>
                                <select id="selectDocument" name="doc_type[]"  class="form-control" required>
                                    <option  selected disabled>Select Document</option>
                                    <option value="Trade License">Trade License</option>
                                    <option value="Establishment Card ">Establishment Card </option>
                                    <option value="Trade Name">Trade Name</option>
                                    <option value="Tenancy">Tenancy</option>
                                    <option value="Memorandum of Association">Memorandum of Association</option>
                                    <option value="Power of Attorney">Power of Attorney</option>
                                    <option value="Civil Defense Certificate">Civil Defense Certificate</option>
                                    <option value="Other">Other</option>
                                </select>
                            @error('doc_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
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
                                placeholder="Enter Document Name" class="form-control" required>
                            @error('doc_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <span class="fa fa-trash text-danger remove-btn"></span>
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
                if($(this).val()=='Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input').attr('required', true);
                } else {
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input').attr('required', false);
                }
            });

            $(document).on('click', '.add-btn', function() {
                // get the last DIV which ID starts with ^= "docField"
                var $div = $('div[id^="docField"]:first');

                // Read the Number from that DIV's ID (i.e: 3 from "klon3")
                // And increment that number by 1
                var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

                // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
                var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end().show();
                html.find('.other-show').addClass('d-none');
                $($div).before(html);
            });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.doc-fields').remove();
            });

            /*datepicker*/
            $('.datepicker').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
            });
            $('.issue-date + .input-group-prepend').click(function() {
                $(".issue-date").focus();
            });
            $('.expire-date + .input-group-prepend').click(function() {
                $(".expire-date").focus();
            });
            /*datepicker*/
            /*single-select-dropdowns*/

            /*single-select-dropdowns*/
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
