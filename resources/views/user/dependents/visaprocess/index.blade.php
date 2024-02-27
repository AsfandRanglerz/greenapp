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
        overflow-X: auto;
        flex-wrap: nowrap;
        overflow-y: hidden;
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
    <p><span class="fa fa-users"></span> - {{$dependent->name}} Visa Process</p>
    <div class="text-right">
        {{-- <a href="{{ route('company.employee.create') }}" class="mb-3 btn btn-success"><span
                class="fa fa-plus mr-2"></span>Add
            Employee</a> --}}
    </div>
    <ul class="nav nav-tabs nav-bar horizontal_tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active parent-tab-11" id="home-tab" data-toggle="tab" href="#home" role="tab"
                aria-controls="home" aria-selected="true">
                New Visa
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link parent-tab-21" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                aria-controls="profile" aria-selected="false">
                Renewal Process
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link parent-tab-31" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                aria-controls="contact" aria-selected="false">Modification of Visa</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link parent-tab-41" id="modify-id-tab" data-toggle="tab" href="#modify-id" role="tab"
                aria-controls="modify" aria-selected="false">Modification of Emirates ID</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link parent-tab-51" id="cancelation-tab" data-toggle="tab" href="#cancelation" role="tab"
                aria-controls="cancel" aria-selected="false">Visa Cancelation</a>
        </li>
    </ul>
    <!-- Parent Div -->
    <div class="tab-content" id="myTabContent">
        <!-- New Visa -->
        <div class="tab-pane fade show active parent-tab-1" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                        <div class="tab-pane fade show active tabs" id="v-pills-start" role="tabpanel"
                            aria-labelledby="v-pills-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('user.dependent-visa-request',$dependent->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='new visa' name='process_name'>
                                            @if (!$new_visa)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-1-id">Process status</label>
                                                @if ($new_visa && $new_visa->status == 'completed')
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-1-id" disabled placeholder="..." value="process completed">
                                                @elseif($new_visa)
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-1-id" disabled placeholder="..." value="process started">
                                                @else
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-1-id" disabled placeholder="..." value="not started">
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($new_visa)
                        {{--Entry visa--}}
                        <div class="tab-pane fade" id="v-pills-entry" role="tabpanel"
                            aria-labelledby="v-pills-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('user.individual-dependent-entry-visa',$new_visa->id)}}"
                                    enctype="multipart/form-data" method="POST" class='py-2'>
                                    @csrf
                                    <input type="hidden" value="entry_visa" name="entry_visa">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Entry Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-7">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-7" disabled
                                                    value="{{$new_visa->enter_visa_ts_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-8">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-8" disabled
                                                    value="{{$new_visa->enter_visa_ts_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-9">Status</label>
                                                <input class='m-0 form-control entry-visa-status status-container-input'
                                                    id="visa-id-9" disabled value="{{$new_visa->enter_visa_status}}"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-10">Date</label>
                                                <input type="text" class="form-control" id="visa-id-10" disabled
                                                    value="{{$new_visa->enter_visa_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                @if($new_visa->enter_visa_file)
                                                <label for="#">{{$new_visa->enter_visa_file_name}}</label>
                                                @php
                                                $file_name = $new_visa->enter_visa_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->enter_visa_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->enter_visa_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @if($new_visa['enter_visa_status'] == 'Approved' ||
                                        $new_visa['enter_visa_status'] == 'Skip')
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label for="visa-id-11">Are u inside the country?</label>
                                                <input type="text" class="form-control" id="visa-id-10" disabled
                                                    value="{{$new_visa->enter_visa_country}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label for="visa-id-12">Over Stay Fines?</label>
                                                <input type="text" class="form-control" id="visa-id-10" disabled
                                                    value="{{$new_visa->enter_visa_over_sf}}" placeholder="...">
                                            </div>
                                        </div>

                                        @else
                                        <div class="col-xl-6 col-lg-12 col-md-6 entry-visa-country">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-11">Are u inside the country?</label>
                                                <select class="form-control entry-visa-select" id="visa-id-11"
                                                    name="enter_visa_country">
                                                    <option selected disabled>select status</option>
                                                    <option value='yes' {{$new_visa['enter_visa_country']=='yes'
                                                        ? 'selected' : '' }}>Yes</option>
                                                    <option value='no' {{$new_visa['enter_visa_country']=='no'
                                                        ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none Over-stay-fine">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-12">Over Stay Fines?</label>
                                                <select class="form-control fine-select" id="visa-id-12"
                                                    name="enter_visa_over_sf">
                                                    <option selected disabled>Select fine</option>
                                                    <option value='yes' {{$new_visa['enter_visa_over_sf']=='yes'
                                                        ? 'selected' : '' }}>Yes</option>
                                                    <option value='no' {{$new_visa['enter_visa_over_sf']=='no'
                                                        ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    @if(!($new_visa['enter_visa_status'] == 'Approved' || $new_visa['enter_visa_status']
                                    == 'Skip'))
                                    <div class="fine-files-container col-xl-6 col-lg-12 col-md-6 d-none ">
                                        <div class="row  align-items-end m-0">
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
                                                $file_name = $new_visa->enter_visa_osf_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa->enter_visa_osf_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->enter_visa_osf_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->enter_visa_osf_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                    </div>
                                    @else
                                    @php
                                    $file_name = $new_visa->enter_visa_osf_file;
                                    $ext = explode('.', $file_name);
                                    @endphp
                                    @if ($new_visa->enter_visa_osf_file)
                                    <div class="">
                                        <div class="form-group mb-3">
                                            <div class=''>
                                                <label for="visa-id-12">Over Stay Fines File</label>
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa->enter_visa_osf_file) }}">
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
                                                    <img src="{{ asset('' . '/' . $new_visa->enter_visa_osf_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </form>
                            </div>


                        </div>
                        {{-- change of visa--}}
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
                                                    value="{{$new_visa->change_of_visa_tno}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-15">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-15" disabled
                                                    value="{{$new_visa->change_of_visa_tfee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-16">Status</label>
                                                <input class='m-0 form-control entry-visa-status status-container-input'
                                                    id="visa-id-16" disabled
                                                    value="{{$new_visa->change_of_visa_status}}" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-17">Date</label>
                                                <input type="text" class="form-control" id="visa-id-17" disabled
                                                    value="{{$new_visa->change_of_visa_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                @if ($new_visa->change_of_visa_file)
                                                <label for="#">{{$new_visa->change_of_visa_file_name}}</label>
                                                @php
                                                $file_name = $new_visa->change_of_visa_file;
                                                $ext = explode('.', $file_name);
                                                @endphp

                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->change_of_visa_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->change_of_visa_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- health insurance --}}
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
                                                    value="{{$new_visa->health_insur_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-19">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-19" disabled
                                                    value="{{$new_visa->health_insur_tran_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-20">Status</label>
                                                <input class='m-0 form-control entry-visa-status status-container-input'
                                                    id="visa-id-20" disabled value="{{$new_visa->health_insur_status}}"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-21">Date</label>
                                                <input type="text" class="form-control" id="visa-id-21" disabled
                                                    value="{{$new_visa->health_insur_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                @if ($new_visa->health_insur_file)

                                                <label for="#">{{$new_visa->health_insur_file_name}}</label>
                                                @php
                                                $file_name = $new_visa->health_insur_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->health_insur_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->health_insur_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--Medical fitness --}}
                        <div class="tab-pane fade" id="v-pills-medical-fitness" role="tabpanel"
                            aria-labelledby="v-pills-medical-fitness-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('user.individual-dependent-entry-visa',$new_visa->id)}}"
                                    enctype="multipart/form-data" method="POST" class='py-2'>
                                    @csrf
                                    <input type="hidden" value="medical_fitness" name="medical_fitness">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-22">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-22" disabled
                                                    value="{{$new_visa->medical_fitness_tno}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-23">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-23" disabled
                                                    value="{{$new_visa->medical_fitness_tfee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-24">Status</label>
                                            <input class='form-control m-0 status-container-input' disabled
                                                value="{{$new_visa->medical_fitness_status}}" placeholder='...'
                                                id="visa-id-24">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-25">Date</label>
                                                <input type="text" class="form-control" id="visa-id-25" disabled
                                                    value="{{$new_visa->medical_fitness_date}}" placeholder="...">
                                            </div>
                                        </div>

                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                            @if(!($new_visa['medical_fitness_status'] == 'Approved' ||
                                            $new_visa['medical_fitness_status'] == 'Skip'))
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
                                            $file_name = $new_visa->medical_fitness_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa->medical_fitness_file)
                                            <div class="">
                                                <div class="form-group mb-3">
                                                    <div class=''>
                                                        <a target="_black"
                                                            href="{{ asset('' . '/' . $new_visa->medical_fitness_file) }}">
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
                                                            <img src="{{ asset('' . '/' . $new_visa->medical_fitness_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        @if(!($new_visa['medical_fitness_status'] == 'Approved' ||
                                        $new_visa['medical_fitness_status'] == 'Skip'))
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'
                                                type="submit">Add</button>
                                        </div>
                                        @endif
                                    </div>
                                </form>
                            </div>

                        </div>
                        {{--emirates and residency--}}
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
                                                    value="{{$new_visa->emirates_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-29">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-29" disabled
                                                    value="{{$new_visa->emirates_tran_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-31">Status</label>
                                            <input class='form-control m-0 status-container-input' type="text" disabled
                                                value="{{$new_visa->emirates_status}}" placeholder="..."
                                                id="visa-id-31" />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-30">Date</label>
                                                <input type="date" class="form-control" id="emirates-transaction-date"
                                                    disabled value="{{$new_visa->emirates_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{$new_visa->emirates_file_name}}</label>
                                                @php
                                                $file_name = $new_visa->emirates_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa->emirates_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->emirates_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->emirates_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency Application
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-32">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-32" disabled
                                                    value="{{$new_visa->residency_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-33">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-33" disabled
                                                    value="{{$new_visa->residency_tran_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-34">Status</label>
                                            <input class='form-control m-0 status-container-input' type="text" disabled
                                                value="{{$new_visa->residency_status}}" placeholder="...."
                                                id="visa-id-34">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-35">Date</label>
                                                <input type="text" class="form-control" disabled
                                                    value="{{$new_visa->residency_date}}" id="visa-id-35">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{$new_visa->residency_file_name}}</label>
                                                @php
                                                $file_name = $new_visa->residency_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa->residency_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->residency_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->residency_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        {{--biometric--}}
                        <div class="tab-pane fade" id="v-pills-biometric" role="tabpanel"
                            aria-labelledby="v-pills-biometric-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('user.individual-dependent-entry-visa',$new_visa->id)}}"
                                    enctype="multipart/form-data" method="POST" class='py-2'>
                                    @csrf
                                    <input type="hidden" value="biometric" name="biometric">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-37-id">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-37-id" disabled
                                                    value="{{$new_visa->biometric_tranc_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-38-id">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-38-id" disabled
                                                    value="{{$new_visa->biometric_tranc_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-38-id">Status</label>
                                                <input class='form-control m-0 status-container-input' id="visa-38-id"
                                                    type="text" disabled value="{{$new_visa->biometric_status}}"
                                                    placeholder="..." />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-39-id">Date</label>
                                                <input type="text" class="form-control" id="visa-39-id" disabled
                                                    value="{{$new_visa->biometric_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            @if($new_visa['biometric_status'] == 'Approved' ||
                                            $new_visa['biometric_status'] == 'Skip')
                                            <div class="form-group mb-3">
                                                <label for="visa-40-id">Biometric</label>
                                                <input type="text" class="form-control" id="visa-39-id" disabled
                                                    value="{{$new_visa->employee_biometric}}" placeholder="...">
                                                @php
                                                $file_name = $new_visa->biometric_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa->biometric_file && $new_visa->employee_biometric ==
                                                'required')
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label for="">Biometric File</label>
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->biometric_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->biometric_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            @else
                                            <div class="form-group mb-3">
                                                <label for="visa-40-id">Biometric</label>
                                                <select class="form-control biometric-select" id="visa-40-id"
                                                    name="employee_biometric">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required'
                                                        {{$new_visa['employee_biometric']=='required' ? 'selected' : ''
                                                        }}>Required</option>
                                                    <option value='not required'
                                                        {{$new_visa['employee_biometric']=='not required' ? 'selected'
                                                        : '' }}>Not Required</option>
                                                </select>
                                            </div>
                                            @endif

                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                            <div class="mb-3 align-items-end d-flex">
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
                                                @php
                                                $file_name = $new_visa->biometric_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa->biometric_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa->biometric_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $new_visa->biometric_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @if(!($new_visa['biometric_status'] == 'Approved' ||
                                        $new_visa['biometric_status'] == 'Skip'))
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
        <!-- New Visa End -->
        <!-- Renewal Process Start -->
        <div class="tab-pane fade parent-tab-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-renewal-start-tab" data-toggle="pill"
                            href="#v-pills-renewal-start" role="tab" aria-controls="v-pills-renewal-start"
                            aria-selected="true">Start Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-medical-fitness-tab" data-toggle="pill"
                            href="#v-pills-renewal-medical-fitness" role="tab"
                            aria-controls="v-pills-renewal-medical-fitness" aria-selected="false">Medical Fitness</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-residency-id-tab" data-toggle="pill"
                            href="#v-pills-renewal-residency-id" role="tab" aria-controls="v-pills-renewal-residency-id"
                            aria-selected="false">Residency &<br class='d-none d-lg-block'> ID Renewal
                            Application</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-biometric-tab" data-toggle="pill"
                            href="#v-pills-renewal-biometric" role="tab" aria-controls="v-pills-renewal-biometric"
                            aria-selected="false">Biometric</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9">
                    <div class="tab-content" id="renewal-tabContent">
                        <div class="tab-pane fade show active tabs" id="v-pills-renewal-start" role="tabpanel"
                            aria-labelledby="v-pills-renewal-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('user.dependent-visa-request',$dependent->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='renewal process' name='process_name'>
                                            @if (!$renewal_process)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-2-id">Process status</label>
                                                @if ($renewal_process && $renewal_process['emp_biometric_status'] ==
                                                'Approved')
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-2-id" disabled placeholder="..." value="process completed">
                                                @elseif($renewal_process)
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-2-id" disabled placeholder="..." value="process started">
                                                @else
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-2-id" disabled placeholder="..." value="not started">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($renewal_process)
                        <div class="tab-pane fade" id="v-pills-renewal-medical-fitness" role="tabpanel"
                            aria-labelledby="v-pills-renewal-medical-fitness-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    action="{{route('user.individual-dependent-renewal-process',$renewal_process->id)}}"
                                    enctype="multipart/form-data" method="POST" class='py-2'>
                                    @csrf
                                    <input type="hidden" value="medical_fitness" name="medical_fitness">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical
                                        Fitness</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-1">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control" id="visa1-id-1" disabled
                                                    value="{{$renewal_process->medical_fitness_tran_no}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-2">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-2" disabled
                                                    value="{{$renewal_process->medical_fitness_tran_fees}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-3">Status</label>
                                                <input type="text" class="form-control status-container-input"
                                                    id="visa1-id-3" disabled
                                                    value="{{$renewal_process->medical_fitness_status}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-4">Date</label>
                                                <input type="text" class="form-control" id="visa1-id-4"
                                                    value="{{$renewal_process->medical_fitness_date}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 renewal-fitness-parent">
                                            @if($renewal_process['medical_fitness_status'] == 'Approved' ||
                                            $renewal_process['medical_fitness_status'] == 'Skip')
                                            <div class="form-group">
                                                <label for="visa1-id-5">Fitness Status</label>
                                                <input type="text" class="form-control" id="visa1-id-4" disabled
                                                    value="{{$renewal_process->medical_fitness_st}}" placeholder="...">
                                            </div>
                                            @php
                                            $file_name = $renewal_process->medical_fitness_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if($renewal_process->medical_fitness_file &&
                                            $renewal_process['medical_fitness_st'] == 'fit')
                                            <div class="">
                                                <div class="form-group mb-3">
                                                    <label for="visa1-id-5">Fitness File</label>

                                                    <div class=''>
                                                        <a target="_black"
                                                            href="{{ asset('' . '/' . $renewal_process->medical_fitness_file) }}">
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
                                                            <img src="{{ asset('' . '/' . $renewal_process->medical_fitness_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @else
                                            <div class="form-group">
                                                <label for="visa1-id-5">Fitness Status</label>
                                                <select class="form-control renewal-fitness" id="visa1-id-5"
                                                    name="medical_fitness_st">
                                                    <option selected disabled>select fitness</option>
                                                    <option value="fit" {{$renewal_process['medical_fitness_st']=='fit'
                                                        ? 'selected' :''}}>
                                                        Fit</option>
                                                    <option value="not fit"
                                                        {{$renewal_process['medical_fitness_st']=='not fit' ? 'selected'
                                                        :''}}>
                                                        Not Fit</option>
                                                </select>
                                            </div>
                                            @endif
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 d-none renewal-medical-file align-items-end">
                                            @if(!($renewal_process['medical_fitness_status'] == 'Approved' ||
                                            $renewal_process['medical_fitness_status'] == 'Skip'))
                                            <div class="upload-file">
                                                <label for='visa1-id-6'>Upload File</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa1-id-6'
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
                                            $file_name = $renewal_process->medical_fitness_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if($renewal_process->medical_fitness_file)
                                            <div class="">
                                                <div class="form-group mb-3">
                                                    <div class=''>
                                                        <a target="_black"
                                                            href="{{ asset('' . '/' . $renewal_process->medical_fitness_file) }}">
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
                                                            <img src="{{ asset('' . '/' . $renewal_process->medical_fitness_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        @if(!($renewal_process['medical_fitness_status'] == 'Approved' ||
                                        $renewal_process['medical_fitness_status'] == 'Skip'))
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-renewal-residency-id" role="tabpanel"
                            aria-labelledby="v-pills-renewal-residency-id-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-7">Transaction No</label>
                                                <input type="text" class="form-control" id="visa1-id-7" disabled
                                                    value="{{$renewal_process->residency_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-8">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-8" disabled
                                                    value="{{$renewal_process->residency_tran_fees}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-9">Status</label>
                                            <input class='form-control m-0 status-container-input' type="text" disabled
                                                value="{{$renewal_process->residency_status}}" placeholder="..."
                                                id="visa-id-31" />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-9">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-9" disabled
                                                    value="{{$renewal_process->residency_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                @php
                                                $file_name = $renewal_process->residency_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process->residency_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label for="#">{{$renewal_process->residency_file_name}}</label>

                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $renewal_process->residency_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $renewal_process->residency_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="" class='pt-4 pb-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> ID Renewal</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-10">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa1-id-10" disabled
                                                    value="{{$renewal_process->renewal_tran_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-11">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-11" disabled
                                                    value="{{$renewal_process->renewal_tran_fees}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-13">Status</label>
                                            <input class='form-control m-0 status-container-input' type="text" disabled
                                                value="{{$renewal_process->renewal_status}}" placeholder="...."
                                                id="visa1-id-13">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-12">Date</label>
                                                <input type="date" disabled value="{{$renewal_process->renewal_date}}"
                                                    class="form-control" id="visa1-id-12">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                @php
                                                $file_name = $renewal_process->renewal_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process->renewal_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label for="#">{{$renewal_process->renewal_file_name}}</label>
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $renewal_process->renewal_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $renewal_process->renewal_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-renewal-biometric" role="tabpanel"
                            aria-labelledby="v-pills-renewal-biometric-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    action="{{route('user.individual-dependent-renewal-process',$renewal_process->id)}}"
                                    enctype="multipart/form-data" method="POST" class='py-2'>
                                    @csrf
                                    <input type="hidden" value="biometric" name="biometric">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-113">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa1-id-113" disabled
                                                    value="{{$renewal_process->emp_biometric_tranc_no}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-14">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-14" disabled
                                                    value="{{$renewal_process->emp_biometric_tranc_fee}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-15">Status</label>
                                            <input class='form-control m-0 status-container-input' id="visa1-id-15"
                                                type="text" disabled value="{{$renewal_process->emp_biometric_status}}"
                                                placeholder="..." />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-16">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-16" disabled
                                                    value="{{$renewal_process->emp_biometric_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            @if($renewal_process['emp_biometric_status'] == 'Approved' ||
                                            $renewal_process['emp_biometric_status'] == 'Skip')
                                            <div class="form-group">
                                                <label for="visa1-id-17">Biometric</label>
                                                <input type="text" class="form-control" id="visa1-id-16" disabled
                                                    value="{{$renewal_process->emp_biometric}}" placeholder="...">
                                                @php
                                                $file_name = $renewal_process->emp_biometric_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process->emp_biometric_file &&
                                                $renewal_process['emp_biometric'] == 'required')
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label for="visa1-id-17">Biometric File</label>
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $renewal_process->emp_biometric_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $renewal_process->emp_biometric_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            @else
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-17">Biometric</label>
                                                <select class="form-control biometric-select" id="visa1-id-17"
                                                    name="emp_biometric">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required'
                                                        {{$renewal_process['emp_biometric']=='required' ? 'selected'
                                                        : '' }}>Required</option>
                                                    <option value='not required'
                                                        {{$renewal_process['emp_biometric']=='not required' ? 'selected'
                                                        : '' }}>Not Required</option>
                                                </select>
                                            </div>
                                            @endif


                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                            <div class="align-items-end d-flex">
                                                @if(!($renewal_process['emp_biometric_status'] == 'Approved' ||
                                                $renewal_process['emp_biometric_status'] == 'Skip'))
                                                <div class="upload-file form-group mb-3">
                                                    <label for='visa1-id-18'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa1-id-18'
                                                            name="emp_biometric_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @php
                                                $file_name = $renewal_process->emp_biometric_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process->emp_biometric_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $renewal_process->emp_biometric_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $renewal_process->emp_biometric_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @if(!($renewal_process['emp_biometric_status'] == 'Approved' ||
                                        $renewal_process['emp_biometric_status'] == 'Skip'))
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
        <!-- Renewal Process End -->

        <!-- Modification of Visa -->
        <div class="tab-pane fade parent-tab-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-modify-visa-start-tab" data-toggle="pill"
                            href="#v-pills-modify-visa-start" role="tab" aria-controls="v-pills-modify-visa-start"
                            aria-selected="true">Start
                            Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-modify-visa-entry-tab" data-toggle="pill"
                            href="#v-pills-modify-visa-entry" role="tab" aria-controls="v-pills-modify-visa-entry"
                            aria-selected="false">Waiting For Approval</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="modification-visa-tabContent">
                        <div class="tab-pane fade show active tabs" id="v-pills-modify-visa-start" role="tabpanel"
                            aria-labelledby="v-pills-modify-visa-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('user.dependent-visa-request',$dependent->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='modification of visa' name='process_name'>
                                            @if(!$modification_visa)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-3-id">Process status</label>
                                                @if($modification_visa && $modification_visa['application_status'] ==
                                                'Approved')
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-3-id" disabled value="process completed" placeholder="...">
                                                @elseif($modification_visa)
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-3-id" disabled value="process started" placeholder="...">
                                                @else
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-3-id" disabled value="not started" placeholder="...">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($modification_visa)
                        <div class="tab-pane fade" id="v-pills-modify-visa-entry" role="tabpanel"
                            aria-labelledby="v-pills-modify-visa-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    action="{{route('user.individual-dependent-modification-visa-process',$modification_visa->id)}}"
                                    enctype="multipart/form-data" method="POST" class='py-2'>
                                    @csrf
                                    <input type="hidden" value="application" name="application">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for
                                        Approval
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                            <div class="form-group mb-3 ">
                                                <label for="visa1-id-20">Application
                                                    Status</label>
                                                <input type="text"
                                                    class="form-control status-container status-container-input new-visa-signmbstatus"
                                                    readonly id="visa1-id-20"
                                                    value="{{$modification_visa->application_status}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
                                                @php
                                                $file_name = $modification_visa->application_approval_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($modification_visa->application_approval_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $modification_visa->application_approval_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $modification_visa->application_approval_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                            <label for='visa1-id-21'>Comments</label>
                                            <textarea type="text" id='visa1-id-21' name="comment"
                                                placeholder="Enter Your Comments ..." class="form-control" disabled
                                                rows="5">{{$modification_visa->application_reject_reason}}</textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-22">Approval No:</label>
                                                <input type="text" class="form-control" readonly
                                                    value="{{$modification_visa->application_approval_no}}"
                                                    id="visa1-id-22" placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                            <div class="upload-file">
                                                <label for='visa1-id-23'>Upload File</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa1-id-23'
                                                        name="application_reject_reason_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $modification_visa->application_reject_reason_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($modification_visa->application_reject_reason_file)
                                            <div class="">
                                                <div class="form-group mb-3">
                                                    <div class=''>
                                                        <a target="_black"
                                                            href="{{ asset('' . '/' . $modification_visa->application_reject_reason_file) }}">
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
                                                            <img src="{{ asset('' . '/' . $modification_visa->application_reject_reason_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                        </div>
                                        <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <!-- Modification of Visa end -->
        <!-- Modification of Emirates id -->
        <div class="tab-pane fade parent-tab-4" id="modify-id" role="tabpanel" aria-labelledby="modify-id-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-modify-id-start-tab" data-toggle="pill"
                            href="#v-pills-modify-id-start" role="tab" aria-controls="v-pills-modify-id-start"
                            aria-selected="true">Start
                            Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-modify-id-entry-tab" data-toggle="pill"
                            href="#v-pills-modify-id-entry" role="tab" aria-controls="v-pills-modify-id-entry"
                            aria-selected="false">Waiting For Approval</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="modification-id-tabContent">
                        <div class="tab-pane fade show active tabs" id="v-pills-modify-id-start" role="tabpanel"
                            aria-labelledby="v-pills-modify-id-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('user.dependent-visa-request',$dependent->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='modification of emirates Id'
                                                name='process_name'>
                                            @if (!$modification_emirates)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-4-id">Process status</label>
                                                @if ($modification_emirates &&
                                                $modification_emirates['application_status'] == 'Approved')
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-4-id" placeholder="..." disabled value="process completed">
                                                @elseif($modification_emirates)
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-4-id" placeholder="..." disabled value="process started">
                                                @else
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-4-id" placeholder="..." disabled value="not started">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($modification_emirates)
                        <div class="tab-pane fade" id="v-pills-modify-id-entry" role="tabpanel"
                            aria-labelledby="v-pills-modify-id-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    action="{{route('user.individual-dependent-modification-emirates-process',$modification_emirates->id)}}"
                                    enctype="multipart/form-data" method="POST" class='py-2'>
                                    @csrf
                                    <input type="hidden" value="application" name="application">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for
                                        Approval
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                            <div class="form-group mb-3 ">
                                                <label for="visa2-id-20">Application
                                                    Status</label>
                                                <input type="text"
                                                    class="form-control status-container status-container-input new-visa-signmbstatus"
                                                    readonly id="visa2-id-20"
                                                    value="{{$modification_emirates->application_status}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
                                                @php
                                                $file_name = $modification_emirates->application_approval_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($modification_emirates->application_approval_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $modification_emirates->application_approval_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $modification_emirates->application_approval_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                            <label for='visa2-id-21'>Comments</label>
                                            <textarea type="text" id='visa2-id-21' name="comment"
                                                placeholder="Enter Your Comments ..." class="form-control" disabled
                                                rows="5">{{$modification_emirates->application_reject_reason}}</textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                            <div class="form-group mb-3">
                                                <label for="visa2-id-22">Approval No:</label>
                                                <input type="text" class="form-control" id="visa2-id-22"
                                                    value="{{$modification_emirates->application_approval_no}}" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                            <div class="upload-file">
                                                <label for='visa2-id-23'>Upload File</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa2-id-23'
                                                        name="application_reject_reason_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $modification_emirates->application_reject_reason_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($modification_emirates->application_reject_reason_file)
                                            <div class="">
                                                <div class="form-group mb-3">
                                                    <div class=''>
                                                        <a target="_black"
                                                            href="{{ asset('' . '/' . $modification_emirates->application_reject_reason_file) }}">
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
                                                            <img src="{{ asset('' . '/' . $modification_emirates->application_reject_reason_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Modification of Emirates id End-->
        <!-- Visa Cancelation -->
        <div class="tab-pane fade parent-tab-5" id="cancelation" role="tabpanel" aria-labelledby="cancelation-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-residency-cancel-start-tab"
                            data-toggle="pill" href="#v-pills-residency-cancel-start" role="tab"
                            aria-controls="v-pills-residency-cancel-start" aria-selected="true">Start
                            Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-residency-cancel-tab" data-toggle="pill"
                            href="#v-pills-residency-cancel" role="tab" aria-controls="v-pills-residency-cancel"
                            aria-selected="false">Residency Cancelation <br class='d-none d-lg-block'> Application</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="visa-cancel-tabContent">
                        <div class="tab-pane fade show active tabs" id="v-pills-residency-cancel-start" role="tabpanel"
                            aria-labelledby="v-pills-residency-cancel-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('user.dependent-visa-request',$dependent->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='visa cancellation' name='process_name'>
                                            @if (!$visa_cancellation)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-5-id">Process status</label>
                                                @if($visa_cancellation && $visa_cancellation->residency_app_status ==
                                                'Approved')
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-5-id" disabled value="process completed" placeholder="...">
                                                @elseif($visa_cancellation)
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-5-id" disabled value="process started" placeholder="...">
                                                @else
                                                <input type="text" class="form-control process-input-status"
                                                    id="visa-5-id" disabled value="not started" placeholder="...">
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($visa_cancellation)
                        <div class="tab-pane fade" id="v-pills-residency-cancel" role="tabpanel"
                            aria-labelledby="v-pills-residency-cancel-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency Canceletion
                                        Application</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-36">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa3-id-36" disabled
                                                    value="{{$visa_cancellation->residency_app_tranc_no}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-19">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa3-id-19" disabled
                                                    value="{{$visa_cancellation->residency_app_tranc_fee}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-20">Status</label>
                                                <input class='m-0 form-control status-container-input entry-visa-status'
                                                    id="visa3-id-20" disabled
                                                    value="{{$visa_cancellation->residency_app_status}}" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-21">Date</label>
                                                <input type="date" class="form-control" id="visa3-id-21" disabled
                                                    value="{{$visa_cancellation->residency_app_date}}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                @php
                                                $file_name = $visa_cancellation->residency_app_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_cancellation->residency_app_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <label
                                                            for="#">{{$visa_cancellation->residency_app_file_name}}</label>

                                                        <div class=''>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $modification_visa->residency_app_file) }}">
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
                                                                <img src="{{ asset('' . '/' . $modification_visa->residency_app_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Visa Cancelation Tab-->

    </div>
    <!-- Parent Div End -->
</div>

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $(function () {
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
        $('.renewal-fitness').change(function () {
            if ($(this).val() == 'fit') {
                $('.renewal-medical-file').addClass('d-flex');
            } else {
                $('.renewal-medical-file').removeClass('d-flex');
            }
        });
        if ($('.renewal-fitness').val() == 'fit') {
            $('.renewal-medical-file').addClass('d-flex');
        };

        $('.biometric-file-container').on('change', '.biometric-select', function () {
            let a = $(this).parents('.biometric-select-parent').siblings('.biometric-files-container');
            if ($(this).val() == 'required') {
                a.removeClass('d-none');
            } else {
                a.addClass('d-none');
            }
        });
        $('.biometric-select').each(function () {
            let a = $(this).parents('.biometric-select-parent').siblings('.biometric-files-container');
            if ($(this).val() == 'required') {
                a.removeClass('d-none');
            } else {
                a.addClass('d-none');
            }
        })
        $('.select-tawjeeh-payment').change(function () {
            let a = $(this).parents('.tawjeeh-parent').siblings('.tawjeeh-document');
            if ($(this).val() == 'yes') {
                a.addClass('d-flex');
            } else {
                a.removeClass('d-flex');
            }
        })
        if ($('.select-tawjeeh-payment').val() == 'yes') {
            $(this).parents('.tawjeeh-parent').siblings('.tawjeeh-document').addClass('d-flex');
        };
        $('.new-visa-signmbstatus').each(function () {
            let a = $(this).parents('.new-visa-signmbstatus-parent');
            if ($(this).val().toLowerCase() == 'approved') {
                a.siblings('.new-visa-signmbstatus-attachment').addClass('d-flex');
                a.siblings('.new-visa-signmbstatus-approval').removeClass('d-none');
            } else if ($(this).val().toLowerCase() == 'reject' || $(this).val().toLowerCase() ==
                'returned') {
                a.siblings('.new-visa-signmbstatus-file').addClass('d-flex');
                a.siblings('.new-visa-signmbstatus-comment').removeClass('d-none');
                a.siblings('.new-visa-signmbstatus-btn').removeClass('d-none');
            }
        });
        let count = 0;
        let flag = false;
        function helper() {
            $('.tab-pane').removeClass('active show')
        };
        $('.process-input-status').each(function () {
            count++;
            if ($(this).val() == 'process started') {
                $(this).closest('.tab-content').find('.status-container-input').each(function () {
                    if ($(this).val() !== 'Approved' && $(this).val() !== 'Skip') {
                        helper();
                        $('.parent-tab-' + count + '1').click();
                        $('.parent-tab-' + count).addClass('active show');
                        $('.tabs').addClass('active show');
                        let a = $(this).closest('.tab-pane');
                        let e = a.siblings('.tabs').attr('id');
                        $('#' + e).removeClass('active show');
                        let b = a.attr('aria-labelledby');
                        $('#' + b).click();
                        a.addClass('active show');
                        flag = true;
                        return false;
                    };
                });
            };
            if (flag) {
                return false;
            }
        })

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