@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('company.index') }}">Back</a>
                    <form id="add_student" action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Add Company</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Company Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Company Name" name="name" id="name"
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
                                                <label>Trade License No</label>
                                                <input type="text" name="license_no" id="license_no" class="form-control"
                                                    value="{{ old('license_no') }}" placeholder="Enter Trade License No">
                                                @error('license_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Establishment Card No</label>
                                                <input type="text" name="establishment_no" id="establishment_no"
                                                    class="form-control" value="{{ old('establishment_no') }}"
                                                    placeholder="Enter Establishment Card No">
                                                @error('establishment_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>MOHRE Company Code</label>
                                                <input type="text" name="mohre_no" id="mohre_no"
                                                    value="{{ old('mohre_no') }}" class="form-control" name="mohre_no"
                                                    placeholder="Enter MOHRE Company Code">
                                                @error('mohre_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
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
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif
@endsection
