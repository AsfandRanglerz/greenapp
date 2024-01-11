@extends('company.layout.master')
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
<div class="mb-5 admin-main-content-inner">
    <h4>Company Dashboard</h4>
    <p><span class="fa fa-users"></span> - Employee Visa Process</p>
    {{-- {{$new_visa_data->company_id}} --}}
    <div class="text-right">
        {{-- <a href="{{ route('company.employee.create') }}" class="mb-3 btn btn-success"><span
                class="fa fa-plus mr-2"></span>Add
            Employee</a> --}}
    </div>
    <!-- Header Tab Pills -->
    <div>
        <ul class="nav nav-bar horizontal_tabs nav-pills mb-3" id="header-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-visa-tab" data-toggle="pill" href="#pills-visa" role="tab"
                    aria-controls="pills-visa" aria-selected="true">New Visa</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-renewal-process-tab" data-toggle="pill" href="#pills-renewal-process"
                    role="tab" aria-controls="pills-renewal-process" aria-selected="false">Renewal-Process</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-work-permit-tab" data-toggle="pill" href="#pills-Work-permit" role="tab"
                    aria-controls="pills-work-permit" aria-selected="false">Work Permit</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-modify-visa-tab" data-toggle="pill" href="#pills-modify-visa" role="tab"
                    aria-controls="pills-modify-visa" aria-selected="false">Modification of visa</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-modify-emirates-tab" data-toggle="pill" href="#pills-modify-emirates"
                    role="tab" aria-controls="pills-modify-emirates" aria-selected="false">Modification of
                    Emirates</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-cancelation-tab" data-toggle="pill" href="#pills-cancelation" role="tab"
                    aria-controls="pills-Cancelation" aria-selected="false">Cancelation</a>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="header-tabContent-content">
        <!-- Visa Tabs -->
        <div class="tab-pane fade active show" id="pills-visa" role="tabpanel" aria-labelledby="v-pills-visa-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-visa-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab tabss" id="v-pills-start-tab" data-toggle="pill"
                            href="#v-pills-start" role="tab" aria-controls="v-pills-start" aria-selected="true">Start
                            Process</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa1-tab" data-toggle="pill"
                            href="#v-pills-visa1" role="tab" aria-controls="v-pills-visa1" aria-selected="true">Job
                            Offer</a>
                        <a class="nav-link bordered_tab tabbs" id="v-pills-visa2-tab" data-toggle="pill"
                            href="#v-pills-visa2" role="tab" aria-controls="v-visa2_1-profile"
                            aria-selected="false">Upload Signed ST &
                            MB</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa2_1-tab" data-toggle="pill"
                            href="#v-pills-visa2_1" role="tab" aria-controls="v-visa2-profile"
                            aria-selected="false">Waiting for Approval</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa3-tab" data-toggle="pill"
                            href="#v-pills-visa3" role="tab" aria-controls="v-pills-visa3" aria-selected="false">Pay
                            Dubai Insurance</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-preapproval-tab" data-toggle="pill"
                            href="#v-pills-preapproval" role="tab" aria-controls="v-pills-preapproval"
                            aria-selected="false">Preapproval Work <br class='d-none d-lg-block'>Permit Fees & Upload
                            <br class='d-none d-lg-block'>the documents</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa4-tab" data-toggle="pill"
                            href="#v-pills-visa4" role="tab" aria-controls="v-pills-visa4" aria-selected="false">Entry
                            Visa</a>
                        <a class="nav-link bordered_tab tabss change-visa-status" id="v-pills-visa5-tab"
                            data-toggle="pill" href="#v-pills-visa-5" role="tab" aria-controls="v-pills-visa-5"
                            aria-selected="false">Change of visa status</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa6-tab" data-toggle="pill"
                            href="#v-pills-visa6" role="tab" aria-controls="v-pills-visa6" aria-selected="false">Medical
                            Fitness</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa7-tab" data-toggle="pill"
                            href="#v-pills-visa7" role="tab" aria-controls="v-pills-visa7" aria-selected="false">Tawjeeh
                            Classes</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa8-tab" data-toggle="pill"
                            href="#v-pills-visa8" role="tab" aria-controls="v-pills-visa8"
                            aria-selected="false">Contract Submission</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa9-tab" data-toggle="pill"
                            href="#v-pills-visa9" role="tab" aria-controls="v-pills-visa9" aria-selected="false">Health
                            Insurance</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa10-tab" data-toggle="pill"
                            href="#v-pills-visa10" role="tab" aria-controls="v-pills-visa10" aria-selected="false">Work
                            Permit</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa11-tab" data-toggle="pill"
                            href="#v-pills-visa11" role="tab" aria-controls="v-pills-visa11"
                            aria-selected="false">Emirates ID & <br class='d-none d-lg-block'> Residency
                            Application</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-visa12-tab" data-toggle="pill"
                            href="#v-pills-visa12" role="tab" aria-controls="v-pills-visa12"
                            aria-selected="false">Employee Biometric</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3 ">
                    <div class="tab-content" id="v-visa-tabContent">
                        <div class="tab-pane fade show active process-start" id="v-pills-start" role="tabpanel"
                            aria-labelledby="pills-visa-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.sent-new-visa-request', $employee->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            {{-- {{$employee->name}} --}}
                                            {{-- <form action="{{route('company.sent-new-visa-request',$employee->id)}}"
                                                method="POST"> --}}
                                                {{-- <a href="" class='btn btn-success px-5 py-2'>Start Process</a> --}}
                                                @php
                                                $authId = Auth::guard('company')->id();
                                                $n_visa = App\Models\NewVisaProcess::where('employee_id',$employee->id)->where('company_id',$authId)->first();
                                                @endphp
                                                <input type="hidden" value='new visa' name='process_name'>
                                                {{-- @dd($n_visa); --}}
                                                @if(!$n_visa)
                                                <button class='btn btn-success px-5 py-2' type="submit">Start
                                                    Process</button>
                                                @endif

                                                {{--
                                            </form> --}}
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-visa">Process status</label>

                                                @if($n_visa)
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='process started'>
                                                @else
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='not started'>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @if ($new_visa_data)
                        {{-- Job offer --}}
                        <div class="tab-pane fade" id="v-pills-visa1" role="tabpanel"
                            aria-labelledby="v-pills-visa1-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Job Offer, MB
                                        Contracts
                                        + Preapproval of work permit</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-number">Job Offer Transaction
                                                    No:</label>
                                                <input type="text" readonly class="form-control"
                                                    id="start-process-transaction-number" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_tran_no }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-number">MB Contracts
                                                    Transaction No:</label>
                                                <input type="text" readonly class="form-control"
                                                    id="start-process-transaction-number" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_mb_trc_no }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-number">Preapproval of work
                                                    permit Transaction No:</label>
                                                <input type="text" readonly class="form-control"
                                                    id="start-process-transaction-number" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_preapproval_wp_t_no }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-fee">Transaction Fee</label>
                                                <input type="text" readonly class="form-control"
                                                    id="start-process-transaction-fee" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_tran_fees }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                            <label for="">Status</label>
                                            <input type="text" readonly class="form-control status-container"
                                                id="start-process-transaction-fee" clas placeholder="..."
                                                value="{{ $new_visa_data->job_offer_status }}">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-date">Date</label>
                                                <input type="date" readonly class="form-control"
                                                    id="start-process-transaction-date" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->job_offer_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->job_offer_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->job_offer_file)
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <div class='border-bottom'>
                                                            <a target="_black"
                                                                href="{{ asset('' . '/' . $new_visa_data->job_offer_file) }}">
                                                                @if ($ext[1] == 'pdf')
                                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                    style="height: 50px;width:50px">
                                                                @elseif($ext[1] == 'doc')
                                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                    style="height: 50px;width:50px">
                                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                    style="height: 50px;width:50px">
                                                                @elseif($ext[1] == 'pptx')
                                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                    style="height: 50px;width:50px">
                                                                @else
                                                                <img src="{{ asset('' . '/' . $new_visa_data->job_offer_file) }}"
                                                                    style="height: 50px;width:50px">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                {{-- <a href=""><img class="upload-img"
                                                        src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                        alt=""></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- Signed Mb St --}}
                        <div class="tab-pane fade" id="v-pills-visa2" role="tabpanel"
                            aria-labelledby="v-pills-visa2-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.new-visa-updation-company', $new_visa_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step1' name='sign_mb' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload ST & MB
                                    </h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-number">Job Offer Transaction
                                                    No:</label>
                                                <input type="text" readonly class="form-control"
                                                    id="start-process-transaction-number" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_tran_no }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-number">MB Contracts
                                                    Transaction No:</label>
                                                <input type="text" readonly class="form-control"
                                                    id="start-process-transaction-number" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_mb_trc_no }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-number">Preapproval of work
                                                    permit Transaction No:</label>
                                                <input type="text" readonly class="form-control"
                                                    id="start-process-transaction-number" placeholder="..."
                                                    value="{{ $new_visa_data->job_offer_preapproval_wp_t_no }}">
                                            </div>
                                        </div>

                                        {{-- <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa2-transaction-fee">Transaction Fee</label>
                                                <input type="text" readonly class="form-control"
                                                    id="visa2-transaction-fee" placeholder="..."
                                                    value="{{$new_visa_data->job_offer_preapproval_wp_t_no}}">
                                            </div>
                                        </div> --}}

                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <input type="text" readonly class="form-control status-container"
                                                    id="visa2-transaction-fee" placeholder="..."
                                                    value="{{ $new_visa_data->signed_mb_st_status }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="StMB-transaction-date">Date</label>
                                                <input type="date" readonly class="form-control"
                                                    id="StMB-transaction-date" placeholder="..."
                                                    value="{{ $new_visa_data->signed_mb_st_date }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-12">
                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="flexCheckDefault">
                                                <label class="custom-control-label" for="flexCheckDefault">The
                                                    contract
                                                    has been signed.</label>
                                            </div>
                                        </div>

                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                            <div class="upload-file">
                                                <label for='visa2-file'>Upload ST & MB</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa2-file'
                                                        name="signed_mb_st_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $new_visa_data->signed_mb_st_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa_data->signed_mb_st_file)
                                            <a target="_black"
                                                href="{{ asset('' . '/' . $new_visa_data->signed_mb_st_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $new_visa_data->signed_mb_st_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'
                                                type="submit">Submit</button>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- waiting for approval --}}
                        <div class="tab-pane fade" id="v-pills-visa2_1" role="tabpanel"
                            aria-labelledby="v-pills-visa2_1-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.new-visa-updation-company', $new_visa_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='waiting_for_approval' name='waiting_for_approval' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for
                                        Approval
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                            <div class="form-group mb-3 ">
                                                <label for="visa3-transaction-number1">Sign MB Status</label>
                                                <input type="text"
                                                    class="form-control new-visa-signmbstatus status-container" readonly
                                                    id="visa3-transaction-number1" placeholder="..."
                                                    value="{{ $new_visa_data->waiting_for_approval_status }}">
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
                                                @php
                                                $file_name = $new_visa_data->waiting_fappro_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->waiting_fappro_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->waiting_fappro_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->waiting_fappro_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                            <label for='sponsor2-textareara-13'>Comments</label>
                                            <textarea type="text" id='sponsor2-textarear-13' name="comment"
                                                placeholder="Enter Your Comments ..." class="form-control"
                                                rows="5">{{ $new_visa_data->waiting_fappro_reason }}</textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                            <div class="form-group mb-3">
                                                <label for="sponsor-approval-13">Approval No:</label>
                                                <input type="text" class="form-control" id="sponsor-approval-13"
                                                    placeholder="..." value="{{ $new_visa_data->waiting_fappro_no }}">
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                            <div class="upload-file">
                                                <label for='visa2-file-bio_1'>Upload ST & MB</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa2-file-bio_1'
                                                        name="waiting_fappro_reason_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $new_visa_data->waiting_fappro_reason_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa_data->waiting_fappro_reason_file)
                                            <a target="_black"
                                                href="{{ asset('' . '/' . $new_visa_data->waiting_fappro_reason_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $new_visa_data->waiting_fappro_reason_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{-- dubai insurance --}}
                        <div class="tab-pane fade" id="v-pills-visa3" role="tabpanel"
                            aria-labelledby="v-pills-visa3-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay Dubai
                                        insurance
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#visa3-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa3-transaction-number"
                                                    placeholder="..." disabled
                                                    value="{{ $new_visa_data->dubai_insurance_tran_no }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#visa3-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa3-transaction-fee"
                                                    placeholder="..." disabled
                                                    value="{{ $new_visa_data->dubai_insurance_tran_fees }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="#status">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="dubai-insurance-date" placeholder="..." disabled
                                                value="{{ $new_visa_data->dubai_insurance_status }}">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#dubai-insurance-date">Date</label>
                                                <input type="date" class="form-control" id="dubai-insurance-date"
                                                    placeholder="..." disabled
                                                    value="{{ $new_visa_data->dubai_insurance_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->dubai_insurance_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->dubai_insurance_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->dubai_insurance_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->dubai_insurance_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->dubai_insurance_file) }}"
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

                        {{-- preapproval of work permit --}}
                        <div class="tab-pane fade" id="v-pills-preapproval" role="tabpanel"
                            aria-labelledby="v-pills-preapproval-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Preapproval
                                        Work Permit
                                        Fees and upload the documents</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#preapproval-transaction-number">Transaction
                                                    No:</label>
                                                {{-- {{dd($new_visa_data->pre_approved_wp_tran_no)}} --}}
                                                <input type="text" class="form-control"
                                                    id="preapproval-transaction-number" placeholder="..." disabled
                                                    value="{{ $new_visa_data->pre_approved_wp_tran_no }}" name="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#preapproval-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="preapproval-transaction-fee"
                                                    placeholder="..." disabled
                                                    value="{{ $new_visa_data->pre_approved_wp_tran_fees }}" name="">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="preapproval-transaction-date" placeholder="..." disabled
                                                value="{{ $new_visa_data->pre_approved_wp_status }}" name="">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#preapproval-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="preapproval-transaction-date" placeholder="..." disabled
                                                    value="{{ $new_visa_data->pre_approved_wp_date }}" name="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->pre_approved_wp_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->pre_approved_wp_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->pre_approved_wp_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->pre_approved_wp_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->pre_approved_wp_file) }}"
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

                        {{-- entry visa --}}
                        <div class="tab-pane fade" id="v-pills-visa4" role="tabpanel"
                            aria-labelledby="v-pills-visa4-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.new-visa-updation-company', $new_visa_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step2' name='entry_visa' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Entry Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#entry-visa-number">Transaction No:</label>
                                                <input type="text" class="form-control" id="entry-visa-number"
                                                    placeholder="..." disabled value={{ $new_visa_data->enter_visa_ts_no
                                                }}>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#entry-visa-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="entry-visa-fee"
                                                    placeholder="..." disabled value={{
                                                    $new_visa_data->enter_visa_ts_fee }}>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <input type="text" class="form-control status-container"
                                                    id="entry-transaction-date" placeholder="..." disabled value={{
                                                    $new_visa_data->enter_visa_status }}>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#entry-transaction-date">Date</label>
                                                <input type="date" class="form-control" id="entry-transaction-date"
                                                    placeholder="..." disabled value={{ $new_visa_data->enter_visa_date
                                                }}>
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->enter_visa_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->enter_visa_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->enter_visa_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->enter_visa_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->enter_visa_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 entry-visa-country">
                                            <div class="form-group">
                                                <label for="#select-entry-visa">Are u inside the country?</label>
                                                <select class="form-control entry-visa-select" id="entry-visa-select"
                                                    name="enter_visa_country">
                                                    <option selected disabled>select status</option>
                                                    <option value='yes' {{ $new_visa_data->enter_visa_country == 'yes' ?
                                                        'selected' : '' }}>
                                                        Yes</option>
                                                    <option value='no' {{ $new_visa_data->enter_visa_country == 'no' ?
                                                        'selected' : '' }}>
                                                        No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none Over-stay-fine">
                                            <div class="form-group">
                                                <label for="select-fine-file">Over Stay Fines?</label>
                                                <select class="form-control fine-select" id="select-fine-file"
                                                    name="enter_visa_over_sf">
                                                    <option selected disabled>Select fine</option>
                                                    <option value='yes' {{ $new_visa_data->enter_visa_over_sf == 'yes' ?
                                                        'selected' : '' }}>
                                                        Yes</option>
                                                    <option value='no' {{ $new_visa_data->enter_visa_over_sf == 'no' ?
                                                        'selected' : '' }}>
                                                        No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fine-files-container d-none ">
                                        <div class="row  align-items-end ">
                                            <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='#over-stay-file'>Upload file</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='over-stay-file'
                                                            name="enter_visa_osf_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $new_visa_data->enter_visa_osf_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->enter_visa_osf_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->enter_visa_osf_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->enter_visa_osf_file) }}"
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

                        {{-- change of visa --}}
                        <div class="tab-pane fade" id="v-pills-visa-5" role="tabpanel"
                            aria-labelledby="v-pills-visa5-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Change of Visa
                                        status
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-number5">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number5" disabled placeholder="..."
                                                    value="{{ $new_visa_data->change_of_visa_tno }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="start-process-transaction-fee5">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee5" disabled placeholder="..."
                                                    value="{{ $new_visa_data->change_of_visa_tfee }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-fee5" disabled placeholder="..."
                                                value="{{ $new_visa_data->change_of_visa_status }}">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="change-transaction-date">Date</label>
                                                <input type="date" class="form-control" id="change-date" disabled
                                                    placeholder="..." value="{{ $new_visa_data->change_of_visa_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->change_of_visa_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->change_of_visa_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->change_of_visa_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->change_of_visa_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->change_of_visa_file) }}"
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
                        {{-- medical fitness --}}
                        <div class="tab-pane fade" id="v-pills-visa6" role="tabpanel"
                            aria-labelledby="v-pills-visa6-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.new-visa-updation-company', $new_visa_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step3' name='medical_fitness' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number6">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number6" disabled
                                                    value="{{ $new_visa_data->medical_fitness_tno }}" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee6">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee6" disabled
                                                    value="{{ $new_visa_data->medical_fitness_tfee }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-fee6" disabled
                                                value="{{ $new_visa_data->medical_fitness_status }}" placeholder="...">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#change-transaction-date">Date</label>
                                                <input type="date" class="form-control" id="change-date" disabled
                                                    value="{{ $new_visa_data->medical_fitness_date }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                            <div class="upload-file">
                                                <label for='#visa-medical'>Upload Medical</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa-medical'
                                                        name="medical_fitness_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $new_visa_data->medical_fitness_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa_data->medical_fitness_file)
                                            <a target="_black"
                                                href="{{ asset('' . '/' . $new_visa_data->medical_fitness_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $new_visa_data->medical_fitness_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{-- Tawjeeh classes --}}
                        <div class="tab-pane fade" id="v-pills-visa7" role="tabpanel"
                            aria-labelledby="v-pills-visa7-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.new-visa-updation-company', $new_visa_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step4' name='tawjeeh_classes' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Tawjeeh
                                        training
                                        classes</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number5">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number6" placeholder="..."
                                                    value="{{ $new_visa_data->tawjeeh_trans_no }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee6">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee6" placeholder="..."
                                                    value="{{ $new_visa_data->tawjeeh_trans_fee }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-fee6" placeholder="..."
                                                value="{{ $new_visa_data->tawjeeh_status }}" disabled>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#tawjeeh-transaction-date">Date</label>
                                                <input type="date" class="form-control" id="tawjeeh-date"
                                                    placeholder="..." value="{{ $new_visa_data->tawjeeh_date }}"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 tawjeeh-parent col-md-6">
                                            <div class="form-group">
                                                <label for="#select-tawjeeh-payment">Tawjeeh Payment</label>
                                                <select class="form-control select-tawjeeh-payment"
                                                    id="select-tawjeeh-payment" name="tawjeeh_payment">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='yes' {{ $new_visa_data->tawjeeh_payment == 'yes' ?
                                                        'selected' : '' }}>
                                                        Yes</option>
                                                    <option value='no' {{ $new_visa_data->tawjeeh_payment == 'no' ?
                                                        'selected' : '' }}>
                                                        No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 tawjeeh-document d-none col-md-6 mb-3 align-items-end ">
                                            <div class="upload-file">
                                                <label for='#visa-tawjeeh-medical'>Upload Document</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa-tawjeeh-medical'
                                                        name="tawjeeh_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $new_visa_data->tawjeeh_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($new_visa_data->tawjeeh_file)
                                            <a target="_black"
                                                href="{{ asset('' . '/' . $new_visa_data->tawjeeh_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $new_visa_data->tawjeeh_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- contract submition --}}
                        <div class="tab-pane fade" id="v-pills-visa8" role="tabpanel"
                            aria-labelledby="v-pills-visa8-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Contract
                                        Submission
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number8">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number8" placeholder="..."
                                                    value="{{ $new_visa_data->contract_tran_no }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee8">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee8" placeholder="..."
                                                    value="{{ $new_visa_data->contract_tran_fee }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-number8" placeholder="..."
                                                value="{{ $new_visa_data->contract_status }}" disabled>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#tawjeeh-transaction-date">Date</label>
                                                <input type="date" class="form-control" id="tawjeeh-date"
                                                    placeholder="..." value="{{ $new_visa_data->contract_date }}"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->contract_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->contract_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->contract_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->contract_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->contract_file) }}"
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

                        {{-- health insurance --}}
                        <div class="tab-pane fade" id="v-pills-visa9" role="tabpanel"
                            aria-labelledby="v-pills-visa9-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Health
                                        Insurance</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number9">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number9" placeholder="..."
                                                    value="{{ $new_visa_data->health_insur_tran_no }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee9">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee9" placeholder="..."
                                                    value="{{ $new_visa_data->health_insur_tran_fee }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-number9" placeholder="..."
                                                value="{{ $new_visa_data->health_insur_status }}" disabled>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#health-insurance-date">Date</label>
                                                <input type="date" class="form-control" id="health-insurance-date"
                                                    placeholder="..." value="{{ $new_visa_data->health_insur_date }}"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->health_insur_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->health_insur_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->health_insur_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->health_insur_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->health_insur_file) }}"
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

                        {{-- work permit --}}
                        <div class="tab-pane fade" id="v-pills-visa10" role="tabpanel"
                            aria-labelledby="v-pills-visa10-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work Permit
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number10">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number10" placeholder="..."
                                                    value="{{ $new_visa_data->work_permit_tran_no }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee10">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee10" placeholder="..."
                                                    value="{{ $new_visa_data->work_permit_tran_fee }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-fee10" placeholder="..."
                                                value="{{ $new_visa_data->work_permit_status }}" disabled>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#work-permit-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="work-permit-transaction-date" placeholder="..."
                                                    value="{{ $new_visa_data->work_permit_date }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->work_permit_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->work_permit_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->work_permit_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->work_permit_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->work_permit_file) }}"
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

                        {{-- Emirates Id & Residency appplication --}}
                        <div class="tab-pane fade" id="v-pills-visa11" role="tabpanel"
                            aria-labelledby="v-pills-visa11-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='pt-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Emirates ID
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number11">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number11" placeholder="..."
                                                    value="{{ $new_visa_data->emirates_tran_no }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee11">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee11" placeholder="..."
                                                    value="{{ $new_visa_data->emirates_tran_fee }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-number11" placeholder="..."
                                                value="{{ $new_visa_data->emirates_status }}" disabled>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#emirates-transaction-date">Date</label>
                                                <input type="date" class="form-control" id="emirates-transaction-date"
                                                    placeholder="..." value="{{ $new_visa_data->emirates_date }}"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->emirates_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->emirates_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->emirates_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->emirates_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->emirates_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="" class='pt-4 pb-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency
                                        Application
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number111">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number112"
                                                    value="{{ $new_visa_data->residency_tran_no }}" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee112">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee112"
                                                    value="{{ $new_visa_data->residency_tran_fee }}" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-fee112"
                                                value="{{ $new_visa_data->residency_status }}" disabled
                                                placeholder="...">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#emirates-transaction-date2">Date</label>
                                                <input type="date" class="form-control" id="emirates-transaction-date2"
                                                    value="{{ $new_visa_data->residency_date }}" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $new_visa_data->residency_file_name }}</label>
                                                @php
                                                $file_name = $new_visa_data->residency_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->residency_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->residency_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->residency_file) }}"
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

                        {{-- Employee biometric --}}
                        <div class="tab-pane fade" id="v-pills-visa12" role="tabpanel"
                            aria-labelledby="v-pills-visa12-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.new-visa-updation-company', $new_visa_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step5' name='bio_metric' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Employee
                                        Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number12">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number12"
                                                    value="{{ $new_visa_data->biometric_tranc_no }}" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee12">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee12"
                                                    value="{{ $new_visa_data->biometric_tranc_fee }}" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-number12"
                                                value="{{ $new_visa_data->biometric_status }}" disabled
                                                placeholder="...">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#biometric1-date">Date</label>
                                                <input type="date" class="form-control" id="#biometric1-date"
                                                    value="{{ $new_visa_data->biometric_date }}" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="#select-biometric-file">Employee Biometric</label>
                                                <select class="form-control biometric-select" id="select-biometric"
                                                    name="employee_biometric">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required' {{ $new_visa_data->employee_biometric ==
                                                        'required' ? 'selected' : '' }}>
                                                        Required</option>
                                                    <option value='not required' {{ $new_visa_data->employee_biometric
                                                        == 'not required' ? 'selected' : '' }}>
                                                        Not Required</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='#visa2-file-bio'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa2-file-bio'
                                                            name="biometric_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $new_visa_data->biometric_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($new_visa_data->biometric_file)
                                                <a target="_black"
                                                    href="{{ asset('' . '/' . $new_visa_data->biometric_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $new_visa_data->biometric_file) }}"
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Renewal Process Tab-->
        <div class="tab-pane fade" id="pills-renewal-process" role="tabpanel"
            aria-labelledby="pills-renewal-process-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                        id="v-renewal-proces-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab tabss" id="v-pills-renewal-process0-tab"
                            data-toggle="pill" href="#v-pills-renewal-process0" role="tab"
                            aria-controls="v-pills-renewal-process1" aria-selected="true">Start Process</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process1-tab" data-toggle="pill"
                            href="#v-pills-renewal-process1" role="tab" aria-controls="v-pills-renewal-process1"
                            aria-selected="true">Medical Fitness</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process2-tab" data-toggle="pill"
                            href="#v-pills-renewal-process2" role="tab" aria-controls="v-pills-renewal-process2"
                            aria-selected="false">Work Permit
                            Application</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process3-tab" data-toggle="pill"
                            href="#v-pills-renewal-process3" role="tab" aria-controls="v-pills-renewal-process3"
                            aria-selected="false">Upload Signed MB</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process4-tab" data-toggle="pill"
                            href="#v-pills-renewal-process4" role="tab" aria-controls="v-pills-renewal-process4"
                            aria-selected="false">Pay Dubai Insurance</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process5-tab" data-toggle="pill"
                            href="#v-pills-renewal-process5" role="tab" aria-controls="v-pills-renewal-process5"
                            aria-selected="false">Contract Submission</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process6-tab" data-toggle="pill"
                            href="#v-pills-renewal-process6" role="tab" aria-controls="v-pills-renewal-process6"
                            aria-selected="false">Tawjeeh Classes</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process7-tab" data-toggle="pill"
                            href="#v-pills-renewal-process7" role="tab" aria-controls="v-pills-renewal-process7"
                            aria-selected="false">Residency & ID
                            Renewal</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-renewal-process8-tab" data-toggle="pill"
                            href="#v-pills-renewal-process8" role="tab" aria-controls="v-pills-renewal-process8"
                            aria-selected="false">Employee Biometric</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                    <div class="tab-content" id="v-renewal-process-tabContent">
                        <div class="tab-pane fade show active process-start" id="v-pills-renewal-process0"
                            role="tabpanel" aria-labelledby="pills-renewal-process-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.sent-new-visa-request', $employee->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start renewal
                                        process
                                    </h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden">
                                            <input type="hidden" value='renewal process' name='process_name'>

                                            @php
                                            $authId = Auth::guard('company')->id();
                                            $re_pro =
                                            App\Models\RenewalProcess::where('employee_id',$employee->id)->where('company_id',$authId)->first();
                                            @endphp
                                            @if (!$re_pro)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-visa">Process status</label>
                                                @if ($re_pro)
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='process started'>
                                                @else
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='not started'>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($renewal_process_data)
                        {{-- medicalfitness --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process1" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process1-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.renewal-process-company', $renewal_process_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step1' name='medical_fitness' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical
                                        Fitness</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-medical-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="renewal-medical-transaction-number" disabled
                                                    value="{{ $renewal_process_data->medical_fitness_tran_no }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-medical-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="renewal-medical-fee"
                                                    disabled
                                                    value="{{ $renewal_process_data->medical_fitness_tran_fees }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <input type="text" class="form-control status-container"
                                                    id="renewal-process1-date" disabled
                                                    value="{{ $renewal_process_data->medical_fitness_status }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process1-date">Date</label>
                                                <input type="date" class="form-control" id="renewal-process1-date"
                                                    disabled value="{{ $renewal_process_data->medical_fitness_date }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 renewal-fitness-parent">
                                            <div class="form-group">
                                                <label for="fitness-renewal">Fitness Status</label>
                                                <select class="form-control renewal-fitness" id="fitness-renewal"
                                                    name="medical_fitness_st">
                                                    <option selected disabled>select fitness</option>
                                                    {{-- <option value="Reject"
                                                        {{$renewal_process['work_permit_status']=='Reject' ? 'selected'
                                                        : '' }}> --}}
                                                    <option value="fit" {{
                                                        $renewal_process_data['medical_fitness_st']=='fit' ? 'selected'
                                                        : '' }}>
                                                        Fit</option>
                                                    <option value="not fit" {{
                                                        $renewal_process_data['medical_fitness_st']=='not fit'
                                                        ? 'selected' : '' }}>
                                                        Not Fit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 d-none renewal-medical-file align-items-end">
                                            <div class="upload-file">
                                                <label for='visa2-file'>Upload ST & MB</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa2-file'
                                                        name="medical_fitness_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $renewal_process_data->medical_fitness_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($renewal_process_data->medical_fitness_file)
                                            <a class="upload-img" target="_black"
                                                href="{{ asset('' . '/' . $renewal_process_data->medical_fitness_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $renewal_process_data->medical_fitness_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- work permit application --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process2" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process2-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work permit
                                        application
                                    </h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#work-permit-app-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="work-permit-app-transaction-number" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->work_permit_tran_no }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#work-permit-app-transaction-fee">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="work-permit-app-transaction-fee" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->work_permit_tran_fee }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <input type="text" class="form-control status-container"
                                                    id="work-permit-app-transaction-fee" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->work_permit_status }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process2-date">Date</label>
                                                <input type="date" class="form-control" id="renewal-process2-date"
                                                    placeholder="..." disabled
                                                    value="{{ $renewal_process_data->work_permit_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $renewal_process_data->work_permit_file_name
                                                    }}</label>
                                                @php
                                                $file_name = $renewal_process_data->work_permit_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process_data->work_permit_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $renewal_process_data->work_permit_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $renewal_process_data->work_permit_file) }}"
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
                        {{-- upload signed st --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process3" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process3-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.renewal-process-company', $renewal_process_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step2' name='signed_mb' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload signed
                                        MB</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#upload-signed-mb-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="upload-signed-mb-transaction-number" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->signed_mb_tranc_no }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#upload-signed-mb-transaction-fee">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="upload-signed-mb-transaction-fee" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->signed_mb_tranc_fee }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <input type="text" class="form-control status-container"
                                                    id="upload-signed-mb-transaction-fee" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->signed_mb_status }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process3-date">Date</label>
                                                <input type="date" class="form-control" id="renewal-process3-date"
                                                    placeholder="..." disabled
                                                    value="{{ $renewal_process_data->signed_mb_date }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-12">
                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="renwal-contract1">
                                                <label class="custom-control-label" for="renwal-contract1">The
                                                    contract
                                                    has been signed.</label>
                                            </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                            <div class="upload-file">
                                                <label for='renewal-process-file'>Upload ST & MB</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='renewal-process-file'
                                                        name="signed_mb_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $renewal_process_data->signed_mb_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($renewal_process_data->signed_mb_file)
                                            <a class="upload-img" target="_black"
                                                href="{{ asset('' . '/' . $renewal_process_data->signed_mb_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $renewal_process_data->signed_mb_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'
                                                type="submit">Add</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- pay dubai insurance --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process4" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process4-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay Dubai
                                        insurance
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number12">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number12" disabled placeholder="..."
                                                    value='{{ $renewal_process_data->pay_dubai_insu_tran_no }}'>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee12">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee12" disabled placeholder="..."
                                                    value='{{ $renewal_process_data->pay_dubai_insu_tran_fee }}'>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="start-process-transaction-fee12" disabled placeholder="..."
                                                value='{{ $renewal_process_data->pay_dubai_insu_status }}'>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process3-date">Date</label>
                                                <input type="date" class="form-control" id="renewal-process3-date"
                                                    disabled placeholder="..."
                                                    value='{{ $renewal_process_data->pay_dubai_insu_date }}'>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $renewal_process_data->pay_dubai_insu_file_name
                                                    }}</label>
                                                @php
                                                $file_name = $renewal_process_data->pay_dubai_insu_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process_data->pay_dubai_insu_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $renewal_process_data->pay_dubai_insu_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $renewal_process_data->pay_dubai_insu_file) }}"
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
                        {{-- contract submission --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process5" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process5-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Contract
                                        submission
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#RenewalProcess4-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="RenewalProcess4-transaction-number" disabled
                                                    value="{{ $renewal_process_data->contract_sub_tranc_no }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#RenewalProcess4-transaction-fee">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="RenewalProcess4-transaction-fee" disabled
                                                    value="{{ $renewal_process_data->contract_sub_tranc_fee }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="RenewalProcess4-transaction-fee" disabled
                                                value="{{ $renewal_process_data->contract_sub_status }}"
                                                placeholder="...">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process3-date">Date</label>
                                                <input type="date" class="form-control" id="renewal-process3-date"
                                                    disabled value="{{ $renewal_process_data->contract_sub_date }}"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $renewal_process_data->contract_sub_file_name
                                                    }}</label>
                                                @php
                                                $file_name = $renewal_process_data->contract_sub_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process_data->contract_sub_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $renewal_process_data->contract_sub_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $renewal_process_data->contract_sub_file) }}"
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
                        {{-- tawjeeh classes --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process6" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process6-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.renewal-process-company', $renewal_process_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step3' name='tawjeeh_class' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Tawjeeh
                                        classes</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#Renewal-process7-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-number" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->tawjeeh_tranc_no }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#Renewal-process7-transaction-fee">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-fee" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->tawjeeh_tranc_fee }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="Renewal-process7-transaction-fee" placeholder="..." disabled
                                                value="{{ $renewal_process_data->tawjeeh_tranc_status }}">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal6-date">Date</label>
                                                <input type="date" class="form-control" id="renewal6-date"
                                                    placeholder="..." disabled
                                                    value="{{ $renewal_process_data->tawjeeh_tranc_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label for="renewal-tawjeeh-payment-select">Tawjeeh
                                                    Payment</label>
                                                <select class="form-control renewal-tawjeeh-payment-select1"
                                                    id="renewal-tawjeeh-payment-select" name="tawjeeh_tranc_payment">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='yes' {{
                                                        $renewal_process_data['tawjeeh_tranc_payment']=='yes'
                                                        ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value='no' {{
                                                        $renewal_process_data['tawjeeh_tranc_payment']=='no'
                                                        ? 'selected' : '' }}>
                                                        No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end renewal-tawjeeh-payment-container d-none">
                                            <div class="upload-file">
                                                <label for='renewal-tawjeeh-payment'>Upload Document</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='renewal-tawjeeh-payment'
                                                        name="tawjeeh_tranc_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $file_name = $renewal_process_data->tawjeeh_tranc_file;
                                            $ext = explode('.', $file_name);
                                            @endphp
                                            @if ($renewal_process_data->tawjeeh_tranc_file)
                                            <a class="upload-img" target="_black"
                                                href="{{ asset('' . '/' . $renewal_process_data->tawjeeh_tranc_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
                                                <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'pptx')
                                                <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @else
                                                <img src="{{ asset('' . '/' . $renewal_process_data->tawjeeh_tranc_file) }}"
                                                    style="height: 50px;width:50px">
                                                @endif
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- residency section --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process7" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process7-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="Renewal-process7-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-number" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->residency_tran_no }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="Renewal-process7-transaction-fee">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-fee" placeholder="..." disabled
                                                    value="{{ $renewal_process_data->residency_tran_fees }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="Renewal-id-renewal-transaction-fee" placeholder="..." disabled
                                                value="{{ $renewal_process_data->residency_status }}">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal7-date">Date</label>
                                                <input type="date" class="form-control" id="renewal7-date"
                                                    placeholder="..." disabled
                                                    value="{{ $renewal_process_data->residency_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $renewal_process_data->residency_file_name }}</label>
                                                @php
                                                $file_name = $renewal_process_data->residency_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process_data->residency_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $renewal_process_data->residency_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $renewal_process_data->residency_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> ID Renewal
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="Renewal-id-renewal-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-id-renewal-transaction-number" disabled
                                                    placeholder="..."
                                                    value="{{ $renewal_process_data->renewal_tran_no }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="Renewal-id-renewal-transaction-fee">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-id-renewal-transaction-fee" disabled placeholder="..."
                                                    value="{{ $renewal_process_data->renewal_tran_fees }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="Renewal-id-renewal-transaction-fee" disabled placeholder="..."
                                                value="{{ $renewal_process_data->renewal_status }}">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal7_1-date">Date</label>
                                                <input type="date" class="form-control" id="renewal7_1-date" disabled
                                                    placeholder="..." value="{{ $renewal_process_data->renewal_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">{{ $renewal_process_data->renewal_file_name }}</label>
                                                @php
                                                $file_name = $renewal_process_data->renewal_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process_data->renewal_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $renewal_process_data->renewal_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $renewal_process_data->renewal_file) }}"
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
                        {{-- employee biometric --}}
                        <div class="tab-pane fade" id="v-pills-renewal-process8" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process8-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.renewal-process-company', $renewal_process_data->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step4' name='bio_metric' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Employee
                                        Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal-process-transaction-number12">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="renewal-process-transaction-number12" disabled placeholder="..."
                                                    value="{{ $renewal_process_data->emp_biometric_tranc_no }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal-process-transaction-fee12">Transaction
                                                    Fee</label>
                                                <input type="text" class="form-control"
                                                    id="renewal-process-transaction-fee12" disabled placeholder="..."
                                                    value="{{ $renewal_process_data->emp_biometric_tranc_fee }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control status-container"
                                                id="#biometric1_2-date" disabled placeholder="..."
                                                value="{{ $renewal_process_data->emp_biometric_status }}">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="biometric1_2-date">Date</label>
                                                <input type="date" class="form-control" id="#biometric1_2-date" disabled
                                                    placeholder="..."
                                                    value="{{ $renewal_process_data->emp_biometric_date }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="select-biometric-file-renewal">Employee
                                                    Biometric</label>
                                                <select class="form-control biometric-select"
                                                    id="select-biometric-file-renewal" name="emp_biometric">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required' {{
                                                        $renewal_process_data['emp_biometric']=='required' ? 'selected'
                                                        : '' }}>
                                                        Required</option>
                                                    <option value='not required' {{
                                                        $renewal_process_data['emp_biometric']=='not required'
                                                        ? 'selected' : '' }}>
                                                        Not Required</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='renewal-file-bio'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='renewal-file-bio'
                                                            name="emp_biometric_file" style="line-height: 1"
                                                            accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $renewal_process_data->emp_biometric_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($renewal_process_data->emp_biometric_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $renewal_process_data->emp_biometric_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $renewal_process_data->emp_biometric_file) }}"
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Renewal Process End -->

        <!-- Work Permit -->
        <div class="tab-pane fade tab-31" id="pills-Work-permit" role="tabpanel"
            aria-labelledby="pills-work-permit-tab">
            <ul class="nav nav-pills mb-3 work-permit-nav horizontal_tabs" id="work-permit-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active Work-permit-tabs tabss" id="pills-sponsored-tab" data-toggle="pill"
                        href="#pills-sponsored" role="tab" aria-controls="pills-sponsored"
                        aria-selected="false">Sponsored
                        by someone/ Golden Visa</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs tabss" id="pills-part-time-tab" data-toggle="pill"
                        href="#pills-part-time" role="tab" aria-controls="pills-part-time" aria-selected="false">Part
                        time & temporary</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs tabss" id="pills-UAE-tab" data-toggle="pill" href="#pills-UAE"
                        role="tab" aria-controls="pills-UAE" aria-selected="false">UAE & GCC National</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs-last tabss" id="pills-modify-contract-tab" data-toggle="pill"
                        href="#pills-modify-contract" role="tab" aria-controls="pills-modify-contract"
                        aria-selected="false">Modify contract</a>
                </li>
            </ul>
            <div class="tab-content" id="work-permit-tabContent">
                <!-- Sponsored by someone tab -->
                <div class="tab-pane active show tab-71" id="pills-sponsored" role="tabpanel"
                    aria-labelledby="v-pills-sponsored-tab">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="v-sponsored-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab tabss" id="v-pills-sponsored0-tab"
                                    data-toggle="pill" href="#v-pills-sponsored0" role="tab"
                                    aria-controls="v-pills-sponsored0" aria-selected="true">
                                    Start Process
                                </a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-sponsored1-tab" data-toggle="pill"
                                    href="#v-pills-sponsored1" role="tab" aria-controls="v-pills-sponsored1"
                                    aria-selected="true">
                                    Work Permit Application
                                </a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-sponsored2-tab" data-toggle="pill"
                                    href="#v-pills-sponsored2" role="tab" aria-controls="v-pills-sponsored2"
                                    aria-selected="false">Upload Signed MB</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-sponsored2-1-tab" data-toggle="pill"
                                    href="#v-pills-sponsored2-1" role="tab" aria-controls="v-pills-sponsored2-1"
                                    aria-selected="false">Waiting for
                                    Approval</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-sponsored3-tab" data-toggle="pill"
                                    href="#v-pills-sponsored3" role="tab" aria-controls="v-pills-sponsored3"
                                    aria-selected="false">Pay Dubai Insurance</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-sponsored4-tab" data-toggle="pill"
                                    href="#v-pills-sponsored4" role="tab" aria-controls="v-pills-sponsored4"
                                    aria-selected="false">Preapproval Work Permit Fees</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-sponsored5-tab" data-toggle="pill"
                                    href="#v-pills-sponsored5" role="tab" aria-controls="v-pills-sponsored5"
                                    aria-selected="false">Upload Work Permit
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="pills-sponsored-tab">
                                <div class="tab-pane fade show active process-start" id="v-pills-sponsored0"
                                    role="tabpanel" aria-labelledby="pills-sponsored-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.sent-new-visa-request', $employee->id) }}"
                                            method="POST" class='py-2'>
                                            @csrf
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start
                                                Process
                                            </h6>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <input type="hidden" value='work permit' name='process_name'>
                                                    <input type="hidden" value='sponsored by some one' name='sub_type'>
                                                    @php
                                                    $authId = Auth::guard('company')->id();
                                                    $sp = App\Models\SponsaredBySomeOne::where('employee_id',
                                                    $employee->id)->where('company_id', $authId)->first();
                                                    @endphp
                                                    @if (!$sp)
                                                    <button class='btn btn-success px-5 py-2' type="submit">Start
                                                        Process</button>
                                                    @endif
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored0-visa">Process status</label>
                                                        @if ($sp)
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='process started'>
                                                        @else
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='not started'>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if ($spo_by_some)
                                {{-- wp application --}}
                                <div class="tab-pane fade " id="v-pills-sponsored1" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                permit
                                                application</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="sponsored1-transacton1-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1-number1" disabled
                                                            value="{{ $spo_by_some->work_permit_app_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="sponsored1-transacton1-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1" disabled
                                                            value="{{ $spo_by_some->work_permit_app_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored1-transacton1" disabled
                                                        value="{{ $spo_by_some->work_permit_app_status }}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="sponsor1-date">Date</label>
                                                        <input type="date" class="form-control" id="sponsor1-date"
                                                            disabled value="{{ $spo_by_some->work_permit_app_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $spo_by_some->work_permit_app_file_name
                                                            }}</label>
                                                        @php
                                                        $file_name = $spo_by_some->work_permit_app_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($spo_by_some->work_permit_app_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $spo_by_some->work_permit_app_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $spo_by_some->work_permit_app_file) }}"
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
                                {{-- upload signed mb --}}
                                <div class="tab-pane fade" id="v-pills-sponsored2" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form
                                            action="{{ route('company.sponsored-by-process-company', $spo_by_some->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step1' name='signed_mb' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Upload signed
                                                MB</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1-number1" disabled
                                                            value="{{ $spo_by_some->signed_mb_st_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1" disabled
                                                            value="{{ $spo_by_some->signed_mb_st_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored1-transacton1" disabled
                                                        value="{{ $spo_by_some->signed_mb_st_status }}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor2-date">Date</label>
                                                        <input type="date" class="form-control" id="#sponsor2-date"
                                                            disabled value="{{ $spo_by_some->signed_mb_st_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 col-12">
                                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="flexCheck">
                                                        <label class="custom-control-label" for="flexCheck">The
                                                            contract
                                                            has been signed.</label>
                                                    </div>
                                                </div>
                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa2-file_2_1'>Upload ST & MB</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa2-file_2_1'
                                                                name="signed_mb_st_file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $spo_by_some->signed_mb_st_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($spo_by_some->signed_mb_st_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $spo_by_some->signed_mb_st_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $spo_by_some->signed_mb_st_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12">
                                                    <button class='btn btn-success d-block mx-auto px-5 py-2'
                                                        type="submit">Addd</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- waiting for approval --}}
                                <div class="tab-pane fade" id="v-pills-sponsored2-1" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored2-1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form
                                            action="{{ route('company.sponsored-by-process-company', $spo_by_some->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step2' name='waiting' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Waiting for
                                                Approval
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                                    <div class="form-group mb-3 ">
                                                        <label for="visa3_12-transaction-number1">Signed MB
                                                            Status</label>
                                                        {{-- @dd($spo_by_some->waiting_for_approval_status); --}}
                                                        <input type="text"
                                                            class="form-control new-visa-signmbstatus status-container"
                                                            readonly id="visa3_12-transaction-number1"
                                                            name="waiting_for_approval_status"
                                                            value='{{ $spo_by_some->waiting_for_approval_status }}'
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">Attachment</label>
                                                        @php
                                                        $file_name = $spo_by_some->waiting_for_approval_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($spo_by_some->waiting_for_approval_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $spo_by_some->waiting_for_approval_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $spo_by_some->waiting_for_approval_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                                    <label for='visa3_12-transaction-textareara-13'>Comments</label>
                                                    <textarea type="text" id='visa3_12-transaction-textarear-13'
                                                        name="comment" name="" placeholder="Enter Your Comments ..."
                                                        class="form-control"
                                                        rows="5">{{ $spo_by_some->waiting_for_approval_reason }}</textarea>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="visa3_12-transaction-approval-13">Approval
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="visa3_12-transaction-approval-13"
                                                            name="waiting_for_approval_no"
                                                            value='{{ $spo_by_some->waiting_for_approval_no }}'
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                                    <div class="upload-file">
                                                        <label for='visa3_12-transaction-file-bio_1'>Upload ST &
                                                            MB</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control"
                                                                id='visa3_12-transaction-file-bio_1'
                                                                name="waiting_for_approval_reason_file"
                                                                style="line-height: 1" accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $spo_by_some->waiting_for_approval_reason_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($spo_by_some->waiting_for_approval_reason_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $spo_by_some->waiting_for_approval_reason_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $spo_by_some->waiting_for_approval_reason_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                                    <button class='btn btn-success px-5 py-2'>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- dubai insurance --}}
                                <div class="tab-pane fade" id="v-pills-sponsored3" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay
                                                Dubai
                                                insurance</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored3-transacton3-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored3-transacton3-number1" disabled
                                                            value="{{ $spo_by_some->pay_dubai_insu_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored3-transacton3-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored3-transacton3-fee1" disabled
                                                            value="{{ $spo_by_some->pay_dubai_insu_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored3-transacton3-number1" disabled
                                                        value="{{ $spo_by_some->pay_dubai_insu_status }}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor3-date">Date</label>
                                                        <input type="date" class="form-control" id="sponsor3-date"
                                                            disabled value="{{ $spo_by_some->pay_dubai_insu_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $spo_by_some->pay_dubai_insu_file_name
                                                            }}</label>
                                                        @php
                                                        $file_name = $spo_by_some->pay_dubai_insu_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($spo_by_some->pay_dubai_insu_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $spo_by_some->pay_dubai_insu_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $spo_by_some->pay_dubai_insu_file) }}"
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
                                {{-- preapproval wp fees --}}
                                <div class="tab-pane fade" id="v-pills-sponsored4" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Preapproval
                                                Work Permit Fees</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3-number1" disabled
                                                            value="{{ $spo_by_some->pre_approv_wp_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3" disabled
                                                            value="{{ $spo_by_some->pre_approv_wp_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored4-transacton3-number1" disabled
                                                        value="{{ $spo_by_some->pre_approv_wp_status }}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor4-date">Date</label>
                                                        <input type="date" class="form-control" id="sponsor4-date"
                                                            disabled value="{{ $spo_by_some->pre_approv_wp_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $spo_by_some->pre_approv_wp_file_name
                                                            }}</label>
                                                        @php
                                                        $file_name = $spo_by_some->pre_approv_wp_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($spo_by_some->pre_approv_wp_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $spo_by_some->pre_approv_wp_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $spo_by_some->pre_approv_wp_file) }}"
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
                                {{-- upload workpermit --}}
                                <div class="tab-pane fade" id="v-pills-sponsored5" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored5-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Upload Work
                                                Permit
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3-number1" disabled
                                                            value="{{ $spo_by_some->upload_wp_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3" disabled
                                                            value="{{ $spo_by_some->upload_wp_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored4-transacton3-number1" disabled
                                                        value="{{ $spo_by_some->upload_wp_status }}" placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor4-date">Date</label>
                                                        <input type="date" class="form-control" id="sponsor4-date"
                                                            disabled value="{{ $spo_by_some->upload_wp_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $spo_by_some->upload_wp_file_name }}</label>
                                                        @php
                                                        $file_name = $spo_by_some->upload_wp_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($spo_by_some->upload_wp_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $spo_by_some->upload_wp_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">

                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $spo_by_some->upload_wp_file) }}"
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
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sponsored by someone tab end -->
                <!--partime-tab -->
                <div class="tab-pane tab-82" id="pills-part-time" role="tabpanel" aria-labelledby="pills-part-time-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="v-part-time-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab tabss" id="v-pills-part-time0-tab"
                                    data-toggle="pill" href="#v-pills-part-time0" role="tab"
                                    aria-controls="v-pills-part-time0" aria-selected="true">Start Process</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-part-time1-tab" data-toggle="pill"
                                    href="#v-pills-part-time1" role="tab" aria-controls="v-pills-part-time1"
                                    aria-selected="true">Work Permit Application</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-part-time2-tab" data-toggle="pill"
                                    href="#v-pills-part-time2" role="tab" aria-controls="v-pills-part-time2"
                                    aria-selected="false">Upload Sign MB</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-part-time2-1-tab" data-toggle="pill"
                                    href="#v-pills-part-time2-1" role="tab" aria-controls="v-pills-part-time2-1"
                                    aria-selected="false">Part Time Temporary
                                    <br class="d-none d-lg-block"> Work Permit
                                    Status</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-part-time4-tab" data-toggle="pill"
                                    href="#v-pills-part-time4" role="tab" aria-controls="v-pills-part-time4"
                                    aria-selected="false">Upload Work Permit </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="v-part-time-tabContent">
                                <div class="tab-pane fade show active process-start" id="v-pills-part-time0"
                                    role="tabpanel" aria-labelledby="pills-part-time-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.sent-new-visa-request', $employee->id) }}"
                                            method="POST" class='py-2'>
                                            @csrf
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start
                                                Process
                                            </h6>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <input type="hidden">
                                                    <input type="hidden" disabled value='work permit'
                                                        name='process_name'>
                                                    <input type="hidden" value='part time' name='sub_type'>
                                                    @php
                                                    $authId = Auth::guard('company')->id();
                                                    $par = App\Models\PartTimeAndTemporary::where('employee_id',
                                                    $employee->id)->where('company_id', $authId)->first();
                                                    @endphp
                                                    @if (!$par)
                                                    <button class='btn btn-success px-5 py-2' type="submit">Start
                                                        Process</button>
                                                    @endif
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime-visa">Process status</label>

                                                        @if ($par)
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='process started'>
                                                        @else
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='not started'>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if ($part_time)
                                {{-- wp application --}}
                                <div class="tab-pane fade " id="v-pills-part-time1" role="tabpanel"
                                    aria-labelledby="v-pills-part-time1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                Permit
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#part-time1-number1">Transaction No:</label>
                                                        <input type="text" class="form-control" id="part-time1-number1"
                                                            disabled value="{{ $part_time->wp_app_trnc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#part-time1-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="part-time1-transacton3" disabled
                                                            value="{{ $part_time->wp_app_trnc_fee }}" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="part-time1-number1" disabled
                                                        value="{{ $part_time->wp_app_status }}" placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#part-time1-date">Date</label>
                                                        <input type="date" class="form-control" id="part-time1-date"
                                                            disabled value="{{ $part_time->wp_app_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $part_time->wp_app_file_name }}</label>
                                                        @php
                                                        $file_name = $part_time->wp_app_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($part_time->wp_app_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $part_time->wp_app_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $part_time->wp_app_file) }}"
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
                                {{-- upload signed st --}}
                                <div class="tab-pane fade" id="v-pills-part-time2" role="tabpanel"
                                    aria-labelledby="v-pills-part-time2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.part-time-company', $part_time->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step1' name='signed_mb' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Upload signed
                                                MB</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-number1">Transaction No:</label>
                                                        <input type="text" class="form-control" id="parttime2-number1"
                                                            disabled value="{{ $part_time->signed_mb_st_trc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-transacton1-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="parttime2-transacton1-fee1" disabled
                                                            value="{{ $part_time->signed_mb_st_trc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="parttime2-number1" disabled
                                                        value="{{ $part_time->signed_mb_st_status }}" placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-date">Date</label>
                                                        <input type="date" class="form-control" id="#parttime2-date"
                                                            disabled value="{{ $part_time->signed_mb_st_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 col-12">
                                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="flexCheckDefault1">
                                                        <label class="custom-control-label" for="flexCheckDefault1">The
                                                            contract has been signed.</label>
                                                    </div>
                                                </div>
                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa2-file-bio_1'>Upload ST & MB</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control"
                                                                id='visa2-file-bio_1' name="signed_mb_st_file"
                                                                style="line-height: 1" accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $part_time->signed_mb_st_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($part_time->signed_mb_st_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $part_time->signed_mb_st_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $part_time->signed_mb_st_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- waiting for approval --}}
                                <div class="tab-pane fade" id="v-pills-part-time2-1" role="tabpanel"
                                    aria-labelledby="v-pills-part-time2-1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.part-time-company', $part_time->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step2' name='waiting' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Waiting for
                                                Approval
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                                    <div class="form-group mb-3 ">
                                                        <label for="visa3_14-transaction-number1">Temporary Work
                                                            Permit
                                                            Status</label>
                                                        <input type="text"
                                                            class="form-control new-visa-signmbstatus status-container"
                                                            readonly id="visa3_14-transaction-number1" disabled
                                                            value="{{ $part_time->waiting_for_approval_status }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">Attachment</label>
                                                        @php
                                                        $file_name = $part_time->waiting_for_approval_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($part_time->waiting_for_approval_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $part_time->waiting_for_approval_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $part_time->waiting_for_approval_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                                    <label for='sponsor2_14-textareara-13'>Comments</label>
                                                    <textarea type="text" id='sponsor2_14-textarear-13' name="comment"
                                                        disabled placeholder="Enter Your Comments ..."
                                                        class="form-control"
                                                        rows="5">{{ $part_time->waiting_for_approval_reason }}</textarea>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="sponsor-approval-13">Approval No:</label>
                                                        <input type="text" class="form-control" id="sponsor-approval-13"
                                                            disabled value="{{ $part_time->waiting_for_approval_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                                    <div class="upload-file">
                                                        <label for='visa2-file-bio_01'>Upload ST & MB</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control"
                                                                id='visa2-file-bio_01'
                                                                name="waiting_for_approval_reason_file"
                                                                style="line-height: 1" accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $part_time->waiting_for_approval_reason_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($part_time->waiting_for_approval_reason_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $part_time->waiting_for_approval_reason_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $part_time->waiting_for_approval_reason_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                                    <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- upload wp --}}
                                <div class="tab-pane fade" id="v-pills-part-time4" role="tabpanel"
                                    aria-labelledby="v-pills-part-time4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Upload Work
                                                Permit</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="partime-4-number-1">Transaction No:</label>
                                                        <input type="text" class="form-control" id="partime-4-number-1"
                                                            disabled value="{{ $part_time->contract_tran_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#partime-4-fee-1">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="partime-4-fee-1"
                                                            disabled value="{{ $part_time->contract_tran_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="partime-4-fee-1" disabled
                                                        value="{{ $part_time->contract_status }}" placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#partime-4-date-1">Date</label>
                                                        <input type="date" class="form-control" id="partime-4-date-1"
                                                            disabled value="{{ $part_time->contract_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $part_time->contract_file_name }}</label>
                                                        @php
                                                        $file_name = $part_time->contract_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($part_time->contract_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $part_time->contract_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $part_time->contract_file) }}"
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
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partime-tab end -->
                <!-- UAE and Gcc tab -->
                <div class="tab-pane tab-92" id="pills-UAE" role="tabpanel" aria-labelledby="pills-UAE-tab">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar horizontal_tabs flex-row flex-lg-column nav-pills"
                                id="v-header-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab tabss" id="v-pills-UAE0-tab" data-toggle="pill"
                                    href="#v-pills-UAE0" role="tab" aria-controls="v-pills-UAE0"
                                    aria-selected="true">Start Process</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-UAE1-tab" data-toggle="pill"
                                    href="#v-pills-UAE1" role="tab" aria-controls="v-pills-UAE1"
                                    aria-selected="true">Work Permit Application</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-UAE2-tab" data-toggle="pill"
                                    href="#v-pills-UAE2" role="tab" aria-controls="v-pills-UAE2"
                                    aria-selected="false">Upload Signed MB</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-UAE3-tab" data-toggle="pill"
                                    href="#v-pills-UAE3" role="tab" aria-controls="v-pills-UAE3"
                                    aria-selected="false">Pay Dubai Insurance</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-UAE3-1-tab" data-toggle="pill"
                                    href="#v-pills-UAE3-1" role="tab" aria-controls="v-pills-UAE3-1"
                                    aria-selected="false">Waiting For Approval</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-UAE4-tab" data-toggle="pill"
                                    href="#v-pills-UAE4" role="tab" aria-controls="v-pills-UAE4"
                                    aria-selected="false">Upload Work Permit</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="v-header-tabContent">
                                <div class="tab-pane fade show active process-start" id="v-pills-UAE0" role="tabpanel"
                                    aria-labelledby="pills-UAE-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.sent-new-visa-request', $employee->id) }}"
                                            method="POST" class='py-2'>
                                            @csrf
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start
                                                Process
                                            </h6>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <input type="hidden" value='work permit' name='process_name'>
                                                    <input type="hidden" value='uae and gcc' name='sub_type'>
                                                    @php
                                                    $authId = Auth::guard('company')->id();
                                                    $ua = App\Models\UaeAndGccNational::where('employee_id',
                                                    $employee->id)->where('company_id', $authId)->first();
                                                    @endphp
                                                    @if (!$ua)
                                                    <button class='btn btn-success px-5 py-2' type="submit">Start
                                                        Process</button>
                                                    @endif
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-visa">Process status</label>

                                                        @if ($ua)
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='process started'>
                                                        @else
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='not started'>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if ($uae_national)
                                <div class="tab-pane fade" id="v-pills-UAE1" role="tabpanel"
                                    aria-labelledby="v-pills-UAE1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                permit
                                                application</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae-transacton1-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="uae-transacton1-number1" disabled
                                                            value="{{ $uae_national->wp_app_trnc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="uae-fee1" disabled
                                                            value="{{ $uae_national->wp_app_trnc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group mb-0 col-xl-6 col-lg-12 col-md-6  parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="uae1-date" disabled
                                                        value="{{ $uae_national->wp_app_status }}" placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae1-date">Date</label>
                                                        <input type="date" class="form-control" id="uae1-date" disabled
                                                            value="{{ $uae_national->wp_app_date }}" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $uae_national->wp_app_file_name }}</label>
                                                        @php
                                                        $file_name = $uae_national->wp_app_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($uae_national->wp_app_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $uae_national->wp_app_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $uae_national->wp_app_file) }}"
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
                                <div class="tab-pane fade" id="v-pills-UAE2" role="tabpanel"
                                    aria-labelledby="v-pills-UAE2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.uae-gcc-company', $uae_national->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step1' name='signed_mb' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Upload signed
                                                MB</h6>
                                            <div class="row align-items-end">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label
                                                            for="#upload-signed-uae2-mb-transaction-number">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="upload-signed-uae2-mb-transaction-number" disabled
                                                            value="{{ $uae_national->signed_mb_st_trc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#upload-signed-uae2-mb-transaction-fee">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="upload-signed-uae2-mb-transaction-fee" disabled
                                                            value="{{ $uae_national->signed_mb_st_trc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#">Status</label>
                                                        <input type="text" class="form-control status-container"
                                                            id="upload-signed-uae2-mb-transaction-fee" disabled
                                                            value="{{ $uae_national->signed_mb_st_status }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#upload-signed-uae2-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="upload-signed-uae2-date" disabled
                                                            value="{{ $uae_national->signed_mb_st_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 col-12">
                                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="flexCheckDefault-Uae">
                                                        <label class="custom-control-label"
                                                            for="flexCheckDefault-Uae">The contract has been
                                                            signed.</label>
                                                    </div>
                                                </div>
                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='visa2-file-3-1'>Upload ST & MB</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa2-file-3-1'
                                                                name="signed_mb_st_file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- @dd($uae_national); --}}
                                                    {{-- @dd($uae_national->signed_mb_st_file); --}}
                                                    @php
                                                    $file_name = $uae_national->signed_mb_st_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($uae_national->signed_mb_st_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $uae_national->signed_mb_st_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $uae_national->signed_mb_st_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12">
                                                    <button class='btn btn-success d-block mx-auto px-5 py-2'
                                                        type="submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-UAE3" role="tabpanel"
                                    aria-labelledby="v-pills-UAE3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay
                                                Dubai
                                                insurance</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae3-transaction-number">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="uae3-transaction-number" disabled
                                                            value="{{ $uae_national->pay_dubai_insu_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae3-transaction-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="uae3-transaction-fee" disabled
                                                            value="{{ $uae_national->pay_dubai_insu_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="#status">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="uae3-transaction-fee" disabled
                                                        value="{{ $uae_national->pay_dubai_insu_status }}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae3-insurance-date">Date</label>
                                                        <input type="date" class="form-control" id="uae3-insurance-date"
                                                            disabled value="{{ $uae_national->pay_dubai_insu_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $uae_national->pay_dubai_insu_file_name
                                                            }}</label>
                                                        @php
                                                        $file_name = $uae_national->pay_dubai_insu_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($uae_national->pay_dubai_insu_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $uae_national->pay_dubai_insu_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $uae_national->pay_dubai_insu_file) }}"
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
                                <div class="tab-pane fade" id="v-pills-UAE3-1" role="tabpanel"
                                    aria-labelledby="v-pills-UAE3-1-tab">
                                    <form action="{{ route('company.uae-gcc-company', $uae_national->id) }}"
                                        class='py-2' method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" value='step2' name='waiting' hidden>
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting
                                            for
                                            Approval
                                        </h6>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                                <div class="form-group mb-3 ">
                                                    <label for="visa1-3-1-transaction-number1">Work Permit
                                                        Application
                                                        Status</label>
                                                    <input type="text"
                                                        class="form-control status-container new-visa-signmbstatus"
                                                        readonly id="visa1-3-1-transaction-number1"
                                                        value="{{ $uae_national->waiting_for_approval_status }}"
                                                        placeholder="...">
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                                <div class="d-flex flex-column">
                                                    <label for="#">Attachment</label>
                                                    @php
                                                    $file_name = $uae_national->waiting_for_approval_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($uae_national->waiting_for_approval_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $uae_national->waiting_for_approval_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $uae_national->waiting_for_approval_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                                <label for='sponsor2-textareara1-13'>Comments</label>
                                                <textarea type="text" id='sponsor2-textarear1-13' readonly
                                                    name="waiting_for_approval_reason"
                                                    placeholder="Enter Your Comments ..." class="form-control"
                                                    rows="5">{{ $uae_national->waiting_for_approval_reason }}</textarea>
                                            </div>
                                            <div
                                                class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                                <div class="form-group mb-3">
                                                    <label for="sponsor-approval1-13">Approval No:</label>
                                                    <input type="text" class="form-control" id="sponsor-approval1-13"
                                                        value="{{ $uae_national->waiting_for_approval_no }}" readonly
                                                        placeholder="...">
                                                </div>
                                            </div>
                                            <div
                                                class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                                <div class="upload-file">
                                                    <label for='visa2-file-bio1_1'>Upload</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa2-file-bio1_1'
                                                            name="waiting_for_approval_reason_file"
                                                            style="line-height: 1" accept=".pdf,.doc,.excel">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $uae_national->waiting_for_approval_reason_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($uae_national->waiting_for_approval_reason_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $uae_national->waiting_for_approval_reason_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
                                                    <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                    <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'pptx')
                                                    <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @else
                                                    <img src="{{ asset('' . '/' . $uae_national->waiting_for_approval_reason_file) }}"
                                                        style="height: 50px;width:50px">
                                                    @endif
                                                </a>
                                                @endif
                                            </div>
                                            <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                                <button class='btn btn-success px-5 py-2' type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-UAE4" role="tabpanel"
                                    aria-labelledby="v-pills-UAE4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                Permit
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#UAE4-process-transaction-number10">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="UAE4-process-transaction-number10" disabled
                                                            value="{{ $uae_national->upload_wp_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#UAE4-process-transaction-fee10">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="UAE4-process-transaction-fee10" disabled
                                                            value="{{ $uae_national->upload_wp_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="UAE4-process-transaction-fee10" disabled
                                                        value="{{ $uae_national->upload_wp_status }}" placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#UAE4-permit-transaction-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="UAE4-permit-transaction-date" disabled
                                                            value="{{ $uae_national->upload_wp_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">value="{{ $uae_national->upload_wp_file_name
                                                            }}"</label>
                                                        @php
                                                        $file_name = $uae_national->upload_wp_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($uae_national->upload_wp_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $uae_national->upload_wp_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $uae_national->upload_wp_file) }}"
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
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- UAE and Gcc tab end -->
                <!-- Modify Contract  -->
                <div class="tab-pane tab-101" id="pills-modify-contract" role="tabpanel"
                    aria-labelledby="v-pills-modify-contract-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-lg-column flex-row horizontal_tabs nav-pills"
                                id="modify-contract-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab tabss" id="v-pills-modify-contract0-tab"
                                    data-toggle="pill" href="#v-pills-modify-contract0" role="tab"
                                    aria-controls="v-pills-modify-contract0" aria-selected="true">Start Process</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-modify-contract1-tab"
                                    data-toggle="pill" href="#v-pills-modify-contract1" role="tab"
                                    aria-controls="v-pills-modify-contract1" aria-selected="true">Work Permit
                                    Application</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-modify-contract2-tab"
                                    data-toggle="pill" href="#v-pills-modify-contract2" role="tab"
                                    aria-controls="v-pills-modify-contract2" aria-selected="false">Uplaod Signed
                                    MB</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-modify-contract4-tab"
                                    data-toggle="pill" href="#v-pills-modify-contract4" role="tab"
                                    aria-controls="v-pills-modify-contract4" aria-selected="false">Waiting For
                                    Approval</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-modify-contract5-tab"
                                    data-toggle="pill" href="#v-pills-modify-contract5" role="tab"
                                    aria-controls="v-pills-modify-contract5" aria-selected="false">Upload Work
                                    Permit</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="modify-contract-tabContent">
                                <div class="tab-pane fade show active process-start" id="v-pills-modify-contract0"
                                    role="tabpanel" aria-labelledby="pills-modify-contract-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.sent-new-visa-request', $employee->id) }}"
                                            method="POST" class='py-2'>
                                            @csrf
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start
                                                Process
                                            </h6>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <input type="hidden" value='work permit' name='process_name'>
                                                    <input type="hidden" value='modify contract' name='sub_type'>
                                                    @php
                                                    $authId = Auth::guard('company')->id();
                                                    $mc = App\Models\ModifyContract::where('employee_id',
                                                    $employee->id)->where('company_id', $authId)->first();
                                                    @endphp
                                                    @if (!$mc)
                                                    <button class='btn btn-success px-5 py-2' type="submit">Start
                                                        Process</button>
                                                    @endif
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime3-visa">Process status</label>

                                                        @if ($mc)
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='process started'>
                                                        @else
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='not started'>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if ($modify_contract)
                                <div class="tab-pane fade" id="v-pills-modify-contract1" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                Permit
                                                application
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify1-number1">Transaction No:</label>
                                                        <input type="text" class="form-control" id="modify1-number1"
                                                            value="{{ $modify_contract->wp_app_trnc_no }}" disabled
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify1-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="modify1-fee1"
                                                            value="{{ $modify_contract->wp_app_trnc_fee }}" disabled
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="modify1-number1"
                                                        value="{{ $modify_contract->wp_app_status }}" disabled
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify1-date">Date</label>
                                                        <input type="date" class="form-control" id="modify1-date"
                                                            value="{{ $modify_contract->wp_app_date }}" disabled
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $modify_contract->wp_app_file_name }}</label>
                                                        @php
                                                        $file_name = $modify_contract->wp_app_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($modify_contract->wp_app_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $modify_contract->wp_app_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $modify_contract->wp_app_file) }}"
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
                                <div class="tab-pane fade" id="v-pills-modify-contract2" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.modify-contract-company', $modify_contract->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step1' name='signed_mb' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Upload Signed
                                                MB</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify2-number1">Transaction No:</label>
                                                        <input type="text" class="form-control" id="modify2-number1"
                                                            disabled value="{{ $modify_contract->signed_mb_st_trc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify2-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="modify2-fee"
                                                            disabled
                                                            value="{{ $modify_contract->signed_mb_st_trc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="modify2-fee" disabled
                                                        value="{{ $modify_contract->signed_mb_st_status }}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify2-date">Date</label>
                                                        <input type="date" class="form-control" id="#modify2-date"
                                                            disabled value="{{ $modify_contract->signed_mb_st_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='#visa2-file'>Upload ST & MB</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control" id='visa2-file'
                                                                name="signed_mb_st_file" style="line-height: 1"
                                                                accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $modify_contract->signed_mb_st_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($modify_contract->signed_mb_st_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $modify_contract->signed_mb_st_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $modify_contract->signed_mb_st_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2'
                                                        type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-contract4" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.modify-contract-company', $modify_contract->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step2' name='waiting' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Waiting for
                                                Approval
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                                    <div class="form-group mb-3 ">
                                                        <label for="visa3-2-1-transaction-number1">Modify Contract
                                                            Status</label>
                                                        <input type="text"
                                                            class="form-control new-visa-signmbstatus status-container"
                                                            readonly
                                                            value="{{ $modify_contract->waiting_for_approval_status }}"
                                                            id="visa3-2-1-transaction-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">Attachment</label>
                                                        @php
                                                        $file_name = $modify_contract->waiting_for_approval_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($modify_contract->waiting_for_approval_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $modify_contract->waiting_for_approval_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $modify_contract->waiting_for_approval_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                                    <label for='sponsor21-textareara-13'>Comments</label>
                                                    <textarea type="text" id='sponsor21-textarear-13'
                                                        name="waiting_for_approval_reason"
                                                        placeholder="Enter Your Comments ..." disabled
                                                        class="form-control"
                                                        rows="5">{{ $modify_contract->waiting_for_approval_reason }}</textarea>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="sponsor-approval21-13">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsor-approval21-13" disabled
                                                            value="{{ $modify_contract->waiting_for_approval_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                                    <div class="upload-file">
                                                        <label for='visa2-file-bio23_1'>Upload</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control"
                                                                id='visa2-file-bio23_1'
                                                                name="waiting_for_approval_reason_file"
                                                                style="line-height: 1" accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $modify_contract->waiting_for_approval_reason_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($modify_contract->waiting_for_approval_reason_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $modify_contract->waiting_for_approval_reason_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $modify_contract->waiting_for_approval_reason_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                                    <button class='btn btn-success px-5 py-2'
                                                        type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-contract5" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract5-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                Permit
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify5-number10">Transaction No:</label>
                                                        <input type="text" class="form-control" id="modify5-number10"
                                                            disabled value="{{ $modify_contract->upload_wp_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify5-fee10">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="modify5-fee10"
                                                            disabled value="{{ $modify_contract->upload_wp_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="modify5-number10" disabled
                                                        value="{{ $modify_contract->upload_wp_status }}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify5-date">Date</label>
                                                        <input type="date" class="form-control" id="modify5-date"
                                                            disabled value="{{ $modify_contract->upload_wp_date }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">{{ $modify_contract->upload_wp_file_name
                                                            }}</label>
                                                        @php
                                                        $file_name = $modify_contract->upload_wp_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($modify_contract->upload_wp_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $modify_contract->upload_wp_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $modify_contract->upload_wp_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    {{-- <button
                                                        class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                                    --}}
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
                <!-- Modify Contract End -->
            </div>

        </div>
        <!-- Workit Permit End -->

        <!-- Modification Visa Tab -->
        <div class="tab-pane tab-41" id="pills-modify-visa" role="tabpanel" aria-labelledby="pills-modify-visa-tab">
            <div class="row ">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="modify-visa-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab tabss" id="v-pills-modify-visa1-tab" data-toggle="pill"
                            href="#v-pills-modify-visa1" role="tab" aria-controls="v-pills-modify-visa1"
                            aria-selected="true">Start process</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-modify-visa3-tab" data-toggle="pill"
                            href="#v-pills-modify-visa3" role="tab" aria-controls="v-pills-modify-visa3"
                            aria-selected="false">Application status</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                    <div class="tab-content" id="modify-visa-tabContent">
                        <div class="tab-pane fade show active process-start" id="v-pills-modify-visa1" role="tabpanel"
                            aria-labelledby="pills-modify-visa-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.sent-new-visa-request', $employee->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process
                                    </h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden" value='modification of visa' name='process_name'>
                                            {{-- <input type="hidden" value='uae and gcc' name='sub_type'> --}}
                                            @php
                                            $authId = Auth::guard('company')->id();
                                            $mv = App\Models\ModificationVisaEmiratesId::where('employee_id',
                                            $employee->id)
                                            ->where('company_id', $authId)
                                            ->where('process_name', 'modification of visa')->first();
                                            @endphp
                                            @if (!$mv)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#parttime2-visa">Process status</label>
                                                @if ($mv)
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='process started'>
                                                @else
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='not started'>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @if($modification_visa)
                        <div class="tab-pane fade" id="v-pills-modify-visa3" role="tabpanel"
                            aria-labelledby="v-pills-modify-visa3-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    action="{{ route('company.modification-visa-process-company', $modification_visa->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step1' name='waiting' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for
                                        Approval
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                            <div class="form-group mb-3 ">
                                                <label for="visa3-3-transaction-number1">Application
                                                    Status</label>
                                                <input type="text"
                                                    class="form-control status-container new-visa-signmbstatus" readonly
                                                    value="{{ $modification_visa->application_status }}"
                                                    id="visa3-3-transaction-number1" placeholder="...">
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
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $modification_visa->application_approval_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
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
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                            <label for='sponsor2-textareara32-13'>Comments</label>
                                            <textarea type="text" id='sponsor2-textarear32-13' name="comment"
                                                placeholder="Enter Your Comments ..." disabled class="form-control"
                                                rows="5">{{ $modification_visa->application_reject_reason }}</textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                            <div class="form-group mb-3">
                                                <label for="sponsor-approval32-13">Approval No:</label>
                                                <input type="text" disabled
                                                    value="{{ $modification_visa->application_approval_no }}"
                                                    class="form-control" id="sponsor-approval32-13" placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                            <div class="upload-file">
                                                <label for='visa232-file-bio_1'>Upload ST & MB</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa232-file-bio_1'
                                                        name="application_reject_reason_file" style="line-height: 1"
                                                        accept=".pdf,.doc,.excel">
                                                    <div class="input-group-prepend">
                                                        <small class="input-group-text"><span
                                                                class="fa fa-paperclip"></span></small>
                                                    </div>
                                                </div>
                                                @php
                                                $file_name = $modification_visa->application_reject_reason_file;
                                                $ext = explode('.', $file_name);
                                                @endphp
                                                @if ($modification_visa->application_reject_reason_file)
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $modification_visa->application_reject_reason_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
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
                                                @endif
                                            </div>
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
        <!--Modification VIsa Tab ENd  -->
        <!-- Main Header Tab content end -->
        <!-- Modification of Emirates -->
        <div class="tab-pane tab-51" id="pills-modify-emirates" role="tabpanel"
            aria-labelledby="pills-modify-emirates-tab">
            <div class="row ">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="modify-emirates-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab tabss" id="v-pills-modify-emirates1-tab"
                            data-toggle="pill" href="#v-pills-modify-emirates1" role="tab"
                            aria-controls="v-pills-modify-emirates1" aria-selected="true">Start Process</a>
                        <a class="nav-link bordered_tab tabss" id="v-pills-modify-emirates3-tab" data-toggle="pill"
                            href="#v-pills-modify-emirates3" role="tab" aria-controls="v-pills-modify-emirates3"
                            aria-selected="false">Application Status</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                    <div class="tab-content" id="modify-emirates-tabContent">
                        <div class="tab-pane fade show active process-start" id="v-pills-modify-emirates1"
                            role="tabpanel" aria-labelledby="pills-modify-emirates-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="{{ route('company.sent-new-visa-request', $employee->id) }}" method="POST"
                                    class='py-2'>
                                    @csrf
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Modification of
                                        Emirates ID</h6>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <input type="hidden">
                                            <input type="hidden" value='modification of emirates Id'
                                                name='process_name'>
                                            @php
                                            $authId = Auth::guard('company')->id();
                                            $me = App\Models\ModificationVisaEmiratesId::where('employee_id',
                                            $employee->id)
                                            ->where('company_id', $authId)
                                            ->where('process_name', 'modification of emirates Id')->first();
                                            @endphp
                                            @if (!$me)
                                            <button class='btn btn-success px-5 py-2' type="submit">Start
                                                Process</button>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-modify-emirates-id">Process
                                                    status</label>
                                                @if ($me)
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='process started'>
                                                @else
                                                <input type="text" id="tab-2" class="form-control process-status-input"
                                                    id="new-visa-1" disabled placeholder="..." value='not started'>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($modification_emirates)
                        <div class="tab-pane fade" id="v-pills-modify-emirates3" role="tabpanel"
                            aria-labelledby="v-pills-modify-emirates3-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    action="{{ route('company.modification-emirates-process-company', $modification_emirates->id) }}"
                                    class='py-2' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value='step1' name='waiting' hidden>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for
                                        Approval
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                            <div class="form-group mb-3 ">
                                                <label for="visa32-32-transaction-number1">Application
                                                    Status</label>
                                                <input type="text"
                                                    class="form-control status-container new-visa-signmbstatus" readonly
                                                    value="{{ $modification_emirates->application_status }}"
                                                    id="visa32-32-transaction-number1" placeholder="...">
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
                                                <a class="upload-img" target="_black"
                                                    href="{{ asset('' . '/' . $modification_emirates->application_approval_file) }}">
                                                    @if ($ext[1] == 'pdf')
                                                    <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                        style="height: 50px;width:50px">
                                                    @elseif($ext[1] == 'doc')
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
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                            <label for='sponsor2-textareara3-2-13'>Comments</label>
                                            <textarea type="text" id='sponsor2-textarear3-2-13' name="comment"
                                                placeholder="Enter Your Comments ..." class="form-control" disabled
                                                rows="5">{{ $modification_emirates->application_reject_reason }}</textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                            <div class="form-group mb-3">
                                                <label for="sponsor-approval3-2-13">Approval No:</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $modification_emirates->application_approval_no }}"
                                                    id="sponsor-approval3-2-13" placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                            <div class="upload-file">
                                                <label for='visa23-2-file-bio_1'>Upload</label>
                                                <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                    <input type="file" class="form-control" id='visa23-2-file-bio_1'
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
                                            <a class="upload-img" target="_black"
                                                href="{{ asset('' . '/' . $modification_emirates->application_reject_reason_file) }}">
                                                @if ($ext[1] == 'pdf')
                                                <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                    style="height: 50px;width:50px">
                                                @elseif($ext[1] == 'doc')
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
        <!-- Mian tab -->

        <!-- Modification of Emirates End -->
        <!-- Cancelatoion Tab -->
        <div class="tab-pane fade tab-61 nav-bar" id="pills-cancelation" role="tabpanel"
            aria-labelledby="pills-pills-cancelation-tab">
            <ul class="nav nav-pills mb-3 horizontal_tabs" id="cancelation-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active Work-permit-tabs tabss" id="pills-visa-cancel-tab" data-toggle="pill"
                        href="#pills-visa-cancel" role="tab" aria-controls="pills-visa-cancel"
                        aria-selected="false">Visa
                        cancelation</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs-last tabss" id="pills-work-permit-cancel-tab" data-toggle="pill"
                        href="#pills-work-permit-cancel" role="tab" aria-controls="pills-work-permit-cancel"
                        aria-selected="false">Work permit cancelation</a>
                </li>
            </ul>
            <div class="tab-content" id="cancelation-tabContent" aria-labelledby="pills-cancelation-tab">
                <!--  Visa Cancel Tab -->
                <div class="tab-pane active show" id="pills-visa-cancel" role="tabpanel"
                    aria-labelledby="v-pills-visa-cancel-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="visa-cancel-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab tabss" id="v-pills-visa-cancel0-tab"
                                    data-toggle="pill" href="#v-pills-visa-cancel0" role="tab"
                                    aria-controls="v-pills-visa-cancel0" aria-selected="true">Start Process</a>
                                <a class="nav-link   bordered_tab tabss" id="v-pills-visa-cancel1-tab"
                                    data-toggle="pill" href="#v-pills-visa-cancel1" role="tab"
                                    aria-controls="v-pills-visa-cancel1" aria-selected="true">Work Permit Canclation
                                    Form</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-visa-cancel2-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel2" role="tab" aria-controls="v-pills-visa-cancel2"
                                    aria-selected="false">Upload Signed
                                    Cancelation Form</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-visa-cancel3-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel3" role="tab" aria-controls="v-pills-visa-cancel3"
                                    aria-selected="false">Singed Cancelation
                                    Form</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-visa-cancel4-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel4" role="tab" aria-controls="v-pills-visa-cancel4"
                                    aria-selected="false">Work Permit
                                    Cancelation Approval</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-visa-cancel5-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel5" role="tab" aria-controls="v-pills-visa-cancel5"
                                    aria-selected="false">Residency
                                    Application</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="visa-cancel-tabContent">
                                <div class="tab-pane fade show active process-start" id="v-pills-visa-cancel0"
                                    role="tabpanel" aria-labelledby="pills-visa-cancel-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.sent-new-visa-request', $employee->id) }}"
                                            method="POST" class='py-2'>
                                            @csrf
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start
                                                Process</h6>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <input type="hidden">
                                                    <input type="hidden" value='visa cancellation' name='process_name'>
                                                    @php
                                                    $authId = Auth::guard('company')->id();
                                                    $vc = App\Models\VisaCancelation::where('employee_id',
                                                    $employee->id)->where('company_id', $authId)->first();
                                                    @endphp
                                                    @if (!$vc)
                                                    <button class='btn btn-success px-5 py-2' type="submit">Start
                                                        Process</button>
                                                    @endif
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime3-visa">Process status</label>
                                                        @if ($vc)
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='process started'>
                                                        @else
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='not started'>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if ($visa_cancellation)
                                <div class="tab-pane fade" id="v-pills-visa-cancel1" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="">
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                Permit Cancellation Form
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1-number1" disabled
                                                            name="wp_app_can_trnc_no"
                                                            value="{{ $visa_cancellation->wp_app_can_trnc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1" disabled
                                                            name="wp_app_can_trnc_fee"
                                                            value="{{ $visa_cancellation->wp_app_can_trnc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored1-transacton1" disabled name="wp_app_can_status"
                                                        value="{{ $visa_cancellation->wp_app_can_status }}"
                                                        placeholder="...">


                                                    </select>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#start-process-transaction-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="start-process-transaction-date"
                                                            value="{{ $visa_cancellation->wp_app_can_date }}"
                                                            placeholder="..." disabled name='wp_app_date'>
                                                    </div>
                                                </div>

                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='#visa2-file'>{{
                                                            $visa_cancellation->wp_app_can_file_name }}</label>
                                                        <br>
                                                        @php
                                                        $file_name = $visa_cancellation->wp_app_can_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_cancellation->wp_app_can_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $visa_cancellation->wp_app_can_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $visa_cancellation->wp_app_can_file) }}"
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
                                <div class="tab-pane fade" id="v-pills-visa-cancel2" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form
                                            action="{{ route('company.visa-cancellation-process-company', $visa_cancellation->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step1' name='signed_cancellation' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Upload Signed Cancellation Form </h6>
                                            <div class="row">
                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='cancel-file-bio_1'>Upload File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control"
                                                                id='cancel-file-bio_1' name="signed_cancellation_form"
                                                                style="line-height: 1" accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                        @if($visa_cancellation->signed_cancellation_form)
                                                        <input type="text" hidden value='Approved'
                                                            class="status-container">
                                                        @else
                                                        <input type="text" hidden value='Reject'
                                                            class="status-container">
                                                        @endif
                                                    </div>
                                                    @php
                                                    $file_name = $visa_cancellation->signed_cancellation_form;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($visa_cancellation->signed_cancellation_form)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $visa_cancellation->signed_cancellation_form) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $visa_cancellation->signed_cancellation_form) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif

                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-visa-cancel3" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="">
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Signed Cancellation Form</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1-number1" disabled
                                                            name="wp_app_can_trnc_no"
                                                            value="{{ $visa_cancellation->signd_can_from_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1" disabled
                                                            name="wp_app_can_trnc_fee"
                                                            value="{{ $visa_cancellation->signd_can_from_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored1-transacton1" disabled name="wp_app_can_status"
                                                        value="{{ $visa_cancellation->signd_can_from_status }}"
                                                        placeholder="...">


                                                    </select>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#start-process-transaction-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="start-process-transaction-date"
                                                            value="{{ $visa_cancellation->signd_can_from_date }}"
                                                            placeholder="..." disabled name='wp_app_date'>
                                                    </div>
                                                </div>

                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='#visa2-file'>{{
                                                            $visa_cancellation->signd_can_from_file_name }}</label>
                                                        <br>
                                                        @php
                                                        $file_name = $visa_cancellation->signd_can_from_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_cancellation->signd_can_from_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $visa_cancellation->signd_can_from_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $visa_cancellation->signd_can_from_file) }}"
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
                                <div class="tab-pane fade" id="v-pills-visa-cancel4" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form
                                            action="{{ route('company.visa-cancellation-process-company', $visa_cancellation->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step2' name='waiting' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>Work
                                                Permit Cancelation Approval
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="form-group col-xl-6 col-lg-12 col-md-6 status-select-parent">
                                                    <label for="status-select1">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsor-approval-13" placeholder="..."
                                                        name="waiting_for_approval_status" disabled
                                                        value="{{ $visa_cancellation->waiting_for_approval_status }}">
                                                </div>
                                                <div class="form-group col-12 d-none status-select-comment">
                                                    <label for='sponsor2-textareara-13'>Comments</label>
                                                    <textarea type="text" id='sponsor2-textarear-13'
                                                        name="waiting_for_approval_reason"
                                                        placeholder="Enter Your Comments ..." class="form-control"
                                                        rows="5">{{ $visa_cancellation->waiting_for_approval_reason }}</textarea>

                                                    @php
                                                    $file_name = $visa_cancellation->waiting_for_approval_reason_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($visa_cancellation->waiting_for_approval_reason_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $visa_cancellation->waiting_for_approval_reason_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $visa_cancellation->waiting_for_approval_reason_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 d-none status-select-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="sponsor-approval-13">Approval No:</label>
                                                        <input type="text" class="form-control" id="sponsor-approval-13"
                                                            placeholder="..." disabled name="waiting_for_approval_no"
                                                            value="{{ $visa_cancellation->waiting_for_approval_no }}">
                                                    </div>
                                                </div>
                                                <div
                                                    class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end status-select-file d-none">
                                                    <div class="upload-file">
                                                        <label for='visa2-file-bio_1'>Upload File</label>
                                                        @php
                                                        $file_name = $visa_cancellation->waiting_for_approval_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_cancellation->waiting_for_approval_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $visa_cancellation->waiting_for_approval_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $visa_cancellation->waiting_for_approval_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center status-select-btn">
                                                    <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-visa-cancel5" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel5-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="">
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>
                                                Residency Application</h6>


                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-number1">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1-number1" disabled
                                                            name="wp_app_can_trnc_no"
                                                            value="{{ $visa_cancellation->residency_app_tranc_no }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1" disabled
                                                            name="wp_app_can_trnc_fee"
                                                            value="{{ $visa_cancellation->residency_app_tranc_fee }}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control status-container"
                                                        id="sponsored1-transacton1" disabled name="wp_app_can_status"
                                                        value="{{ $visa_cancellation->residency_app_status }}"
                                                        placeholder="...">


                                                    </select>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#start-process-transaction-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="start-process-transaction-date"
                                                            value="{{ $visa_cancellation->residency_app_date }}"
                                                            placeholder="..." disabled name='wp_app_date'>
                                                    </div>
                                                </div>

                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='#visa2-file'>{{
                                                            $visa_cancellation->residency_app_file_name }}</label>
                                                        <br>
                                                        @php
                                                        $file_name = $visa_cancellation->residency_app_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($visa_cancellation->residency_app_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $visa_cancellation->residency_app_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
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
                <!-- Visa Cancel tab end -->
                <!-- WorkPermit Cancel tab -->
                <div class="tab-pane" id="pills-work-permit-cancel" role="tabpanel"
                    aria-labelledby="pills-work-permit-cancel-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizonts_tabs flex-lg-column nav-pills"
                                id="work-permit-cancel-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab tabss" id="v-pills-work-permit-cancel0-tab"
                                    data-toggle="pill" href="#v-pills-work-permit-cancel0" role="tab"
                                    aria-controls="v-pills-work-permit-cancel0" aria-selected="false">Start
                                    Process</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-work-permit-cancel1-tab"
                                    data-toggle="pill" href="#v-pills-work-permit-cancel1" role="tab"
                                    aria-controls="v-pills-work-permit-cancel1" aria-selected="true">Work Permit<br
                                        class='d-none d-lg-block'> Cancellation Form</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-work-permit-cancel2-tab"
                                    data-toggle="pill" href="#v-pills-work-permit-cancel2" role="tab"
                                    aria-controls="v-pills-work-permit-cancel2" aria-selected="false">Upload Singed
                                    <br class='d-none d-lg-block'>Cancellation Form</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-work-permit-cancel3-tab"
                                    data-toggle="pill" href="#v-pills-work-permit-cancel3" role="tab"
                                    aria-controls="v-pills-work-permit-cancel3" aria-selected="false">Signed
                                    Cancellation Form</a>
                                <a class="nav-link bordered_tab tabss" id="v-pills-work-permit-cancel4-tab"
                                    data-toggle="pill" href="#v-pills-work-permit-cancel4" role="tab"
                                    aria-controls="v-pills-work-permit-cancel4" aria-selected="false">Work Permit
                                    <br class='d-none d-lg-block'>Cancelation Approval</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3  mt-lg-0 mt-3">
                            <div class="tab-content" id="work-permit-cancel-tabContent">
                                <div class="tab-pane fade show active process-start" id="v-pills-work-permit-cancel0"
                                    role="tabpanel" aria-labelledby="pills-work-permit-cancel-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="{{ route('company.sent-new-visa-request', $employee->id) }}"
                                            method="POST" class='py-2'>
                                            @csrf
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start
                                                Process</h6>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <input type="hidden">
                                                    <input type="hidden" value='permit cancellation'
                                                        name='process_name'>
                                                    @php
                                                    $authId = Auth::guard('company')->id();
                                                    $pc = App\Models\PermitCancellation::where('employee_id',
                                                    $employee->id)->where('company_id', $authId)->first();
                                                    @endphp
                                                    @if (!$pc)
                                                    <button class='btn btn-success px-5 py-2' type="submit">Start
                                                        Process</button>
                                                    @endif
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime3-visa">Process status</label>
                                                        @if ($pc)
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='process started'>
                                                        @else
                                                        <input type="text" id="tab-2"
                                                            class="form-control process-status-input" id="new-visa-1"
                                                            disabled placeholder="..." value='not started'>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if ($permit_cancellation)
                                <div class="tab-pane fade" id="v-pills-work-permit-cancel1" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work
                                                Permit
                                                Cancellation Form</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="permit-cancle-transaction-number1">Transaction
                                                            No:</label>
                                                        <input type="text" readonly class="form-control"
                                                            id="permit-cancle-transaction-number1"
                                                            value="{{$permit_cancellation->wp_app_can_trnc_no}}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="permit-cancle-transaction-fee1">Transaction
                                                            Fee</label>
                                                        <input type="text" readonly class="form-control"
                                                            id="permit-cancle-transaction-number2"
                                                            value="{{$permit_cancellation->wp_app_can_trnc_fee}}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                                    <label for="">Status</label>
                                                    <input type="text" readonly class="form-control status-container"
                                                        id="permit-cancle-transaction-number1"
                                                        value="{{$permit_cancellation->wp_app_can_status}}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="permit-cancle-date1">Date</label>
                                                        <input type="date" readonly
                                                            value="{{$permit_cancellation->wp_app_can_date}}"
                                                            class="form-control" id="permit-cancle-date1">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label
                                                            for="#">{{$permit_cancellation->wp_app_can_file_name}}</label>
                                                        @php
                                                        $file_name = $permit_cancellation->wp_app_can_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($permit_cancellation->wp_app_can_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $permit_cancellation->wp_app_can_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $permit_cancellation->wp_app_can_file) }}"
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
                                <div class="tab-pane fade" id="v-pills-work-permit-cancel2" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form
                                            action="{{ route('company.permit-cancellation-process-company', $permit_cancellation->id) }}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step1' name='signed_cancellation' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload
                                                Signed Cancellation Form </h6>
                                            <div class="row">
                                                <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                                    <div class="upload-file">
                                                        <label for='cancel11-file-bio_1'>Upload File</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control"
                                                                id='cancel11-file-bio_1' name="signed_cancellation_form"
                                                                style="line-height: 1" accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                        @if($permit_cancellation->signed_cancellation_form)
                                                        <input type="text" hidden value='Approved'
                                                            class="status-container">
                                                        @else
                                                        <input type="text" hidden value='Reject'
                                                            class="status-container">
                                                        @endif
                                                    </div>
                                                    @php
                                                    $file_name = $permit_cancellation->signed_cancellation_form;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($permit_cancellation->signed_cancellation_form)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $permit_cancellation->signed_cancellation_form) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $permit_cancellation->signed_cancellation_form) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2'
                                                        type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-work-permit-cancel3" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Signed
                                                Cancellation Form</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="visa-cancle-transaction-number21">Transaction
                                                            No:</label>
                                                        <input type="text" readonly class="form-control"
                                                            id="visa-cancle-transaction-number21"
                                                            value="{{$permit_cancellation->signd_can_from_tranc_no}}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="visa-cancle-transaction-fee21">Transaction
                                                            Fee</label>
                                                        <input type="text" readonly class="form-control"
                                                            id="visa-cancle-transaction-number21"
                                                            value="{{$permit_cancellation->signd_can_from_tranc_fee}}"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                                    <label for="">Status</label>
                                                    <input type="text" readonly class="form-control status-container"
                                                        id="visa-cancle-transaction-number21"
                                                        value="{{$permit_cancellation->signd_can_from_status}}"
                                                        placeholder="...">
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="visa-cancle-date21">Date</label>
                                                        <input type="date" readonly
                                                            value="{{$permit_cancellation->signd_can_from_date}}"
                                                            class="form-control" id="visa-cancle-date21"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label
                                                            for="#">{{$permit_cancellation->signd_can_from_file_name}}</label>
                                                        @php
                                                        $file_name = $permit_cancellation->signd_can_from_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($permit_cancellation->signd_can_from_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $permit_cancellation->signd_can_from_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $permit_cancellation->signd_can_from_file) }}"
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
                                <div class="tab-pane fade" id="v-pills-work-permit-cancel4" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form
                                            action="{{route('company.permit-cancellation-process-company',$permit_cancellation->id)}}"
                                            class='py-2' method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" value='step2' name='waiting' hidden>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting
                                                for
                                                Approval
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                                    <div class="form-group mb-3 ">
                                                        <label for="visa-cancel1-transaction-number3_3">Work Permit
                                                            Cancellation Approval Status</label>
                                                        <input type="text" id='54'
                                                            class="form-control new-visa-signmbstatus status-container"
                                                            readonly
                                                            value="{{$permit_cancellation->waiting_for_approval_status}}"
                                                            id="visa-cancel1-transaction-number3_3" placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                                    <div class="d-flex flex-column">
                                                        <label for="#">Attachment</label>
                                                        @php
                                                        $file_name = $permit_cancellation->waiting_for_approval_file;
                                                        $ext = explode('.', $file_name);
                                                        @endphp
                                                        @if ($permit_cancellation->waiting_for_approval_file)
                                                        <a class="upload-img" target="_black"
                                                            href="{{ asset('' . '/' . $permit_cancellation->waiting_for_approval_file) }}">
                                                            @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'doc')
                                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @elseif($ext[1] == 'pptx')
                                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                            @else
                                                            <img src="{{ asset('' . '/' . $permit_cancellation->waiting_for_approval_file) }}"
                                                                style="height: 50px;width:50px">
                                                            @endif
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                                    <label for='visa-cancel1-textarea-13_3'>Comments</label>
                                                    <textarea type="text" id='visa-cancel1-textarea-13_3' name="comment"
                                                        disabled placeholder="Enter Your Comments ..."
                                                        class="form-control"
                                                        rows="5">{{$permit_cancellation->waiting_for_approval_reason}}</textarea>
                                                </div>
                                                <div
                                                    class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="visa-cancel1-approval21_1-13">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            value="{{$permit_cancellation->waiting_for_approval_no}}"
                                                            id="visa-cancel1-approval21_1-13" placeholder="...">
                                                    </div>
                                                </div>
                                                <div
                                                    class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end new-visa-signmbstatus-file d-none">
                                                    <div class="upload-file">
                                                        <label for='visa-cancel1-file-bio23_13'>Upload
                                                            Document</label>
                                                        <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                            <input type="file" class="form-control"
                                                                id='visa-cancel1-file-bio23_13'
                                                                name="waiting_for_approval_reason_file"
                                                                style="line-height: 1" accept=".pdf,.doc,.excel">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                    $file_name = $permit_cancellation->waiting_for_approval_reason_file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                    @if ($permit_cancellation->waiting_for_approval_reason_file)
                                                    <a class="upload-img" target="_black"
                                                        href="{{ asset('' . '/' . $permit_cancellation->waiting_for_approval_reason_file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                        <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'doc')
                                                        <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                                        <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @elseif($ext[1] == 'pptx')
                                                        <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                            style="height: 50px;width:50px">
                                                        @else
                                                        <img src="{{ asset('' . '/' . $permit_cancellation->waiting_for_approval_reason_file) }}"
                                                            style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                                    <button class='btn btn-success px-5 py-2'>Submit</button>
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
                <!-- WorkPermit Cancel Tabe End -->
            </div>
        </div>
        <!-- Cancelatoion Tab end -->
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
            if($('.entry-visa-select').val()=='yes'){
                $('.Over-stay-fine').removeClass('d-none');

            }

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
            $('.select-tawjeeh-payment').change(function () {
                let a = $(this).parents('.tawjeeh-parent').siblings('.tawjeeh-document');
                if ($(this).val() == 'yes') {
                    a.addClass('d-flex');
                } else {
                    a.removeClass('d-flex');
                }
            })
            if($('.select-tawjeeh-payment').val()=='yes'){
                $('.tawjeeh-document').addClass('d-flex');

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
            if ($('.renewal-tawjeeh-payment-select1').val() == 'yes') {
                let a = $('.renewal-tawjeeh-payment-container');
                a.addClass('d-flex');
            }
            $('.renewal-tawjeeh-payment-select1').change(function () {
                let a = $('.renewal-tawjeeh-payment-container');
                if ($(this).val() == 'yes') {
                    a.addClass('d-flex');
                } else {
                    a.removeClass('d-flex');
                }
            });
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
            //tabs movement
            let count = 0;
            let flag = false;
            let baba = 0;
            $('.process-status-input').each(function () {
                let b = $(this).closest('.tab-pane').attr('aria-labelledby');
                count++
                if ($(this).val() == 'process started') {
                    $(this).closest('.tab-content').find('.status-container').each(function () {
                        if ($(this).val() !== 'Approved' && $(this).val() !== 'Skip') {
                            flag=true;
                            $('.tab-pane').each(function () {
                                $(this).removeClass('show active');

                            });
                            let c = $(this).closest('.tab-pane').attr('aria-labelledby');
                            $('#' + b).removeClass('active').click();
                            $('#' + c).removeClass('active').click();
                            $(this).closest('.tab-pane').addClass('active show');
                            $('#' + (b.slice(0, -4))).addClass('active show');
                            if (count >= 3 && count <= 6) {
                                $('#pills-work-permit-tab').removeClass('active').click();
                                $('#pills-work-permit').addClass('active show');
                            }
                            if (count >= 9) {
                                $('#pills-cancelation-tab').removeClass('active').click();
                                $('#pills-cancelation').addClass('active show')
                            }
                            $('.tabss').each(function () {
                                if ($(this).hasClass('active')) {
                                    let b = $(this).attr('href')
                                    $(b).addClass('active show');
                                }
                            })
                            return false;
                        }
                    })
                }
                if(flag){
                    return false;
                }
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
