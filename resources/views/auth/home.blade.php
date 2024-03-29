@extends('auth.layout.master')
@section('content')
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 mx-auto auth-form light-box-shadow">
        <div class="auth-form-block-header">
            <div class="position-relative auth-form-block-header-inner">
                <a href="{{ url('/') }}" class='btn btn-primary moveLogin'>Login</a>
                <a href="{{ url('register') }}" class='btn btn-info'>Register</a>
                <script>
                    function logout() {
                        window.ReactNativeWebView.postMessage(JSON.stringify({
                            moveLogin: true
                        }));
                    }
                    // Ensure the DOM is fully loaded before attaching the click event handler
                    document.addEventListener('DOMContentLoaded', function() {
                        // Select the .logout element using vanilla JavaScript
                        var logoutButton = document.querySelector('.moveLogin');

                        // Check if the logoutButton exists
                        if (logoutButton) {
                            // Attach a click event handler
                            logoutButton.addEventListener('click', function() {
                                // alert('ytui'); // Alert to test if the click event is triggered
                                logout(); // Call the logout function
                            });
                        }
                    });
                </script>
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
