@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            @if (Auth::guard('web')->user()->emp_type == 'self')
            <h4>Dashboard</h4>
            @else
            <h4>Employee Dashboard</h4>
            @endif
            <p><span class="fa fa-user"></span> - My Profile</p>
            <form action="{{ route('user.profile.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12 text-right">
                        <button class="btn btn-success" id="editProfButton"><span class="fa fa-edit mr-2"></span>Edit Profile</button>
                    </div>
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="{{ asset($employee->image) }}" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" name="image" type="file" accept="image/*" / disabled>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userName">Full Name<span class="required"> *</span></label>
                        <input id="userName" type="text" name="name" value="{{ old('name') ?? $employee->name }}"
                            class="form-control" placeholder="Full Name" disabled>
                        @error('name')
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
                    <div class="form-group col-md-6">
                        <label for="userPhone">Phone<span class="required"> *</span></label>
                        <input id="userPhone" type="number" name="phone" value="{{ old('phone') ?? $employee->phone }}"
                            class="form-control" placeholder="Enter Phone Number" disabled>
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Position</label>
                        <div class="input-group">
                            <input type="text" name="position" value="{{ old('position') ?? $employee->position }}" placeholder="Position"
                                class="form-control" disabled>
                        </div>
                        @error('position')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Person Code</label>
                        <div class="input-group">
                            <input type="text" name="person_code" value="{{ old('person_code') ?? $employee->person_code }}" placeholder="Person Code"
                                class="form-control" disabled>
                        </div>
                        @error('person_code')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date Of Birth<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="date" name="dob" value="{{ old('dob') ?? $employee->dob }}" placeholder="dd.mm.yyyy"
                                class="form-control date-of-birth" disabled>
                        </div>
                        @error('dob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Place Of Birth</label>
                        <div class="input-group">
                            <input type="text" name="pob" value="{{ old('pob') ?? $employee->pob }}" placeholder="Place Of Birth"
                                class="form-control" disabled>
                        </div>
                        @error('pob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Joining Date</label>
                        <div class="input-group">
                            <input type="date" name="join_date" value="{{ old('join_date') ?? $employee->join_date }}" placeholder="dd.mm.yyyy"
                                class="form-control" disabled>
                        </div>
                        @error('join_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label>Nationality<span class="required"> *</span></label>
                        <select name="nationality" id="selCountry" class="form-control" disabled>
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
                        <select name="religion" class="form-control" id="selReligion" disabled>
                            <option value=""></option>
                            <option value="Islam" {{ old('religion') == "Islam" ||  $employee->religion =="Islam" ? "selected" : '' }}>Islam</option>
                            <option value="Judaism" {{ old('religion') == "Judaism" ||  $employee->religion =="Judaism" ? "selected" : '' }}>Judaism</option>
                            <option value="Christianity" {{ old('religion') == "Christianity" ||  $employee->religion =="Christianity" ? "selected" : '' }}>Christianity</option>
                            <option value="Hinduism" {{ old('religion') == "Hinduism" ||  $employee->religion =="Hinduism" ? "selected" : '' }}>Hinduism</option>
                            <option value="Atheist" {{ old('religion') == "Atheist" ||  $employee->religion =="Atheist" ? "selected" : '' }}>Atheist</option>
                            <option value="Baha'i" {{ old('religion') == "Baha'i" ||  $employee->religion =="Baha'i" ? "selected" : '' }}>Baha'i</option>
                            <option value="Buddhism" {{ old('religion') == "Buddhism" ||  $employee->religion =="Buddhism" ? "selected" : '' }}>Buddhism</option>
                            <option value="Sikhism" {{ old('religion') == "Sikhism" ||  $employee->religion =="Sikhism" ? "selected" : '' }}>Sikhism</option>
                            <option value="Spiritism" {{ old('religion') == "Spiritism" ||  $employee->religion =="Spiritism" ? "selected" : '' }}>Spiritism</option>
                            <option value="Tenrikyo" {{ old('religion') == "Tenrikyo" ||  $employee->religion =="Tenrikyo" ? "selected" : '' }}>Tenrikyo</option>
                        </select>
                        @error('religion')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Marital Status</label>
                        <select name="marital_status" class="form-control" id="martialStatus" disabled>
                            <option value=""></option>
                            <option value="Single"{{ old('marital_status') == "Single" ||  $employee->marital_status =="Single" ? "selected" : '' }}>Single</option>
                            <option value="Married"{{ old('marital_status') == "Married" ||  $employee->marital_status =="Married" ? "selected" : '' }}>Married</option>
                            <option value="Divorced"{{ old('marital_status') == "Divorced" ||  $employee->marital_status =="Divorced" ? "selected" : '' }}>Divorced</option>
                            <option value="Widowed"{{ old('marital_status') == "Widowed" ||  $employee->marital_status =="Widowed" ? "selected" : '' }}>Widowed</option>
                        </select>
                        @error('marital_status')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    @if (Auth::guard('web')->user()->emp_type == 'self')
                        <div class="form-group col-md-6">
                            <label>Gender<span class="required"> *</span></label>
                            <select name="gender" id="selGender" class="form-control" disabled>
                                <option value=""></option>
                                <option value="Male" {{ old('gender') == "Male" ||  $employee->gender =="Male" ? "selected" : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == "Female" || $employee->gender =="Female" ? "selected" : '' }}>Female</option>
                            </select>
                            @error('gender')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Father's Name<span class="required"> *</span></label>
                            <input type="text" class="form-control" name="father_name"
                                value="{{ old('father_name') ?? $employee->father_name }}" placeholder="Enter Father Name" disabled>
                            @error('father_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mother's Name</label>
                            <input type="text" class="form-control" name="mother_name"
                                value="{{ old('mother_name') ?? $employee->mother_name }}" placeholder="Enter Mother Name" disabled>
                            @error('mother_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Passport Number</label>
                            <input type="text" class="form-control" name="passport_number"
                                value="{{ old('passport_number') ?? $employee->passport_number }}" placeholder="Enter Passport Number" disabled>
                            @error('passport_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Unified Number</label>
                            <input type="text" class="form-control" name="unified_number"
                                value="{{ old('unified_number') ?? $employee->unified_number }}" placeholder="Enter Unified Number" disabled>
                            @error('unified_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Emirates ID Number</label>
                            <input type="text" class="form-control" name="emirate_id_number"
                                value="{{ old('emirate_id_number') ?? $employee->emirate_id_number }}" placeholder="Enter Emirates ID Number" disabled>
                            @error('emirate_id_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Work Permit Number</label>
                            <input type="text" class="form-control" name="work_permit_number"
                                value="{{ old('work_permit_number') ?? $employee->work_permit_number }}" placeholder="Enter Work Permit Number" disabled>
                            @error('work_permit_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Residence File Number</label>
                            <input type="text" class="form-control" name="residence_no"
                            value="{{ old('residence_no') ?? $employee->residence_no }}" placeholder="Enter Residence File Number" disabled>
                            @error('residence_no')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Health Insurance Card Number</label>
                            <input type="text" class="form-control" name="insurance_no"
                            value="{{ old('insurance_no') ?? $employee->insurance_no }}" placeholder="Enter Health Insurance Card Number" disabled>
                            @error('insurance_no')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Salary Details</label>
                            <select name="salary_detail" id="salDetails" class="form-control" disabled>
                                <option value=""></option>
                                <option value="Basic Salary"{{ old('salary_detail') == "Basic Salary" ||  $employee->salary_detail =="Basic Salary" ? "selected" : '' }}>Basic Salary</option>
                                <option value="Other Allowance"{{ old('salary_detail') == "Other Allowance" ||  $employee->salary_detail =="Other Allowance" ? "selected" : '' }} >Other Allowance</option>
                                <option value="Total"{{ old('salary_detail') == "Total" ||  $employee->salary_detail =="Total" ? "selected" : '' }}>Total</option>
                            </select>
                        </div>
                    @endif
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
            /*single-select-dropdowns*/
            $('#selReligion').select2({
                placeholder: 'Select Religion'
            });
            $('#martialStatus').select2({
                placeholder: 'Select Martial Status'
            });
            $('#selCountry').select2({
                placeholder: 'Select Country'
            });
            $('#selGender').select2({
                placeholder: 'Select Gender'
            });
            $('#salDetails').select2({
                placeholder: 'Salary Details'
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
        });
        /*Avatar upload*/
    </script>
@endsection
