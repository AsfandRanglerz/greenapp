@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
<style>
    .permission-container{
        position: absolute;
        top: 110%;
        z-index: 100;
        background: white;
        width: 100%;
        border: 2px solid #ced4da;
        border-radius: 4px;

    }
    .pointer{
        cursor: pointer;
    }

</style>

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('get-sub-admins') }}">Back</a>
                    <form id="add_student" action="{{ route('add-sub-admin') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Add Sub Admin</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Name<span class="required"> *</span></label>
                                                <input type="text" placeholder="Name" name="name"
                                                    id="name" value="{{ old('name') }}" class="form-control">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Email<span class="required"> *</span></label>
                                                <input type="email" placeholder="Enter Your Email" name="email"
                                                    id="email" value="{{ old('email') }}" class="form-control" />
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2">
                                                <label>Password<span class="required"> *</span></label>
                                                <input type="text" placeholder="Enter Password" name="password"
                                                    id="password" value="{{ old('password') }}" class="form-control" />
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                            <div class="form-group mb-2">
                                                <label>Image<span class="required"> *</span></label>
                                                <input type="file" placeholder="Image" name="image"
                                                    id="image" value="{{ old('image') }}" class="form-control">
                                                @error('image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-sm-6 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-2 position-relative">
                                                <label class="d-flex justify-content-between align-items-center"><span>Permissions<span class="required" >*</span></span>
                                                </label>
                                                <div class="form-control">
                                                    <span class="d-flex pointer permssion-show justify-content-between align-items-center"><span class="">Select Permission</span>
                                                    <span class="fa fa-solid fa-angle-down"></span>
                                                </span>
                                                </div>
                                                <div class="permission-container d-none py-2 px-3">
                                                    @foreach ($permissions as $permission)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{$permission->id}}" id="">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          {{$permission->name}}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="card-footer text-center row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success mr-1 btn-bg"
                                                id="submit">Add</button>
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
<script>
     $(document).ready(function() {
                // Stop the event from propagating further up the DOM
               $('.permssion-show').click(function(){
                event.stopPropagation();
                $('.permission-container').toggleClass('d-none');
            });
            $('body').click(function(){
                event.stopPropagation();
                $('.permission-container').addClass('d-none');
            });
            $('.permission-container').click(function(){
                event.stopPropagation();
            })
        });

</script>
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif
@endsection
