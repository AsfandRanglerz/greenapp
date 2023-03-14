@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-user"></span> - My Profile</p>
            <form action="{{ route('user.profile.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="{{ asset($employee->image) }}" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" name="image" type="file" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userName">Name<span class="required"> *</span></label>
                        <input id="userName" type="text" name="name" value="{{ old('name') ?? $employee->name }}"
                            class="form-control" placeholder="Enter Employee Name">
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date Of Birth<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="date" name="dob" value="{{ old('dob') ?? $employee->dob }}" placeholder="dd.mm.yyyy"
                                class="form-control date-of-birth">
                        </div>
                        @error('dob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nationality<span class="required"> *</span></label>
                        <select name="nationality" id="selCountry" class="form-control">
                            <option value=""></option>
                            @foreach ($data['countries'] as $country)
                                <option value="{{ $country->name }}"
                                    {{ old('nationality') == $country->name || $employee['nationality'] == $country->name ? 'selected' : '' }}>{{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('nationality')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Religion<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="religion" value="{{ old('religion') ?? $employee->religion }}"
                            placeholder="Enter Religion">
                        @error('religion')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>

                    @if (Auth::guard('web')->user()->emp_type == 'self')
                        <div class="form-group col-md-6">
                            <label>Gender<span class="required"> *</span></label>
                            <select name="gender" id="selGender" class="form-control">
                                <option value=""></option>
                                <option value="Male" {{ old('gender') == "Male" ||  $employee->gender =="Male" ? "selected" : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == "Female" || $employee->gender =="Female" ? "selected" : '' }}>Female</option>
                            </select>

                            @error('gender')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Father Name</label>
                            <input type="text" class="form-control" name="father_name"
                                value="{{ old('father_name') ?? $employee->father_name }}" placeholder="Enter Father Name">
                            @error('father_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mother Name</label>
                            <input type="text" class="form-control" name="mother_name"
                                value="{{ old('mother_name') ?? $employee->mother_name }}" placeholder="Enter Mother Name">
                            @error('mother_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Passport Number</label>
                            <input type="text" class="form-control" name="passport_number"
                                value="{{ old('passport_number') ?? $employee->passport_number }}" placeholder="Enter Passport Number">
                            @error('passport_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Unified Number</label>
                            <input type="text" class="form-control" name="unified_number"
                                value="{{ old('unified_number') ?? $employee->unified_number }}" placeholder="Enter Unified Number">
                            @error('unified_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Emirates ID Number</label>
                            <input type="text" class="form-control" name="emirate_id_number"
                                value="{{ old('emirate_id_number') ?? $employee->emirate_id_number }}" placeholder="Enter Emirates ID Number">
                            @error('emirate_id_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Work Permit Number</label>
                            <input type="text" class="form-control" name="work_permit_number"
                                value="{{ old('work_permit_number') ?? $employee->work_permit_number }}" placeholder="Enter Work Permit Number">
                            @error('work_permit_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Person Code</label>
                            <input type="text" class="form-control" name="person_code"
                                value="{{ old('person_code') ?? $employee->person_code }}" placeholder="Enter Person Code">
                            @error('person_code')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif

                    <div class="form-group col-md-6">
                        <label for="userPhone">Phone<span class="required"> *</span></label>
                        <input id="userPhone" type="number" name="phone" value="{{ old('phone') ?? $employee->phone }}"
                            class="form-control" placeholder="Enter Phone Number">
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userEmail">Email<span class="required"> *</span></label>
                        <input id="userEmail" type="email" name="email" value="{{ $employee->email }}"
                            class="form-control" placeholder="Enter Your Email"readonly>
                        @error('email')
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
            $('#selCountry').select2({
                placeholder: 'Select Country'
            });
            $('#selGender').select2({
                placeholder: 'Select Gender'
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
