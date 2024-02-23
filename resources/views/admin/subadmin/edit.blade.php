@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('get-sub-admins') }}">Back</a>
                    <form id="add_student" action="{{ route('update-sub-admin', $subadmin->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{-- @method('PATCH') --}}
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="card">
                                    <h4 class="text-center my-4">Edit Subadmin</h4>
                                    <div class="row mx-0 px-2 px-md-4">
                                        <div class="col-sm-12 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Name" name="name" id="name"
                                                    value="{{ $subadmin->name }}" class="form-control">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Email<span class="required"> *</span></label>
                                                <input type="email" placeholder="Enter Your Email" name="email"
                                                    id="email" value="{{ $subadmin->email }}" class="form-control" />
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="col-sm-12 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Choose Image</label>
                                                <input type="file" name="image" value="{{ $subadmin->image }}"
                                                    class="form-control">
                                                @error('image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div> --}}

                                        <div class="col-sm-12 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                @php
                                                    try {
                                                        $decrypted = decrypt($subadmin->password);
                                                    } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                                                        $decrypted = ''; 
                                                    }
                                                @endphp
                                                <label>Password</label>
                                                <input type="text" name="password" value="{{ $decrypted }}"
                                                    class="form-control">
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <div class="justify-content-center align-center">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </div>
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
