@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ url()->previous() }}">Back</a>
                    <form id="add_student" action="{{ route('selfemployee.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Edit Employee</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Enter Employee Name" name="name"
                                                    id="name" value="{{ $data['name'] }}" class="form-control">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Choose Image</label>
                                                <input type="file" name="image" value="{{ $data['image'] }}"
                                                    class="form-control">
                                                @error('image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Email<span class="required"> *</span></label>
                                                <input type="email" placeholder="Enter Your Email" name="email"
                                                    id="email" value="{{ $data['email'] }}"
                                                    class="form-control"/>
                                            </div>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Phone Number<span class="required"> *</span></label>
                                                <input type="tel" name="phone" id="phone"
                                                    value="{{ $data['phone'] }}" class="form-control"
                                                    placeholder="Enter Phone Number">
                                                @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Gender<span class="required"> *</span></label>
                                                <select class="form-control " name="gender" id="gender">
                                                    <option value="Male" {{ $data['gender'] == 'Male' ? 'selected' : '' }}>
                                                        Male</option>
                                                    <option value="Female" {{ $data['gender'] == 'Female' ? 'selected' : '' }}>
                                                        Female</option>
                                                </select>
                                                @error('gender')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Date Of Birth<span class="required"> *</span></label>
                                                <input type="date" name="dob" value="{{ $data['dob'] }}"
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
                                                <label>Nationality<span class="required"> *</span></label>
                                                <select name="nationality" id="nationality" class="form-control">
                                                    @foreach ($data['countries'] as $country)
                                                        <option value="{{ $country->name }}"
                                                            {{ $data['nationality'] == $country->name ? 'selected' : '' }}>
                                                            {{ $country->name }}</option>
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
                                                <input type="text" name="religion" value="{{ $data['religion'] }}"
                                                    id="religion" class="form-control" placeholder="Religion">
                                                @error('religion')
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
                                                    value="{{ $data['father_name'] }}" class="form-control"
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
                                                    value="{{ $data['mother_name'] }}" id="mother_name"
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
                                                    value="{{ $data['passport_number'] }}" class="form-control"
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
                                                    value="{{ $data['unified_number'] }}" id="unified_number"
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
                                                    value="{{ $data['emirate_id_number'] }}" class="form-control"
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
                                                    value="{{ $data['work_permit_number'] }}" id="work_permit_number"
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
                                                <label>Person Code</label>
                                                <input type="text" name="person_code" id="person_code"
                                                    value="{{ $data['person_code'] }}" class="form-control"
                                                    placeholder="Enter Person Code">
                                                @error('person_code')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Work Permit Number</label>
                                                <input type="text" name="work_permit_number"
                                                    value="{{ $data['work_permit_number'] }}" id="work_permit_number"
                                                    class="form-control" placeholder="Enter Work Permit Number">
                                                @error('work_permit_number')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="card-footer text-center row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success mr-1 btn-bg"
                                                id="submit">Update</button>
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

