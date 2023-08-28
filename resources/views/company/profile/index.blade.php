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
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="{{ asset($company->image) }}" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" name="image" type="file" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="companyName">Company Name<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-users-cog input-field-left-icon"></span>
                            <input id="companyName" type="text" name="name" class="form-control pl-padding"
                                value="{{ $company->name }}" placeholder="Enter Company Name">

                        </div>
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="companyPhone">Phone<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-phone input-field-left-icon"></span>
                            <input id="companyPhone" type="number" name="phone" value="{{ $company->phone }}"
                                class="form-control pl-padding" placeholder="Enter Phone Number">

                        </div>
                        @error('phone')
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
                        <label>Trade License No</label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                            <input type="text" class="form-control pl-padding" name="license_no"
                                value="{{ $company->license_no }}" placeholder="Enter Trade License No">
                        </div>
                        @error('license_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Enter Establishment Card No</label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                            <input type="text" class="form-control pl-padding" name="establishment_no"
                                value="{{ $company->establishment_no }}" placeholder="Enter Establishment Card No">
                        </div>
                        @error('establishment_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>MOHRE Company Code</label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                            <input type="text" class="form-control pl-padding" name="mohre_no"
                                value="{{ $company->mohre_no }}" placeholder="Enter MOHRE Company Code">
                        </div>
                        @error('mohre_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Issue Date</label>
                        <div class="input-group">
                            <input type="date" name="issue_date" value="{{ old('issue_date') }}" placeholder="dd.mm.yyyy"
                                class="form-control">
                        </div>
                        @error('issue_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Expiry Date</label>
                        <div class="input-group">
                            <input type="date" name="expiry_date" value="{{ old('expiry_date') }}" placeholder="dd.mm.yyyy"
                                class="form-control">
                        </div>
                        @error('expiry_date')
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
