@extends('company.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-building"></span> - Company Profile</p>
            <form action="{{ route('company.profile.update', ['profile' => $company->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12 text-right">
                        <button class="btn btn-success" id="editProfButton"><span class="fa fa-edit mr-2"></span>Edit
                            Profile</button>
                    </div>
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="{{ asset($company->image) }}" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" name="image" type="file" accept="image/*" disabled />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="companyName">Company Name<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-users-cog input-field-left-icon"></span>
                            <input id="companyName" type="text" name="name" class="form-control pl-padding"
                                value="{{ $company->name }}" placeholder="Enter Company Name" disabled>

                        </div>
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="companyEmail">Email<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                            <input id="companyEmail" type="email" name="email" value="{{ $company->email }}"
                                class="form-control pl-padding" placeholder="Enter your email" readonly>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="companyPhone">Phone<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-phone input-field-left-icon"></span>
                            <input id="companyPhone" type="number" name="phone" value="{{ $company->phone }}"
                                class="form-control pl-padding" placeholder="Enter Phone Number" disabled>

                        </div>
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>MOHRE Company Code</label>
                        <input type="text" class="form-control" name="mohre_no" value="{{ $company->mohre_no }}"
                            placeholder="Enter MOHRE Company Code" disabled>
                        @error('mohre_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Po Box</label>
                        <input type="text" class="form-control" name="po_box" value="{{ $company->po_box }}" placeholder="Po Box"
                            disabled>
                        @error('po_box')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Daman Police Number</label>
                        <input type="text" class="form-control" name="daman_police_number" value="{{ $company->daman_police_number }}"
                            placeholder="Daman Police Number" disabled>
                        @error('daman_police_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Daman Customer Number</label>
                        <input type="text" class="form-control" name="daman_customer_number" value="{{ $company->daman_customer_number }}"
                            placeholder="Daman Customer Number" disabled>
                        @error('daman_customer_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Other Insurance Policy Number</label>
                        <input type="text" class="form-control" name="other_insurance_policy_number" value="{{ $company->other_insurance_policy_number }}"
                            placeholder="Other Insurance Policy Number" disabled>
                        @error('other_insurance_policy_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>E Channel Issue Date</label>
                        <div class="input-group">
                            <input type="date" name="e_channel_issue_date" value="{{ $company->e_channel_issue_date }}"
                                placeholder="dd.mm.yyyy" class="form-control" disabled>
                        </div>
                        @error('e_channel_issue_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>E Channel Expiry Date</label>
                        <div class="input-group">
                            <input type="date" name="e_channel_expiry_date" value="{{ $company->e_channel_expiry_date }}"
                                placeholder="dd.mm.yyyy" class="form-control" disabled>
                        </div>
                        @error('e_channel_expiry_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Trade License No</label>
                        <input type="text" class="form-control" name="license_no"
                            value="{{ $company->license_no }}" placeholder="Enter Trade License No" disabled>
                        @error('license_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Issue Date</label>
                        <div class="input-group">
                            <input type="date" name="license_issue_date" value="{{ $company->license_issue_date }}" placeholder="dd.mm.yyyy"
                                class="form-control" disabled>
                        </div>
                        @error('license_issue_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Expiry Date</label>
                        <div class="input-group">
                            <input type="date" name="license_expiry_date" value="{{ $company->license_expiry_date }}" placeholder="dd.mm.yyyy"
                                class="form-control" disabled>
                        </div>
                        @error('license_expiry_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>ICP Establishment Card No</label>
                        <input type="text" class="form-control" name="establishment_no"
                            value="{{ $company->establishment_no }}" placeholder="Enter Establishment Card No" disabled>
                        @error('establishment_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Issue Date</label>
                        <div class="input-group">
                            <input type="date" name="establishment_issue_date" value="{{ $company->establishment_issue_date }}"
                                placeholder="dd.mm.yyyy" class="form-control" disabled>
                        </div>
                        @error('establishment_issue_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Expiry Date</label>
                        <div class="input-group">
                            <input type="date" name="establishment_expiry_date" value="{{ $company->establishment_expiry_date }}"
                                placeholder="dd.mm.yyyy" class="form-control" disabled>
                        </div>
                        @error('establishment_expiry_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tenancy</label>
                        <input type="text" class="form-control" name="tenancy" value="{{ $company->tenancy }}"
                            placeholder="Tenancy" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Issue Date</label>
                        <div class="input-group">
                            <input type="date" name="tenancy_issue_date" value="{{ $company->tenancy_issue_date }}" placeholder="dd.mm.yyyy"
                                class="form-control" disabled>
                        </div>
                        @error('tenancy_issue_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Expiry Date</label>
                        <div class="input-group">
                            <input type="date" name="tenancy_expiry_date" value="{{ $company->tenancy_expiry_date }}" placeholder="dd.mm.yyyy"
                                class="form-control" disabled>
                        </div>
                        @error('tenancy_expiry_date')
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
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#editProfButton', function(event) {
                event.preventDefault();
                $(this).closest('form').find('input, select').removeAttr('disabled');
                $(this).closest('form').find('.upload-button').css('cursor', 'pointer');
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
        });
        /*Avatar upload*/
    </script>
@endsection
