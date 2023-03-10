@extends('auth.layout.master')
@section('content')
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 mx-auto auth-form light-box-shadow">
        <div class="auth-form-block-header">
            <div class="position-relative auth-form-block-header-inner">
                <a class="navbar-brand" href="./" style="position: absolute;right: 0"><img src="{{ asset('public/user/images/logo.png') }}"
                        alt="logo" class="logo-img"></a>
                <button onclick="history.back()" class="py-0 px-2 btn btn-success mb-2 back-btn"><span class="fa fa-angle-left mr-2"></span>Back</button>
                <p class="mt-3 mb-0 text-white">OTP</p>
                <h5 class="text-white mb-0">Green App</h5>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG">
                    <polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white">
                    </polygon>
                </svg></div>
        </div>
        <form id="authForm" action="{{ route('confirmToken') }}" method="POST">
            @csrf
            <h3 class="text-center mb-4">OTP</h3>
            <p class="d-block mb-4">Please enter 6 digit-verification code, we sent VIA Email or Phone Number, thank
                you</p>
            <div class="form-group">
                <div class="row mx-0 mb-2 error-message-box">
                    <div class="col-2 px-1">
                        <input type="text" autocomplete="off" maxLength="1" name="digit_1" size="1" min="0"
                            max="9" pattern="[0-9]{1}" class="form-control verify-field" required />
                    </div>
                    <div class="col-2 px-1">
                        <input type="text" autocomplete="off" maxLength="1" name="digit_2" size="1" min="0"
                            max="9" pattern="[0-9]{1}" class="form-control verify-field" required />
                    </div>
                    <div class="col-2 px-1">
                        <input type="text" autocomplete="off" maxLength="1" name="digit_3" size="1" min="0"
                            max="9" pattern="[0-9]{1}" class="form-control verify-field" required />
                    </div>
                    <div class="col-2 px-1">
                        <input type="text" autocomplete="off" maxLength="1" name="digit_4" size="1" min="0"
                            max="9" pattern="[0-9]{1}" class="form-control verify-field" required />
                    </div>
                    <div class="col-2 px-1">
                        <input type="text" autocomplete="off" maxLength="1" name="digit_5" size="1" min="0"
                            max="9" pattern="[0-9]{1}" class="form-control verify-field" required />
                    </div>
                    <div class="col-2 px-1">
                        <input type="text" autocomplete="off" maxLength="1" name="digit_6" size="1" min="0"
                            max="9" pattern="[0-9]{1}" class="form-control verify-field" required />
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="w-100 btn-bg">Submit</button>
            </div>
        </form>
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

    <script type="text/javascript">
        $(function() {
            /*OTP*/
            const $inp = $(".verify-field");
            $inp.on({
                paste(ev) { // Handle Pasting
                    const clip = ev.originalEvent.clipboardData.getData('text').trim();
                    // Allow numbers only
                    if (!/\d{6}/.test(clip)) return ev.preventDefault(); // Invalid. Exit here
                    // Split string to Array or characters
                    const s = [...clip];
                    // Populate inputs. Focus last input.
                    $inp.val(i => s[i]).eq(5).focus();
                },
                input(ev) { // Handle typing
                    const i = $inp.index(this);
                    if (this.value) $inp.eq(i + 1).focus();
                },
                keydown(ev) { // Handle Deleting
                    const i = $inp.index(this);
                    if (!this.value && ev.key === "Backspace" && i) $inp.eq(i - 1).focus();
                }
            });
            /*OTP*/
        });
    </script>
@endsection
