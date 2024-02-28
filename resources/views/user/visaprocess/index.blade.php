@extends('user.layout.master')
@section('content')
<style>
    .nav-link {
        color: black;
        white-space: nowrap;
    }

    .upload-img {
        height: 60px;
        width: 60px;
    }

    .nav-bar .nav-link.active,
    .work-permit-nav .nav-link.active {
        background-color: #1d2c42;
        color: white !important;
    }

    .upload-file {
        width: calc(100% - 70px);
        margin-right: 10px;
    }

    .nav-bar .nav-link:hover,
    .work-permit-nav .nav-link:hover {
        background-color: rgba(29, 44, 66, 0.8);
        color: white;
    }

    .nav-bar .nav-link.active:hover,
    .work-permit-nav .nav-link.active:hover {
        background-color: #1d2c42;
    }

    .side-bar .nav-link.active {
        background-color: #54b91d;
    }

    .side-bar .nav-link:hover {
        color: white;
        background-color: rgba(84, 185, 29, 0.8)
    }

    .side-bar .nav-link.active:hover {
        background-color: #54b91d;
    }

    /* All tabs that are in vertical form */
    .horizontal_tabs {
        overflow-X: auto!important;
        flex-wrap: nowrap;
    }

    /* borderd Tabs */
    .bordered_tab {
        border: 1px solid #0f172b;
        border-radius: 0px !important;
    }

    .Work-permit-tabs-last {
        border: 1px solid #0f172b;
        border-radius: 0px !important;
    }

    .Work-permit-tabs {
        border: 1px solid #0f172b;
        border-radius: 0px !important;
        border-right: none;
    }


    @media (max-width: 991.2px) {
        .bordered_tab:not(:last-child) {
            border-right: none;
        }
    }

    @media (min-width: 992px) {
        .bordered_tab:not(:last-child) {
            border-bottom: none;
        }
    }
</style>
<div class="mb-5 admin-main-content-inner">
    <h4>Individual Dashboard</h4>

    <p><span class="fa fa-users"></span> - Individual  Visa Process</p>
    <div class="text-right">
        {{-- <a href="{{ route('company.employee.create') }}" class="mb-3 btn btn-success"><span
                class="fa fa-plus mr-2"></span>Add
            Employee</a> --}}
    </div>
    <ul class="nav nav-tabs nav-bar" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">
                Golden Visa
            </a>
    </ul>
    <div class="tab-content" id="myTabContent">
        <!-- New Visa -->
        <div class="tab-pane fade show active parent-tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-start-tab" data-toggle="pill"
                            href="#v-pills-start" role="tab" aria-controls="v-pills-start" aria-selected="true">Start
                            Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-entry-tab" data-toggle="pill" href="#v-pills-entry"
                            role="tab" aria-controls="v-pills-entry" aria-selected="false">Entry Visa</a>
                        <a class="nav-link bordered_tab" id="v-pills-change-visa-tab" data-toggle="pill"
                            href="#v-pills-change-visa" role="tab" aria-controls="v-pills-change-visa"
                            aria-selected="false">Change of Visa</a>
                        <a class="nav-link bordered_tab" id="v-pills-health-insurance-tab" data-toggle="pill"
                            href="#v-pills-health-insurance" role="tab" aria-controls="v-pills-health-insurance"
                            aria-selected="false">Health Insurance</a>
                        <a class="nav-link bordered_tab" id="v-pills-medical-fitness-tab" data-toggle="pill"
                            href="#v-pills-medical-fitness" role="tab" aria-controls="v-pills-medical-fitness"
                            aria-selected="false">Medical Fitness</a>
                        <a class="nav-link bordered_tab" id="v-pills-residency-id-tab" data-toggle="pill"
                            href="#v-pills-residency-id" role="tab" aria-controls="v-pills-residency-id"
                            aria-selected="false">Emirates ID & <br class='d-none d-lg-block'> Residency
                            Application</a>
                        <a class="nav-link bordered_tab" id="v-pills-biometric-tab" data-toggle="pill"
                            href="#v-pills-biometric" role="tab" aria-controls="v-pills-biometric"
                            aria-selected="false">Biometric</a>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="visa-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-start" role="tabpanel"
                            aria-labelledby="v-pills-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                @php
                                $user_id = Auth::guard('web')->id();
                                @endphp
                                <form action="{{route('user.individual-visa-process',$user_id)}}" method="POST"
                                    class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input hidden value='golden visa' name='process_name'>
                                            <input hidden value='individual' name='sub_type'>
                                            @if(!$visa_data)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-1-id">Process status</label>
                                                @if($visa_data && $visa_data['biometric_status'] =='Approved')
                                                <input type="text" class="form-control process-status-input"
                                                    id="visa-1-id" disabled placeholder="..." value="process completed">
                                                @elseif($visa_data )
                                                <input type="text" class="form-control process-status-input"
                                                    id="visa-1-id" disabled placeholder="..." value="process started">
                                                @else
                                                <input type="text" class="form-control process-status-input"
                                                    id="visa-1-id" disabled placeholder="..." value="not started">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @php
                        $authId = Auth::guard('web')->id();
                        @endphp
                        @if($visa_data)
                        <div class="tab-pane fade" id="v-pills-entry" role="tabpanel"
                            aria-labelledby="v-pills-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('user.visa-process-update',$authId)}}" class='py-2' method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='entry_visa' name='entry_visa' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Entry Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-7">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-7" disabled
                                                    value="{{$visa_data->enter_visa_ts_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-8">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-8" disabled
                                                    value="{{$visa_data->enter_visa_ts_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-9">Status</label>
                                                <input class='m-0 form-control entry-visa-status status-container'
                                                    id="visa-id-9" disabled value="{{$visa_data->enter_visa_status}}"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-10">Date</label>
                                                <input type="text" class="form-control" id="visa-id-10" disabled
                                                    value="{{$visa_data->enter_visa_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{$visa_data->enter_visa_file_name}}</label>
                                                @php
                                                $file_name = $visa_data->enter_visa_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->enter_visa_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $visa_data->enter_visa_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $visa_data->enter_visa_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        @if($visa_data['enter_visa_status'] == 'Approved' ||
                                        $visa_data['enter_visa_status'] == 'Skip')
                                        <div class="col-xl-6 col-lg-12 col-md-6  ">
                                            <div class="form-group">
                                                <label for="visa-id-11">Are u inside the country?</label>
                                                <input type="text" class="form-control" id="visa-id-8" disabled
                                                    value="{{$visa_data->enter_visa_country}}" placeholder="...">

                                            </div>
                                        </div>
                                        @if($visa_data['enter_visa_country'] == 'yes')
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-12">Over Stay Fines?</label>
                                                <input type="text" class="form-control" id="visa-id-8" disabled
                                                    value="{{$visa_data->enter_visa_over_sf}}" placeholder="...">
                                            </div>
                                        </div>
                                        @php
                                        $file_name = $visa_data->enter_visa_osf_file;
                                        $ext = explode('.', $file_name);
                                        @endphp
                                        @if ($visa_data->enter_visa_osf_file)
                                        <a class="upload-img" target="_black"
                                            href="{{ asset('' . '/' . $visa_data->enter_visa_osf_file) }}">
                                            @if ($ext[1] == 'pdf')
                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                style="height: 50px;width:50px">
                                            @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                style="height: 50px;width:50px">
                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                style="height: 50px;width:50px">
                                            @elseif($ext[1] == 'pptx')
                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                style="height: 50px;width:50px">
                                            @else
                                            <img src="{{ asset('' . '/' . $visa_data->enter_visa_osf_file) }}"
                                                style="height: 50px;width:50px">
                                            @endif
                                        </a>
                                        @endif
                                        @endif
                                        @else
                                        @if ($visa_data->enter_visa_status != Null)
                                        <div class="col-xl-6 col-lg-12 col-md-6 entry-visa-country">
                                            <div class="form-group">
                                                <label for="visa-id-11">Are u inside the country?</label>
                                                <select class="form-control entry-visa-select" id="visa-id-11"
                                                    name="enter_visa_country">
                                                    <option selected disabled>select status</option>
                                                    <option value='yes' {{$visa_data['enter_visa_country']=='yes'
                                                        ? 'selected' : '' }}>Yes</option>
                                                    <option value='no' {{$visa_data['enter_visa_country']=='no'
                                                        ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none Over-stay-fine">
                                            <div class="form-group">
                                                <label for="visa-id-12">Over Stay Fines?</label>
                                                <select class="form-control fine-select" id="visa-id-12"
                                                    name="enter_visa_over_sf">
                                                    <option selected disabled>Select fine</option>
                                                    <option value='yes' {{$visa_data['enter_visa_over_sf']=='yes'
                                                        ? 'selected' : '' }}>Yes</option>
                                                    <option value='no' {{$visa_data['enter_visa_over_sf']=='no'
                                                        ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif

                                    <div class="fine-files-container d-none col-xl-6 col-lg-12 col-md-6 ">
                                        <div class="row m-0 align-items-end">
                                            <div class="align-items-end d-flex">
                                                <div class="upload-file form-group mb-3">
                                                    <label for='visa-id-13'>Upload File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa-id-13'
                                                            name="enter_visa_osf_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                @php
                                                $file_name = $visa_data->enter_visa_osf_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->enter_visa_osf_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $visa_data->enter_visa_osf_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $visa_data->enter_visa_osf_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                    </div>
                                    @endif
                                    {{-- @if($visa_data['enter_visa_status'] == 'Reject' || $visa_data['enter_visa_status']
                                    == 'UnderProcess')
                                    <div class="col-12 text-center">
                                        <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                    </div>
                                    @endif --}}
                                    </div>
                                </form>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="v-pills-change-visa" role="tabpanel"
                            aria-labelledby="v-pills-change-visa-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Change of Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-14">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-14" disabled
                                                    value="{{$visa_data->change_of_visa_tno}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-15">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-15" disabled
                                                    value="{{$visa_data->change_of_visa_tfee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-16">Status</label>
                                                <input class='m-0 form-control entry-visa-status status-container'
                                                    id="visa-id-16" disabled
                                                    value="{{$visa_data->change_of_visa_status}}" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-17">Date</label>
                                                <input type="text" class="form-control" id="visa-id-17" disabled
                                                    value="{{$visa_data->change_of_visa_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                @php
                                                $file_name = $visa_data->change_of_visa_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->change_of_visa_file)
                                                <label for="#">{{$visa_data->change_of_visa_file_name}}</label>
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $visa_data->change_of_visa_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $visa_data->change_of_visa_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        {{-- <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div> --}}
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-health-insurance" role="tabpanel"
                            aria-labelledby="v-pills-health-insurance-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Health Insurance</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-18">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-18" disabled
                                                    value="{{$visa_data->health_insur_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-19">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-19" disabled
                                                    value="{{$visa_data->health_insur_tran_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-20">Status</label>
                                                <input class='m-0 form-control entry-visa-status status-container'
                                                    id="visa-id-20" disabled value="{{$visa_data->health_insur_status}}"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-21">Date</label>
                                                <input type="text" class="form-control" id="visa-id-21" disabled
                                                    value="{{$visa_data->health_insur_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                @php
                                                $file_name = $visa_data->health_insur_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->health_insur_file)
                                                <label for="#">{{$visa_data->health_insur_file_name}}</label>
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $visa_data->health_insur_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $visa_data->health_insur_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-medical-fitness" role="tabpanel"
                            aria-labelledby="v-pills-medical-fitness-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('user.visa-process-update',$authId)}}" class='py-2' method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='medical' name='medical' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-22">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-22" disabled
                                                    value="{{$visa_data->medical_fitness_tno}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-23">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-23" disabled
                                                    value="{{$visa_data->medical_fitness_tfee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-24">Status</label>
                                            <input class='form-control m-0 status-container' disabled
                                                value="{{$visa_data->medical_fitness_status}}" placeholder='...'
                                                id="visa-id-24">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-25">Date</label>
                                                <input type="text" class="form-control" id="visa-id-25" disabled
                                                    value="{{$visa_data->medical_fitness_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                            @if(!($visa_data['medical_fitness_status'] == 'Approved' ||
                                            $visa_data['medical_fitness_status'] == 'Skip') &&
                                            $visa_data->medical_fitness_status != NULL)
                                            <div class="upload-file">
                                                <label for='visa-id-27'>Upload Medical</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa-id-27'
                                                        name="medical_fitness_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @php
                                            $file_name = $visa_data->medical_fitness_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($visa_data->medical_fitness_file)
                                            <a class="upload-img" target="_black"
                                                href="{{ asset('' . '/' . $visa_data->medical_fitness_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $visa_data->medical_fitness_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        @if(!($visa_data['medical_fitness_status'] == 'Approved' ||
                                            $visa_data['medical_fitness_status'] == 'Skip') &&
                                            $visa_data->medical_fitness_status != NULL)
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'
                                                type="submit">Add</button>
                                        </div>
                                        @endif
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-residency-id" role="tabpanel"
                            aria-labelledby="v-pills-residency-id-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='pt-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Emirates ID</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-28">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-28" disabled
                                                    value="{{$visa_data->emirates_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-29">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-29" disabled
                                                    value="{{$visa_data->emirates_tran_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-31">Status</label>
                                            <input class='form-control m-0 status-container' type="text" disabled
                                                value="{{$visa_data->emirates_status}}" placeholder="..."
                                                id="visa-id-31" />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-30">Date</label>
                                                <input type="date" class="form-control" id="emirates-transaction-date"
                                                    disabled value="{{$visa_data->emirates_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                @php
                                                $file_name = $visa_data->emirates_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->emirates_file)
                                                <label for="#">{{$visa_data->emirates_file_name}}</label>
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $visa_data->emirates_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $visa_data->emirates_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="" class='pt-4 pb-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency Application
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-32">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-32" disabled
                                                    value="{{$visa_data->residency_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-33">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-33" disabled
                                                    value="{{$visa_data->residency_tran_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-34">Status</label>
                                            <input class='form-control m-0 status-container' type="text" disabled
                                                value="{{$visa_data->residency_status}}" placeholder="...."
                                                id="visa-id-34">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-35">Date</label>
                                                <input type="text" disabled value="{{$visa_data->residency_date}}"
                                                    class="form-control" id="visa-id-35">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                @php
                                                $file_name = $visa_data->residency_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->residency_file)
                                                <label for="#">{{$visa_data->residency_file_name}}</label>
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $visa_data->residency_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $visa_data->residency_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="v-pills-biometric" role="tabpanel"
                            aria-labelledby="v-pills-biometric-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('user.visa-process-update',$authId)}}" class='py-2' method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='biometric' name='biometric' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-37-id">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-37-id" disabled
                                                    value="{{$visa_data->biometric_tranc_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-38-id">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-38-id" disabled
                                                    value="{{$visa_data->biometric_tranc_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-38-id">Status</label>
                                            <input class='form-control m-0 status-container' id="visa-38-id" type="text"
                                                disabled value="{{$visa_data->biometric_status}}" placeholder="..." />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-39-id">Date</label>
                                                <input type="date" class="form-control" id="visa-39-id" disabled
                                                    value="{{$visa_data->biometric_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        @if($visa_data['biometric_status'] =='Approved' ||
                                        $visa_data['biometric_status'] =='Skip')
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="visa-40-id">Biometric</label>
                                                <input type="text" class="form-control" id="visa-39-id" disabled
                                                    value="{{$visa_data->employee_biometric}}" placeholder="...">
                                            </div>
                                        </div>
                                        @else
                                            @if($visa_data->biometric_status != NULL)
                                                <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                                    <div class="form-group">
                                                        <label for="visa-40-id">Biometric</label>
                                                        <select class="form-control biometric-select" id="visa-40-id"
                                                            name="employee_biometric">
                                                            <option selected disabled>Select Option</option>
                                                            <option value='required'
                                                                {{$visa_data['employee_biometric']=='required' ? 'selected' : ''
                                                                }}>Required</option>
                                                            <option value='not required'
                                                                {{$visa_data['employee_biometric']=='not required' ? 'selected'
                                                                : '' }}>Not Required</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                            <div class="mb-3 align-items-end d-flex">
                                                @if(!($visa_data['biometric_status'] =='Approved' ||
                                                $visa_data['biometric_status'] =='Skip') && $visa_data->biometric_status != NULL)
                                                <div class="upload-file">
                                                    <label for='visa-41-id'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa-41-id'
                                                            name="biometric_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @php
                                                $file_name = $visa_data->biometric_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->biometric_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $visa_data->biometric_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $visa_data->biometric_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        @if(!($visa_data['biometric_status'] =='Approved' ||
                                        $visa_data['biometric_status'] =='Skip') && $visa_data->biometric_status != NULL)
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                        @endif

                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $(function () {
        if ($('.entry-visa-select').val() == 'yes') {
            let a = $(this).parents('.entry-visa-country').siblings('.Over-stay-fine');
            let fine_select = a.find('.fine-select');
            let file_container = $('.fine-files-container');
            if ($(this).val() == 'yes') {
                a.removeClass('d-none');
                if (fine_select.val() == 'yes') {
                    file_container.removeClass('d-none');
                }
            } else {
                a.addClass('d-none');
                file_container.addClass('d-none');
            }
        }
        if ($('.fine-select').val() == 'yes') {
            let file_container = $('.fine-files-container');
            file_container.removeClass('d-none');
        }
        $('.fine-select').change(function () {
            let file_container = $('.fine-files-container');
            if ($(this).val() == 'yes') {
                file_container.removeClass('d-none');
            } else {
                file_container.addClass('d-none');
            }
        })
        $('.entry-visa-select').change(function () {
            let a = $(this).parents('.entry-visa-country').siblings('.Over-stay-fine');
            let fine_select = a.find('.fine-select');
            let file_container = $('.fine-files-container');
            if ($(this).val() == 'yes') {
                a.removeClass('d-none');
                if (fine_select.val() == 'yes') {
                    file_container.removeClass('d-none');
                }
            } else {
                a.addClass('d-none');
                file_container.addClass('d-none');
            }

        });

        if ($('.biometric-file-container').val() == 'required') {
            let a = $(this).parents('.biometric-select-parent').siblings('.biometric-files-container');
            a.removeClass('d-none');
        }

        $('.biometric-file-container').on('change', '.biometric-select', function () {
            let a = $(this).parents('.biometric-select-parent').siblings('.biometric-files-container');
            if ($(this).val() == 'required') {
                a.removeClass('d-none');
            } else {
                a.addClass('d-none');
            }
        });
        if ($('.entry-visa-select').val() == 'yes') {
            let a = $('.Over-stay-fine');
            let fine_select = a.find('.fine-select');
            let file_container = $('.fine-files-container');
            a.removeClass('d-none');
            if (fine_select.val() == 'yes') {
                file_container.removeClass('d-none');
            }
            else {
                file_container.addClass('d-none');
            }
        }
        else if ($('.entry-visa-select').val() == 'no') {
            let a = $('.Over-stay-fine');
            let fine_select = a.find('.fine-select');
            let file_container = $('.fine-files-container');
            a.addClass('d-none');
            file_container.addClass('d-none');
        }
        $('.entry-visa-select').change(function () {
            let a = $(this).parents('.entry-visa-country').siblings('.Over-stay-fine');
            let fine_select = a.find('.fine-select');
            let file_container = $('.fine-files-container');
            if ($(this).val() == 'yes') {
                a.removeClass('d-none');
                if (fine_select.val() == 'yes') {
                    file_container.removeClass('d-none');
                }
            } else {
                a.addClass('d-none');
                file_container.addClass('d-none');
            }
        });

     if ($('.process-status-input').val() == 'process started') {
     $('.status-container').each(function () {
        let a = $(this).closest('.tab-pane').attr('aria-labelledby');
         if ($(this).val() !== 'Approved' && $(this).val() !== 'Skip') {
             $('.tab-pane').removeClass('active show');
             $('#' + a).removeClass('active').click();
             $('.parent-tab-pane').addClass('active show');
             $(this).parents('.tab-pane').addClass('active show');
             return false;
         }
     });
 }

        // Initialize DataTable on elements with class 'employees'
        $('.employees').DataTable({
            "pageLength": 10,
            aaSorting: [
                [0, "asc"]
            ]
        });

        // Handle click event on elements with class 'show_confirm'
        $('.show_confirm').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

        // Handle click event on elements with class 'employee-data'
        $(document).on('click', '.employee-don', function () {
            var id = $(this).attr('id');
            // Perform an AJAX request
            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                url: "{{ url('company/employee-data') }}",
                data: {
                    'id': id,
                },
                success: function (response) {
                    // Handle the successful response here
                    console.log(response);
                },
                error: function (error) {
                    // Handle the error here
                    console.error(error);
                }
            });
        });

    });
</script>
@endsection
