@extends('auth.layout.master')
@section('content')
    <div class="col-xl-5 col-lg-6 col-sm-8 col-11 px-0 mx-auto auth-form light-box-shadow">
        <div class="auth-form-block-header">
            <div class="position-relative auth-form-block-header-inner">
                <a class="navbar-brand" href="./" style="position: absolute;right: 0"><img
                        src="{{ asset('public/user/images/logo.png') }}" alt="logo" class="logo-img"></a>
                <button onclick="history.back()" class="py-0 px-2 btn btn-success mb-2 back-btn"><span
                        class="fa fa-angle-left mr-2"></span>Back</button>
                <p class="mb-2 text-white">Welcome</p>
                <p class="mb-0 text-white">Please register your account</p>
                <h5 class="text-white mb-0">Green App</h5>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG">
                    <polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white">
                    </polygon>
                </svg></div>
        </div>
        <form id="authForm" action="{{ route('register') }}" method="POST">
            @csrf
            <h3 class="text-center mb-sm-4 mb-2">Register</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="companyName">Role<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <select class="form-control" name="role" id="selRole">
                            <option value=""></option>
                            <option value="company">Company</option>
                            <option value="individual">Individual</option>
                        </select>
                    </div>
                    @error('role')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="companyName">Name<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-users-cog input-field-left-icon"></span>
                        <input id="companyName" name="name" type="text" value="{{ old('name') }}"
                            class="form-control pl-padding" placeholder="Enter Your Name">
                    </div>
                    @error('name')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="companyEmail">Email<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                        <input id="companyEmail" type="email" name="email" value="{{ old('email') }}"
                            class="form-control pl-padding" placeholder="Enter Your Email">
                    </div>
                    @error('email')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="companyPhone">Phone<span class=""></span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-phone input-field-left-icon"></span>
                        <input id="companyPhone" type="phone" name="phone" value="{{ old('phone') }}"
                            class="form-control pl-padding" placeholder="Enter Phone Number">
                    </div>
                    @error('phone')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userPassword">Password<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                        <input id="userPassword" name="password" type="password" class="form-control pl-pr-padding"
                            placeholder="Enter Password">
                        <span toggle="#userPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                            aria-hidden="true"></span>
                    </div>
                    @error('password')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="confirmPassword">Confirm Password<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                        <input id="confirmPassword" name="confirm-password" type="password"
                            class="form-control pl-pr-padding" placeholder="Confirm Password">
                        <span toggle="#confirmPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                            aria-hidden="true"></span>
                    </div>
                    @error('confirm-password')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-xl-5 mb-xl-2 my-sm-3 mt-3">
                <button type="submit" class="w-100 btn-bg">Register</button>
                <p class="text-center text-dark font-weight-600 mt-2 mb-0">Already have an account? <a
                        href="{{ url('login') }}" class="green-link">Login</a></p>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        @if (\Illuminate\Support\Facades\Session::has('success'))
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
        @endif

        @if (\Illuminate\Support\Facades\Session::has('error'))
            toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
        @endif

        $(function() {
            $('#selRole').select2({
                placeholder: 'Select Role',
            });

            $(document).on('change', '#selRole', function() {
                if($(this).val()=='company') {
                    $('#companyName').attr('placeholder', 'Enter Company Name');
                } else {
                    $('#companyName').attr('placeholder', 'Enter Your Name');
                }
            });
        });
    </script>
@endsection
