@extends('company.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-user"></span> - Edit Employee Details</p>
            <form action="{{ route('company.employee.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12 text-right">
                        <button class="btn btn-success" id="editProfButton"><span class="fa fa-edit mr-2"></span>Edit Profile</button>
                    </div>
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="{{ asset($data['image']) }}" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" type="file" name="image" accept="image/*" disabled />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userName">Full Name<span class="required"> *</span></label>
                        <input id="userName" type="text" name="name" value="{{ $data['name'] }}" class="form-control"
                            placeholder="Enter Employee Name" disabled>
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userEmail">Email<span class="required"> *</span></label>
                        <input id="userEmail" type="email" name="email" value="{{ $data['email'] }}"
                            class="form-control" placeholder="Enter Your Email" disabled>
                        @error('email')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userPhone">Phone Number<span class=""></span></label>
                        <input id="userPhone" type="number" name="phone" value="{{ $data['phone'] }}"
                            class="form-control" placeholder="Enter Phone Number" disabled>
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Position</label>
                        <div class="input-group">
                            <input type="text" name="position" value="{{ $data['position'] }}" placeholder="Position"
                                class="form-control" disabled>
                        </div>
                        @error('position')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Person Code</label>
                        <div class="input-group">
                            <input type="text" name="person_code" value="{{ $data['person_code'] }}" placeholder="Person Code"
                                class="form-control" disabled>
                        </div>
                        @error('person_code')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date Of Birth<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="date" name="dob"value="{{ $data['dob'] }}" placeholder="dd.mm.yyyy"
                                class="form-control date-of-birth" disabled>
                        </div>
                        @error('dob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Place Of Birth</label>
                        <div class="input-group">
                            <input type="text" name="pob" value="{{ $data['pob'] }}" placeholder="Place Of Birth"
                                class="form-control" disabled>
                        </div>
                        @error('pob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Joining Date</label>
                        <div class="input-group">
                            <input type="date" name="join_date" value="{{ $data['join_date'] }}" placeholder="dd.mm.yyyy"
                                class="form-control" disabled>
                        </div>
                        @error('join_date')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nationality<span class="required"> *</span></label>

                        <select name="nationality" id="nationality" class="form-control" disabled>
                            <option value=""></option>

                            @foreach($data['countries'] as $country)

                            <option value="{{ $country->name }}" {{ $data['nationality'] == $country->name ? 'selected' : ''}}>{{ $country->name }}</option>
                         @endforeach

                        </select>
                        @error('nationality')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Religion<span class="required"> *</span></label>
                        <select name="religion" class="form-control" id="selReligion" disabled>
                            {{-- <option value=""></option> --}}
                            <option value="Islam"
                            {{ isset($data->religion) && $data->religion == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Judaism"
                            {{ isset($data->religion) && $data->religion == 'Judaism' ? 'selected' : '' }}>Judaism</option>
                            <option value="Christianity"
                            {{ isset($data->religion) && $data->religion == 'Christianity' ? 'selected' : '' }}>Christianity</option>
                            <option value="Hinduism"
                            {{ isset($data->religion) && $data->religion == 'Hinduism' ? 'selected' : '' }}>Hinduism</option>
                            <option value="Atheist"
                            {{ isset($data->religion) && $data->religion == 'Atheist' ? 'selected' : '' }}>Atheist</option>
                            <option value="Baha'i"
                            {{ isset($data->religion) && $data->religion == "Baha'i" ? 'selected' : '' }}>Baha'i</option>
                            <option value="Buddhism"
                            {{ isset($data->religion) && $data->religion == 'Buddhism' ? 'selected' : '' }}>Buddhism</option>
                            <option value="Sikhism"
                            {{ isset($data->religion) && $data->religion == 'Sikhism' ? 'selected' : '' }}>Sikhism</option>
                            <option value="Spiritism"
                            {{ isset($data->religion) && $data->religion == 'Spiritism' ? 'selected' : '' }}>Spiritism</option>
                            <option value="Tenrikyo"
                            {{ isset($data->religion) && $data->religion == 'Tenrikyo' ? 'selected' : '' }}>Tenrikyo</option>
                        </select>
                        @error('religion')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Marital Status</label>
                        <select name="marital_status" class="form-control" id="martialStatus" disabled>
                            <option value=""></option>
                            <option value="Single"{{ $data->marital_status =="Single" ? "selected" : '' }}>Single</option>
                            <option value="Married"{{   $data->marital_status =="Married" ? "selected" : '' }}>Married</option>
                            <option value="Divorced"{{ $data->marital_status =="Divorced" ? "selected" : '' }}>Divorced</option>
                            <option value="Widowed"{{   $data->marital_status =="Widowed" ? "selected" : '' }}>Widowed</option>
                        </select>
                        @error('marital_status')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Gender<span class="required"> *</span></label>
                        <select name="gender" id="selGender" class="form-control" disabled>
                            <option value=""></option>
                            <option value="Male"   {{  $data->gender =="Male" ? "selected" : '' }}>Male</option>
                            <option value="Female" {{  $data->gender =="Female" ? "selected" : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Father's Name<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="father_name"
                            value="{{ $data->father_name }}" placeholder="Enter Father Name" disabled>
                        @error('father_name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mother's Name</label>
                        <input type="text" class="form-control" name="mother_name"
                            value="{{ $data->mother_name }}" placeholder="Enter Mother Name" disabled>
                        @error('mother_name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Passport Number</label>
                        <input type="text" class="form-control" name="passport_number"
                            value="{{ $data->passport_number }}" placeholder="Enter Passport Number" disabled>
                        @error('passport_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Unified Number</label>
                        <input type="text" class="form-control" name="unified_number"
                            value="{{ $data->unified_number }}" placeholder="Enter Unified Number" disabled>
                        @error('unified_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Emirates ID Number</label>
                        <input type="text" class="form-control" name="emirate_id_number"
                            value="{{ $data->emirate_id_number }}" placeholder="Enter Emirates ID Number" disabled>
                        @error('emirate_id_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Work Permit Number</label>
                        <input type="text" class="form-control" name="work_permit_number"
                            value="{{ $data->work_permit_number }}" placeholder="Enter Work Permit Number" disabled>
                        @error('work_permit_number')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Residence File Number</label>
                        <input type="text" class="form-control" name="residence_no"
                        value="{{ $data->residence_no }}" placeholder="Enter Residence File Number" disabled>
                        @error('residence_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Health Insurance Card Number</label>
                        <input type="text" class="form-control" name="insurance_no"
                        value="{{ $data->insurance_no }}" placeholder="Enter Health Insurance Card Number" disabled>
                        @error('insurance_no')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Basic Salary</label>
                        <input type="text" class="form-control" name="basic_salary" id="basicSalary" onchange="salaryFind()"
                        value="{{ old('basic_salary') ??  $data->basic_salary }}" placeholder="Basic Salary" disabled>
                        @error('basic_salary')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Other Allowance</label>
                        <input type="text" class="form-control" name="other_allowance" id="otherAllownce" onchange="salaryFind()"
                        value="{{ old('other_allowance') ?? $data->other_allowance }}" placeholder="Other Allowance" disabled>
                            @error('other_allowance')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Total Salary</label>
                        <input type="text" class="form-control"  name="total" id="total"
                        value="{{ old('total') ?? $data->total }}" placeholder="" disabled>
                        @error('total')
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
                $('#total').prop('disabled', true);
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
            /*Avatar upload*/

        });
        function salaryFind()
            {
                var basicSalary = parseFloat(document.getElementById('basicSalary').value);
                var allowance = parseFloat(document.getElementById('otherAllownce').value);
                var total = basicSalary + allowance;
                document.getElementById('total').value = total;
            }
    </script>
@endsection
