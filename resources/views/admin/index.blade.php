@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row mb-3">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <a href="{{ route('company.index') }}">
                        <div class="card-statistic-4" style="text-decoration: none">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Companies</h5>
                                            <h2 class="mb-3 font-18">{{$company->count()}}</h2>
                                            <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('public/admin/assets/img/company.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Company Documents</h5>
                                            <h2 class="mb-3 font-18">{{$companydocument->count()}}</h2>
                                            <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('public/admin/assets/img/companydocument.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <a href="{{ route('user.index') }}">
                        <div class="card-statistic-4" style="text-decoration: none">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Employees</h5>
                                            <h2 class="mb-3 font-18">{{$user->count()}}</h2>
                                            <!-- <p class="mb-0"><span class="col-green">18%</span>
                                                Increase</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('public/admin/assets/img/employee.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Employee Documents</h5>
                                            <h2 class="mb-3 font-18">{{$userdocument->count()}}</h2>
                                            <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('public/admin/assets/img/employeedocument.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <a href="{{ route('user.index') }}">
                        <div class="card-statistic-4" style="text-decoration: none">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Individuals</h5>
                                            <h2 class="mb-3 font-18">{{$individual->count()}}</h2>
                                            <!-- <p class="mb-0"><span class="col-green">18%</span>
                                                Increase</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('public/admin/assets/img/employee.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Individual Documents</h5>
                                            <h2 class="mb-3 font-18">{{$individualDocument->count()}}</h2>
                                            <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('public/admin/assets/img/employeedocument.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

