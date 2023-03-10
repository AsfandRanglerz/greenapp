@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{route('user.index')}}">Back</a>
                    <form id="add_student" action="{{route('user.store')}}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Add Employee</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Enter Employee Name" name="name" id="name"
                                                    value="{{ old('name') }}" class="form-control">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Email<span class="required"> *</span></label>
                                                <input type="email" placeholder="Enter Your Email" name="email" id="email"
                                                    value="{{ old('email') }}" class="form-control" />
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
                                                <label>Nationality<span class="required"> *</span></label>

                                                    <select name="nationality" id="nationality" class="form-control">
                                                        <option value=""></option>
                                                        @foreach($countries as $country)
                                                        <option value="{{$country->name}}">{{$country->name}}</option>
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
                                                <input type="text" name="religion" value="{{ old('religion') }}"
                                                    id="religion" class="form-control" placeholder="Religion">
                                                @error('religion')
                                                    <div class="text-danger">{{ $message }}</div>
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
                                                    @foreach($data as $company)
                                                    <option value="{{$company->id}}">{{$company->name}}</option>
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
                                            <input type="file" name="image"
                                                value="{{ old('image') }}" class="form-control">
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
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
    });
</script>
@endsection
