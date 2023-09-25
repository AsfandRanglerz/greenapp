@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('company.index') }}">Back</a>
                    <form id="add_student" action="{{ route('company.update', $company->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Edit Company</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Company Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Company Name" name="name" id="name"
                                                    value="{{ $company['name'] }}" class="form-control">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Email<span class="required"> *</span></label>
                                                <input type="email" placeholder="Enter Your Email" name="email" id="email"
                                                    value="{{ $company['email'] }}" class="form-control" />
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
                                                    value="{{ $company['phone'] }}" class="form-control"
                                                    placeholder="Enter Phone Number">
                                                @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>MOHRE Company Code</label>
                                                <input type="text" name="mohre_no" id="mohre_no"
                                                    value="{{ $company['mohre_no'] }}" class="form-control" name="mohre_no"
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
                                                <label>Po Box</label>
                                                <input type="text" class="form-control" name="po_box"
                                                    value="{{ $company['po_box'] }}" placeholder="Po Box" >
                                                @error('po_box')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Daman Police Number</label>
                                                <input type="text" class="form-control" name="daman_police_number"
                                                    value="{{ $company['daman_police_number'] }}"
                                                    placeholder="Daman Police Number" >
                                                @error('daman_police_number')
                                                    <div class="text-danger p-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                <div class="row mx-0 px-4">
                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Daman Customer Number</label>
                                            <input type="text" class="form-control" name="daman_customer_number"
                                                value="{{ $company['daman_customer_number'] }}"
                                                placeholder="Daman Customer Number" >
                                            @error('daman_customer_number')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>Other Insurance Policy Number</label>
                                            <input type="text" class="form-control" name="other_insurance_policy_number"
                                                value="{{ $company['other_insurance_policy_number'] }}"
                                                placeholder="Other Insurance Policy Number" >
                                            @error('other_insurance_policy_number')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0 px-4">
                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>E Channel Issue Date</label>
                                            <div class="input-group">
                                                <input type="date" name="e_channel_issue_date"
                                                    value="{{ $company['e_channel_issue_date'] }}" placeholder="dd.mm.yyyy"
                                                    class="form-control" >
                                            </div>
                                            @error('e_channel_issue_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>E Channel Expiry Date</label>
                                            <div class="input-group">
                                                <input type="date" name="e_channel_expiry_date"
                                                    value="{{ $company['e_channel_expiry_date'] }}" placeholder="dd.mm.yyyy"
                                                    class="form-control" >
                                            </div>
                                            @error('e_channel_expiry_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 px-4">
                                    <div class="col-sm-4 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Trade License No</label>
                                            <input type="text" class="form-control" name="license_no"
                                                value="{{ $company['license_no'] }}" placeholder="Enter Trade License No"
                                                >
                                            @error('license_no')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>Issue Date</label>
                                            <div class="input-group">
                                                <input type="date" name="license_issue_date"
                                                    value="{{ $company['license_issue_date'] }}" placeholder="dd.mm.yyyy"
                                                    class="form-control" >
                                            </div>
                                            @error('license_issue_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>Expiry Date</label>
                                            <div class="input-group">
                                                <input type="date" name="license_expiry_date"
                                                    value="{{ $company['license_expiry_date'] }}" placeholder="dd.mm.yyyy"
                                                    class="form-control" >
                                            </div>
                                            @error('license_expiry_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0 px-4">
                                    <div class="col-sm-4 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>ICP Establishment Card No</label>
                                            <input type="text" class="form-control" name="establishment_no"
                                                value="{{ $company['establishment_no'] }}"
                                                placeholder="Enter Establishment Card No" >
                                            @error('establishment_no')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>Issue Date</label>
                                            <div class="input-group">
                                                <input type="date" name="establishment_issue_date"
                                                    value="{{ $company['establishment_issue_date'] }}"
                                                    placeholder="dd.mm.yyyy" class="form-control">
                                            </div>
                                            @error('establishment_issue_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>Expiry Date</label>
                                            <div class="input-group">
                                                <input type="date" name="establishment_expiry_date"
                                                    value="{{ $company['establishment_expiry_date'] }}"
                                                    placeholder="dd.mm.yyyy" class="form-control">
                                            </div>
                                            @error('establishment_expiry_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0 px-4">
                                    <div class="col-sm-4 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Tenancy</label>
                                            <input type="text" class="form-control" name="tenancy"
                                                value="{{ $company['tenancy'] }}" placeholder="Tenancy" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>Issue Date</label>
                                            <div class="input-group">
                                                <input type="date" name="tenancy_issue_date"
                                                    value="{{ $company['tenancy_issue_date'] }}" placeholder="dd.mm.yyyy"
                                                    class="form-control" >
                                            </div>
                                            @error('tenancy_issue_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-sm-0 pr-sm-2">
                                        <div class="form-group mb-2">
                                            <label>Expiry Date</label>
                                            <div class="input-group">
                                                <input type="date" name="tenancy_expiry_date"
                                                    value="{{ $company['tenancy_expiry_date'] }}" placeholder="dd.mm.yyyy"
                                                    class="form-control" >
                                            </div>
                                            @error('tenancy_expiry_date')
                                                <div class="text-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                    <div class="row mx-0 px-4">

                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Choose Image</label>
                                                <input type="file" name="image" value="{{ $company['image'] }}"
                                                    class="form-control">
                                                @error('image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 px-4">


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

@section('js')
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif
@endsection
