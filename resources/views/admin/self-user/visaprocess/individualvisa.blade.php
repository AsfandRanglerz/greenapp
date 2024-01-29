@extends('admin.layout.app')

@section('title', 'index')

@section('content')
<style>
    .btn_warning {
        background: #ef9e09;
        padding: 9px 14px;
        border-radius: 9px;
        box-shadow: 0 2px 6px #82d3f8;
    }

    <style>.nav-link {
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
    {{-- <h4>Individual Dashboard</h4> --}}
    <p><span class="fa fa-users"></span>
        @php
            if ($visa_data) {
                $user_id = $visa_data->individual_id;
                $individual = App\Models\User::find($user_id);
            }
        @endphp
         - Individual   @if($visa_data)<span class='text-dark'>{{$individual->name ? $individual->name : ''}}</span>@endif Visa Process</p>

    <div class="text-right">
        {{-- <a href="{{ route('company.employee.create') }}" class="mb-3 btn btn-success"><span
                class="fa fa-plus mr-2"></span>Add
            Employee</a> --}}
    </div>
    <ul class="nav nav-tabs nav-bar horizontal_tabs" id="myTab" role="tablist">
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
                                <form action="{{route('individual-visa-process-by-admin',$individual_id)}}"
                                 method="POST" class='py-2'>
                                   @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='golden visa' name='process_name'>
                                            @if (!$visa_data)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-1-id">Process status</label>
                                                @if ($visa_data && $visa_data['biometric_status'] =='Approved')
                                                    <input type="text" class="form-control process-input-status" id="visa-1-id"
                                                    disabled placeholder="..." value="process completed" >
                                                @elseif($visa_data)
                                                    <input type="text" class="form-control process-input-status" id="visa-1-id"
                                                    disabled placeholder="..." value="process started" >
                                                @else
                                                    <input type="text" class="form-control process-input-status" id="visa-1-id"
                                                    disabled placeholder="..." value="not started" >
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($visa_data)
                                {{-- entry visa --}}
                            <div class="tab-pane fade" id="v-pills-entry" role="tabpanel"
                                aria-labelledby="v-pills-entry-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    {{-- @dd($visa_data->individual->id) --}}
                                    <form action="{{route('individual-visa-process-updation',$individual_id)}}"
                                        method="POST" enctype="multipart/form-data"
                                        class='py-2'>
                                        @csrf
                                        <input type="text" hidden name='entry_visa' value="entry_visa">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Entry Visa</h6>
                                        <div class="row align-items-end fine-select-container">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-7">Transaction No:</label>
                                                    <input type="text" class="form-control" id="visa-id-7"
                                                        value="{{$visa_data->enter_visa_ts_no}}" name="enter_visa_ts_no"  placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-8">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="visa-id-8"
                                                        value="{{$visa_data->enter_visa_ts_fee}}" name="enter_visa_ts_fee"  placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa1-id2-15">Status</label>
                                                    <select id="visa1-id2-15"
                                                        class="form-control status-selector-select category"
                                                        name="enter_visa_status">
                                                        <option value="" selected disabled>select</option>
                                                        <option value="Approved" {{$visa_data['enter_visa_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                        <option value="UnderProcess" {{$visa_data['enter_visa_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                        <option value="Skip" {{$visa_data['enter_visa_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                        <option value="Reject" {{$visa_data['enter_visa_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-10">Date</label>
                                                    <input type="date" class="form-control" id="visa-id-10"
                                                        value="{{$visa_data->enter_visa_date}}" name="enter_visa_date"  placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                    <label for="new-visa8_5-9">Select File</label>
                                                    <select id="new-visa-8" class="form-control category" name="enter_visa_file_name">
                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Personal Photo"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $visa_data['enter_visa_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $visa_data['enter_visa_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $visa_data['enter_visa_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $visa_data['enter_visa_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $visa_data['enter_visa_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $visa_data['enter_visa_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $visa_data['enter_visa_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $visa_data['enter_visa_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $visa_data['enter_visa_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $visa_data['enter_visa_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal Application"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal Application</option>
                                                        <option value="Submission Form"
                                                            {{ $visa_data['enter_visa_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $visa_data['enter_visa_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $visa_data['enter_visa_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $visa_data['enter_visa_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $visa_data['enter_visa_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $visa_data['enter_visa_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $visa_data['enter_visa_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $visa_data['enter_visa_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $visa_data['enter_visa_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $visa_data['enter_visa_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $visa_data['enter_visa_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $visa_data['enter_visa_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $visa_data['enter_visa_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $visa_data['enter_visa_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $visa_data['enter_visa_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $visa_data['enter_visa_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $visa_data['enter_visa_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $visa_data['enter_visa_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $visa_data['enter_visa_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>
                                            </select>
                                            </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                    <div class="mb-3 align-items-end d-flex">
                                                        <div class="upload-file">
                                                            <label for='visa3_5-41-id8'>Uplaod File</label>
                                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                                <input type="file" class="form-control" id='visa3_5-41-id8'
                                                                    name="enter_visa_file" style="line-height: 1"
                                                                    accept=".pdf,.doc,.excel">
                                                                <div class="input-group-prepend">
                                                                    <small class="input-group-text"><span
                                                                            class="fa fa-paperclip"></span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                        $file_name = $visa_data->enter_visa_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_data->enter_visa_file)
                                                        <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->enter_visa_file) }}">
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
                                            <div class="col-xl-6 col-lg-12 col-md-6 entry-visa-country">
                                                <div class="form-group">
                                                    <label for="visa-id-11">Are u inside the country?</label>
                                                    <select class="form-control entry-visa-select" id="visa-id-11" name="enter_visa_country">
                                                        <option selected disabled>select status</option>
                                                        <option value='yes' {{ $visa_data['enter_visa_country'] == 'yes' ? 'selected' : '' }} >Yes</option>
                                                        <option value='no' {{ $visa_data['enter_visa_country'] == 'no' ? 'selected' : '' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 d-none Over-stay-fine">
                                                <div class="form-group">
                                                    <label for="visa-id-12">Over Stay Fines?</label>
                                                    <select class="form-control fine-select" id="visa-id-12" name="enter_visa_over_sf">
                                                        <option selected disabled>Select fine</option>
                                                        <option value='yes' {{ $visa_data['enter_visa_over_sf'] == 'yes' ? 'selected' : '' }}>Yes</option>
                                                        <option value='no' {{ $visa_data['enter_visa_over_sf'] == 'no' ? 'selected' : '' }}>No</option>
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
                                                    $file_name = $visa_data->enter_visa_osf_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($visa_data->enter_visa_osf_file)
                                                    <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->enter_visa_osf_file) }}">
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
                                    </form>
                                </div>


                            </div>
                            {{-- change  of visa status --}}
                            <div class="tab-pane fade" id="v-pills-change-visa" role="tabpanel"
                                aria-labelledby="v-pills-change-visa-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form action="{{route('individual-visa-process-updation',$individual_id)}}"
                                        method="POST" enctype="multipart/form-data"
                                        class='py-2'>
                                            @csrf
                                            <input type="text" hidden name='change_of_visa' value="change_of_visa">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Change of Visa</h6>
                                        <div class="row align-items-end fine-select-container">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-14">Transaction No:</label>
                                                    <input type="text" class="form-control" id="visa-id-14"
                                                        value="{{$visa_data->change_of_visa_tno}}" name="change_of_visa_tno" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-15">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="visa-id-15"
                                                        value="{{$visa_data->change_of_visa_tfee}}" name="change_of_visa_tfee" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa1-i1-15">Status</label>
                                                    <select id="visa1-i1-15"
                                                        class="form-control status-selector-select category"
                                                        name="change_of_visa_status">
                                                        <option value="" selected disabled>select</option>
                                                        <option value="Approved" {{$visa_data['change_of_visa_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                        <option value="UnderProcess" {{$visa_data['change_of_visa_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                        <option value="Skip" {{$visa_data['change_of_visa_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                        <option value="Reject" {{$visa_data['change_of_visa_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-17">Date</label>
                                                    <input type="date" class="form-control" id="visa-id-17"
                                                        value="{{$visa_data->change_of_visa_date}}" name="change_of_visa_date" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                    <label for="new-visa8_4-9">Select File</label>
                                                      <select id="new-visa-8" class="form-control category" name="change_of_visa_file_name">
                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Personal Photo"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $visa_data['change_of_visa_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $visa_data['change_of_visa_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $visa_data['change_of_visa_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $visa_data['change_of_visa_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal Application"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal Application</option>
                                                        <option value="Submission Form"
                                                            {{ $visa_data['change_of_visa_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $visa_data['change_of_visa_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $visa_data['change_of_visa_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $visa_data['change_of_visa_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $visa_data['change_of_visa_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $visa_data['change_of_visa_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $visa_data['change_of_visa_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $visa_data['change_of_visa_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $visa_data['change_of_visa_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $visa_data['change_of_visa_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $visa_data['change_of_visa_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $visa_data['change_of_visa_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $visa_data['change_of_visa_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $visa_data['change_of_visa_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $visa_data['change_of_visa_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $visa_data['change_of_visa_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $visa_data['change_of_visa_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $visa_data['change_of_visa_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $visa_data['change_of_visa_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>
                                            </select>
                                            </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                    <div class="mb-3 align-items-end d-flex">
                                                        <div class="upload-file">
                                                            <label for='visa3_4-41-id8'>Uplaod File</label>
                                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                                <input type="file" class="form-control" id='visa3_4-41-id8'
                                                                    name="change_of_visa_file" style="line-height: 1"
                                                                    accept=".pdf,.doc,.excel">
                                                                <div class="input-group-prepend">
                                                                    <small class="input-group-text"><span
                                                                            class="fa fa-paperclip"></span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                        $file_name = $visa_data->change_of_visa_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_data->change_of_visa_file)
                                                        <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->change_of_visa_file) }}">
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
                                            <div class="col-12 text-center">
                                                <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- Health Insurance --}}
                            <div class="tab-pane fade" id="v-pills-health-insurance" role="tabpanel"
                                aria-labelledby="v-pills-health-insurance-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form action="{{route('individual-visa-process-updation',$individual_id)}}"
                                        method="POST" enctype="multipart/form-data"
                                        class='py-2'>
                                            @csrf
                                            <input type="text" hidden name='health_insurance' value="health_insurance">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Health Insurance</h6>
                                        <div class="row align-items-end fine-select-container">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-18">Transaction No:</label>
                                                    <input type="text" class="form-control" id="visa-id-18"
                                                        value="{{$visa_data->health_insur_tran_no}}" name="health_insur_tran_no" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-19">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="visa-id-19"
                                                        value="{{$visa_data->health_insur_tran_fee}}" name="health_insur_tran_fee" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa1-i2-15">Status</label>
                                                    <select id="visa1-i2-15"
                                                        class="form-control status-selector-select category"
                                                        name="health_insur_status">
                                                        <option value="" selected disabled>select</option>
                                                        <option value="Approved" {{$visa_data['health_insur_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                        <option value="UnderProcess" {{$visa_data['health_insur_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                        <option value="Skip" {{$visa_data['health_insur_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                        <option value="Reject" {{$visa_data['health_insur_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-21">Date</label>
                                                    <input type="date" class="form-control" id="visa-id-21"
                                                        value="{{$visa_data->health_insur_date}}" name="health_insur_date" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                    <label for="new-visa8_3-9">Select File</label>
                                                    <select id="new-visa-8" class="form-control category" name="health_insur_file_name">
                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Personal Photo"
                                                            {{ $visa_data['health_insur_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $visa_data['health_insur_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $visa_data['health_insur_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $visa_data['health_insur_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $visa_data['health_insur_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $visa_data['health_insur_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $visa_data['health_insur_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $visa_data['health_insur_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $visa_data['health_insur_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $visa_data['health_insur_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $visa_data['health_insur_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $visa_data['health_insur_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $visa_data['health_insur_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $visa_data['health_insur_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $visa_data['health_insur_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $visa_data['health_insur_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $visa_data['health_insur_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $visa_data['health_insur_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $visa_data['health_insur_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $visa_data['health_insur_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $visa_data['health_insur_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $visa_data['health_insur_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $visa_data['health_insur_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $visa_data['health_insur_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $visa_data['health_insur_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $visa_data['health_insur_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $visa_data['health_insur_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $visa_data['health_insur_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $visa_data['health_insur_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $visa_data['health_insur_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $visa_data['health_insur_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $visa_data['health_insur_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $visa_data['health_insur_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $visa_data['health_insur_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $visa_data['health_insur_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $visa_data['health_insur_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $visa_data['health_insur_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $visa_data['health_insur_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal Application"
                                                            {{ $visa_data['health_insur_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal Application</option>
                                                        <option value="Submission Form"
                                                            {{ $visa_data['health_insur_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $visa_data['health_insur_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $visa_data['health_insur_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $visa_data['health_insur_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $visa_data['health_insur_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $visa_data['health_insur_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $visa_data['health_insur_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $visa_data['health_insur_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $visa_data['health_insur_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $visa_data['health_insur_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $visa_data['health_insur_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $visa_data['health_insur_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $visa_data['health_insur_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $visa_data['health_insur_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $visa_data['health_insur_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $visa_data['health_insur_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $visa_data['health_insur_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $visa_data['health_insur_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $visa_data['health_insur_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>
                                            </select>
                                            </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                    <div class="mb-3 align-items-end d-flex">
                                                        <div class="upload-file">
                                                            <label for='visa3_2-41-id8'>Uplaod File</label>
                                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                                <input type="file" class="form-control" id='visa3_2-41-id8'
                                                                    name="health_insur_file" style="line-height: 1"
                                                                    accept=".pdf,.doc,.excel">
                                                                <div class="input-group-prepend">
                                                                    <small class="input-group-text"><span
                                                                            class="fa fa-paperclip"></span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                        $file_name = $visa_data->health_insur_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_data->health_insur_file)
                                                        <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->health_insur_file) }}">
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
                                            <div class="col-12 text-center">
                                                <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- medical fitness --}}
                            <div class="tab-pane fade" id="v-pills-medical-fitness" role="tabpanel"
                                aria-labelledby="v-pills-medical-fitness-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form action="{{route('individual-visa-process-updation',$visa_data->individual_id)}}"
                                        method="POST" enctype="multipart/form-data"
                                        class='py-2'>
                                            @csrf
                                            <input type="text" hidden name='medical_fitness' value="medical_fitness">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness</h6>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-22">Transaction No:</label>
                                                    <input type="text" class="form-control" id="visa-id-22"
                                                       name="medical_fitness_tno" value="{{$visa_data->medical_fitness_tno}}  "placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-23">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="visa-id-23"
                                                       name="medical_fitness_tfee" value="{{$visa_data->medical_fitness_tfee}} " placeholder="...">
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                <label for="visa1-i3-15">Status</label>
                                                <select id="visa1-i3-15"
                                                    class="form-control status-selector-select category"
                                                    name="medical_fitness_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$visa_data['medical_fitness_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$visa_data['medical_fitness_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$visa_data['medical_fitness_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$visa_data['medical_fitness_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-25">Date</label>
                                                    <input type="date" class="form-control" id="visa-id-25"
                                                       name="medical_fitness_date" value="{{$visa_data->medical_fitness_date}}"  placeholder="...">
                                                </div>
                                            </div>
                                            <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa-id-27'>Upload Medical</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa-id-27' name="medical_fitness_file"
                                                            style="line-height: 1" accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $visa_data->medical_fitness_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($visa_data->medical_fitness_file)
                                                <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->medical_fitness_file) }}">
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
                                            <div class="col-12">
                                                <button class='btn btn-success d-block mx-auto px-5 py-2' type="submit">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            {{-- emirates_residency_app --}}
                            <div class="tab-pane fade" id="v-pills-residency-id" role="tabpanel"
                                aria-labelledby="v-pills-residency-id-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form action="{{route('individual-visa-process-updation',$visa_data->individual_id)}}"
                                        method="POST" enctype="multipart/form-data"
                                        class='py-2'>
                                            @csrf
                                            <input type="text" hidden name='emirates_residency_app' value="emirates_residency_app">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Emirates ID</h6>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-28">Transaction No:</label>
                                                    <input type="text" class="form-control" id="visa-id-28"
                                                        value="{{$visa_data->emirates_tran_no}}" name="emirates_tran_no" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-29">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="visa-id-29"
                                                        value="{{$visa_data->emirates_tran_fee}}" name="emirates_tran_fee" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                <label for="visa1-i4-15">Status</label>
                                                <select id="visa1-i4-15"
                                                    class="form-control status-selector-select category"
                                                    name="emirates_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$visa_data['emirates_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$visa_data['emirates_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$visa_data['emirates_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$visa_data['emirates_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-30">Date</label>
                                                    <input type="date" class="form-control" id="emirates-transaction-date"
                                                        value="{{$visa_data->emirates_date}}" name="emirates_date" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                    <label for="new-visa8_1-9">Select File</label>
                                                    <select id="new-visa-8" class="form-control category" name="emirates_file_name">
                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Personal Photo"
                                                            {{ $visa_data['emirates_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $visa_data['emirates_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $visa_data['emirates_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $visa_data['emirates_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $visa_data['emirates_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $visa_data['emirates_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $visa_data['emirates_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $visa_data['emirates_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $visa_data['emirates_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $visa_data['emirates_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $visa_data['emirates_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $visa_data['emirates_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $visa_data['emirates_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $visa_data['emirates_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $visa_data['emirates_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $visa_data['emirates_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $visa_data['emirates_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $visa_data['emirates_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $visa_data['emirates_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $visa_data['emirates_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $visa_data['emirates_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $visa_data['emirates_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $visa_data['emirates_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $visa_data['emirates_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $visa_data['emirates_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $visa_data['emirates_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $visa_data['emirates_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $visa_data['emirates_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $visa_data['emirates_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $visa_data['emirates_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $visa_data['emirates_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $visa_data['emirates_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $visa_data['emirates_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $visa_data['emirates_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $visa_data['emirates_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $visa_data['emirates_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $visa_data['emirates_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $visa_data['emirates_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal Application"
                                                            {{ $visa_data['emirates_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal Application</option>
                                                        <option value="Submission Form"
                                                            {{ $visa_data['emirates_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $visa_data['emirates_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $visa_data['emirates_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $visa_data['emirates_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $visa_data['emirates_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $visa_data['emirates_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $visa_data['emirates_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $visa_data['emirates_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $visa_data['emirates_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $visa_data['emirates_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $visa_data['emirates_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $visa_data['emirates_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $visa_data['emirates_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $visa_data['emirates_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $visa_data['emirates_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $visa_data['emirates_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $visa_data['emirates_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $visa_data['emirates_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $visa_data['emirates_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>
                                            </select>
                                            </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                    <div class="mb-3 align-items-end d-flex">
                                                        <div class="upload-file">
                                                            <label for='visa3_1-41-id8'>Uplaod File</label>
                                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                                <input type="file" class="form-control" id='visa3_1-41-id8'
                                                                    name="emirates_file" style="line-height: 1"
                                                                    accept=".pdf,.doc,.excel">
                                                                <div class="input-group-prepend">
                                                                    <small class="input-group-text"><span
                                                                            class="fa fa-paperclip"></span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                        $file_name = $visa_data->emirates_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_data->emirates_file)
                                                        <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->emirates_file) }}">
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

                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency Application
                                        </h6>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-32">Transaction No:</label>
                                                    <input type="text" class="form-control" id="visa-id-32"
                                                        value="{{$visa_data->residency_tran_no}}" name="residency_tran_no" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-33">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="visa-id-33"
                                                        value="{{$visa_data->residency_tran_fee}}" name="residency_tran_fee" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                <label for="visa1-i5-15">Status</label>
                                                <select id="visa1-i5-15"
                                                    class="form-control status-selector-select category"
                                                    name="residency_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$visa_data['residency_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$visa_data['residency_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$visa_data['residency_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$visa_data['residency_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-id-35">Date</label>
                                                    <input type="date"  value="{{$visa_data->residency_date}}" name="residency_date" class="form-control" id="visa-id-35">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                    <label for="new-visa8-9">Select File</label>
                                                    <select id="new-visa-8" class="form-control category" name="residency_file_name">
                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Personal Photo"
                                                            {{ $visa_data['residency_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $visa_data['residency_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $visa_data['residency_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $visa_data['residency_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $visa_data['residency_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $visa_data['residency_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $visa_data['residency_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $visa_data['residency_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $visa_data['residency_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $visa_data['residency_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $visa_data['residency_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $visa_data['residency_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $visa_data['residency_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $visa_data['residency_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $visa_data['residency_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $visa_data['residency_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $visa_data['residency_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $visa_data['residency_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $visa_data['residency_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $visa_data['residency_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $visa_data['residency_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $visa_data['residency_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $visa_data['residency_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $visa_data['residency_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $visa_data['residency_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $visa_data['residency_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $visa_data['residency_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $visa_data['residency_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $visa_data['residency_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $visa_data['residency_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $visa_data['residency_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $visa_data['residency_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $visa_data['residency_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $visa_data['residency_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $visa_data['residency_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $visa_data['residency_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $visa_data['residency_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $visa_data['residency_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal Application"
                                                            {{ $visa_data['residency_file_name'] == 'Signed Work Permit Renewal Application' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal Application</option>
                                                        <option value="Submission Form"
                                                            {{ $visa_data['residency_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $visa_data['residency_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $visa_data['residency_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $visa_data['residency_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $visa_data['residency_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $visa_data['residency_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $visa_data['residency_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $visa_data['residency_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $visa_data['residency_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $visa_data['residency_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $visa_data['residency_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $visa_data['residency_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $visa_data['residency_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $visa_data['residency_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $visa_data['residency_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $visa_data['residency_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $visa_data['residency_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $visa_data['residency_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $visa_data['residency_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option>
                                            </select>
                                            </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                    <div class="mb-3 align-items-end d-flex">
                                                        <div class="upload-file">
                                                            <label for='visa3-41-id8'>Uplaod File</label>
                                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                                <input type="file" class="form-control" id='visa3-41-id8'
                                                                    name="residency_file" style="line-height: 1"
                                                                    accept=".pdf,.doc,.excel">
                                                                <div class="input-group-prepend">
                                                                    <small class="input-group-text"><span
                                                                            class="fa fa-paperclip"></span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                        $file_name = $visa_data->residency_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_data->residency_file)
                                                        <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->residency_file) }}">
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
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                                </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                            {{-- biometric --}}
                            <div class="tab-pane fade" id="v-pills-biometric" role="tabpanel"
                                aria-labelledby="v-pills-biometric-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form action="{{route('individual-visa-process-updation',$visa_data->individual_id)}}"
                                        method="POST" enctype="multipart/form-data"
                                        class='py-2'>
                                            @csrf
                                            <input type="text" hidden name='biometric' value="biometric">
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                        <div class="row biometric-file-container">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-37-id">Transaction No:</label>
                                                    <input type="text" class="form-control" id="visa-37-id"
                                                        value="{{$visa_data->biometric_tranc_no}}" name="biometric_tranc_no" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-38-id">Transaction Fee</label>
                                                    <input type="text" class="form-control" id="visa-38-id"
                                                    value="{{$visa_data->biometric_tranc_fee}}" name="biometric_tranc_fee" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                <label for="visa1-id-16">Status</label>
                                                <select id="visa1-i6-15"
                                                    class="form-control status-selector-select category"
                                                    name="biometric_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved" {{$visa_data['biometric_status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="UnderProcess" {{$visa_data['biometric_status'] == 'UnderProcess' ? 'selected' : '' }}>Under Process</option>
                                                    <option value="Skip" {{$visa_data['biometric_status'] == 'Skip' ? 'selected' : '' }}>Skip</option>
                                                    <option value="Reject" {{$visa_data['biometric_status'] == 'Reject' ? 'selected' : '' }}>Reject</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="visa-39-id">Date</label>
                                                    <input type="date" class="form-control" id="visa-39-id"
                                                    value="{{$visa_data->biometric_date}}" name="biometric_date" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                                <div class="form-group">
                                                    <label for="visa-40-id">Biometric</label>
                                                    <select class="form-control biometric-select" id="visa-40-id" name="employee_biometric">
                                                        <option selected disabled>Select Option</option>
                                                        <option value='required' {{$visa_data['employee_biometric'] == 'required' ? 'selected' : '' }}>Required</option>
                                                        <option value='not required' {{$visa_data['employee_biometric'] == 'not required' ? 'selected' : '' }}>Not Required</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
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
                                                    $file_name = $visa_data->biometric_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($visa_data->biometric_file)
                                                    <a class="upload-img" target="_black" href="{{ asset('' . '/' . $visa_data->biometric_file) }}">
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
                                                    {{-- <a class="btn btn-success" href="{{ route('user-document.download', $ext[1]) }}"><span
                                                        class="fa fa-download text-white"></span></a> --}}
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
    </div>
</div>
@endsection
@section('js')
<script>
    @if (\Illuminate\Support\Facades\Session:: has('success'))
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
    @endif

    @if (\Illuminate\Support\Facades\Session:: has('error'))
    toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
    @endif
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
        $('.process-input-status').each(function(){
        if($(this).val()==='process started'){
            $(this).closest('.tab-content').find('.status-selector-select').each(function(){
                if($(this).val()!=='Skip' && $(this).val()!=='Approved'){
                    $('.tab-pane').each(function(){
                        $(this).removeClass('active show');
                    });
                    $('.parent-tab-pane').addClass('active show');
                    $(this).closest('.tab-pane').addClass('active show');
                    let a=$(this).closest('.tab-pane').attr('aria-labelledby');
                    $('#'+a).click();
                    return false;
                }
            });
        }
    });



</script>

@endsection
