<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-book"></span> - Documents/Attachments</p>
            <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-book"></span> - Employee Documents</h6>
                        <a href="" class="mb-3 btn btn-success"><span class="fa fa-plus mr-2"></span>Add Document</a>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Select Document Type<span class="required"> *</span></label>
                        <select id="selectDocument" name="doc_type[]" value="{{ old('doc_type[]') }}" class="form-control" required>
                            <option value=""></option>
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
                    <div class="form-group col-md-6">
                        <label>Select File<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="file[]" value="{{ old('file[]') }}" style="line-height: 1" required>
                            <div class="input-group-prepend">
                                <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                            </div>
                        </div>
                        @error('file')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Issue Date<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="text" name="issue_date[]" placeholder="dd.mm.yyyy"
                            value="{{ old('issue_date[]') }}" class="form-control datepicker issue-date" required>
                            <div class="input-group-prepend">
                                <small class="input-group-text"><span class="fa fa-calendar"></span></small>
                            </div>
                        </div>
                        @error('issue_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Expiry Date<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="text" name="expiry_date[]" placeholder="dd.mm.yyyy"
                            value="{{ old('expiry_date[]') }}" class="form-control datepicker expire-date" required>
                            <div class="input-group-prepend">
                                <small class="input-group-text"><span class="fa fa-calendar"></span></small>
                            </div>
                        </div>
                        @error('expiry_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group w-100">
                        <label>Comments</label>
                        <textarea type="text" name="comment[]" placeholder="Enter Your Comments ..."  value="{{ old('comment[]') }}" class="form-control" rows="5"></textarea>
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
            $('#selectDocument').select2({
                placeholder: 'Select Document Type'
            });
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
