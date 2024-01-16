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
    <h4>Individual Dashboard</h4>
    <p><span class="fa fa-users"></span> - Individual Visa Process</p>
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
                                <form action="" method="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='new visa' name='process_name'>
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-1-id">Process status</label>
                                                <input type="text" class="form-control" id="visa-1-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-entry" role="tabpanel"
                            aria-labelledby="v-pills-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Entry Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-7">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-7"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-8">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-8"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id2-15">Status</label>
                                                <select id="visa1-id2-15"
                                                    class="form-control status-selector-select category"
                                                    name="job_offer_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="UnderProcess">Under Process</option>
                                                    <option value="Skip">Skip</option>
                                                    <option value="Reject">Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-10">Date</label>
                                                <input type="date" class="form-control" id="visa-id-10"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                <label for="new-visa8_5-9">Select File</label>
                                                <select id="new-visa8_5-9" class="form-control category" name="job_offer_file_name"
                                                        value="" >
                                                        <option value="" selected disabled>Select Document</option>
                                                        {{--<!--  
                                                        <option value="Personal Photo"
                                                            {{ $new_visa['job_offer_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $new_visa['job_offer_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $new_visa['job_offer_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $new_visa['job_offer_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $new_visa['job_offer_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $new_visa['job_offer_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $new_visa['job_offer_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $new_visa['job_offer_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $new_visa['job_offer_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $new_visa['job_offer_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $new_visa['job_offer_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal</option>
                                                        <option value="Application" {{ $new_visa['job_offer_file_name'] == 'Application' ? 'selected' : '' }}>
                                                            Application</option>
                                                        <option value="Submission Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $new_visa['job_offer_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $new_visa['job_offer_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $new_visa['job_offer_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $new_visa['job_offer_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $new_visa['job_offer_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $new_visa['job_offer_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $new_visa['job_offer_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $new_visa['job_offer_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $new_visa['job_offer_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $new_visa['job_offer_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $new_visa['job_offer_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $new_visa['job_offer_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $new_visa['job_offer_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $new_visa['job_offer_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option> --> --}}
                                                    </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                <div class="mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa3_5-41-id8'>Uplaod File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa3_5-41-id8'
                                                                name="file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href=""><img class="upload-img"
                                                            src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 entry-visa-country">
                                            <div class="form-group">
                                                <label for="visa-id-11">Are u inside the country?</label>
                                                <select class="form-control entry-visa-select" id="visa-id-11">
                                                    <option selected disabled>select status</option>
                                                    <option value='yes'>Yes</option>
                                                    <option value='no'>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none Over-stay-fine">
                                            <div class="form-group">
                                                <label for="visa-id-12">Over Stay Fines?</label>
                                                <select class="form-control fine-select" id="visa-id-12">
                                                    <option selected disabled>Select fine</option>
                                                    <option value='yes'>Yes</option>
                                                    <option value='no'>No</option>
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
                                                            name="file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href=""><img class="upload-img"
                                                        src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class='btn btn-success px-5 py-2'>Submit</button>
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
                                                <input type="text" class="form-control" id="visa-id-14"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-15">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-15"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-i1-15">Status</label>
                                                <select id="visa1-i1-15"
                                                    class="form-control status-selector-select category"
                                                    name="job_offer_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="UnderProcess">Under Process</option>
                                                    <option value="Skip">Skip</option>
                                                    <option value="Reject">Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-17">Date</label>
                                                <input type="date" class="form-control" id="visa-id-17"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                <label for="new-visa8_4-9">Select File</label>
                                                <select id="new-visa8_4-9" class="form-control category" name="job_offer_file_name"
                                                        value="" >
                                                        <option value="" selected disabled>Select Document</option>
                                                        {{--<!--  
                                                        <option value="Personal Photo"
                                                            {{ $new_visa['job_offer_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $new_visa['job_offer_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $new_visa['job_offer_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $new_visa['job_offer_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $new_visa['job_offer_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $new_visa['job_offer_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $new_visa['job_offer_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $new_visa['job_offer_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $new_visa['job_offer_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $new_visa['job_offer_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $new_visa['job_offer_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal</option>
                                                        <option value="Application" {{ $new_visa['job_offer_file_name'] == 'Application' ? 'selected' : '' }}>
                                                            Application</option>
                                                        <option value="Submission Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $new_visa['job_offer_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $new_visa['job_offer_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $new_visa['job_offer_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $new_visa['job_offer_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $new_visa['job_offer_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $new_visa['job_offer_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $new_visa['job_offer_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $new_visa['job_offer_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $new_visa['job_offer_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $new_visa['job_offer_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $new_visa['job_offer_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $new_visa['job_offer_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $new_visa['job_offer_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $new_visa['job_offer_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option> --> --}}
                                                    </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                <div class="mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa3_4-41-id8'>Uplaod File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa3_4-41-id8'
                                                                name="file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href=""><img class="upload-img"
                                                            src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
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
                                                <input type="text" class="form-control" id="visa-id-18"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-19">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-19"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-i2-15">Status</label>
                                                <select id="visa1-i2-15"
                                                    class="form-control status-selector-select category"
                                                    name="job_offer_status">
                                                    <option value="" selected disabled>select</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="UnderProcess">Under Process</option>
                                                    <option value="Skip">Skip</option>
                                                    <option value="Reject">Reject</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-21">Date</label>
                                                <input type="date" class="form-control" id="visa-id-21"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                <label for="new-visa8_3-9">Select File</label>
                                                <select id="new-visa8_3-9" class="form-control category" name="job_offer_file_name"
                                                        value="" >
                                                        <option value="" selected disabled>Select Document</option>
                                                        {{--<!--  
                                                        <option value="Personal Photo"
                                                            {{ $new_visa['job_offer_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $new_visa['job_offer_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $new_visa['job_offer_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $new_visa['job_offer_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $new_visa['job_offer_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $new_visa['job_offer_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $new_visa['job_offer_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $new_visa['job_offer_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $new_visa['job_offer_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $new_visa['job_offer_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $new_visa['job_offer_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal</option>
                                                        <option value="Application" {{ $new_visa['job_offer_file_name'] == 'Application' ? 'selected' : '' }}>
                                                            Application</option>
                                                        <option value="Submission Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $new_visa['job_offer_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $new_visa['job_offer_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $new_visa['job_offer_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $new_visa['job_offer_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $new_visa['job_offer_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $new_visa['job_offer_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $new_visa['job_offer_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $new_visa['job_offer_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $new_visa['job_offer_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $new_visa['job_offer_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $new_visa['job_offer_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $new_visa['job_offer_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $new_visa['job_offer_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $new_visa['job_offer_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option> --> --}}
                                                    </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                <div class="mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa3_2-41-id8'>Uplaod File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa3_2-41-id8'
                                                                name="file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href=""><img class="upload-img"
                                                            src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-medical-fitness" role="tabpanel"
                            aria-labelledby="v-pills-medical-fitness-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-22">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-id-22"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-23">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-23"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-i3-15">Status</label>
                                            <select id="visa1-i3-15"
                                                class="form-control status-selector-select category"
                                                name="job_offer_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved">Approved</option>
                                                <option value="UnderProcess">Under Process</option>
                                                <option value="Skip">Skip</option>
                                                <option value="Reject">Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-25">Date</label>
                                                <input type="date" class="form-control" id="visa-id-25"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                            <div class="upload-file">
                                                <label for='visa-id-27'>Upload Medical</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa-id-27' name="file"
                                                        style="line-height: 1" accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href=""><img class="upload-img"
                                                    src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                    alt=""></a>
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                        </div>
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
                                                <input type="text" class="form-control" id="visa-id-28"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-29">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-29"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-i4-15">Status</label>
                                            <select id="visa1-i4-15"
                                                class="form-control status-selector-select category"
                                                name="job_offer_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved">Approved</option>
                                                <option value="UnderProcess">Under Process</option>
                                                <option value="Skip">Skip</option>
                                                <option value="Reject">Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-30">Date</label>
                                                <input type="date" class="form-control" id="emirates-transaction-date"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                <label for="new-visa8_1-9">Select File</label>
                                                <select id="new-visa8_1-9" class="form-control category" name="job_offer_file_name"
                                                        value="" >
                                                        <option value="" selected disabled>Select Document</option>
                                                        {{--<!--  
                                                        <option value="Personal Photo"
                                                            {{ $new_visa['job_offer_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $new_visa['job_offer_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $new_visa['job_offer_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $new_visa['job_offer_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $new_visa['job_offer_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $new_visa['job_offer_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $new_visa['job_offer_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $new_visa['job_offer_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $new_visa['job_offer_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $new_visa['job_offer_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $new_visa['job_offer_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal</option>
                                                        <option value="Application" {{ $new_visa['job_offer_file_name'] == 'Application' ? 'selected' : '' }}>
                                                            Application</option>
                                                        <option value="Submission Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $new_visa['job_offer_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $new_visa['job_offer_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $new_visa['job_offer_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $new_visa['job_offer_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $new_visa['job_offer_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $new_visa['job_offer_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $new_visa['job_offer_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $new_visa['job_offer_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $new_visa['job_offer_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $new_visa['job_offer_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $new_visa['job_offer_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $new_visa['job_offer_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $new_visa['job_offer_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $new_visa['job_offer_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option> --> --}}
                                                    </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                <div class="mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa3_1-41-id8'>Uplaod File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa3_1-41-id8'
                                                                name="file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href=""><img class="upload-img"
                                                            src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                            alt=""></a>
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
                                                <input type="text" class="form-control" id="visa-id-32"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-33">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-id-33"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-i5-15">Status</label>
                                            <select id="visa1-i5-15"
                                                class="form-control status-selector-select category"
                                                name="job_offer_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved">Approved</option>
                                                <option value="UnderProcess">Under Process</option>
                                                <option value="Skip">Skip</option>
                                                <option value="Reject">Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-35">Date</label>
                                                <input type="date" class="form-control" id="visa-id-35">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 gap-1 align-items-end mb-3">
                                                <label for="new-visa8-9">Select File</label>
                                                <select id="new-visa8-9" class="form-control category" name="job_offer_file_name"
                                                        value="" >
                                                        <option value="" selected disabled>Select Document</option>
                                                        {{--<!--  
                                                        <option value="Personal Photo"
                                                            {{ $new_visa['job_offer_file_name'] == 'Personal Photo' ? 'selected' : '' }}>Personal Photo
                                                        </option>
                                                        <option value="Passport" {{ $new_visa['job_offer_file_name'] == 'Passport' ? 'selected' : '' }}>
                                                            Passport</option>
                                                        <option value="Visit Visa" {{ $new_visa['job_offer_file_name'] == 'Visit Visa' ? 'selected' : '' }}>
                                                            Visit Visa</option>
                                                        <option value="Offer Letter"
                                                            {{ $new_visa['job_offer_file_name'] == 'Offer Letter' ? 'selected' : '' }}>Offer Letter</option>
                                                        <option value="MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Job Offer' ? 'selected' : '' }}>MOL Job Offer</option>
                                                        <option value="Signed MOL Job Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Job Offer' ? 'selected' : '' }}>Signed MOL Job
                                                            Offer</option>
                                                        <option value="MOL MB Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL MB Contract' ? 'selected' : '' }}>MOL MB Contract
                                                        </option>
                                                        <option value="Signed MOL MB Offer"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL MB Offer' ? 'selected' : '' }}>Signed MOL MB
                                                            Offer</option>
                                                        <option value="Preapproval Work Permit"
                                                            {{ $new_visa['job_offer_file_name'] == 'Preapproval Work Permit' ? 'selected' : '' }}>Preapproval
                                                            Work Permit</option>
                                                        <option value="Dubai Insurance"
                                                            {{ $new_visa['job_offer_file_name'] == 'Dubai Insurance' ? 'selected' : '' }}>Dubai Insurance
                                                        </option>
                                                        <option value="Entry Permit Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Entry Permit Visa' ? 'selected' : '' }}>Entry Permit Visa
                                                        </option>
                                                        <option value="Stamped Entry Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped Entry Visa' ? 'selected' : '' }}>Stamped Entry
                                                            Visa</option>
                                                        <option value="Change of Visa Status"
                                                            {{ $new_visa['job_offer_file_name'] == 'Change of Visa Status' ? 'selected' : '' }}>Change of Visa
                                                            Status</option>
                                                        <option value="Medical Fitness Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Medical Fitness Receipt' ? 'selected' : '' }}>Medical
                                                            Fitness Receipt</option>
                                                        <option value="Tawjeeh Receipt"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tawjeeh Receipt' ? 'selected' : '' }}>Tawjeeh Receipt
                                                        </option>
                                                        <option value="Emirates Id Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Id Application form' ? 'selected' : '' }}>
                                                            Emirates Id Application form</option>
                                                        <option value="Stamped EID Application form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Stamped EID Application form' ? 'selected' : '' }}>Stamped
                                                            EID Application form</option>
                                                        <option value="Residence Visa"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residence Visa' ? 'selected' : '' }}>Residence Visa
                                                        </option>
                                                        <option value="Work Permit" {{ $new_visa['job_offer_file_name'] == 'Work Permit' ? 'selected' : '' }}>
                                                            Work Permit</option>
                                                        <option value="Health Insurance Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Health Insurance Card' ? 'selected' : '' }}>Health
                                                            Insurance Card</option>
                                                        <option value="National Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'National Identity Card' ? 'selected' : '' }}>National
                                                            Identity Card</option>
                                                        <option value="Emirates Identity Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Emirates Identity Card' ? 'selected' : '' }}>Emirates
                                                            Identity Card</option>
                                                        <option value="Vehicle Registration Card"
                                                            {{ $new_visa['job_offer_file_name'] == 'Vehicle Registration Card' ? 'selected' : '' }}>Vehicle
                                                            Registration Card</option>
                                                        <option value="Driving License"
                                                            {{ $new_visa['job_offer_file_name'] == 'Driving License' ? 'selected' : '' }}>Driving License
                                                        </option>
                                                        <option value="Birth Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate
                                                        </option>
                                                        <option value="Marriage Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Marriage Certificate' ? 'selected' : '' }}>Marriage
                                                            Certificate</option>
                                                        <option value="School Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'School Certificate' ? 'selected' : '' }}>School
                                                            Certificate</option>
                                                        <option value="Diploma" {{ $new_visa['job_offer_file_name'] == 'Diploma' ? 'selected' : '' }}>Diploma
                                                        </option>
                                                        <option value="University Degree"
                                                            {{ $new_visa['job_offer_file_name'] == 'University Degree' ? 'selected' : '' }}>University Degree
                                                        </option>
                                                        <option value="Salary Certificate"
                                                            {{ $new_visa['job_offer_file_name'] == 'Salary Certificate' ? 'selected' : '' }}>Salary
                                                            Certificate</option>
                                                        <option value="Tenancy Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Tenancy Contract' ? 'selected' : '' }}>Tenancy Contract
                                                        </option>
                                                        <option value="MOL Cancellation form"
                                                            {{ $new_visa['job_offer_file_name'] == 'MOL Cancellation form' ? 'selected' : '' }}>MOL
                                                            Cancellation form</option>
                                                        <option value="Signed MOL Cancellation Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed MOL Cancellation Form' ? 'selected' : '' }}>Signed
                                                            MOL Cancellation Form</option>
                                                        <option value="Work Permit Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Cancellation Approval' ? 'selected' : '' }}>
                                                            Work Permit Cancellation Approval</option>
                                                        <option value="Residency Cancellation Approval"
                                                            {{ $new_visa['job_offer_file_name'] == 'Residency Cancellation Approval' ? 'selected' : '' }}>
                                                            Residency Cancellation Approval</option>
                                                        <option value="Modify MOL Contract"
                                                            {{ $new_visa['job_offer_file_name'] == 'Modify MOL Contract' ? 'selected' : '' }}>Modify MOL
                                                            Contract</option>
                                                        <option value="Work Permit Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Application' ? 'selected' : '' }}>Work Permit
                                                            Application</option>
                                                        <option value="Work Permit Renewal Application"
                                                            {{ $new_visa['job_offer_file_name'] == 'Work Permit Renewal Application' ? 'selected' : '' }}>Work
                                                            Permit Renewal Application</option>
                                                        <option value="Signed Work Permit Renewal"
                                                            {{ $new_visa['job_offer_file_name'] == 'Signed Work Permit Renewal' ? 'selected' : '' }}>Signed
                                                            Work Permit Renewal</option>
                                                        <option value="Application" {{ $new_visa['job_offer_file_name'] == 'Application' ? 'selected' : '' }}>
                                                            Application</option>
                                                        <option value="Submission Form"
                                                            {{ $new_visa['job_offer_file_name'] == 'Submission Form' ? 'selected' : '' }}>Submission Form
                                                        </option>
                                                        <option
                                                        value="Preapproval of work permit receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                                        Preapproval of work permit</option>
                                                    <option
                                                        value="Dubai Insurance receipts"{{ $new_visa['job_offer_file_name'] == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                                        Dubai Insurance</option>
                                                    <option
                                                        value="Preapproval work permit fees receipt"{{ $new_visa['job_offer_file_name'] == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                                        Preapproval work permit fees</option>
                                                    <option
                                                        value="Work permit Renewal Fees Receipt"{{ $new_visa['job_offer_file_name'] == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                                        Work permit Renewal Fees</option>
                                                    <option
                                                        value="Entry Visa Application Receipt"{{ $new_visa['job_offer_file_name'] == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                                        Entry Visa Application</option>
                                                    <option
                                                        value="Change of Visa Status Application"{{ $new_visa['job_offer_file_name'] == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                                        Change of Visa Status Application</option>
                                                    <option value="Medical"{{ $new_visa['job_offer_file_name'] == 'Medical' ? 'selected' : '' }}>Medical
                                                    </option>
                                                    <option value="Tawjeeh"{{ $new_visa['job_offer_file_name'] == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                                    </option>
                                                    <option
                                                        value="Heath Insurance"{{ $new_visa['job_offer_file_name'] == 'Heath Insurance' ? 'selected' : '' }}>
                                                        Health Insurance</option>
                                                    <option
                                                        value="Emirates ID Application"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Application' ? 'selected' : '' }}>
                                                        Emirates ID Application</option>
                                                    <option
                                                        value="Residency Visa Application"{{ $new_visa['job_offer_file_name'] == 'Residency Visa Application' ? 'selected' : '' }}>
                                                        Residency Visa Application</option>
                                                    <option value="Visa Fines"{{ $new_visa['job_offer_file_name'] == 'Visa Fines' ? 'selected' : '' }}>Visa
                                                        Fines</option>
                                                    <option
                                                        value="Emirates ID Fines"{{ $new_visa['job_offer_file_name'] == 'Emirates ID Fines' ? 'selected' : '' }}>
                                                        Emirates ID Fines</option>
                                                    <option value="Other fines"{{ $new_visa['job_offer_file_name'] == 'Other fines' ? 'selected' : '' }}>
                                                        Other fines</option>
                                                    <option
                                                        value="Health Insurance Fines"{{ $new_visa['job_offer_file_name'] == 'Health Insurance Fines' ? 'selected' : '' }}>
                                                        Health Insurance Fines</option>
                                                    <option
                                                        value="Immigration Application"{{ $new_visa['job_offer_file_name'] == 'Immigration Application' ? 'selected' : '' }}>
                                                        Immigration Application</option>
                                                    <option
                                                        value="MOHRE Application"{{ $new_visa['job_offer_file_name'] == 'MOHRE Application' ? 'selected' : '' }}>
                                                        MOHRE Application</option>
                                                        <option value="Other" {{ $new_visa['job_offer_file_name'] == 'Other' ? 'selected' : '' }}>Other
                                                        </option> --> --}}
                                                    </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container">
                                                <div class="mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa3-41-id8'>Uplaod File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa3-41-id8'
                                                                name="file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href=""><img class="upload-img"
                                                            src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                            alt=""></a>
                                                </div>
                                            </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="v-pills-biometric" role="tabpanel"
                            aria-labelledby="v-pills-biometric-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-37-id">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa-37-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-38-id">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa-38-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-16">Status</label>
                                            <select id="visa1-i6-15"
                                                class="form-control status-selector-select category"
                                                name="job_offer_status">
                                                <option value="" selected disabled>select</option>
                                                <option value="Approved">Approved</option>
                                                <option value="UnderProcess">Under Process</option>
                                                <option value="Skip">Skip</option>
                                                <option value="Reject">Reject</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-39-id">Date</label>
                                                <input type="date" class="form-control" id="visa-39-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="visa-40-id">Biometric</label>
                                                <select class="form-control biometric-select" id="visa-40-id">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required'>Required</option>
                                                    <option value='not required'>Not Required</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa-41-id'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa-41-id'
                                                            name="file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href=""><img class="upload-img"
                                                        src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

</script>

@endsection