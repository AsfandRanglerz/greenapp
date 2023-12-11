@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('user.index') }}">Back</a>
                    <form id="add_student" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Add Employee</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Enter Employee Name" name="name"
                                                    id="name" value="{{ old('name') }}" class="form-control">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Email<span class="required"> *</span></label>
                                                <input type="email" placeholder="Enter Your Email" name="email"
                                                    id="email" value="{{ old('email') }}" class="form-control" />
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Phone Number<span class="required"> *</span></label>
                                                <input type="tel" name="phone" id="phone"
                                                    value="{{ old('phone') }}" class="form-control"
                                                    placeholder="Enter Phone Number">
                                                @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Date Of Birth<span class="required"> *</span></label>
                                                <input type="date" name="dob" value="{{ old('dob') }}"
                                                    id="dob" class="form-control" placeholder="DOB">
                                                @error('dob')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Position</label>
                                                <div class="input-group">
                                                    <input type="text" name="position" value="{{ old('position') }}"
                                                        placeholder="Position" class="form-control">
                                                </div>
                                                @error('position')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Person Code</label>
                                                <input type="text" name="person_code" id="person_code"
                                                    value="{{ old('person_code') }}" class="form-control"
                                                    placeholder="Enter Person Code">
                                                @error('person_code')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Place Of Birth</label>
                                                <div class="input-group">
                                                    <input type="text" name="pob" value="{{ old('pob') }}"
                                                        placeholder="Place Of Birth" class="form-control">
                                                </div>
                                                @error('pob')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Joining Date</label>
                                                <div class="input-group">
                                                    <input type="date" name="join_date" value="{{ old('join_date') }}"
                                                        placeholder="dd.mm.yyyy" class="form-control">
                                                </div>
                                                @error('join_date')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Nationality<span class="required"> *</span></label>
                                                <select name="nationality" id="nationality" class="form-control">
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->name }}">{{ $country->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('nationality')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
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
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
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
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
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
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-3">
                                                <label>Select Company<span class="required"> *</span></label>
                                                <select name="company_id" id="company_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($data as $company)
                                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('company_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Choose Image</label>
                                                <input type="file" name="image" value="{{ old('image') }}"
                                                    class="form-control">
                                                @error('image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Father Name</label>
                                                <input type="text" name="father_name" id="father_name"
                                                    value="{{ old('father_name') }}" class="form-control"
                                                    placeholder="Enter Father Name">
                                                @error('father_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Mother Name</label>
                                                <input type="text" name="mother_name"
                                                    value="{{ old('mother_name') }}" id="mother_name"
                                                    class="form-control" placeholder="Enter Mother Name">
                                                @error('mother_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Passport Number</label>
                                                <input type="text" name="passport_number" id="passport_number"
                                                    value="{{ old('passport_number') }}" class="form-control"
                                                    placeholder="Enter Passport Number">
                                                @error('passport_number')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Unified Number</label>
                                                <input type="text" name="unified_number"
                                                    value="{{ old('unified_number') }}" id="unified_number"
                                                    class="form-control" placeholder="Enter Unified Number">
                                                @error('unified_number')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Emirate ID Number</label>
                                                <input type="text" name="emirate_id_number" id="emirate_id_number"
                                                    value="{{ old('emirate_id_number') }}" class="form-control"
                                                    placeholder="Enter Emirate ID Number">
                                                @error('emirate_id_number')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Work Permit Number</label>
                                                <input type="text" name="work_permit_number"
                                                    value="{{ old('work_permit_number') }}" id="work_permit_number"
                                                    class="form-control" placeholder="Enter Work Permit Number">
                                                @error('work_permit_number')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Residence File Number</label>
                                                <input type="text" class="form-control" name="residence_no"
                                                    value="{{ old('residence_no') }}"
                                                    placeholder="Enter Residence File Number">
                                                @error('residence_no')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Health Insurance Card Number</label>
                                                <input type="text" class="form-control" name="insurance_no"
                                                    value="{{ old('insurance_no') }}"
                                                    placeholder="Enter Health Insurance Card Number">
                                                @error('insurance_no')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Salary Details</label>
                                                <select name="salary_detail" id="salDetails" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Basic Salary">Basic Salary</option>
                                                    <option value="Other Allowance">Other Allowance</option>
                                                    <option value="Total">Total</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Salary</label>
                                            <input type="text" class="form-control" name="salary"
                                                value="{{ old('salary') }}"
                                                placeholder="Enter salary">
                                            @error('salary')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer text-center row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success mr-1 btn-bg"
                                                id="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
@endsection

@section('js')


    <script>
        @if (\Illuminate\Support\Facades\Session::has('success'))
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
        @endif

        @if (\Illuminate\Support\Facades\Session::has('error'))
            toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
        @endif

        $(function() {
            $('#company_id').select2({
                placeholder: 'Select Company'
            });
            $('#nationality').select2({
                placeholder: 'Select Country'
            });
            $('#selReligion').select2({
                placeholder: 'Select Religion'
            });
            $('#selGender').select2({
                placeholder: 'Select Gender'
            });
            $('#martialStatus').select2({
                placeholder: 'Select Martial Status'
            });
            $('#salDetails').select2({
                placeholder: 'Salary Detail'
            });
        });
    </script>
@endsection
