@extends('admin.layout.app')

@section('title', 'index')

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
        background-color: #1d2c42!important;
        color: white !important;
    }

    .upload-file {
        width: calc(100% - 70px);
        margin-right: 10px;
    }

    .nav-bar .nav-link:hover,
    .work-permit-nav .nav-link:hover {
        background-color: rgba(29, 44, 66, 0.8)!important;
        color: white!important;
    }

    .nav-bar .nav-link.active:hover,
    .work-permit-nav .nav-link.active:hover {
        background-color: #1d2c42;
        color:white!important;
    }

    .side-bar .nav-link.active {
        background-color: #54b91d!important;
        color:white!important;
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

<div class="main-content" style="min-height: 562px;">
<div class="mb-5 admin-main-content-inner">
    <h4>Individual Dashboard</h4>
    <p><span class="fa fa-users"></span>  Visa Process</p>
    <div class="text-right">
        {{-- <a href="{{ route('company.employee.create') }}" class="mb-3 btn btn-success"><span
                class="fa fa-plus mr-2"></span>Add
            Employee</a> --}}
    </div>
    <ul class="nav nav-tabs nav-bar horizontal_tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">
                New Visa
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">
                Renewal Process
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">Modification of Visa</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="modify-id-tab" data-toggle="tab" href="#modify-id" role="tab" aria-controls="modify"
                aria-selected="false">Modification of Emirates ID</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="cancelation-tab" data-toggle="tab" href="#cancelation" role="tab"
                aria-controls="cancel" aria-selected="false">Visa Cancelation</a>
        </li>
    </ul>
    <!-- Parent Div -->
    <div class="tab-content" id="myTabContent">
        <!-- New Visa -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col-3">
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
                <div class="col-9">
                    <div class="tab-content" id="visa-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-start" role="tabpanel"
                            aria-labelledby="v-pills-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('admin-start-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id']])}}"
                                    method="POST" class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='new visa' name='process_name'>
                                            @if(!$new_visa)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-1-id">Process status</label>
                                                @if($new_visa && $new_visa['biometric_status'] == 'Approved')
                                                    <input type="text" class="form-control" id="visa-1-id"
                                                    placeholder="..." disabled value="process completed">
                                                @elseif($new_visa)
                                                    <input type="text" class="form-control" id="visa-1-id"
                                                    placeholder="..." disabled value="process started">
                                                @else
                                                    <input type="text" class="form-control" id="visa-1-id"
                                                    placeholder="..." disabled value="not started">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($new_visa)
                        {{-- entery visa section--}}
                        <div class="tab-pane fade" id="v-pills-entry" role="tabpanel"
                            aria-labelledby="v-pills-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-new-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$new_visa->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="step1" name="entry_visa">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>Entry Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-7">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-7"
                                                    value="{{$new_visa->enter_visa_ts_no}}" name="enter_visa_ts_no" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-8">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-8"
                                                value="{{$new_visa->enter_visa_ts_fee}}" name="enter_visa_ts_fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-9">Status</label>
                                                <select id="visa-id-9" class="form-control status-selector-select category" name="enter_visa_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$new_visa['enter_visa_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$new_visa['enter_visa_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$new_visa['enter_visa_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$new_visa['enter_visa_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-10">Date</label>
                                                <input type="date" class="form-control" id="visa-id-10"
                                                    name="enter_visa_date"  value="{{$new_visa->enter_visa_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                            <label for="new-visa-8">Select File</label>
                                            <select id="new-visa-8" class="form-control category" name="enter_visa_file_name">
                                                    <option value="" selected disabled>Select Document</option>
                                                    <option value="Personal Photo"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                    </option>
                                                    <option value="Passport" {{ $new_visa['enter_visa_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                        Passport</option>
                                                    <option value="Visit Visa" {{ $new_visa['enter_visa_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                        Visit Visa</option>
                                                    <option value="Offer Letter"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                    <option value="MOL Job Offer"
                                                        {{ $new_visa['enter_visa_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                    <option value="Signed MOL Job Offer"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                        Offer</option>
                                                    <option value="MOL MB Contract"
                                                        {{ $new_visa['enter_visa_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                    </option>
                                                    <option value="Signed MOL MB Offer"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                        Offer</option>
                                                    <option value="Preapproval Work Permit"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                        Work Permit</option>
                                                    <option value="Dubai Insurance"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                    </option>
                                                    <option value="Entry Permit Visa"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                    </option>
                                                    <option value="Stamped Entry Visa"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                        Visa</option>
                                                    <option value="Change of Visa Status"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                        Status</option>
                                                    <option value="Medical Fitness Receipt"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                        Fitness Receipt</option>
                                                    <option value="Tawjeeh Receipt"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                    </option>
                                                    <option value="Emirates Id Application form"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                        Emirates Id Application form</option>
                                                    <option value="Stamped EID Application form"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                        EID Application form</option>
                                                    <option value="Residence Visa"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                    </option>
                                                    <option value="Work Permit" {{ $new_visa['enter_visa_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                        Work Permit</option>
                                                    <option value="Health Insurance Card"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                        Insurance Card</option>
                                                    <option value="National Identity Card"
                                                        {{ $new_visa['enter_visa_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                        Identity Card</option>
                                                    <option value="Emirates Identity Card"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                        Identity Card</option>
                                                    <option value="Vehicle Registration Card"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                        Registration Card</option>
                                                    <option value="Driving License"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                    </option>
                                                    <option value="Birth Certificate"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                    </option>
                                                    <option value="Marriage Certificate"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                        Certificate</option>
                                                    <option value="School Certificate"
                                                        {{ $new_visa['enter_visa_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                        Certificate</option>
                                                    <option value="Diploma" {{ $new_visa['enter_visa_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                    </option>
                                                    <option value="University Degree"
                                                        {{ $new_visa['enter_visa_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                    </option>
                                                    <option value="Salary Certificate"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                        Certificate</option>
                                                    <option value="Tenancy Contract"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                    </option>
                                                    <option value="MOL Cancellation form"
                                                        {{ $new_visa['enter_visa_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                        Cancellation form</option>
                                                    <option value="Signed MOL Cancellation Form"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                        MOL Cancellation Form</option>
                                                    <option value="Work Permit Cancellation Approval"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                        Work Permit Cancellation Approval</option>
                                                    <option value="Residency Cancellation Approval"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                        Residency Cancellation Approval</option>
                                                    <option value="Modify MOL Contract"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                        Contract</option>
                                                    <option value="Work Permit Application"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                        Application</option>
                                                    <option value="Work Permit Renewal Application"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                        Permit Renewal Application</option>
                                                    <option value="Signed Work Permit Renewal Application"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                        Work Permit Renewal Application</option>
                                                    <option value="Submission Form"
                                                        {{ $new_visa['enter_visa_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                    </option>
                                                    <option
                                                    value="Preapproval of work permit receipt"{{ $new_visa['enter_visa_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                    Preapproval of work permit</option>
                                                <option
                                                    value="Dubai Insurance receipts"{{ $new_visa['enter_visa_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                    Dubai Insurance</option>
                                                <option
                                                    value="Preapproval work permit fees receipt"{{ $new_visa['enter_visa_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                    Preapproval work permit fees</option>
                                                <option
                                                    value="Work permit Renewal Fees Receipt"{{ $new_visa['enter_visa_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                    Work permit Renewal Fees</option>
                                                <option
                                                    value="Entry Visa Application Receipt"{{ $new_visa['enter_visa_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                    Entry Visa Application</option>
                                                <option
                                                    value="Change of Visa Status Application"{{ $new_visa['enter_visa_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                    Change of Visa Status Application</option>
                                                <option value="Medical"{{ $new_visa['enter_visa_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                </option>
                                                <option value="Tawjeeh"{{ $new_visa['enter_visa_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                </option>
                                                <option
                                                    value="Heath Insurance"{{ $new_visa['enter_visa_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                    Health Insurance</option>
                                                <option
                                                    value="Emirates ID Application"{{ $new_visa['enter_visa_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                    Emirates ID Application</option>
                                                <option
                                                    value="Residency Visa Application"{{ $new_visa['enter_visa_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                    Residency Visa Application</option>
                                                <option value="Visa Fines"{{ $new_visa['enter_visa_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                    Fines</option>
                                                <option
                                                    value="Emirates ID Fines"{{ $new_visa['enter_visa_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                    Emirates ID Fines</option>
                                                <option value="Other fines"{{ $new_visa['enter_visa_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                    Other fines</option>
                                                <option
                                                    value="Health Insurance Fines"{{ $new_visa['enter_visa_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                    Health Insurance Fines</option>
                                                <option
                                                    value="Immigration Application"{{ $new_visa['enter_visa_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                    Immigration Application</option>
                                                <option
                                                    value="MOHRE Application"{{ $new_visa['enter_visa_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                    MOHRE Application</option>
                                                    <option value="Other" {{ $new_visa['enter_visa_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                    </option> -->
                                        </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa3-41-id'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa3-41-id'
                                                            name="enter_visa_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                    $file_name = $new_visa->enter_visa_file;
                                                    $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa->enter_visa_file)
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class=''>
                                                                <a target="_black" href="{{ asset('' . '/' . $new_visa->enter_visa_file) }}">
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
                                        <div class="col-xl-6 col-lg-12 col-md-6 entry-visa-country">
                                            <div class="form-group">
                                                <label for="visa-id-11">Are u inside the country?</label>
                                                <select class="form-control entry-visa-select" id="visa-id-11" name="enter_visa_country">
                                                    <option>select status</option>
                                                    <option value='yes' {{$new_visa['enter_visa_country'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                                    <option value='no'  {{$new_visa['enter_visa_country'] == 'no' ? 'selected' : ''}}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none Over-stay-fine">
                                            <div class="form-group">
                                                <label for="visa-id-12">Over Stay Fines?</label>
                                                <select class="form-control fine-select" id="visa-id-12" name="enter_visa_over_sf">
                                                    <option>select status</option>
                                                    <option value='yes' {{$new_visa['enter_visa_over_sf'] == 'yes' ? 'selected' : ''}}>Yes</option>
                                                    <option value='no'  {{$new_visa['enter_visa_over_sf'] == 'no' ? 'selected' : ''}}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fine-files-container d-none ">
                                        <div class="row  align-items-end ">
                                            <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa-id-13'>Upload file</label>
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
                                                                <a target="_black" href="{{ asset('' . '/' . $new_visa->enter_visa_osf_file) }}">
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
                                </form>
                            </div>
                        </div>
                        {{-- change of visa--}}
                        <div class="tab-pane fade" id="v-pills-change-visa" role="tabpanel"
                            aria-labelledby="v-pills-change-visa-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-new-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$new_visa->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="change_of_visa" name="change_of_visa">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Change of Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-14">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-14"
                                                    value = "{{$new_visa->change_of_visa_tno}}" name="change_of_visa_tno" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-15">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-15"
                                                    value="{{$new_visa->change_of_visa_tfee}}" name="change_of_visa_tfee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-16">Status</label>
                                                <select id="visa-id-16" class="form-control status-selector-select category" name="change_of_visa_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$new_visa['change_of_visa_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$new_visa['change_of_visa_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$new_visa['change_of_visa_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$new_visa['change_of_visa_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-17">Date</label>
                                                <input type="date" class="form-control" id="visa-id-17"
                                                    value="{{$new_visa->change_of_visa_date}}" name="change_of_visa_date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                            <label for="new-visa4-8">Select File</label>
                                            <select id="new-visa-8" class="form-control category" name="change_of_visa_file_name">
                                                <option value="" selected disabled>Select Document</option>
                                                <option value="Personal Photo"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                </option>
                                                <option value="Passport" {{ $new_visa['change_of_visa_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                    Passport</option>
                                                <option value="Visit Visa" {{ $new_visa['change_of_visa_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                    Visit Visa</option>
                                                <option value="Offer Letter"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                <option value="MOL Job Offer"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                <option value="Signed MOL Job Offer"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                    Offer</option>
                                                <option value="MOL MB Contract"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                </option>
                                                <option value="Signed MOL MB Offer"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                    Offer</option>
                                                <option value="Preapproval Work Permit"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                    Work Permit</option>
                                                <option value="Dubai Insurance"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                </option>
                                                <option value="Entry Permit Visa"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                </option>
                                                <option value="Stamped Entry Visa"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                    Visa</option>
                                                <option value="Change of Visa Status"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                    Status</option>
                                                <option value="Medical Fitness Receipt"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                    Fitness Receipt</option>
                                                <option value="Tawjeeh Receipt"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                </option>
                                                <option value="Emirates Id Application form"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                    Emirates Id Application form</option>
                                                <option value="Stamped EID Application form"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                    EID Application form</option>
                                                <option value="Residence Visa"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                </option>
                                                <option value="Work Permit" {{ $new_visa['change_of_visa_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                    Work Permit</option>
                                                <option value="Health Insurance Card"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                    Insurance Card</option>
                                                <option value="National Identity Card"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                    Identity Card</option>
                                                <option value="Emirates Identity Card"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                    Identity Card</option>
                                                <option value="Vehicle Registration Card"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                    Registration Card</option>
                                                <option value="Driving License"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                </option>
                                                <option value="Birth Certificate"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                </option>
                                                <option value="Marriage Certificate"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                    Certificate</option>
                                                <option value="School Certificate"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                    Certificate</option>
                                                <option value="Diploma" {{ $new_visa['change_of_visa_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                </option>
                                                <option value="University Degree"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                </option>
                                                <option value="Salary Certificate"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                    Certificate</option>
                                                <option value="Tenancy Contract"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                </option>
                                                <option value="MOL Cancellation form"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                    Cancellation form</option>
                                                <option value="Signed MOL Cancellation Form"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                    MOL Cancellation Form</option>
                                                <option value="Work Permit Cancellation Approval"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                    Work Permit Cancellation Approval</option>
                                                <option value="Residency Cancellation Approval"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                    Residency Cancellation Approval</option>
                                                <option value="Modify MOL Contract"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                    Contract</option>
                                                <option value="Work Permit Application"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                    Application</option>
                                                <option value="Work Permit Renewal Application"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                    Permit Renewal Application</option>
                                                <option value="Signed Work Permit Renewal Application"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                    Work Permit Renewal Application</option>
                                                <option value="Submission Form"
                                                    {{ $new_visa['change_of_visa_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                </option>
                                                <option
                                                value="Preapproval of work permit receipt"{{ $new_visa['change_of_visa_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                Preapproval of work permit</option>
                                            <option
                                                value="Dubai Insurance receipts"{{ $new_visa['change_of_visa_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                Dubai Insurance</option>
                                            <option
                                                value="Preapproval work permit fees receipt"{{ $new_visa['change_of_visa_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                Preapproval work permit fees</option>
                                            <option
                                                value="Work permit Renewal Fees Receipt"{{ $new_visa['change_of_visa_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                Work permit Renewal Fees</option>
                                            <option
                                                value="Entry Visa Application Receipt"{{ $new_visa['change_of_visa_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                Entry Visa Application</option>
                                            <option
                                                value="Change of Visa Status Application"{{ $new_visa['change_of_visa_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                Change of Visa Status Application</option>
                                            <option value="Medical"{{ $new_visa['change_of_visa_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                            </option>
                                            <option value="Tawjeeh"{{ $new_visa['change_of_visa_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                            </option>
                                            <option
                                                value="Heath Insurance"{{ $new_visa['change_of_visa_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                Health Insurance</option>
                                            <option
                                                value="Emirates ID Application"{{ $new_visa['change_of_visa_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                Emirates ID Application</option>
                                            <option
                                                value="Residency Visa Application"{{ $new_visa['change_of_visa_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                Residency Visa Application</option>
                                            <option value="Visa Fines"{{ $new_visa['change_of_visa_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                Fines</option>
                                            <option
                                                value="Emirates ID Fines"{{ $new_visa['change_of_visa_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                Emirates ID Fines</option>
                                            <option value="Other fines"{{ $new_visa['change_of_visa_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                Other fines</option>
                                            <option
                                                value="Health Insurance Fines"{{ $new_visa['change_of_visa_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                Health Insurance Fines</option>
                                            <option
                                                value="Immigration Application"{{ $new_visa['change_of_visa_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                Immigration Application</option>
                                            <option
                                                value="MOHRE Application"{{ $new_visa['change_of_visa_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                MOHRE Application</option>
                                                <option value="Other" {{ $new_visa['change_of_visa_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                    </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa3-41-id1'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa3-41-id1'
                                                            name="change_of_visa_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $new_visa->change_of_visa_file;
                                                $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa->change_of_visa_file)
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $new_visa->change_of_visa_file) }}">
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
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- health insurance--}}
                        <div class="tab-pane fade" id="v-pills-health-insurance" role="tabpanel"
                            aria-labelledby="v-pills-health-insurance-tab">
                            <div class='rounded p-3 light-box-shadow'>
                              <form action="{{route('dependent-new-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$new_visa->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="health_insurance" name="health_insurance">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Health Insurance</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-18">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-18"
                                                    value="{{$new_visa->health_insur_tran_no}}" name="health_insur_tran_no" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-19">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-19"
                                                    value="{{$new_visa->health_insur_tran_fee}}" name="health_insur_tran_fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-20">Status</label>
                                                <select id="visa-id-20" class="form-control status-selector-select category" name="health_insur_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$new_visa['health_insur_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$new_visa['health_insur_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$new_visa['health_insur_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$new_visa['health_insur_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-21">Date</label>
                                                <input type="date" class="form-control" id="visa-id-21"
                                                    value="{{$new_visa->health_insur_date}}" name="health_insur_date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                            <label for="new-visa5-8">Select File</label>
                                            <select id="new-visa-8" class="form-control category" name="health_insur_file_name">
                                                <option value="" selected disabled>Select Document</option>
                                                <option value="Personal Photo"
                                                    {{ $new_visa['health_insur_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                </option>
                                                <option value="Passport" {{ $new_visa['health_insur_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                    Passport</option>
                                                <option value="Visit Visa" {{ $new_visa['health_insur_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                    Visit Visa</option>
                                                <option value="Offer Letter"
                                                    {{ $new_visa['health_insur_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                <option value="MOL Job Offer"
                                                    {{ $new_visa['health_insur_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                <option value="Signed MOL Job Offer"
                                                    {{ $new_visa['health_insur_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                    Offer</option>
                                                <option value="MOL MB Contract"
                                                    {{ $new_visa['health_insur_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                </option>
                                                <option value="Signed MOL MB Offer"
                                                    {{ $new_visa['health_insur_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                    Offer</option>
                                                <option value="Preapproval Work Permit"
                                                    {{ $new_visa['health_insur_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                    Work Permit</option>
                                                <option value="Dubai Insurance"
                                                    {{ $new_visa['health_insur_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                </option>
                                                <option value="Entry Permit Visa"
                                                    {{ $new_visa['health_insur_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                </option>
                                                <option value="Stamped Entry Visa"
                                                    {{ $new_visa['health_insur_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                    Visa</option>
                                                <option value="Change of Visa Status"
                                                    {{ $new_visa['health_insur_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                    Status</option>
                                                <option value="Medical Fitness Receipt"
                                                    {{ $new_visa['health_insur_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                    Fitness Receipt</option>
                                                <option value="Tawjeeh Receipt"
                                                    {{ $new_visa['health_insur_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                </option>
                                                <option value="Emirates Id Application form"
                                                    {{ $new_visa['health_insur_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                    Emirates Id Application form</option>
                                                <option value="Stamped EID Application form"
                                                    {{ $new_visa['health_insur_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                    EID Application form</option>
                                                <option value="Residence Visa"
                                                    {{ $new_visa['health_insur_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                </option>
                                                <option value="Work Permit" {{ $new_visa['health_insur_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                    Work Permit</option>
                                                <option value="Health Insurance Card"
                                                    {{ $new_visa['health_insur_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                    Insurance Card</option>
                                                <option value="National Identity Card"
                                                    {{ $new_visa['health_insur_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                    Identity Card</option>
                                                <option value="Emirates Identity Card"
                                                    {{ $new_visa['health_insur_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                    Identity Card</option>
                                                <option value="Vehicle Registration Card"
                                                    {{ $new_visa['health_insur_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                    Registration Card</option>
                                                <option value="Driving License"
                                                    {{ $new_visa['health_insur_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                </option>
                                                <option value="Birth Certificate"
                                                    {{ $new_visa['health_insur_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                </option>
                                                <option value="Marriage Certificate"
                                                    {{ $new_visa['health_insur_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                    Certificate</option>
                                                <option value="School Certificate"
                                                    {{ $new_visa['health_insur_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                    Certificate</option>
                                                <option value="Diploma" {{ $new_visa['health_insur_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                </option>
                                                <option value="University Degree"
                                                    {{ $new_visa['health_insur_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                </option>
                                                <option value="Salary Certificate"
                                                    {{ $new_visa['health_insur_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                    Certificate</option>
                                                <option value="Tenancy Contract"
                                                    {{ $new_visa['health_insur_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                </option>
                                                <option value="MOL Cancellation form"
                                                    {{ $new_visa['health_insur_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                    Cancellation form</option>
                                                <option value="Signed MOL Cancellation Form"
                                                    {{ $new_visa['health_insur_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                    MOL Cancellation Form</option>
                                                <option value="Work Permit Cancellation Approval"
                                                    {{ $new_visa['health_insur_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                    Work Permit Cancellation Approval</option>
                                                <option value="Residency Cancellation Approval"
                                                    {{ $new_visa['health_insur_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                    Residency Cancellation Approval</option>
                                                <option value="Modify MOL Contract"
                                                    {{ $new_visa['health_insur_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                    Contract</option>
                                                <option value="Work Permit Application"
                                                    {{ $new_visa['health_insur_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                    Application</option>
                                                <option value="Work Permit Renewal Application"
                                                    {{ $new_visa['health_insur_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                    Permit Renewal Application</option>
                                                <option value="Signed Work Permit Renewal Application"
                                                    {{ $new_visa['health_insur_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                    Work Permit Renewal Application</option>
                                                <option value="Submission Form"
                                                    {{ $new_visa['health_insur_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                </option>
                                                <option
                                                value="Preapproval of work permit receipt"{{ $new_visa['health_insur_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                Preapproval of work permit</option>
                                            <option
                                                value="Dubai Insurance receipts"{{ $new_visa['health_insur_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                Dubai Insurance</option>
                                            <option
                                                value="Preapproval work permit fees receipt"{{ $new_visa['health_insur_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                Preapproval work permit fees</option>
                                            <option
                                                value="Work permit Renewal Fees Receipt"{{ $new_visa['health_insur_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                Work permit Renewal Fees</option>
                                            <option
                                                value="Entry Visa Application Receipt"{{ $new_visa['health_insur_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                Entry Visa Application</option>
                                            <option
                                                value="Change of Visa Status Application"{{ $new_visa['health_insur_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                Change of Visa Status Application</option>
                                            <option value="Medical"{{ $new_visa['health_insur_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                            </option>
                                            <option value="Tawjeeh"{{ $new_visa['health_insur_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                            </option>
                                            <option
                                                value="Heath Insurance"{{ $new_visa['health_insur_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                Health Insurance</option>
                                            <option
                                                value="Emirates ID Application"{{ $new_visa['health_insur_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                Emirates ID Application</option>
                                            <option
                                                value="Residency Visa Application"{{ $new_visa['health_insur_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                Residency Visa Application</option>
                                            <option value="Visa Fines"{{ $new_visa['health_insur_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                Fines</option>
                                            <option
                                                value="Emirates ID Fines"{{ $new_visa['health_insur_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                Emirates ID Fines</option>
                                            <option value="Other fines"{{ $new_visa['health_insur_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                Other fines</option>
                                            <option
                                                value="Health Insurance Fines"{{ $new_visa['health_insur_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                Health Insurance Fines</option>
                                            <option
                                                value="Immigration Application"{{ $new_visa['health_insur_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                Immigration Application</option>
                                            <option
                                                value="MOHRE Application"{{ $new_visa['health_insur_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                MOHRE Application</option>
                                                <option value="Other" {{ $new_visa['health_insur_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                    </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa3-41-id2'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa3-41-id2'
                                                            name="health_insur_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $new_visa->health_insur_file;
                                                $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa->health_insur_file)
                                                <div class="">
                                                    <div class="form-group mb-3">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $new_visa->health_insur_file) }}">
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
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--Medical fitness --}}
                        <div class="tab-pane fade" id="v-pills-medical-fitness" role="tabpanel"
                            aria-labelledby="v-pills-medical-fitness-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-new-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$new_visa->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="medical_fitness" name="medical_fitness">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-22">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-22"
                                                    value="{{$new_visa->medical_fitness_tno}}" name="medical_fitness_tno" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-23">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-23"
                                                    value="{{$new_visa->medical_fitness_tfee}}" name="medical_fitness_tfee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-24">Status</label>
                                            <select id="visa-id-24" class="form-control status-selector-select category" name="medical_fitness_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved" {{$new_visa['medical_fitness_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="UnderProcess" {{$new_visa['medical_fitness_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                <option value="Skip" {{$new_visa['medical_fitness_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                <option value="Reject" {{$new_visa['medical_fitness_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-25">Date</label>
                                                <input type="date" class="form-control" id="visa-id-25"
                                                    value="{{$new_visa->medical_fitness_date}}" name="medical_fitness_date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                            <label for="new-visa6-8">Select File</label>
                                            <select id="new-visa-8" class="form-control category" name="medical_fitness_file_name">
                                                <option value="" selected disabled>Select Document</option>
                                                <option value="Personal Photo"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                </option>
                                                <option value="Passport" {{ $new_visa['medical_fitness_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                    Passport</option>
                                                <option value="Visit Visa" {{ $new_visa['medical_fitness_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                    Visit Visa</option>
                                                <option value="Offer Letter"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                <option value="MOL Job Offer"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                <option value="Signed MOL Job Offer"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                    Offer</option>
                                                <option value="MOL MB Contract"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                </option>
                                                <option value="Signed MOL MB Offer"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                    Offer</option>
                                                <option value="Preapproval Work Permit"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                    Work Permit</option>
                                                <option value="Dubai Insurance"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                </option>
                                                <option value="Entry Permit Visa"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                </option>
                                                <option value="Stamped Entry Visa"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                    Visa</option>
                                                <option value="Change of Visa Status"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                    Status</option>
                                                <option value="Medical Fitness Receipt"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                    Fitness Receipt</option>
                                                <option value="Tawjeeh Receipt"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                </option>
                                                <option value="Emirates Id Application form"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                    Emirates Id Application form</option>
                                                <option value="Stamped EID Application form"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                    EID Application form</option>
                                                <option value="Residence Visa"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                </option>
                                                <option value="Work Permit" {{ $new_visa['medical_fitness_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                    Work Permit</option>
                                                <option value="Health Insurance Card"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                    Insurance Card</option>
                                                <option value="National Identity Card"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                    Identity Card</option>
                                                <option value="Emirates Identity Card"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                    Identity Card</option>
                                                <option value="Vehicle Registration Card"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                    Registration Card</option>
                                                <option value="Driving License"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                </option>
                                                <option value="Birth Certificate"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                </option>
                                                <option value="Marriage Certificate"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                    Certificate</option>
                                                <option value="School Certificate"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                    Certificate</option>
                                                <option value="Diploma" {{ $new_visa['medical_fitness_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                </option>
                                                <option value="University Degree"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                </option>
                                                <option value="Salary Certificate"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                    Certificate</option>
                                                <option value="Tenancy Contract"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                </option>
                                                <option value="MOL Cancellation form"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                    Cancellation form</option>
                                                <option value="Signed MOL Cancellation Form"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                    MOL Cancellation Form</option>
                                                <option value="Work Permit Cancellation Approval"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                    Work Permit Cancellation Approval</option>
                                                <option value="Residency Cancellation Approval"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                    Residency Cancellation Approval</option>
                                                <option value="Modify MOL Contract"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                    Contract</option>
                                                <option value="Work Permit Application"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                    Application</option>
                                                <option value="Work Permit Renewal Application"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                    Permit Renewal Application</option>
                                                <option value="Signed Work Permit Renewal Application"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                    Work Permit Renewal Application</option>
                                                <option value="Submission Form"
                                                    {{ $new_visa['medical_fitness_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                </option>
                                                <option
                                                value="Preapproval of work permit receipt"{{ $new_visa['medical_fitness_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                Preapproval of work permit</option>
                                            <option
                                                value="Dubai Insurance receipts"{{ $new_visa['medical_fitness_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                Dubai Insurance</option>
                                            <option
                                                value="Preapproval work permit fees receipt"{{ $new_visa['medical_fitness_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                Preapproval work permit fees</option>
                                            <option
                                                value="Work permit Renewal Fees Receipt"{{ $new_visa['medical_fitness_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                Work permit Renewal Fees</option>
                                            <option
                                                value="Entry Visa Application Receipt"{{ $new_visa['medical_fitness_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                Entry Visa Application</option>
                                            <option
                                                value="Change of Visa Status Application"{{ $new_visa['medical_fitness_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                Change of Visa Status Application</option>
                                            <option value="Medical"{{ $new_visa['medical_fitness_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                            </option>
                                            <option value="Tawjeeh"{{ $new_visa['medical_fitness_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                            </option>
                                            <option
                                                value="Heath Insurance"{{ $new_visa['medical_fitness_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                Health Insurance</option>
                                            <option
                                                value="Emirates ID Application"{{ $new_visa['medical_fitness_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                Emirates ID Application</option>
                                            <option
                                                value="Residency Visa Application"{{ $new_visa['medical_fitness_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                Residency Visa Application</option>
                                            <option value="Visa Fines"{{ $new_visa['medical_fitness_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                Fines</option>
                                            <option
                                                value="Emirates ID Fines"{{ $new_visa['medical_fitness_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                Emirates ID Fines</option>
                                            <option value="Other fines"{{ $new_visa['medical_fitness_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                Other fines</option>
                                            <option
                                                value="Health Insurance Fines"{{ $new_visa['medical_fitness_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                Health Insurance Fines</option>
                                            <option
                                                value="Immigration Application"{{ $new_visa['medical_fitness_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                Immigration Application</option>
                                            <option
                                                value="MOHRE Application"{{ $new_visa['medical_fitness_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                MOHRE Application</option>
                                                <option value="Other" {{ $new_visa['medical_fitness_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                    </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa3-41-id3'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa3-41-id3'
                                                            name="medical_fitness_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                    $file_name = $new_visa->medical_fitness_file;
                                                    $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa->medical_fitness_file)
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <div class='border-bottom'>
                                                                <a target="_black" href="{{ asset('' . '/' . $new_visa->medical_fitness_file) }}">
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
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        {{-- Emirates And Residensy --}}
                        <div class="tab-pane fade" id="v-pills-residency-id" role="tabpanel"
                            aria-labelledby="v-pills-residency-id-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-new-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$new_visa->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="emirates_residency_app" name="emirates_residency_app">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Emirates ID</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-28">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-28"
                                                    value="{{$new_visa->emirates_tran_no}}" name="emirates_tran_no" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-29">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-29"
                                                    value="{{$new_visa->emirates_tran_fee}}" name="emirates_tran_fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-31">Status</label>
                                            <select id="visa-id-31" class="form-control status-selector-select category" name="emirates_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved" {{$new_visa['emirates_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="UnderProcess" {{$new_visa['emirates_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                <option value="Skip" {{$new_visa['emirates_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                <option value="Reject" {{$new_visa['emirates_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-30">Date</label>
                                                <input type="date" class="form-control" id="emirates-transaction-date"
                                                    value="{{$new_visa->emirates_date}}" name="emirates_date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                            <label for="new-visa6-9">Upload File</label>
                                            <select id="new-visa-8" class="form-control category" name="emirates_file_name">
                                                <option value="" selected disabled>Select Document</option>
                                                <option value="Personal Photo"
                                                    {{ $new_visa['emirates_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                </option>
                                                <option value="Passport" {{ $new_visa['emirates_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                    Passport</option>
                                                <option value="Visit Visa" {{ $new_visa['emirates_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                    Visit Visa</option>
                                                <option value="Offer Letter"
                                                    {{ $new_visa['emirates_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                <option value="MOL Job Offer"
                                                    {{ $new_visa['emirates_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                <option value="Signed MOL Job Offer"
                                                    {{ $new_visa['emirates_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                    Offer</option>
                                                <option value="MOL MB Contract"
                                                    {{ $new_visa['emirates_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                </option>
                                                <option value="Signed MOL MB Offer"
                                                    {{ $new_visa['emirates_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                    Offer</option>
                                                <option value="Preapproval Work Permit"
                                                    {{ $new_visa['emirates_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                    Work Permit</option>
                                                <option value="Dubai Insurance"
                                                    {{ $new_visa['emirates_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                </option>
                                                <option value="Entry Permit Visa"
                                                    {{ $new_visa['emirates_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                </option>
                                                <option value="Stamped Entry Visa"
                                                    {{ $new_visa['emirates_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                    Visa</option>
                                                <option value="Change of Visa Status"
                                                    {{ $new_visa['emirates_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                    Status</option>
                                                <option value="Medical Fitness Receipt"
                                                    {{ $new_visa['emirates_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                    Fitness Receipt</option>
                                                <option value="Tawjeeh Receipt"
                                                    {{ $new_visa['emirates_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                </option>
                                                <option value="Emirates Id Application form"
                                                    {{ $new_visa['emirates_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                    Emirates Id Application form</option>
                                                <option value="Stamped EID Application form"
                                                    {{ $new_visa['emirates_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                    EID Application form</option>
                                                <option value="Residence Visa"
                                                    {{ $new_visa['emirates_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                </option>
                                                <option value="Work Permit" {{ $new_visa['emirates_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                    Work Permit</option>
                                                <option value="Health Insurance Card"
                                                    {{ $new_visa['emirates_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                    Insurance Card</option>
                                                <option value="National Identity Card"
                                                    {{ $new_visa['emirates_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                    Identity Card</option>
                                                <option value="Emirates Identity Card"
                                                    {{ $new_visa['emirates_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                    Identity Card</option>
                                                <option value="Vehicle Registration Card"
                                                    {{ $new_visa['emirates_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                    Registration Card</option>
                                                <option value="Driving License"
                                                    {{ $new_visa['emirates_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                </option>
                                                <option value="Birth Certificate"
                                                    {{ $new_visa['emirates_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                </option>
                                                <option value="Marriage Certificate"
                                                    {{ $new_visa['emirates_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                    Certificate</option>
                                                <option value="School Certificate"
                                                    {{ $new_visa['emirates_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                    Certificate</option>
                                                <option value="Diploma" {{ $new_visa['emirates_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                </option>
                                                <option value="University Degree"
                                                    {{ $new_visa['emirates_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                </option>
                                                <option value="Salary Certificate"
                                                    {{ $new_visa['emirates_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                    Certificate</option>
                                                <option value="Tenancy Contract"
                                                    {{ $new_visa['emirates_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                </option>
                                                <option value="MOL Cancellation form"
                                                    {{ $new_visa['emirates_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                    Cancellation form</option>
                                                <option value="Signed MOL Cancellation Form"
                                                    {{ $new_visa['emirates_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                    MOL Cancellation Form</option>
                                                <option value="Work Permit Cancellation Approval"
                                                    {{ $new_visa['emirates_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                    Work Permit Cancellation Approval</option>
                                                <option value="Residency Cancellation Approval"
                                                    {{ $new_visa['emirates_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                    Residency Cancellation Approval</option>
                                                <option value="Modify MOL Contract"
                                                    {{ $new_visa['emirates_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                    Contract</option>
                                                <option value="Work Permit Application"
                                                    {{ $new_visa['emirates_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                    Application</option>
                                                <option value="Work Permit Renewal Application"
                                                    {{ $new_visa['emirates_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                    Permit Renewal Application</option>
                                                <option value="Signed Work Permit Renewal Application"
                                                    {{ $new_visa['emirates_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                    Work Permit Renewal Application</option>
                                                <option value="Submission Form"
                                                    {{ $new_visa['emirates_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                </option>
                                                <option
                                                value="Preapproval of work permit receipt"{{ $new_visa['emirates_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                Preapproval of work permit</option>
                                            <option
                                                value="Dubai Insurance receipts"{{ $new_visa['emirates_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                Dubai Insurance</option>
                                            <option
                                                value="Preapproval work permit fees receipt"{{ $new_visa['emirates_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                Preapproval work permit fees</option>
                                            <option
                                                value="Work permit Renewal Fees Receipt"{{ $new_visa['emirates_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                Work permit Renewal Fees</option>
                                            <option
                                                value="Entry Visa Application Receipt"{{ $new_visa['emirates_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                Entry Visa Application</option>
                                            <option
                                                value="Change of Visa Status Application"{{ $new_visa['emirates_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                Change of Visa Status Application</option>
                                            <option value="Medical"{{ $new_visa['emirates_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                            </option>
                                            <option value="Tawjeeh"{{ $new_visa['emirates_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                            </option>
                                            <option
                                                value="Heath Insurance"{{ $new_visa['emirates_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                Health Insurance</option>
                                            <option
                                                value="Emirates ID Application"{{ $new_visa['emirates_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                Emirates ID Application</option>
                                            <option
                                                value="Residency Visa Application"{{ $new_visa['emirates_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                Residency Visa Application</option>
                                            <option value="Visa Fines"{{ $new_visa['emirates_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                Fines</option>
                                            <option
                                                value="Emirates ID Fines"{{ $new_visa['emirates_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                Emirates ID Fines</option>
                                            <option value="Other fines"{{ $new_visa['emirates_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                Other fines</option>
                                            <option
                                                value="Health Insurance Fines"{{ $new_visa['emirates_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                Health Insurance Fines</option>
                                            <option
                                                value="Immigration Application"{{ $new_visa['emirates_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                Immigration Application</option>
                                            <option
                                                value="MOHRE Application"{{ $new_visa['emirates_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                MOHRE Application</option>
                                                <option value="Other" {{ $new_visa['emirates_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                    </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa3-41-id4'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa3-41-id4'
                                                            name="emirates_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                        @php
                                                            $file_name = $new_visa->emirates_file;
                                                            $ext = explode('.', $file_name);
                                                        @endphp
                                                    @if ($new_visa->emirates_file)
                                                        <div class="">
                                                            <div class="form-group">
                                                                <div class=''>
                                                                    <a target="_black" href="{{ asset('' . '/' . $new_visa->emirates_file) }}">
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
                                                <input type="text" class="form-control" id="visa-id-32"
                                                    value="{{$new_visa->residency_tran_no}}" name="residency_tran_no" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-33">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-33"
                                                    value="{{$new_visa->residency_tran_fee}}" name="residency_tran_fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-id-34">Status</label>
                                            <select id="visa-id-34" class="form-control status-selector-select category" name="residency_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved" {{$new_visa['residency_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="UnderProcess" {{$new_visa['residency_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                <option value="Skip" {{$new_visa['residency_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                <option value="Reject" {{$new_visa['residency_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-35">Date</label>
                                                <input type="date" placeholder=".."  value="{{$new_visa->residency_date}}" name="residency_date" class="form-control" id="visa-id-35">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                            <label for="new-visa6-10">Select File</label>
                                            <select id="new-visa-8" class="form-control category" name="renewal_file_name">
                                                <option value="" selected disabled>Select Document</option>
                                                <option value="Personal Photo"
                                                    {{ $new_visa['residency_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                </option>
                                                <option value="Passport" {{ $new_visa['residency_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                    Passport</option>
                                                <option value="Visit Visa" {{ $new_visa['residency_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                    Visit Visa</option>
                                                <option value="Offer Letter"
                                                    {{ $new_visa['residency_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                <option value="MOL Job Offer"
                                                    {{ $new_visa['residency_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                <option value="Signed MOL Job Offer"
                                                    {{ $new_visa['residency_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                    Offer</option>
                                                <option value="MOL MB Contract"
                                                    {{ $new_visa['residency_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                </option>
                                                <option value="Signed MOL MB Offer"
                                                    {{ $new_visa['residency_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                    Offer</option>
                                                <option value="Preapproval Work Permit"
                                                    {{ $new_visa['residency_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                    Work Permit</option>
                                                <option value="Dubai Insurance"
                                                    {{ $new_visa['residency_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                </option>
                                                <option value="Entry Permit Visa"
                                                    {{ $new_visa['residency_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                </option>
                                                <option value="Stamped Entry Visa"
                                                    {{ $new_visa['residency_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                    Visa</option>
                                                <option value="Change of Visa Status"
                                                    {{ $new_visa['residency_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                    Status</option>
                                                <option value="Medical Fitness Receipt"
                                                    {{ $new_visa['residency_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                    Fitness Receipt</option>
                                                <option value="Tawjeeh Receipt"
                                                    {{ $new_visa['residency_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                </option>
                                                <option value="Emirates Id Application form"
                                                    {{ $new_visa['residency_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                    Emirates Id Application form</option>
                                                <option value="Stamped EID Application form"
                                                    {{ $new_visa['residency_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                    EID Application form</option>
                                                <option value="Residence Visa"
                                                    {{ $new_visa['residency_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                </option>
                                                <option value="Work Permit" {{ $new_visa['residency_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                    Work Permit</option>
                                                <option value="Health Insurance Card"
                                                    {{ $new_visa['residency_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                    Insurance Card</option>
                                                <option value="National Identity Card"
                                                    {{ $new_visa['residency_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                    Identity Card</option>
                                                <option value="Emirates Identity Card"
                                                    {{ $new_visa['residency_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                    Identity Card</option>
                                                <option value="Vehicle Registration Card"
                                                    {{ $new_visa['residency_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                    Registration Card</option>
                                                <option value="Driving License"
                                                    {{ $new_visa['residency_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                </option>
                                                <option value="Birth Certificate"
                                                    {{ $new_visa['residency_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                </option>
                                                <option value="Marriage Certificate"
                                                    {{ $new_visa['residency_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                    Certificate</option>
                                                <option value="School Certificate"
                                                    {{ $new_visa['residency_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                    Certificate</option>
                                                <option value="Diploma" {{ $new_visa['residency_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                </option>
                                                <option value="University Degree"
                                                    {{ $new_visa['residency_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                </option>
                                                <option value="Salary Certificate"
                                                    {{ $new_visa['residency_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                    Certificate</option>
                                                <option value="Tenancy Contract"
                                                    {{ $new_visa['residency_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                </option>
                                                <option value="MOL Cancellation form"
                                                    {{ $new_visa['residency_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                    Cancellation form</option>
                                                <option value="Signed MOL Cancellation Form"
                                                    {{ $new_visa['residency_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                    MOL Cancellation Form</option>
                                                <option value="Work Permit Cancellation Approval"
                                                    {{ $new_visa['residency_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                    Work Permit Cancellation Approval</option>
                                                <option value="Residency Cancellation Approval"
                                                    {{ $new_visa['residency_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                    Residency Cancellation Approval</option>
                                                <option value="Modify MOL Contract"
                                                    {{ $new_visa['residency_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                    Contract</option>
                                                <option value="Work Permit Application"
                                                    {{ $new_visa['residency_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                    Application</option>
                                                <option value="Work Permit Renewal Application"
                                                    {{ $new_visa['residency_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                    Permit Renewal Application</option>
                                                <option value="Signed Work Permit Renewal Application"
                                                    {{ $new_visa['residency_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                    Work Permit Renewal Application</option>
                                                <option value="Submission Form"
                                                    {{ $new_visa['residency_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                </option>
                                                <option
                                                value="Preapproval of work permit receipt"{{ $new_visa['residency_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                Preapproval of work permit</option>
                                            <option
                                                value="Dubai Insurance receipts"{{ $new_visa['residency_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                Dubai Insurance</option>
                                            <option
                                                value="Preapproval work permit fees receipt"{{ $new_visa['residency_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                Preapproval work permit fees</option>
                                            <option
                                                value="Work permit Renewal Fees Receipt"{{ $new_visa['residency_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                Work permit Renewal Fees</option>
                                            <option
                                                value="Entry Visa Application Receipt"{{ $new_visa['residency_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                Entry Visa Application</option>
                                            <option
                                                value="Change of Visa Status Application"{{ $new_visa['residency_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                Change of Visa Status Application</option>
                                            <option value="Medical"{{ $new_visa['residency_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                            </option>
                                            <option value="Tawjeeh"{{ $new_visa['residency_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                            </option>
                                            <option
                                                value="Heath Insurance"{{ $new_visa['residency_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                Health Insurance</option>
                                            <option
                                                value="Emirates ID Application"{{ $new_visa['residency_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                Emirates ID Application</option>
                                            <option
                                                value="Residency Visa Application"{{ $new_visa['residency_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                Residency Visa Application</option>
                                            <option value="Visa Fines"{{ $new_visa['residency_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                Fines</option>
                                            <option
                                                value="Emirates ID Fines"{{ $new_visa['residency_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                Emirates ID Fines</option>
                                            <option value="Other fines"{{ $new_visa['residency_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                Other fines</option>
                                            <option
                                                value="Health Insurance Fines"{{ $new_visa['residency_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                Health Insurance Fines</option>
                                            <option
                                                value="Immigration Application"{{ $new_visa['residency_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                Immigration Application</option>
                                            <option
                                                value="MOHRE Application"{{ $new_visa['residency_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                MOHRE Application</option>
                                                <option value="Other" {{ $new_visa['residency_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                    </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa3-41-id5'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa3-41-id5'
                                                            name="residency_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $new_visa->residency_file;
                                                $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa->residency_file)
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $new_visa->residency_file) }}">
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
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        {{-- employee biometric---}}
                        <div class="tab-pane fade" id="v-pills-biometric" role="tabpanel"
                            aria-labelledby="v-pills-biometric-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-new-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$new_visa->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="biometric" name="biometric">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-37-id">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-37-id"
                                                    value="{{$new_visa->biometric_tranc_no}}" name="biometric_tranc_no" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-38-id">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-38-id"
                                                value="{{$new_visa->biometric_tranc_fee}}" name="biometric_tranc_fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa-38-id">Status</label>
                                            <select id="visa-38-id" class="form-control status-selector-select category" name="biometric_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved" {{$new_visa['biometric_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="UnderProcess" {{$new_visa['biometric_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                <option value="Skip" {{$new_visa['biometric_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                <option value="Reject" {{$new_visa['biometric_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-39-id">Date</label>
                                                <input type="date" class="form-control" id="visa-39-id"
                                                value="{{$new_visa->biometric_date}}" name="biometric_date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="visa-40-id">Biometric</label>
                                                <select class="form-control biometric-select" id="visa-40-id" name="employee_biometric">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required'  {{$new_visa['employee_biometric'] == 'required' ? 'selected' : '' }}>Required</option>
                                                    <option value='not required' {{$new_visa['employee_biometric'] == 'not required' ? 'selected' : '' }} >Not Required</option>
                                                </select>
                                            </div>
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
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $new_visa->biometric_file) }}">
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
                                        <div class="col-12 text-center">
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
        <!-- New Visa End -->
        <!-- Renewal Process Start -->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
                <div class="col-3">
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
                <div class="col-9">
                    <div class="tab-content" id="renewal-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-renewal-start" role="tabpanel"
                            aria-labelledby="v-pills-renewal-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('admin-start-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id']])}}" method="POST" class='py-2'>
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
                                                @if($renewal_process && $renewal_process['emp_biometric_status'] == 'Approved')
                                                    <input type="text" class="form-control" id="visa-2-id"
                                                    placeholder="..." disabled value="process completed">
                                                @elseif($renewal_process)
                                                    <input type="text" class="form-control" id="visa-2-id"
                                                    placeholder="..." disabled value="process started">
                                                @else
                                                    <input type="text" class="form-control" id="visa-2-id"
                                                    placeholder="..." disabled value="not started">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($renewal_process)
                         {{-- Medicl fitness--}}
                        <div class="tab-pane fade" id="v-pills-renewal-medical-fitness" role="tabpanel"
                            aria-labelledby="v-pills-renewal-medical-fitness-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-renewal-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$renewal_process->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="medical_fitness" name="medical_fitness">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical
                                        Fitness</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-1">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control" id="visa1-id-1"
                                                    value="{{$renewal_process->medical_fitness_tran_no}}" name="medical_fitness_tran_no"  placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-2">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-2"
                                                    value="{{$renewal_process->medical_fitness_tran_fees}}" name="medical_fitness_tran_fees"  placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-3_1">Status</label>
                                                <select id="visa1-id-3_1" class="form-control status-selector-select category" name="medical_fitness_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$renewal_process['medical_fitness_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$renewal_process['medical_fitness_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$renewal_process['medical_fitness_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$renewal_process['medical_fitness_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-4">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-4"
                                                    value="{{$renewal_process->medical_fitness_date}}" name="medical_fitness_date"  placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 renewal-fitness-parent">
                                            <div class="form-group">
                                                <label for="visa1-id-5">Fitness Status</label>
                                                <select class="form-control renewal-fitness" id="visa1-id-5"
                                                    name="medical_fitness_st">
                                                    <option selected disabled>select fitness</option>
                                                    <option value="fit" {{$renewal_process['medical_fitness_st'] == 'fit' ? 'selected' : '' }}>
                                                        Fit</option>
                                                    <option value="not fit" {{$renewal_process['medical_fitness_st'] == 'not fit' ? 'selected' : '' }}>
                                                        Not Fit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 d-none renewal-medical-file align-items-end">
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
                                            @php
                                            $file_name = $renewal_process->medical_fitness_file;
                                            $ext = explode('.', $file_name);
                                              @endphp
                                        @if ($renewal_process->medical_fitness_file)
                                            <div class="">
                                                <div class="form-group">
                                                    <div class=''>
                                                        <a target="_black" href="{{ asset('' . '/' . $renewal_process->medical_fitness_file) }}">
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
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- residency renewal--}}
                        <div class="tab-pane fade" id="v-pills-renewal-residency-id" role="tabpanel"
                            aria-labelledby="v-pills-renewal-residency-id-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-renewal-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$renewal_process->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="residency" name="residency">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-7">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa1-id-7"
                                                    value="{{$renewal_process->residency_tran_no}}" name="residency_tran_no"  placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-8">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-8"
                                                    value="{{$renewal_process->residency_tran_fees}}" name="residency_tran_fees"  placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-9">Status</label>
                                            <select id="visa1-id-9" class="form-control status-selector-select category" name="residency_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved" {{$renewal_process['residency_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="UnderProcess" {{$renewal_process['residency_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                <option value="Skip" {{$renewal_process['residency_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                <option value="Reject" {{$renewal_process['residency_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-9">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-9"
                                                    value="{{$renewal_process->residency_date}}" name="residency_date"  placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                            <label for="new-visa7-9">Select File</label>
                                            <select id="new-visa-8" class="form-control category" name="residency_file_name">
                                                <option value="" selected disabled>Select Document</option>
                                                <option value="Personal Photo"
                                                    {{$renewal_process['residency_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                </option>
                                                <option value="Passport" {{$renewal_process['residency_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                    Passport</option>
                                                <option value="Visit Visa" {{$renewal_process['residency_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                    Visit Visa</option>
                                                <option value="Offer Letter"
                                                    {{$renewal_process['residency_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                <option value="MOL Job Offer"
                                                    {{$renewal_process['residency_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                <option value="Signed MOL Job Offer"
                                                    {{$renewal_process['residency_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                    Offer</option>
                                                <option value="MOL MB Contract"
                                                    {{$renewal_process['residency_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                </option>
                                                <option value="Signed MOL MB Offer"
                                                    {{$renewal_process['residency_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                    Offer</option>
                                                <option value="Preapproval Work Permit"
                                                    {{$renewal_process['residency_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                    Work Permit</option>
                                                <option value="Dubai Insurance"
                                                    {{$renewal_process['residency_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                </option>
                                                <option value="Entry Permit Visa"
                                                    {{$renewal_process['residency_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                </option>
                                                <option value="Stamped Entry Visa"
                                                    {{$renewal_process['residency_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                    Visa</option>
                                                <option value="Change of Visa Status"
                                                    {{$renewal_process['residency_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                    Status</option>
                                                <option value="Medical Fitness Receipt"
                                                    {{$renewal_process['residency_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                    Fitness Receipt</option>
                                                <option value="Tawjeeh Receipt"
                                                    {{$renewal_process['residency_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                </option>
                                                <option value="Emirates Id Application form"
                                                    {{$renewal_process['residency_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                    Emirates Id Application form</option>
                                                <option value="Stamped EID Application form"
                                                    {{$renewal_process['residency_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                    EID Application form</option>
                                                <option value="Residence Visa"
                                                    {{$renewal_process['residency_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                </option>
                                                <option value="Work Permit" {{$renewal_process['residency_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                    Work Permit</option>
                                                <option value="Health Insurance Card"
                                                    {{$renewal_process['residency_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                    Insurance Card</option>
                                                <option value="National Identity Card"
                                                    {{$renewal_process['residency_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                    Identity Card</option>
                                                <option value="Emirates Identity Card"
                                                    {{$renewal_process['residency_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                    Identity Card</option>
                                                <option value="Vehicle Registration Card"
                                                    {{$renewal_process['residency_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                    Registration Card</option>
                                                <option value="Driving License"
                                                    {{$renewal_process['residency_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                </option>
                                                <option value="Birth Certificate"
                                                    {{$renewal_process['residency_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                </option>
                                                <option value="Marriage Certificate"
                                                    {{$renewal_process['residency_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                    Certificate</option>
                                                <option value="School Certificate"
                                                    {{$renewal_process['residency_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                    Certificate</option>
                                                <option value="Diploma" {{$renewal_process['residency_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                </option>
                                                <option value="University Degree"
                                                    {{$renewal_process['residency_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                </option>
                                                <option value="Salary Certificate"
                                                    {{$renewal_process['residency_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                    Certificate</option>
                                                <option value="Tenancy Contract"
                                                    {{$renewal_process['residency_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                </option>
                                                <option value="MOL Cancellation form"
                                                    {{$renewal_process['residency_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                    Cancellation form</option>
                                                <option value="Signed MOL Cancellation Form"
                                                    {{$renewal_process['residency_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                    MOL Cancellation Form</option>
                                                <option value="Work Permit Cancellation Approval"
                                                    {{$renewal_process['residency_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                    Work Permit Cancellation Approval</option>
                                                <option value="Residency Cancellation Approval"
                                                    {{$renewal_process['residency_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                    Residency Cancellation Approval</option>
                                                <option value="Modify MOL Contract"
                                                    {{$renewal_process['residency_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                    Contract</option>
                                                <option value="Work Permit Application"
                                                    {{$renewal_process['residency_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                    Application</option>
                                                <option value="Work Permit Renewal Application"
                                                    {{$renewal_process['residency_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                    Permit Renewal Application</option>
                                                <option value="Signed Work Permit Renewal Application"
                                                    {{$renewal_process['residency_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                    Work Permit Renewal Application</option>
                                                <option value="Submission Form"
                                                    {{$renewal_process['residency_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                </option>
                                                <option
                                                value="Preapproval of work permit receipt"{{$renewal_process['residency_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                Preapproval of work permit</option>
                                            <option
                                                value="Dubai Insurance receipts"{{$renewal_process['residency_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                Dubai Insurance</option>
                                            <option
                                                value="Preapproval work permit fees receipt"{{$renewal_process['residency_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                Preapproval work permit fees</option>
                                            <option
                                                value="Work permit Renewal Fees Receipt"{{$renewal_process['residency_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                Work permit Renewal Fees</option>
                                            <option
                                                value="Entry Visa Application Receipt"{{$renewal_process['residency_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                Entry Visa Application</option>
                                            <option
                                                value="Change of Visa Status Application"{{$renewal_process['residency_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                Change of Visa Status Application</option>
                                            <option value="Medical"{{$renewal_process['residency_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                            </option>
                                            <option value="Tawjeeh"{{$renewal_process['residency_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                            </option>
                                            <option
                                                value="Heath Insurance"{{$renewal_process['residency_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                Health Insurance</option>
                                            <option
                                                value="Emirates ID Application"{{$renewal_process['residency_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                Emirates ID Application</option>
                                            <option
                                                value="Residency Visa Application"{{$renewal_process['residency_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                Residency Visa Application</option>
                                            <option value="Visa Fines"{{$renewal_process['residency_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                Fines</option>
                                            <option
                                                value="Emirates ID Fines"{{$renewal_process['residency_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                Emirates ID Fines</option>
                                            <option value="Other fines"{{$renewal_process['residency_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                Other fines</option>
                                            <option
                                                value="Health Insurance Fines"{{$renewal_process['residency_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                Health Insurance Fines</option>
                                            <option
                                                value="Immigration Application"{{$renewal_process['residency_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                Immigration Application</option>
                                            <option
                                                value="MOHRE Application"{{$renewal_process['residency_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                MOHRE Application</option>
                                                <option value="Other" {{$renewal_process['residency_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                    </select>

                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa3-41-id7'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa3-41-id7'
                                                            name="residency_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $renewal_process->residency_file;
                                                $ext = explode('.', $file_name);
                                                  @endphp
                                            @if ($renewal_process->residency_file)
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $renewal_process->residency_file) }}">
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

                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> ID Renewal</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-10">Transaction No:</label>
                                                <input type="text" value="{{$renewal_process->renewal_tran_no}}" name="renewal_tran_no" class="form-control" id="visa1-id-10"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-11">Transaction Fee</label>
                                                <input type="text" value="{{$renewal_process->renewal_tran_fees}}" name="renewal_tran_fees" class="form-control" id="visa1-id-11"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-13">Status</label>
                                            <select id="visa1-id-13" class="form-control status-selector-select category" name="renewal_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved" {{$renewal_process['renewal_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="UnderProcess" {{$renewal_process['renewal_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                <option value="Skip" {{$renewal_process['renewal_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                <option value="Reject" {{$renewal_process['renewal_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-12">Date</label>
                                                <input type="date" value="{{$renewal_process->renewal_date}}" name="renewal_date" class="form-control" id="visa1-id-12">
                                            </div>
                                        </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                <label for="new-visa8-9">Select File</label>
                                                <select id="new-visa8-9" class="form-control category" name="renewal_file_name"
                                                        value="" >
                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Personal Photo"
                                                            {{$renewal_process['renewal_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{$renewal_process['renewal_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{$renewal_process['renewal_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{$renewal_process['renewal_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{$renewal_process['renewal_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{$renewal_process['renewal_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{$renewal_process['renewal_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{$renewal_process['renewal_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{$renewal_process['renewal_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{$renewal_process['renewal_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{$renewal_process['renewal_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{$renewal_process['renewal_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{$renewal_process['renewal_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{$renewal_process['renewal_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{$renewal_process['renewal_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{$renewal_process['renewal_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{$renewal_process['renewal_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{$renewal_process['renewal_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{$renewal_process['renewal_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{$renewal_process['renewal_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{$renewal_process['renewal_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{$renewal_process['renewal_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{$renewal_process['renewal_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{$renewal_process['renewal_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{$renewal_process['renewal_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{$renewal_process['renewal_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{$renewal_process['renewal_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{$renewal_process['renewal_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{$renewal_process['renewal_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{$renewal_process['renewal_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{$renewal_process['renewal_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{$renewal_process['renewal_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{$renewal_process['renewal_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{$renewal_process['renewal_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{$renewal_process['renewal_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{$renewal_process['renewal_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{$renewal_process['renewal_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{$renewal_process['renewal_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal Application"
                                                            {{$renewal_process['renewal_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal Application</option>
                                                        <option value="Submission Form"
                                                            {{$renewal_process['renewal_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{$renewal_process['renewal_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{$renewal_process['renewal_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{$renewal_process['renewal_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{$renewal_process['renewal_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{$renewal_process['renewal_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{$renewal_process['renewal_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{$renewal_process['renewal_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{$renewal_process['renewal_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{$renewal_process['renewal_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{$renewal_process['renewal_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{$renewal_process['renewal_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{$renewal_process['renewal_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{$renewal_process['renewal_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{$renewal_process['renewal_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{$renewal_process['renewal_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{$renewal_process['renewal_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{$renewal_process['renewal_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{$renewal_process['renewal_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>
                                                    </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                <div class="mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa3-41-id8'>Uplaod File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa3-41-id8'
                                                                name="renewal_file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $renewal_process->renewal_file;
                                                    $ext = explode('.', $file_name);
                                                      @endphp
                                                @if ($renewal_process->renewal_file)
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class=''>
                                                                <a target="_black" href="{{ asset('' . '/' . $renewal_process->renewal_file) }}">
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
                                            <div class="col-12 text-center">
                                                <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--employee biometric--}}
                        <div class="tab-pane fade" id="v-pills-renewal-biometric" role="tabpanel"
                            aria-labelledby="v-pills-renewal-biometric-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('dependent-renewal-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$renewal_process->id])}}"
                                    enctype="multipart/form-data" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <input type="hidden" value="biometric" name="biometric">
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-113">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa1-id-113"
                                                    name="emp_biometric_tranc_no" value="{{$renewal_process->emp_biometric_tranc_no}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-14">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-14"
                                                    name="emp_biometric_tranc_fee" value="{{$renewal_process->emp_biometric_tranc_fee}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-15">Status</label>
                                            <select id="visa1-id-15" class="form-control status-selector-select category" name="emp_biometric_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved" {{$renewal_process['emp_biometric_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="UnderProcess" {{$renewal_process['emp_biometric_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                <option value="Skip" {{$renewal_process['emp_biometric_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                <option value="Reject" {{$renewal_process['emp_biometric_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-16">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-16"
                                                    name="emp_biometric_date" value="{{$renewal_process->emp_biometric_date}}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="visa1-id-17">Biometric</label>
                                                <select class="form-control biometric-select" id="visa1-id-17" name="emp_biometric">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required' {{$renewal_process['emp_biometric'] == 'required' ? 'selected' : '' }}>Required</option>
                                                    <option value='not required' {{$renewal_process['emp_biometric'] == 'not required' ? 'selected' : '' }}>Not Required</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
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
                                                @php
                                                $file_name = $renewal_process->emp_biometric_file;
                                                $ext = explode('.', $file_name);
                                                  @endphp
                                            @if ($renewal_process->emp_biometric_file)
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $renewal_process->emp_biometric_file) }}">
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
                                        <div class="col-12 text-center">
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
        <!-- Renewal Process End -->

        <!-- Modification of Visa -->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <div class="col-3">
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
                <div class="col-9">
                    <div class="tab-content" id="modification-visa-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-modify-visa-start" role="tabpanel"
                            aria-labelledby="v-pills-modify-visa-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('admin-start-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id']])}}" method="POST" class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='modification of visa' name='process_name'>
                                            @if (!$modification_visa)
                                                <button class='btn btn-success px-5 py-2' type="submit">Start
                                                    Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-3-id">Process status</label>
                                                @if($modification_visa && $modification_visa['application_status'] == 'Approved')
                                                    <input type="text" class="form-control" id="visa-3-id"
                                                    placeholder="..." disabled value="process completed">
                                                @elseif($modification_visa)
                                                    <input type="text" class="form-control" id="visa-3-id"
                                                    placeholder="..." disabled value="process started" >
                                                @else
                                                    <input type="text" class="form-control" id="visa-3-id"
                                                    placeholder="..." disabled value="not started">
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
                                    <form action="{{route('dependent-modification-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$modification_visa->id])}}"
                                        enctype="multipart/form-data" method="POST"
                                        class='py-2'>
                                        @csrf
                                        <input type="hidden" value="application" name="application">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for Approval
                                        </h6>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-12 col-md-6 status-select-parent">
                                                <label for="new-visa-10">Status</label>
                                                <select id="new-visa-10" name="application_status" class="form-control category status-selector-select status-select" id="status-select1">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$modification_visa['application_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$modification_visa['application_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$modification_visa['application_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$modification_visa['application_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 d-none status-select-comment">
                                                <label for='new-visa-11'>Comments</label>
                                                <textarea type="text" id='new-visa-11' name="waiting_fappro_reason"
                                                    name="application_reject_reason" value="{{$modification_visa->application_reject_reason}}" placeholder="Enter Your Comments ..." class="form-control"
                                                    rows="5"></textarea>
                                                    @php
                                                    $file_name = $modification_visa->application_reject_reason_file;
                                                    $ext = explode('.', $file_name);
                                                      @endphp
                                                @if ($modification_visa->application_reject_reason_file)
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class=''>
                                                                <a target="_black" href="{{ asset('' . '/' . $modification_visa->application_reject_reason_file) }}">
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
                                            <div class="col-xl-6 col-lg-12 col-md-6 d-none status-select-approval">
                                                <div class="form-group mb-3">
                                                    <label for="new-visa-12">Approval No:</label>
                                                    <input type="text" class="form-control" id="new-visa-12"
                                                    name="application_approval_no" value="{{$modification_visa->application_approval_no}}" placeholder="...">
                                                </div>
                                            </div>
                                            <div
                                                class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end status-select-file d-none">
                                                <div class="upload-file">
                                                    <label for='new-visa-13'>Upload File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='new-visa-13'
                                                            name="application_approval_file" style="line-height: 1" accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $modification_visa->application_approval_file;
                                                $ext = explode('.', $file_name);
                                                  @endphp
                                                 @if($modification_visa->application_approval_file)
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $modification_visa->application_approval_file) }}">
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
                                            <div class="col-12 text-center status-select-btn">
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
        <div class="tab-pane fade" id="modify-id" role="tabpanel" aria-labelledby="modify-id-tab">
            <div class="row">
                <div class="col-3">
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
                <div class="col-9">
                    <div class="tab-content" id="modification-id-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-modify-id-start" role="tabpanel"
                            aria-labelledby="v-pills-modify-id-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('admin-start-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id']])}}" method="POST" class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='modification of emirates Id' name='process_name'>
                                            @if (!$modification_emirates)
                                                <button class='btn btn-success px-5 py-2' type="submit">Start
                                                    Process</button>
                                            @endif

                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-4-id">Process status</label>
                                                @if ($modification_emirates && $modification_emirates['application_status'] == 'Approved')
                                                    <input type="text" class="form-control" id="visa-4-id"
                                                        placeholder="..." disabled value="process completed">
                                                @elseif($modification_emirates)
                                                    <input type="text" class="form-control" id="visa-4-id"
                                                    placeholder="..." disabled value="process started">
                                                @else
                                                    <input type="text" class="form-control" id="visa-4-id"
                                                        placeholder="..." disabled value="not started">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($modification_emirates)
                            <div class="tab-pane fade" id="v-pills-modify-id-entry" role="tabpanel"
                                aria-labelledby="v-pills-modify-id-entry-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form action="{{route('dependent-modification-emirates-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$modification_emirates->id])}}"
                                        enctype="multipart/form-data" method="POST"
                                        class='py-2'>
                                        @csrf
                                        <input type="hidden" value="application" name="application">

                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for Approval
                                        </h6>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-12 col-md-6 status-select-parent">
                                                <label for="new1-visa-10">Status</label>
                                                <select id="new1-visa-10" name="application_status" class="form-control category status-selector-select status-select" id="status-select1">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$modification_emirates['application_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$modification_emirates['application_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$modification_emirates['application_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$modification_emirates['application_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 d-none status-select-comment">
                                                <label for='new1-visa-11'>Comments</label>
                                                <textarea type="text" id='new1-visa-11' name="waiting_fappro_reason"
                                                    placeholder="Enter Your Comments ..." class="form-control"
                                                    rows="5"></textarea>
                                                    @php
                                                    $file_name = $modification_emirates->application_reject_reason_file;
                                                    $ext = explode('.', $file_name);
                                                      @endphp
                                                @if ($modification_emirates->application_reject_reason_file)
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class=''>
                                                                <a target="_black" href="{{ asset('' . '/' . $modification_emirates->application_reject_reason_file) }}">
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
                                            <div class="col-xl-6 col-lg-12 col-md-6 d-none status-select-approval">
                                                <div class="form-group mb-3">
                                                    <label for="new1-visa-12">Approval No:</label>
                                                    <input type="text" class="form-control" id="new1-visa-12"
                                                    value="{{$modification_emirates->application_approval_no}}" name="application_approval_no" placeholder="...">
                                                </div>
                                            </div>
                                            <div
                                                class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end status-select-file d-none">
                                                <div class="upload-file">
                                                    <label for='new1-visa-13'>Upload File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='new1-visa-13'
                                                            name="application_approval_file" style="line-height: 1" accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $modification_emirates->application_approval_file;
                                                $ext = explode('.', $file_name);
                                                  @endphp
                                            @if ($modification_emirates->application_approval_file)
                                                <div class="">
                                                    <div class="form-group">
                                                        <div class=''>
                                                            <a target="_black" href="{{ asset('' . '/' . $modification_emirates->application_approval_file) }}">
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
                                            <div class="col-12 text-center status-select-btn">
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
        <div class="tab-pane fade" id="cancelation" role="tabpanel" aria-labelledby="cancelation-tab">
            <div class="row">
                <div class="col-3">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-residency-cancel-start-tab"
                            data-toggle="pill" href="#v-pills-residency-cancel-start" role="tab"
                            aria-controls="v-pills-residency-cancel-start" aria-selected="true">Start
                            Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-residency-cancel-tab" data-toggle="pill"
                            href="#v-pills-residency-cancel" role="tab" aria-controls="v-pills-residency-cancel"
                            aria-selected="false">Residency  Cancelation Application</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="visa-cancel-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-residency-cancel-start" role="tabpanel"
                            aria-labelledby="v-pills-residency-cancel-start-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{route('admin-start-visa-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id']])}}" method="POST" class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='visa cancellation' name='process_name'>
                                            @if(!$visa_cancellation)
                                                <button class='btn btn-success px-5 py-2' type="submit">Start
                                                    Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-5-id">Process status</label>
                                                @if($visa_cancellation && $visa_cancellation['residency_app_status'] == 'Approved' )
                                                    <input type="text" class="form-control" id="visa-5-id"
                                                    placeholder="..." disabled value="process completed">
                                                @elseif($visa_cancellation)
                                                    <input type="text" class="form-control" id="visa-5-id"
                                                    placeholder="..." disabled value="process started">
                                                @else
                                                    <input type="text" class="form-control" id="visa-5-id"
                                                    placeholder="..." disabled value="not started">
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($visa_cancellation)
                            <div class="tab-pane fade" id="v-pills-residency-cancel" role="tabpanel"
                                aria-labelledby="v-pills-residency-cancel-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form action="{{route('dependent-visa-cancellation-process',['user_id'=>$ids['user_id'],'dependent_id'=>$ids['dependent_id'],'process_id'=>$visa_cancellation->id])}}"
                                        enctype="multipart/form-data" method="POST"
                                        class='py-2'>
                                        @csrf
                                        <input type="hidden" value="residency" name="residency">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency Application</h6>
                                        <div class="row align-items-end fine-select-container">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="new-visa-id-14">Transaction No:</label>
                                                    <input type="text" class="form-control" id="new-visa-id-14"
                                                        value="{{$visa_cancellation->residency_app_tranc_no}}" name="residency_app_tranc_no" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="new-visa-id-15">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="new-visa-id-15"
                                                        value="{{$visa_cancellation->residency_app_tranc_no}}" name="residency_app_tranc_no" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="new-visa-id-16">Status</label>
                                                    <select id="new-visa-id-16" class="form-control status-selector-select category" name="residency_app_status">
                                                        <option value="" selected disabled>select</option>
                                                        <option value="Approved" {{$visa_cancellation['residency_app_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                        <option value="UnderProcess" {{$visa_cancellation['residency_app_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                        <option value="Skip" {{$visa_cancellation['residency_app_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                        <option value="Reject" {{$visa_cancellation['residency_app_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="new-visa-id-17">Date</label>
                                                    <input type="date" class="form-control" id="new-visa-id-17"
                                                    value="{{$visa_cancellation->residency_app_date}}" name="residency_app_date" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                <label for="new-new-visa4-8">Select File</label>
                                                <select id="new-new-visa4-8" class="form-control category" name="residency_app_file_name"
                                                        value="" >
                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Personal Photo"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{$visa_cancellation['residency_app_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{$visa_cancellation['residency_app_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{$visa_cancellation['residency_app_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{$visa_cancellation['residency_app_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal Application"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal Application</option>
                                                        <option value="Submission Form"
                                                            {{$visa_cancellation['residency_app_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{$visa_cancellation['residency_app_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{$visa_cancellation['residency_app_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{$visa_cancellation['residency_app_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{$visa_cancellation['residency_app_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{$visa_cancellation['residency_app_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{$visa_cancellation['residency_app_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{$visa_cancellation['residency_app_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{$visa_cancellation['residency_app_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{$visa_cancellation['residency_app_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{$visa_cancellation['residency_app_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{$visa_cancellation['residency_app_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{$visa_cancellation['residency_app_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{$visa_cancellation['residency_app_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{$visa_cancellation['residency_app_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{$visa_cancellation['residency_app_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{$visa_cancellation['residency_app_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{$visa_cancellation['residency_app_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{$visa_cancellation['residency_app_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>
                                                    </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='new-visa3-41-id1'>Uplaod File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='new-visa3-41-id1'
                                                                name="residency_app_file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $visa_cancellation->residency_app_file;
                                                    $ext = explode('.', $file_name);
                                                      @endphp
                                                @if ($visa_cancellation->residency_app_file)
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div class=''>
                                                                <a target="_black" href="{{ asset('' . '/' . $visa_cancellation->residency_app_file) }}">
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
                                                                        <img src="{{ asset('' . '/' . $visa_cancellation->residency_app_file) }}"
                                                                            style="height: 50px;width:50px">
                                                                    @endif
                                                                </a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
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
        <!-- Visa Cancelation Tab-->
    </div>
    <!-- Parent Div End -->
</div>
</div>

@endsection
{{-- @section('script') --}}
@section('js')
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
        if ($('.entry-visa-select').val() == 'yes') {
            $('.Over-stay-fine').removeClass('d-none');
        }

        $('.biometric-select').each(function(){
                    if($(this).val() == 'required'){
                        let a = $(this).parents('.biometric-select-parent').siblings('.biometric-files-container');
                        a.removeClass('d-none');
                    }
                });

        $('.biometric-file-container').on('change', '.biometric-select', function () {
            let a = $(this).parents('.biometric-select-parent').siblings('.biometric-files-container');
            if ($(this).val() == 'required') {
                a.removeClass('d-none');
            } else {
                a.addClass('d-none');
            }
        });
        $('.status-select').each(function () {
            let a = $(this).parents('.status-select-parent');
            $(this).change(function () {
                if ($(this).val() && $(this).val().toLowerCase() === 'reject') {
                    a.siblings('.status-select-comment').removeClass('d-none');
                    a.siblings('.status-select-file').removeClass('d-flex');
                    a.siblings('.status-select-approval').addClass('d-none');
                } else if ($(this).val() && $(this).val().toLowerCase() === 'approved') {
                    a.siblings('.status-select-comment').addClass('d-none');
                    a.siblings('.status-select-file').addClass('d-flex');
                    a.siblings('.status-select-approval').removeClass('d-none');
                } else {
                    a.siblings('.status-select-comment').addClass('d-none');
                    a.siblings('.status-select-file').removeClass('d-flex');
                    a.siblings('.status-select-approval').addClass('d-none');
                };
            });
            if ($(this).val() && $(this).val().toLowerCase() === 'reject') {
                    a.siblings('.status-select-comment').removeClass('d-none');
                    a.siblings('.status-select-file').removeClass('d-flex');
                    a.siblings('.status-select-approval').addClass('d-none');
                } else if ($(this).val() && $(this).val().toLowerCase() === 'approved') {
                    a.siblings('.status-select-comment').addClass('d-none');
                    a.siblings('.status-select-file').addClass('d-flex');
                    a.siblings('.status-select-approval').removeClass('d-none');
                } else {
                    a.siblings('.status-select-comment').addClass('d-none');
                    a.siblings('.status-select-file').removeClass('d-flex');
                    a.siblings('.status-select-approval').addClass('d-none');
                };
        });
        //changes
        $(document).on('change','.renewal-fitness', function () {
            if ($(this).val() == 'fit') {
                $('.renewal-medical-file').addClass('d-flex');
            } else {
                $('.renewal-medical-file').removeClass('d-flex');
            }
        });
        //changes


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
<script>
    @if (\Illuminate\Support\Facades\Session:: has('success'))
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
    @endif

    @if (\Illuminate\Support\Facades\Session:: has('error'))
    toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
    @endif
   </script>
@endsection

