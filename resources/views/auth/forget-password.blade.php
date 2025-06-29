@extends('auth.layout.master')

@section('content')

    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 mx-auto auth-form light-box-shadow">

        <div class="auth-form-block-header">

            <div class="position-relative auth-form-block-header-inner">

                <a class="navbar-brand" href="./" style="position: absolute;right: 0"><img

                        src="{{ asset('public/user/images/logo.png') }}" alt="logo" class="logo-img"></a>

                        <button onclick="history.back()" class="py-0 px-2 btn btn-success mb-2 back-btn"><span class="fa fa-angle-left mr-2"></span>Back</button>

                <p class="mt-3 mb-0 text-white">Forget Password</p>

                <h5 class="text-white mb-0">Green App</h5>

            </div>

            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none"

                    xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG">

                    <polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white">

                    </polygon>

                </svg></div>

        </div>

        <form id="authForm" action="{{ route('forget-password') }}" method="POST">

            @csrf

            <h3 class="text-center mb-4">Forget Password</h3>

            <p class="d-block mb-3">Please enter your Email or Phone Number to retrieve your password, thank you</p>

            <div class="form-group">

                <label for="userEmail">Email/Phone<span class="required"> *</span></label>

                <div class="position-relative d-flex align-items-center">

                    <span class="position-absolute fa fa-envelope input-field-left-icon"></span>

                    <input id="userEmail" name="email" type="text" class="form-control pl-pr-padding"

                        placeholder="Enter Your Email or Mobile Number">

                </div>

                @error('email')

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

    <script>

        @if (\Illuminate\Support\Facades\Session::has('success'))

            toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');

        @endif



        @if (\Illuminate\Support\Facades\Session::has('error'))

            toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');

        @endif

    </script>

@endsection

