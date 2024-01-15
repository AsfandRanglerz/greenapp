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
                                <form action="{{ route('user.dependent-visa-request',$dependent->id) }}"
                                     method="POST" class='py-2'>
                                    @csrf
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
                                                <label for="visa-id-9">Status</label>
                                                <input class='m-0 form-control entry-visa-status' id="visa-id-9"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-10">Date</label>
                                                <input type="date" class="form-control" id="visa-id-10"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
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
                                                <label for="visa-id-16">Status</label>
                                                <input class='m-0 form-control entry-visa-status' id="visa-id-16"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-17">Date</label>
                                                <input type="date" class="form-control" id="visa-id-17"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
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
                                                <label for="visa-id-20">Status</label>
                                                <input class='m-0 form-control entry-visa-status' id="visa-id-20"
                                                    type="text" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-21">Date</label>
                                                <input type="date" class="form-control" id="visa-id-21"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
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
                                            <label for="visa-id-24">Status</label>
                                            <input class='form-control m-0' placeholder='...' id="visa-id-24">
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
                                            <label for="visa-id-31">Status</label>
                                            <input class='form-control m-0' type="text" placeholder="..."
                                                id="visa-id-31" />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-30">Date</label>
                                                <input type="date" class="form-control" id="emirates-transaction-date"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
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
                                            <label for="visa-id-34">Status</label>
                                            <input class='form-control m-0' type="text" placeholder="...."
                                                id="visa-id-34">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa-id-35">Date</label>
                                                <input type="date" class="form-control" id="visa-id-35">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
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
                                            <label for="visa-38-id">Status</label>
                                            <input class='form-control m-0' id="visa-38-id" type="text"
                                                placeholder="..." />
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
                                                <label for="visa-2-id">Process status</label>
                                                <input type="text" class="form-control" id="visa-2-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-medical-fitness" role="tabpanel"
                            aria-labelledby="v-pills-renewal-medical-fitness-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical
                                        Fitness</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-1">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control" id="visa1-id-1" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-2">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-2" disabled
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-3">Status</label>
                                                <input type="text" class="form-control status-container" id="visa1-id-3"
                                                    disabled placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-4">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-4"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 renewal-fitness-parent">
                                            <div class="form-group">
                                                <label for="visa1-id-5">Fitness Status</label>
                                                <select class="form-control renewal-fitness" id="visa1-id-5"
                                                    name="medical_fitness_st">
                                                    <option selected disabled>select fitness</option>
                                                    <option value="fit">
                                                        Fit</option>
                                                    <option value="not fit">
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
                                            <a href=""><img class="upload-img"
                                                    src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                    alt=""></a>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-residency-id" role="tabpanel"
                            aria-labelledby="v-pills-renewal-residency-id-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='pt-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-7">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa1-id-7"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-8">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-8"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-9">Status</label>
                                            <input class='form-control m-0' type="text" placeholder="..."
                                                id="visa-id-31" />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-9">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-9"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
                                                <a href=""><img class="upload-img"
                                                        src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                        alt=""></a>
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
                                                <input type="text" class="form-control" id="visa1-id-10"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-11">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-11"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-13">Status</label>
                                            <input class='form-control m-0' type="text" placeholder="...."
                                                id="visa1-id-13">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-12">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-12">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
                                                <a href=""><img class="upload-img"
                                                        src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y="
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-biometric" role="tabpanel"
                            aria-labelledby="v-pills-renewal-biometric-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-113">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa1-id-113"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-14">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa1-id-14"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="visa1-id-15">Status</label>
                                            <input class='form-control m-0' id="visa1-id-15" type="text"
                                                placeholder="..." />
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-16">Date</label>
                                                <input type="date" class="form-control" id="visa1-id-16"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="visa1-id-17">Biometric</label>
                                                <select class="form-control biometric-select" id="visa1-id-17">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required'>Required</option>
                                                    <option value='not required'>Not Required</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                            <div class="mb-3 align-items-end d-flex">
                                                <div class="upload-file">
                                                    <label for='visa1-id-18'>Uplaod File</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" class="form-control" id='visa1-id-18'
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
                                                <label for="visa-3-id">Process status</label>
                                                <input type="text" class="form-control" id="visa-3-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-modify-visa-entry" role="tabpanel"
                            aria-labelledby="v-pills-modify-visa-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for
                                        Approval
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                            <div class="form-group mb-3 ">
                                                <label for="visa1-id-20">Application
                                                    Status</label>
                                                <input type="text"
                                                    class="form-control status-container new-visa-signmbstatus" readonly
                                                    id="visa1-id-20" placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
                                                <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                            <label for='visa1-id-21'>Comments</label>
                                            <textarea type="text" id='visa1-id-21' name="comment"
                                                placeholder="Enter Your Comments ..." class="form-control" disabled
                                                rows="5"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                            <div class="form-group mb-3">
                                                <label for="visa1-id-22">Approval No:</label>
                                                <input type="text" class="form-control"
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
                                            <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                        </div>
                                        <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                                <label for="visa-4-id">Process status</label>
                                                <input type="text" class="form-control" id="visa-4-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-modify-id-entry" role="tabpanel"
                            aria-labelledby="v-pills-modify-id-entry-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form
                                    class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Waiting for
                                        Approval
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6 new-visa-signmbstatus-parent">
                                            <div class="form-group mb-3 ">
                                                <label for="visa2-id-20">Application
                                                    Status</label>
                                                <input type="text"
                                                    class="form-control status-container new-visa-signmbstatus" readonly
                                                    id="visa2-id-20" placeholder="...">
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-6 col-lg-12 gap-1 d-none new-visa-signmbstatus-attachment align-items-end col-md-6">
                                            <div class="d-flex flex-column">
                                                <label for="#">Attachment</label>
                                                <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 d-none new-visa-signmbstatus-comment">
                                            <label for='visa2-id-21'>Comments</label>
                                            <textarea type="text" id='visa2-id-21' name="comment"
                                                placeholder="Enter Your Comments ..." class="form-control" disabled
                                                rows="5"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none new-visa-signmbstatus-approval">
                                            <div class="form-group mb-3">
                                                <label for="visa2-id-22">Approval No:</label>
                                                <input type="text" class="form-control"
                                                    id="visa2-id-22" placeholder="...">
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
                                            <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                        </div>
                                        <div class="col-12 text-center new-visa-signmbstatus-btn d-none">
                                            <button class='btn btn-success px-5 py-2' type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                            aria-selected="false">Residency Application</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="visa-cancel-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-residency-cancel-start" role="tabpanel"
                            aria-labelledby="v-pills-residency-cancel-start-tab">
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
                                                <label for="visa-5-id">Process status</label>
                                                <input type="text" class="form-control" id="visa-5-id"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-residency-cancel" role="tabpanel"
                            aria-labelledby="v-pills-residency-cancel-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency Application</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-36">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa3-id-36"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-19">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa3-id-19"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-20">Status</label>
                                                <input class='m-0 form-control entry-visa-status' id="visa3-id-20"  type="text"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="visa3-id-21">Date</label>
                                                <input type="date" class="form-control"
                                                    id="visa3-id-21" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
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
