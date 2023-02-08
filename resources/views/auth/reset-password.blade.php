@extends('auth.layout.master')
@section('content')
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 mx-auto auth-form light-box-shadow">
        <div class="auth-form-block-header">
            <div class="position-relative auth-form-block-header-inner">
                <a class="navbar-brand" href="#" style="position: absolute;right: 0"><img src="{{ asset('public/user/images/logo.png') }}"
                        alt="logo" class="logo-img"></a>
                <p class="mt-3 mb-0 text-white">Reset Password</p>
                <h5 class="text-white mb-0">Green App</h5>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG">
                    <polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white">
                    </polygon>
                </svg></div>
        </div>
        <form id="authForm" action="{{ route('resets-password') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{$email}}">
            <input type="hidden" name="guard" value="{{$guard}}">

            <h3 class="text-center mb-4">Reset Password</h3>
            <p class="d-block mb-3">Please rest your password, thank you</p>
            <div class="form-group">
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
            <div class="form-group">
                <label for="confirmPassword">Confirm Password<span class="required"> *</span></label>
                <div class="position-relative d-flex align-items-center">
                    <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                    <input id="confirmPassword" name="confirmPassword" type="password" class="form-control pl-pr-padding"
                        placeholder="Confirm Password">
                    <span toggle="#confirmPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                        aria-hidden="true"></span>
                </div>
                @error('confirmPassword')
                    <div class="text-danger p-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-xl-5 mb-xl-2 my-sm-3 mt-3">
                <button type="submit" class="w-100 btn-bg">Send</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
@if (\Illuminate\Support\Facades\Session::has('message'))
<script>
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
</script>
@endif
    <script src="{{ asset('public/user/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/user/js/custom.js') }}"></script>
@endsection
