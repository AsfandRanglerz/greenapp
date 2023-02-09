<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-book"></span> - Change Password</p>
            <form action="{{ route('EmployeeProfile.changePassword') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-md-5 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        {{-- <h6><span class="fa fa-book"></span> - Company Documents</h6> --}}

                    </div>
                    <div class="form-group col-md-12">
                        <label>Old Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="oldPassword" name="oldPassword" type="password" class="form-control pl-pr-padding"
                                placeholder="Enter Old Password" >
                            <span toggle="#oldPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                                aria-hidden="true"></span>

                        </div>
                        @error('oldPassword')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label>New Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="newPassword" name="newPassword" type="password" class="form-control pl-pr-padding"
                                placeholder="Enter New Password" >
                            <span toggle="#newPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                                aria-hidden="true"></span>

                        </div>
                        @error('newPassword')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label>Confirm New Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="confirm_password" name="confirm_password" type="password" class="form-control pl-pr-padding"
                                placeholder="Confirm Password" >
                            <span toggle="#confirm_password" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                                aria-hidden="true"></span>

                        </div>
                        @error('confirm_password')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
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
<script>
    @if (\Illuminate\Support\Facades\Session::has('success'))
        toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
    @endif

    @if (\Illuminate\Support\Facades\Session::has('error'))
        toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
    @endif
</script>
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
