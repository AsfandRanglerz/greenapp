@extends('auth.layout.master')
@section('content')
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
           @foreach ($faqs as $faq)
              <p>{{$faq->question}}</p>
              <p>{{$faq->answer}}</p>
           @endforeach
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
