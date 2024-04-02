@extends('auth.layout.master')
<style>
    .new-tags {
        color: black;
        font-weight: 600;
    }

    .bala-img {
        width: 100%;
    }

    @media (min-width:768px) {
        .with-margin {
            margin-left: 30px;
        }
    }

    @media (max-width:767px) {
        .bala-img {
            width: 100px !important;
        }

        .wrap-with-margin {
            margin-top: 10px;
            gap: 10px;
            flex-wrap: wrap;
        }
    }
</style>
@section('content')
    <div class="container-fluid mt-3 mt-md-5">
        <div class="row">
            <div class="col-xl-8 px-0 col-md-7 mb-md-0 mb-3 d-flex justify-content-between">
                <div
                    class="col-xl-4 col-lg-5 col-md-6 d-flex justify-content-between align-items-md-start align-items-center ">
                    <a href="./" class="logo-img-1"><img src="{{ asset('public/user/images/logo.png') }}" alt="logo"
                            class="bala-img"></a>
                    <div class="d-md-none">
                        <div class="d-flex tags-parent">
                            <div><a href="{{url('login')}}" class="new-tags">Home</a></div>
                            <div> <a href="/" class="new-tags" style="margin-left: 40px">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block">
                    <div class="d-flex tags-parent mt-4">
                        <div><a href="{{url('login')}}" class="new-tags">Home</a></div>
                        <div> <a href="/" class="new-tags" style="margin-left: 40px">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-5 auth-form bg-white">
                <div class="auth-form-block-header rounded-0">
                    <div class="rounded-0 position-relative auth-form-block-header-inner">
                        <a class="navbar-brand" href="./" style="position: absolute;right: 0"><img
                                src="{{ asset('public/user/images/logo.png') }}" alt="logo" class="logo-img"></a>

                        <button onclick="history.back()" class="py-0 px-2 btn btn-success mb-2 back-btn backNavigate"><span
                                class="fa fa-angle-left mr-2"></span>Back</button>
                                <script>
                                    function backNavigate() {
                                        // alert('yes');
                                        window.ReactNativeWebView.postMessage(JSON.stringify({
                                            backNavigate: true
                                        }));
                                    }
                                    // Ensure the DOM is fully loaded before attaching the click event handler
                                    document.addEventListener('DOMContentLoaded', function() {
                                        // Select the .logout element using vanilla JavaScript
                                        var backNavigateButton = document.querySelector('.backNavigate');

                                        // Check if the logoutButton exists
                                        if (backNavigateButton) {
                                            // Attach a click event handler
                                            backNavigateButton.addEventListener('click', function() {
                                                // alert('ytui'); // Alert to test if the click event is triggered
                                                backNavigate(); // Call the logout function
                                            });
                                        }
                                    });
                                </script>
                        <p class="mb-2 text-white">Welcome</p>
                        <p class="mb-0 text-white">Please login to your account</p>
                        <h5 class="text-white mb-0">Green App</h5>
                    </div>
                    <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none"
                            xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG">
                            <polygon points="2560 0 2560 100 0 100"
                                class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white">
                            </polygon>
                        </svg></div>
                </div>
                <form id="authForm" style="padding-bottom:0" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h3 class="text-center mb-4">Login</h3>
                    <div class="form-group">
                        <label for="userEmail">Email/Phone<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                            <input id="userEmail" name="email" type="text"
                                value="{{ old('email') }}"class="form-control pl-pr-padding"
                                placeholder="Enter Your Email or Mobile Number">
                        </div>
                        @error('email')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="userPassword">Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="userPassword" name="password" type="password" class="form-control pl-pr-padding"
                                placeholder="Password">
                            <span toggle="#userPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                                aria-hidden="true"></span>
                        </div>
                        @error('password')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                        <div class="mt-2 text-right">
                            <a href="{{ url('forget-password') }}" class="text-dark font-weight-600">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="mt-xl-5 mb-xl-2 my-sm-3 mt-3">
                        <button type="submit" class="w-100 btn-bg">Login</button>
                        <p class="text-center text-dark font-weight-600 mt-2 mb-0">Don't have an account? <a
                                href="{{ url('register') }}" class="green-link">Register</a></p>
                        <script>
                            // Wrap your code in a function to ensure it runs after the page has loaded
                            function initializeForm() {
                                // Function to get the user data
                                function getUserData() {
                                    var email = document.getElementById('userEmail').value;
                                    var userData = {
                                        email: email,
                                    };
                                    return userData;
                                }
                                // Event listener for form submission
                                document.getElementById('authForm').addEventListener('submit', function(event) {
                                    event.preventDefault();
                                    var userData = getUserData();
                                    // Check if window.ReactNativeWebView is available before using it
                                    if (window.ReactNativeWebView) {
                                        window.ReactNativeWebView.postMessage(JSON.stringify(userData));
                                    } else {
                                        console.error("window.ReactNativeWebView is not available");
                                    }
                                    this.submit();
                                });
                            }

                            // Use DOMContentLoaded event to ensure the DOM has fully loaded before executing the script
                            document.addEventListener('DOMContentLoaded', initializeForm);
                        </script>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex col-md-10 px-0 justify-content-md-start justify-content-center" style="margin-left: auto">
            <div class="d-flex wrap-with-margin">
                <div><a href="{{route('login-form-page-faq')}}" class="new-tags small">Faq's</a></div>
                <div> <a href="{{route('login-form-page-privacy')}}" class="new-tags small with-margin">Privacy Policy</a></div>
                <div> <a href="{{route('login-form-page-term')}}" class="new-tags small with-margin">Terms & Conditions</a></div>
                <div> <a href="{{route('login-form-page-about')}}" class="new-tags small with-margin">About Us</a></div>
                <div> <a href="{{route('login-form-page-contact')}}" class="new-tags small with-margin">Contact Us</a></div>
            </div>

        </div>
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
