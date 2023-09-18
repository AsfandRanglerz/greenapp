@extends('company.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-user"></span> - Add Employee Details</p>
            <form action="{{ route('company.employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" name="image" type="file" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userName">Full Name<span class="required"> *</span></label>
                        <input id="userName" type="text" name="name" value="{{ old('name') }}" class="form-control"
                            placeholder="Enter Employee Name">
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userEmail">Email<span class="required"> *</span></label>
                        <input id="userEmail" type="email" name="email" value="{{ old('email') }}"
                            class="form-control" placeholder="Enter Your Email">
                        @error('email')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userPhone">Phone<span class="required"> *</span></label>
                        <input id="userPhone" type="number" name="phone" value="{{ old('phone') }}" class="form-control"
                            placeholder="Enter Phone Number">
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Position</label>
                        <div class="input-group">
                            <input type="text" name="position" value="{{ old('position') }}" placeholder="Position"
                                class="form-control">
                        </div>
                        @error('position')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Person Code</label>
                        <div class="input-group">
                            <input type="text" name="person_code" value="{{ old('person_code')}}" placeholder="Person Code"
                                class="form-control">
                        </div>
                        @error('person_code')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date Of Birth<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="date" name="dob" value="{{ old('dob') }}" placeholder="dd.mm.yyyy"
                                class="form-control date-of-birth">
                        </div>
                        @error('dob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Place Of Birth</label>
                        <div class="input-group">
                            <input type="text" name="pob" value="{{ old('pob')}}" placeholder="Place Of Birth"
                                class="form-control">
                        </div>
                        @error('pob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Joining Date</label>
                        <div class="input-group">
                            <input type="date" name="join_date" value="{{ old('join_date') }}" placeholder="dd.mm.yyyy"
                                class="form-control">
                        </div>
                        @error('join_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nationality<span class="required"> *</span></label>
                        <select name="nationality" id="selCountry" class="form-control">
                            <option value=""></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('nationality')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Religion<span class="required"> *</span></label>
                        <select name="religion" class="form-control" id="selReligion">
                            <option value=""></option>
                            <option value="Islam">Islam</option>
                            <option value="Judaism">Judaism</option>
                            <option value="Christianity">Christianity</option>
                            <option value="Hinduism">Hinduism</option>
                            <option value="Atheist">Atheist</option>
                            <option value="Baha'i">Baha'i</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Sikhism">Sikhism</option>
                            <option value="Spiritism">Spiritism</option>
                            <option value="Tenrikyo">Tenrikyo</option>
                        </select>
                        @error('religion')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Marital Status</label>
                        <select name="marital_status" class="form-control" id="martialStatus">
                            <option value=""></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                        @error('marital_status')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Gender<span class="required"> *</span></label>
                        <select name="gender" id="selGender" class="form-control">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Father's Name<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="father_name"
                            value="{{old('father_name')}}" placeholder="Enter Father Name">
                        @error('father_name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mother's Name</label>
                        <input type="text" class="form-control" name="mother_name"
                            value="{{old('mother_name')}}" placeholder="Enter Mother Name">
                        @error('mother_name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Passport Number</label>
                        <input type="text" class="form-control" name="passport_number"
                            value="{{old('passport_number')}}" placeholder="Enter Passport Number">
                        @error('passport_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Unified Number</label>
                        <input type="text" class="form-control" name="unified_number"
                            value="{{old('passport_number')}}" placeholder="Enter Unified Number">
                        @error('unified_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Emirates ID Number</label>
                        <input type="text" class="form-control" name="emirate_id_number"
                            value="{{old('passport_number')}}" placeholder="Enter Emirates ID Number">
                        @error('emirate_id_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Work Permit Number</label>
                        <input type="text" class="form-control" name="work_permit_number"
                                value="{{ old('work_permit_number')}}" placeholder="Enter Work Permit Number">
                            @error('work_permit_number')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Residence File Number</label>
                        <input type="text" class="form-control" name="residence_no"
                            value="{{ old('residence_no')}}" placeholder="Enter Residence File Number">
                            @error('residence_no')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Health Insurance Card Number</label>
                        <input type="text" class="form-control" name="insurance_no"
                            value="{{ old('insurance_no')}}" placeholder="Enter Health Insurance Card Number" >
                            @error('insurance_no')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Salary Details</label>
                        <select name="salary_detail" id="salDetails" class="form-control">
                            <option value=""></option>
                            <option value="Basic Salary">Basic Salary</option>
                            <option value="Other Allowance" >Other Allowance</option>
                            <option value="Total">Total</option>
                        </select>
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
            /*Avatar upload*/
        });
    </script>
@endsection
