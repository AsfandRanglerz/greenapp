@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            @if (Auth::guard('web')->user()->emp_type == 'self')
            <h4>Dashboard</h4>
            @else
            <h4>Employee Dashboard</h4>
            @endif

            <p><span class="fa fa-lock"></span> - Change Password</p>
            <form action="{{ route('user.changePassword') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-md-5 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Old Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="oldPassword" name="oldPassword" type="password" class="form-control pl-pr-padding"
                                placeholder="Enter Old Password">
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
                                placeholder="Enter New Password">
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
                            <input id="confirm_password" name="confirm_password" type="password"
                                class="form-control pl-pr-padding" placeholder="Confirm Password">
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
@endsection
