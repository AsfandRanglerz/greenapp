@extends('admin.auth.layout.app')
@section('title','Forget Password')
@section('content')
    <section class="section">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class=" text-center mt-3">
                            <img src="{{ asset('public/admin/assets/img/logo2.png') }}" height="80px" width="">
                        </div>
                        <div class="card-body">
                            <p class="small text-muted text-center">We will send a link to reset your password</p>
                            <form method="POST" action="{{url('admin-reset-password-link')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" placeholder="example@gmail.com" class="form-control" name="email" tabindex="1">
                                    @error('email') <span class="text-danger">{{$errors->first('email')}}</span>@enderror
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-info btn-lg btn-block" tabindex="4">
                                        Forgot Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
