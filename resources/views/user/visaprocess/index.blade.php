@extends('user.layout.master')
@section('content')
<style>
    .nav-link {
        color: black;
        white-space: nowrap;
    }
    .upload-img{
      height: 60px;
      width: 60px;
    }

    .nav-bar .nav-link.active,
    .work-permit-nav .nav-link.active {
        background-color: #1d2c42;
    }

    .upload-file{
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
                <a class="nav-link" id="pills-cancelation-tab" data-toggle="pill" href="#pills-cancelation" role="tab"
                    aria-controls="pills-Cancelation" aria-selected="false">Cancelation</a>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="header-tabContent">
        <!-- Visa Tabs -->
        <div class="tab-pane fade active show" id="pills-visa" role="tabpanel"h aria-labelledby="pills-visa-tab">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills" id="v-visa-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-start-tab" data-toggle="pill"
                            href="#v-pills-start" role="tab" aria-controls="v-pills-start" aria-selected="true">Start Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa1-tab" data-toggle="pill"
                            href="#v-pills-visa1" role="tab" aria-controls="v-pills-visa1" aria-selected="true">Job Offer</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa2-tab" data-toggle="pill" href="#v-pills-visa2"
                            role="tab" aria-controls="v-visa2-profile" aria-selected="false">Upload Signed ST & MB</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa3-tab" data-toggle="pill" href="#v-pills-visa3"
                            role="tab" aria-controls="v-pills-visa3" aria-selected="false">Pay Dubai Insurance</a>
                            <a class="nav-link bordered_tab" id="v-pills-preapproval-tab" data-toggle="pill" href="#v-pills-preapproval"
                            role="tab" aria-controls="v-pills-preapproval" aria-selected="false">Preapproval Work <br class='d-none d-lg-block'>Permit Fees & Upload <br class='d-none d-lg-block'>the documents</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa4-tab" data-toggle="pill" href="#v-pills-visa4"
                            role="tab" aria-controls="v-pills-visa4" aria-selected="false">Entry Visa</a>
                        <a class="nav-link bordered_tab change-visa-status" id="v-pills-visa5-tab" data-toggle="pill"
                            href="#v-pills-visa-5" role="tab" aria-controls="v-pills-visa-5"
                            aria-selected="false">Change of visa status</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa6-tab" data-toggle="pill" href="#v-pills-visa6"
                            role="tab" aria-controls="v-pills-visa6" aria-selected="false">Medical Fitness</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa7-tab" data-toggle="pill" href="#v-pills-visa7"
                            role="tab" aria-controls="v-pills-visa7" aria-selected="false">Tawjeeh Classes</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa8-tab" data-toggle="pill" href="#v-pills-visa8"
                            role="tab" aria-controls="v-pills-visa8" aria-selected="false">Contract Submission</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa9-tab" data-toggle="pill" href="#v-pills-visa9"
                            role="tab" aria-controls="v-pills-visa9" aria-selected="false">Health Insurance</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa10-tab" data-toggle="pill"
                            href="#v-pills-visa10" role="tab" aria-controls="v-pills-visa10" aria-selected="false">Work
                            Permit</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa11-tab" data-toggle="pill"
                            href="#v-pills-visa11" role="tab" aria-controls="v-pills-visa11"
                            aria-selected="false">Emirates ID & <br class='d-none d-lg-block'> Residency
                            Application</a>
                        <a class="nav-link bordered_tab" id="v-pills-visa12-tab" data-toggle="pill"
                            href="#v-pills-visa12" role="tab" aria-controls="v-pills-visa12"
                            aria-selected="false">Employee Biometric</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3 ">
                    <div class="tab-content" id="v-visa-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-start" role="tabpanel"
                        aria-labelledby="v-pills-start-tab">
                        <div class='rounded p-3 light-box-shadow'>
                            <form action="" method="" class='py-2'>
                                <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                <div class="row">
                                        <div class="col-12 text-center">

                                            <input type="hidden" value='new visa' name='process_name'>
                                            <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-visa">Process status</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-visa" placeholder="...">
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                        <div class="tab-pane fade" id="v-pills-visa1" role="tabpanel"
                            aria-labelledby="v-pills-visa1-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Job Offer, MB Contracts + Preapproval of work permit</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee"  placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="start-process-transaction-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa2" role="tabpanel"
                            aria-labelledby="v-pills-visa2-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload ST & MB</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#visa2-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa2-transaction-number"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#visa2-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa2-transaction-fee"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <p class='m-0 form-control'>Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#StMB-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="StMB-transaction-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-12">
                                          <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="flexCheckDefault">
                                            <label class="custom-control-label" for="flexCheckDefault">The contract has been signed.</label>
                                          </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                          <div class="upload-file">
                                            <label for='#visa2-file'>Upload ST & MB</label>
                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                <input type="file" class="form-control" id='visa2-file'
                                                    name="file" style="line-height: 1" accept=".pdf,.doc,.excel">
                                                <div class="input-group-prepend">
                                                    <small class="input-group-text"><span
                                                            class="fa fa-paperclip"></span></small>
                                                </div>
                                            </div>
                                          </div>
                                             <a href=""><img class="upload-img"  src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa3" role="tabpanel"
                            aria-labelledby="v-pills-visa3-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay Dubai insurance</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#visa3-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control" id="visa3-transaction-number"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#visa3-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="visa3-transaction-fee"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="#status">Status</label>
                                            <p class='form-control'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#dubai-insurance-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="dubai-insurance-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                          <div class="d-flex flex-column">
                                          <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>

                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-preapproval" role="tabpanel"
                            aria-labelledby="v-pills-preapproval-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Preapproval Work Permit Fees and upload the documents</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#preapproval-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="preapproval-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#preapproval-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="preapproval-transaction-fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#preapproval-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="preapproval-transaction-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>
                                      </div>
                                    </div>
                                </form>
                            </div>

                    </div>
                        <div class="tab-pane fade" id="v-pills-visa4" role="tabpanel"
                            aria-labelledby="v-pills-visa4-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Entry Visa</h6>
                                    <div class="row align-items-end fine-select-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#entry-visa-number">Transaction No:</label>
                                                <input type="text" class="form-control" id="entry-visa-number"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#entry-visa-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="entry-visa-fee"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <p class='m-0 form-control entry-visa-status'>Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#entry-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="entry-transaction-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12 gap-1 d-flex align-items-end mb-3">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>
                                      </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 entry-visa-country">
                                            <div class="form-group">
                                                <label for="#select-entry-visa">Are u inside the country?</label>
                                                <select class="form-control entry-visa-select" id="entry-visa-select">
                                                    <option selected disabled>select status</option>
                                                    <option value='yes'>Yes</option>
                                                    <option value='no'>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 d-none Over-stay-fine">
                                            <div class="form-group">
                                                <label for="#select-fine-file">Over Stay Fines?</label>
                                                <select class="form-control fine-select" id="select-fine-file">
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
                                          <label for='#over-stay-file'>Upload file</label>
                                          <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                              <input type="file" class="form-control" id='over-stay-file'
                                                  name="file" style="line-height: 1" accept=".pdf,.doc,.excel">
                                              <div class="input-group-prepend">
                                                  <small class="input-group-text"><span
                                                          class="fa fa-paperclip"></span></small>
                                              </div>
                                          </div>
                                        </div>
                                           <a href=""><img class="upload-img"  src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                      </div>
                                    </div>
                                  </div>
                                    <div class="col-12 text-center">
                                      <button class='btn btn-success px-5 py-2'>Submit</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa-5" role="tabpanel"
                            aria-labelledby="v-pills-visa-5-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Change of Visa status</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number5">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number5" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee5">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee5" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#change-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="change-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa6" role="tabpanel"
                            aria-labelledby="v-pills-visa6-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number6">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number6" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee6">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee6" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#change-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="change-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-12 col-md-6 mb-3 align-items-end d-flex">
                                          <div class="upload-file">
                                            <label for='#visa-medical'>Upload Medical</label>
                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                <input type="file" class="form-control" id='visa-medical'
                                                    name="file" style="line-height: 1" accept=".pdf,.doc,.excel">
                                                <div class="input-group-prepend">
                                                    <small class="input-group-text"><span
                                                            class="fa fa-paperclip"></span></small>
                                                </div>
                                            </div>
                                          </div>
                                             <a href=""><img class="upload-img"  src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa7" role="tabpanel"
                            aria-labelledby="v-pills-visa7-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Tawjeeh training classes</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number5">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number6" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee6">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee6" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#tawjeeh-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="tawjeeh-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 tawjeeh-parent col-md-6">
                                            <div class="form-group">
                                                <label for="#select-tawjeeh-payment">Tawjeeh Payment</label>
                                                <select class="form-control select-tawjeeh-payment" id="select-tawjeeh-payment">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='yes'>Yes</option>
                                                    <option value='no'>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-12 tawjeeh-document d-none col-md-6 mb-3 align-items-end ">
                                          <div class="upload-file">
                                            <label for='#visa-tawjeeh-medical'>Upload Document</label>
                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                <input type="file" class="form-control" id='visa-tawjeeh-medical'
                                                    name="file" style="line-height: 1" accept=".pdf,.doc,.excel">
                                                <div class="input-group-prepend">
                                                    <small class="input-group-text"><span
                                                            class="fa fa-paperclip"></span></small>
                                                </div>
                                            </div>
                                          </div>
                                             <a href=""><img class="upload-img"  src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa8" role="tabpanel"
                            aria-labelledby="v-pills-visa8-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Contract Submission</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number8">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number8" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee8">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee8" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#tawjeeh-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="tawjeeh-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa9" role="tabpanel"
                            aria-labelledby="v-pills-visa9-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Health Insurance</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number9">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number9" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee9">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee9" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#health-insurance-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="health-insurance-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>
                                      </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa10" role="tabpanel"
                            aria-labelledby="v-pills-visa10-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work Permit</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number10">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number10" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee10">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee10" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#work-permit-transaction-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="work-permit-transaction-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 gap-1 d-flex align-items-end col-md-6">
                                          <div class="d-flex flex-column">
                                            <label for="#">Attachment</label>
                                         <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                          </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa11" role="tabpanel"
                            aria-labelledby="v-pills-visa11-tab">
                            <div class='rounded p-3 light-box-shadow'>
                              <form action="" class='pt-2'>
                                  <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Emirates ID</h6>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-12 col-md-6">
                                          <div class="form-group mb-3">
                                              <label for="#start-process-transaction-number11">Transaction No:</label>
                                              <input type="text" class="form-control"
                                                  id="start-process-transaction-number11" placeholder="...">
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-12 col-md-6">
                                          <div class="form-group mb-3">
                                              <label for="#start-process-transaction-fee11">Transaction Fee</label>
                                              <input type="text" class="form-control"
                                                  id="start-process-transaction-fee11" placeholder="...">
                                          </div>
                                      </div>
                                      <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                          <label for="">Status</label>
                                          <p class='form-control m-0'>Pending</p>
                                      </div>
                                      <div class="col-xl-6 col-lg-12 col-md-6">
                                          <div class="form-group mb-3">
                                              <label for="#emirates-transaction-date">Date</label>
                                              <input type="date" class="form-control"
                                                  id="emirates-transaction-date" placeholder="...">
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                        <div class="d-flex flex-column">
                                          <label for="#">Attachment</label>
                                       <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                        </div>
                                  </div>
                                </div>
                              </form>
                              <form action="" class='pt-4 pb-2'>
                                <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency Application</h6>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="#start-process-transaction-number111">Transaction No:</label>
                                            <input type="text" class="form-control"
                                                id="start-process-transaction-number112" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="#start-process-transaction-fee112">Transaction Fee</label>
                                            <input type="text" class="form-control"
                                                id="start-process-transaction-fee112" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                        <label for="">Status</label>
                                        <p class='form-control m-0'>Pending</p>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="#emirates-transaction-date2">Date</label>
                                            <input type="date" class="form-control"
                                                id="emirates-transaction-date2" >
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 d-flex align-items-end col-md-6">
                                      <div class="d-flex flex-column">
                                        <label for="#">Attachment</label>
                                     <a href=""><img class="upload-img" src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
                                      </div>
                                </div>
                              </div>
                              </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-visa12" role="tabpanel"
                            aria-labelledby="v-pills-visa12-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Employee Biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number12">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number12" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee12">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee12" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#biometric1-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="#biometric1-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 biometric-select-parent col-md-6">
                                            <div class="form-group">
                                                <label for="#select-biometric-file">Employee Biometric</label>
                                                <select class="form-control biometric-select" id="select-biometric">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='required'>Required</option>
                                                    <option value='not required'>Not Required</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6 biometric-files-container d-none">
                                          <div class="mb-3 align-items-end d-flex">
                                            <div class="upload-file">
                                              <label for='#visa2-file-bio'>Uplaod File</label>
                                              <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                  <input type="file" class="form-control" id='visa2-file-bio'
                                                      name="file" style="line-height: 1" accept=".pdf,.doc,.excel">
                                                  <div class="input-group-prepend">
                                                      <small class="input-group-text"><span
                                                              class="fa fa-paperclip"></span></small>
                                                  </div>
                                              </div>
                                            </div>
                                               <a href=""><img class="upload-img"  src="https://media.istockphoto.com/id/1386446426/photo/badshahi-mosque.jpg?s=612x612&w=0&k=20&c=vShhc9rb17q_5k-tx_HJnlDvlE4YjCNNlOCEWplI2_Y=" alt=""></a>
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
        <!-- Renewal Process Tab-->
        <div class="tab-pane fade" id="pills-renewal-process" role="tabpanel"
            aria-labelledby="pills-renewal-process-tab">
            <div class="row ">
                <div class="col-xl-3 col-lg-4">
                    <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                        id="v-renewal-proces-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active bordered_tab" id="v-pills-renewal-process0-tab" data-toggle="pill"
                            href="#v-pills-renewal-process0" role="tab" aria-controls="v-pills-renewal-process1"
                            aria-selected="true">Start Process</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-process1-tab" data-toggle="pill"
                            href="#v-pills-renewal-process1" role="tab" aria-controls="v-pills-renewal-process1"
                            aria-selected="true">Medical Fitness</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-process2-tab" data-toggle="pill"
                            href="#v-pills-renewal-process2" role="tab" aria-controls="v-pills-renewal-process2"
                            aria-selected="false">Work Permit Application</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-process3-tab" data-toggle="pill"
                            href="#v-pills-renewal-process3" role="tab" aria-controls="v-pills-renewal-process3"
                            aria-selected="false">Upload Signed MB</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-process4-tab" data-toggle="pill"
                            href="#v-pills-renewal-process4" role="tab" aria-controls="v-pills-renewal-process4"
                            aria-selected="false">Pay Dubai Insurance</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-process5-tab" data-toggle="pill"
                            href="#v-pills-renewal-process5" role="tab" aria-controls="v-pills-renewal-process5"
                            aria-selected="false">Contract Submission</a>
                        <a class="nav-link bordered_tab" id="v-pills-renewal-process6-tab" data-toggle="pill"
                            href="#v-pills-renewal-process6" role="tab" aria-controls="v-pills-renewal-process6"
                            aria-selected="false">Tawjeeh Classes</a>
                            <a class="nav-link bordered_tab" id="v-pills-renewal-process7-tab" data-toggle="pill"
                            href="#v-pills-renewal-process7" role="tab" aria-controls="v-pills-renewal-process7"
                            aria-selected="false">Residency & ID Renewal</a>
                            <a class="nav-link bordered_tab" id="v-pills-renewal-process8-tab" data-toggle="pill"
                            href="#v-pills-renewal-process8" role="tab" aria-controls="v-pills-renewal-process8"
                            aria-selected="false">Employee Biometric</a>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                    <div class="tab-content" id="v-renewal-process-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-renewal-process0" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process0-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start renewal process</h6>
                                    <div class="row">
                                            <div class="col-12 text-center">
                                                <input type="hidden">
                                                <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="#start-process-visa">Process status</label>
                                                    <input type="text" class="form-control"
                                                        id="start-process-visa" placeholder="...">
                                                </div>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process1" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process1-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Medical Fitness</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-medical-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="renewal-medical-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-medical-fee">Transaction Fee</label>
                                                <input type="text" class="form-control" id="renewal-medical-fee"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <p class='m-0 form-control'>Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process1-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal-process1-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-8">
                                            <div class="form-group">
                                                <label for="#fitness">Fitness Status</label>
                                                <select class="form-control" id="fitness">
                                                    <option value="">select fitness</option>
                                                    <option value="fit">Fit</option>
                                                    <option value="not fit">Not Fit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process2" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process2-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work permit application</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#work-permit-app-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="work-permit-app-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#work-permit-app-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="work-permit-app-transaction-fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <p class='m-0 form-control'>Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process2-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal-process2-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for='#work-permit-app-textareara'>Comments</label>
                                            <textarea required type="text" id='work-permit-app-textareara'
                                                name="comment" placeholder="Enter Your Comments ..."
                                                class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                            <label for='#work-permit-app'>Upload Contract</label>
                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                <input type="file" multiple class="form-control"
                                                    id='work-permit-app-file' name="file" style="line-height: 1">
                                                <div class="input-group-prepend">
                                                    <small class="input-group-text"><span
                                                            class="fa fa-paperclip"></span></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process3" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process3-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload signed MB</h6>
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#upload-signed-mb-transaction-number">Transaction
                                                    No:</label>
                                                <input type="text" class="form-control"
                                                    id="upload-signed-mb-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#upload-signed-mb-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="upload-signed-mb-transaction-fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#">Status</label>
                                                <p class='m-0 form-control'>Pending</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process3-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal-process3-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                            <label for='#upload-signed-mb'>Upload signed MB</label>
                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                <input type="file" multiple class="form-control"
                                                    id='upload-signed-mb-file' name="file" style="line-height: 1">
                                                <div class="input-group-prepend">
                                                    <small class="input-group-text"><span
                                                            class="fa fa-paperclip"></span></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process4" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process4-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay Dubai insurance</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number12">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number12" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee12">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee12" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process3-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal-process3-date" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process5" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process5-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Contract submission</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#RenewalProcess4-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="RenewalProcess4-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#RenewalProcess4-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="RenewalProcess4-transaction-fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#renewal-process3-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal-process3-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                            <label for='#visa-contract-file'>Upload Contract</label>
                                            <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                <input type="file" multiple class="form-control" id='visa-contract-file'
                                                    name="file" style="line-height: 1">
                                                <div class="input-group-prepend">
                                                    <small class="input-group-text"><span
                                                            class="fa fa-paperclip"></span></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process6" role="tabpanel"
                            aria-labelledby="v-renewal-process6-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Tawjeeh classes</h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#Renewal-process7-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#Renewal-process7-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal6-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal6-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label for="#renewal-tawjeeh-payment">Tawjeeh Payment</label>
                                                <select class="form-control" id="renewal-tawjeeh-payment">
                                                    <option selected disabled>Select Option</option>
                                                    <option value='yes'>Yes</option>
                                                    <option value='no'>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class='btn btn-success px-5 py-2'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process7" role="tabpanel"
                            aria-labelledby="v-pills-visa7-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Residency and Identity renewal
                                    </h6>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#Renewal-process7-transaction-number">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-number" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#Renewal-process7-transaction-fee">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="Renewal-process7-transaction-fee" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal7-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal7-date" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-renewal-process8" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process8-tab">
                            <div class='rounded p-3 light-box-shadow'>
                                <form action="" class='py-2'>
                                    <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Employee biometric</h6>
                                    <div class="row biometric-file-container">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-number12">Transaction No:</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-number12" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="#start-process-transaction-fee12">Transaction Fee</label>
                                                <input type="text" class="form-control"
                                                    id="start-process-transaction-fee12" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                            <label for="">Status</label>
                                            <p class='form-control m-0'>Pending</p>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="renewal8-date">Date</label>
                                                <input type="date" class="form-control"
                                                    id="renewal8-date" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-8">
                                            <div class="form-group">
                                                <label for="#select-biometric-file">Employee Biometric</label>
                                                <select class="form-control biometric-select" id="select-biometric">
                                                    <option>Employee Biometric</option>
                                                    <option value='required'>Required</option>
                                                    <option value='not required'>Not Required</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row biometric-files-container align-items-end d-none">
                                        <div class="col-xl-8 col-lg-12 col-md-8 ">
                                            <label for='#biometric-renewal-file'>Upload biometric</label>
                                            <div class="input-group  mb-4">
                                                <input type="file" multiple class="form-control" id='biometric-renewal-file'
                                                    name="file" style="line-height: 1">
                                                <div class="input-group-prepend">
                                                    <small class="input-group-text"><span
                                                            class="fa fa-paperclip"></span></small>
                                                </div>
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

        <!-- Work Permit -->
        <div class="tab-pane fade" id="pills-Work-permit" role="tabpanel" aria-labelledby="pills-work-permit-tab">
            <ul class="nav nav-pills mb-3 work-permit-nav horizontal_tabs" id="work-permit-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active Work-permit-tabs " id="pills-sponsored-tab" data-toggle="pill"
                        href="#pills-sponsored" role="tab" aria-controls="pills-sponsored"
                        aria-selected="false">Sponsored
                        by someone</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs" id="pills-part-time-tab" data-toggle="pill"
                        href="#pills-part-time" role="tab" aria-controls="pills-part-time" aria-selected="false">Part
                        time & temporary</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs" id="pills-UAE-tab" data-toggle="pill" href="#pills-UAE"
                        role="tab" aria-controls="pills-UAE" aria-selected="false">UAE & GCC National</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs" id="pills-modify-contract-tab" data-toggle="pill"
                        href="#pills-modify-contract" role="tab" aria-controls="pills-modify-contract"
                        aria-selected="false">Modify contract</a>
                </li>
                <li class="nav-item " role="presentation">
                    <a class="nav-link Work-permit-tabs" id="pills-modify-visa-tab" data-toggle="pill"
                        href="#pills-modify-visa" role="tab" aria-controls="pills-modify-visa"
                        aria-selected="false">Modification of visa</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs-last" id="pills-modify-emirates-tab" data-toggle="pill"
                        href="#pills-modify-emirates" role="tab" aria-controls="pills-modify-emirates"
                        aria-selected="false">Modification of
                        Emirates</a>
                </li>
            </ul>
            <div class="tab-content" id="work-permit-tabContent">
                <!-- Sponsored by someone tab -->
                <div class="tab-pane active show" id="pills-sponsored" role="tabpanel"
                    aria-labelledby="pills-sponsored-tab">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="v-sponsored-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab" id="v-pills-sponsored0-tab" data-toggle="pill"
                                    href="#v-pills-sponsored0" role="tab" aria-controls="v-pills-sponsored0"
                                    aria-selected="true">
                                    Start Process
                                </a>
                                <a class="nav-link bordered_tab" id="v-pills-sponsored1-tab" data-toggle="pill"
                                    href="#v-pills-sponsored1" role="tab" aria-controls="v-pills-sponsored1"
                                    aria-selected="true">
                                    Work Permit Application
                                </a>
                                <a class="nav-link bordered_tab" id="v-pills-sponsored2-tab" data-toggle="pill"
                                    href="#v-pills-sponsored2" role="tab" aria-controls="v-pills-sponsored2"
                                    aria-selected="false">Upload signed MB</a>
                                <a class="nav-link bordered_tab" id="v-pills-sponsored3-tab" data-toggle="pill"
                                    href="#v-pills-sponsored3" role="tab" aria-controls="v-pills-sponsored3"
                                    aria-selected="false">Pay Dubai insurance</a>
                                <a class="nav-link bordered_tab" id="v-pills-sponsored4-tab" data-toggle="pill"
                                    href="#v-pills-sponsored4" role="tab" aria-controls="v-pills-sponsored4"
                                    aria-selected="false">Preapproval Work Permit Fees</a>
                                    <a class="nav-link bordered_tab" id="v-pills-sponsored5-tab" data-toggle="pill"
                                    href="#v-pills-sponsored5" role="tab" aria-controls="v-pills-sponsored5"
                                    aria-selected="false">Upload Work Permit
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="v-sponsored-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-sponsored0" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored0-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form  class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                            <div class="row">
                                                    <div class="col-12 text-center">
                                                        <input type="hidden">
                                                        <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="#sponsored0-visa">Process status</label>
                                                            <input type="text" class="form-control"
                                                                id="start-process-visa" placeholder="...">
                                                        </div>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="v-pills-sponsored1" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work permit application</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6  parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0 sponsor-by-someone-status'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor1-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="sponsor1-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 d-none sponsor-workPermit-textearea">
                                                    <label for='#sponsor2-textareara'>Comments</label>
                                                    <textarea type="text" id='sponsor2-textareara' name="comment"
                                                        placeholder="Enter Your Comments ..." class="form-control"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 d-none sponsor-workPermit-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor-approval">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsor-approval" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-sponsored2" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload signed MB</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored1-transacton1-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored1-transacton1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor2-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="#sponsor2-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-8 ">
                                                    <label for='#sponsored1-file1'>Upload Signed MB</label>
                                                    <div class="input-group  mb-4">
                                                        <input type="file" multiple class="form-control" id='sponsored1-file1'
                                                            name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2'>Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-sponsored3" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay Dubai insurance</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored3-transacton3-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored3-transacton3-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored3-transacton3-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored3-transacton3-fee1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor3-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="sponsor3-date" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-sponsored4" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Preapproval Work Permit Fees</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor4-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="sponsor4-date" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-sponsored5" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored5-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload Work Permit
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsored4-transacton3-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsored4-transacton3" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor4-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="sponsor4-date" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sponsored by someone tab end -->
                <!--partime-tab -->
                <div class="tab-pane" id="pills-part-time" role="tabpanel" aria-labelledby="pills-part-time-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="v-part-time-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab" id="v-pills-part-time0-tab" data-toggle="pill"
                                    href="#v-pills-part-time0" role="tab" aria-controls="v-pills-part-time0"
                                    aria-selected="true">Start Process</a>
                                <a class="nav-link bordered_tab" id="v-pills-part-time1-tab" data-toggle="pill"
                                    href="#v-pills-part-time1" role="tab" aria-controls="v-pills-part-time1"
                                    aria-selected="true">Work Permit Application</a>
                                <a class="nav-link bordered_tab" id="v-pills-part-time2-tab" data-toggle="pill"
                                    href="#v-pills-part-time2" role="tab" aria-controls="v-pills-part-time2"
                                    aria-selected="false">Upload Sign MB</a>
                                <a class="nav-link bordered_tab" id="v-pills-part-time3-tab" data-toggle="pill"
                                    href="#v-pills-part-time3" role="tab" aria-controls="v-pills-part-time3"
                                    aria-selected="false">Part time temporary work permit</a>
                                <a class="nav-link bordered_tab" id="v-pills-part-time4-tab" data-toggle="pill"
                                    href="#v-pills-part-time4" role="tab" aria-controls="v-pills-part-time4"
                                    aria-selected="false">Upload Contract</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="v-part-time-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-part-time0" role="tabpanel"
                                    aria-labelledby="v-pills-part-time0-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form  class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                            <div class="row">
                                                    <div class="col-12 text-center">
                                                        <input type="hidden">
                                                        <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="#parttime-visa">Process status</label>
                                                            <input type="text" class="form-control"
                                                                id="part-time-visa" placeholder="...">
                                                        </div>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="v-pills-part-time1" role="tabpanel"
                                    aria-labelledby="v-pills-part-time1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work Permit
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#part-time1-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="part-time1-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#part-time1-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="part-time1-transacton3" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#part-time1-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="part-time1-date" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-part-time2" role="tabpanel"
                                    aria-labelledby="v-pills-part-time2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload signed MB</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="parttime2-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-transacton1-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="parttime2-transacton1-fee1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="#parttime2-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-8 ">
                                                    <label for='#upload-partime1'>Upload Signed MB</label>
                                                    <div class="input-group  mb-4">
                                                        <input type="file" multiple class="form-control" id='upload-partime1'
                                                            name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2'>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-part-time3" role="tabpanel"
                                    aria-labelledby="v-pills-part-time3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>Part time/ temporary work permit</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime3-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="parttime3-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime3-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="parttime3-fee1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0 sponsor-by-someone-status'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor1-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="sponsor1-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 d-none sponsor-workPermit-textearea">
                                                    <label for='#sponsor2-textareara'>Comments</label>
                                                    <textarea type="text" id='sponsor2-textareara' name="comment"
                                                        placeholder="Enter Your Comments ..." class="form-control"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 d-none sponsor-workPermit-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor-approval">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsor-approval" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-part-time4" role="tabpanel"
                                    aria-labelledby="v-pills-part-time4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span>Upload Contract</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#partime-4-number">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="partime-4-number" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#partime-4-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="partime-4-fee" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#partime-4-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="partime-4-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-8 ">
                                                        <label for='upload-parttime'>Uplaod Contract</label>
                                                        <div class="input-group  mb-4">
                                                            <input type="file" multiple class="form-control" id='upload-parttime'
                                                                name="file" style="line-height: 1">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-paperclip"></span></small>
                                                            </div>
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
                <!-- partime-tab end -->
                <!-- UAE and Gcc tab -->
                <div class="tab-pane" id="pills-UAE" role="tabpanel" aria-labelledby="pills-UAE-tab">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar horizontal_tabs flex-row flex-lg-column nav-pills"
                                id="v-header-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab" id="v-pills-UAE0-tab" data-toggle="pill"
                                    href="#v-pills-UAE0" role="tab" aria-controls="v-pills-UAE0"
                                    aria-selected="true">Start Process</a>
                                <a class="nav-link bordered_tab" id="v-pills-UAE1-tab" data-toggle="pill"
                                    href="#v-pills-UAE1" role="tab" aria-controls="v-pills-UAE1"
                                    aria-selected="true">Work permit application</a>
                                <a class="nav-link bordered_tab" id="v-pills-UAE2-tab" data-toggle="pill"
                                    href="#v-pills-UAE2" role="tab" aria-controls="v-pills-UAE2"
                                    aria-selected="false">Upload sign MB</a>
                                <a class="nav-link bordered_tab" id="v-pills-UAE3-tab" data-toggle="pill"
                                    href="#v-pills-UAE3" role="tab" aria-controls="v-pills-UAE3"
                                    aria-selected="false">Pay Dubi insurance</a>
                                <a class="nav-link bordered_tab" id="v-pills-UAE4-tab" data-toggle="pill"
                                    href="#v-pills-UAE4" role="tab" aria-controls="v-pills-UAE4"
                                    aria-selected="false">Upload Work Permit</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="v-header-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-UAE0" role="tabpanel"
                                aria-labelledby="v-pills-UAE0-tab">
                                <div class='rounded p-3 light-box-shadow'>
                                    <form  class='py-2'>
                                        <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                        <div class="row">
                                                <div class="col-12 text-center">
                                                    <input type="hidden">
                                                    <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#parttime2-visa">Process status</label>
                                                        <input type="text" class="form-control"
                                                            id="part-time2-visa" placeholder="...">
                                                    </div>
                                                </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                                <div class="tab-pane fade" id="v-pills-UAE1" role="tabpanel"
                                    aria-labelledby="v-pills-UAE1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work permit application</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae-transacton1-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="uae-transacton1-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="uae-fee1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6  parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0 sponsor-by-someone-status'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae1-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="uae1-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 d-none sponsor-workPermit-textearea">
                                                    <label for='#sponsor2-textareara'>Comments</label>
                                                    <textarea type="text" id='sponsor2-textareara' name="comment"
                                                        placeholder="Enter Your Comments ..." class="form-control"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 d-none sponsor-workPermit-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="#sponsor-approval">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            id="sponsor-approval" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="v-pills-UAE2" role="tabpanel"
                                    aria-labelledby="v-pills-UAE2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload signed MB</h6>
                                            <div class="row align-items-end">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#upload-signed-uae2-mb-transaction-number">Transaction
                                                            No:</label>
                                                        <input type="text" class="form-control"
                                                            id="upload-signed-uae2-mb-transaction-number" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#upload-signed-uae2-mb-transaction-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="upload-signed-uae2-mb-transaction-fee" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#">Status</label>
                                                        <p class='m-0 form-control'>Pending</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#upload-signed-uae2-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="upload-signed-uae2-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                                    <label for='#upload-signed-uae2-mb-file'>Upload signed MB</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" multiple class="form-control"
                                                            id='upload-signed-uae2-mb-file' name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2'>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="v-pills-UAE3" role="tabpanel"
                                    aria-labelledby="v-pills-UAE3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Pay Dubai insurance</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae3-transaction-number">Transaction No:</label>
                                                        <input type="text" class="form-control" id="uae3-transaction-number"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae3-transaction-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="uae3-transaction-fee"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="#status">Status</label>
                                                    <p class='form-control'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#uae3-insurance-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="uae3-insurance-date" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-UAE4" role="tabpanel"
                                    aria-labelledby="v-pills-UAE4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work Permit</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#UAE4-process-transaction-number10">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="UAE4-process-transaction-number10" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#UAE4-process-transaction-fee10">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="UAE4-process-transaction-fee10" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#UAE4-permit-transaction-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="UAE4-permit-transaction-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                                    <label for='#UAE4-work-permit-file'>Upload work permit</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" multiple class="form-control"
                                                            id='UAE4-work-permit-file' name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- UAE and Gcc tab end -->
                <!-- Modify Contract  -->
                <div class="tab-pane" id="pills-modify-contract" role="tabpanel"
                    aria-labelledby="pills-modify-contract-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-lg-column flex-row horizontal_tabs nav-pills"
                                id="modify-contract-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab" id="v-pills-modify-contract0-tab"
                                data-toggle="pill" href="#v-pills-modify-contract0" role="tab"
                                aria-controls="v-pills-modify-contract0" aria-selected="true">Start Process</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-contract1-tab"
                                    data-toggle="pill" href="#v-pills-modify-contract1" role="tab"
                                    aria-controls="v-pills-modify-contract1" aria-selected="true">work permit application</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-contract2-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract2" role="tab" aria-controls="v-pills-modify-contract2"
                                    aria-selected="false">Uplaod signed MB</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-contract3-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract3" role="tab" aria-controls="v-pills-modify-contract3"
                                    aria-selected="false">Submit modify contract</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-contract4-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract4" role="tab" aria-controls="v-pills-modify-contract4"
                                    aria-selected="false">Modify contract status</a>
                                    <a class="nav-link bordered_tab" id="v-pills-modify-contract5-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract5" role="tab" aria-controls="v-pills-modify-contract5"
                                    aria-selected="false">Upload Work Permit</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="modify-contract-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-modify-contract0" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract0-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form  class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Start Process</h6>
                                            <div class="row">
                                                    <div class="col-12 text-center">
                                                        <input type="hidden">
                                                        <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="#parttime3-visa">Process status</label>
                                                            <input type="text" class="form-control"
                                                                id="part-time3-visa" placeholder="...">
                                                        </div>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-contract1" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work Permit application
                                            </h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify1-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="modify1-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify1-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="modify1-fee1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify1-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="modify1-date" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-contract2" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload signed MB</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify2-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="modify2-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify2-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="modify2-fee" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify2-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="#modify2-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-8 ">
                                                    <label for='#modify2-file1'>Upload Signed MB</label>
                                                    <div class="input-group  mb-4">
                                                        <input type="file" multiple class="form-control" id='modify2-file1'
                                                            name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2'>Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-contract3" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Submit modify contract</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify3-number1">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="modify3-number1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify3-fee1">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="modify3-fee1" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify3-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="modify3-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-8 ">
                                                    <label for='#modify3-file3'>Upload Contract</label>
                                                    <div class="input-group  mb-4">
                                                        <input type="file" multiple class="form-control" id='modify2-file1'
                                                            name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class='btn btn-success px-5 py-2'>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-contract4" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract4-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Modify Contract status</h6>
                                            <div class="row">
                                                <div class="form-group mb-0 col-xl-8 col-lg-12 col-md-8 parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0 sponsor-by-someone-status'>Pending</p>
                                                </div>
                                                <div class="form-group col-12 d-none sponsor-workPermit-textearea">
                                                    <label for='#modify4-textareara'>Comments</label>
                                                    <textarea type="text" id='sponsor2-textareara' name="comment"
                                                        placeholder="Enter Your Comments ..." class="form-control"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 d-none sponsor-workPermit-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify4-approval">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            id="modify4" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-contract5" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract5-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Work Permit</h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify5-number10">Transaction No:</label>
                                                        <input type="text" class="form-control"
                                                            id="modify5-number10" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify5-fee10">Transaction Fee</label>
                                                        <input type="text" class="form-control"
                                                            id="modify5-fee10" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-12 col-md-6 ">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0'>Pending</p>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify5-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="modify5-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                                    <label for='#modify5-file'>Upload work permit</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" multiple class="form-control"
                                                            id='modify5-file' name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modify Contract End -->
                <!-- Modification Visa Tab -->
                <div class="tab-pane" id="pills-modify-visa" role="tabpanel" aria-labelledby="pills-modify-visa-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="modify-visa-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab" id="v-pills-modify-visa1-tab" data-toggle="pill"
                                    href="#v-pills-modify-visa1" role="tab" aria-controls="v-pills-modify-visa1"
                                    aria-selected="true">Start process</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-visa2-tab" data-toggle="pill"
                                    href="#v-pills-modify-visa2" role="tab" aria-controls="v-pills-modify-visa2"
                                    aria-selected="false">Upload Application</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-visa3-tab" data-toggle="pill"
                                    href="#v-pills-modify-visa3" role="tab" aria-controls="v-pills-modify-visa3"
                                    aria-selected="false">Application status</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="modify-visa-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-modify-visa1" role="tabpanel"
                                    aria-labelledby="v-pills-modify-visa1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form class="py-2
                                        ">
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Visa Modification</h6>
                                            <div class="row">
                                                    <div class="col-12 text-center">
                                                        <input type="hidden">
                                                        <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="#start-process-modify-visa">Process status</label>
                                                            <input type="text" class="form-control"
                                                                id="start-process-modify-visa" placeholder="...">
                                                        </div>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-modify-visa2" role="tabpanel"
                                    aria-labelledby="v-pills-modify-visa2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload visa modification application</h6>
                                            <div class="row align-items-end">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-visa-2-number">Transaction No:</label>
                                                        <input type="text" class="form-control" id="modify-visa-2-number"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-visa-2-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="modify-visa-2-fee"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#">Status</label>
                                                        <p class='m-0 form-control'>Pending</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-visa-2-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="modify-visa-2-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                                    <label for='#modify-visa-2-file'>Upload application</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" multiple class="form-control" id='modify-visa-2-file'
                                                            name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-visa3" role="tabpanel"
                                    aria-labelledby="v-pills-modify-visa3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Application status</h6>
                                            <div class="row">
                                                <div class="form-group mb-0 col-xl-8 col-lg-12 col-md-8 parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0 sponsor-by-someone-status'>Pending</p>
                                                </div>
                                                <div class="form-group col-12 d-none sponsor-workPermit-textearea">
                                                    <label for='#modify-app-visa3-textareara'>Comments</label>
                                                    <textarea type="text" id='modify-app-visa3-textareara' name="comment"
                                                        placeholder="Enter Your Comments ..." class="form-control"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 d-none sponsor-workPermit-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-app-visa3-approval">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            id="modify-app-visa3-approval" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modification VIsa Tab ENd  -->
                <!-- Modification of Emirates -->
                <div class="tab-pane" id="pills-modify-emirates" role="tabpanel"
                    aria-labelledby="pills-modify-emirates-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="modify-emirates-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab" id="v-pills-modify-emirates1-tab"
                                    data-toggle="pill" href="#v-pills-modify-emirates1" role="tab"
                                    aria-controls="v-pills-modify-emirates1" aria-selected="true">Start Process</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-emirates2-tab" data-toggle="pill"
                                    href="#v-pills-modify-emirates2" role="tab" aria-controls="v-pills-modify-emirates2"
                                    aria-selected="false">Upload application</a>
                                <a class="nav-link bordered_tab" id="v-pills-modify-emirates3-tab" data-toggle="pill"
                                    href="#v-pills-modify-emirates3" role="tab" aria-controls="v-pills-modify-emirates3"
                                    aria-selected="false">Application Status</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="modify-emirates-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-modify-emirates1" role="tabpanel"
                                    aria-labelledby="v-pills-modify-emirates1-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form class="py-2
                                        ">
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Modification of Emirates ID</h6>
                                            <div class="row">
                                                    <div class="col-12 text-center">
                                                        <input type="hidden">
                                                        <button class='btn btn-success px-5 py-2' type="submit">Start Process</button>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="#start-process-modify-emirates-id">Process status</label>
                                                            <input type="text" class="form-control"
                                                                id="start-process-modify-visa" placeholder="...">
                                                        </div>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-emirates2" role="tabpanel"
                                    aria-labelledby="v-pills-modify-emirates2-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Upload Emirates ID modification application</h6>
                                            <div class="row align-items-end">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-emirates-2-number">Transaction No:</label>
                                                        <input type="text" class="form-control" id="modify-emirates-2-number"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-emrates-2-fee">Transaction Fee</label>
                                                        <input type="text" class="form-control" id="modify-emirates-2-fee"
                                                            placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#">Status</label>
                                                        <p class='m-0 form-control'>Pending</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-emirates-2-date">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="modify-emirates-2-date" placeholder="...">
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-6 mb-4">
                                                    <label for='#modify-emirates-2-file'>Upload application</label>
                                                    <div class="input-group mb-xl-0 mb-lg-3 mb-md-0">
                                                        <input type="file" multiple class="form-control" id='modify-emirates-2-file'
                                                            name="file" style="line-height: 1">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-paperclip"></span></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class='btn btn-success d-block mx-auto px-5 py-2'>Submit</button>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-modify-emirates3" role="tabpanel"
                                    aria-labelledby="v-pills-modify-emirates3-tab">
                                    <div class='rounded p-3 light-box-shadow'>
                                        <form action="" class='py-2'>
                                            <h6 class="mb-3"><span class="fa fa-solid fa-folder"></span> Application status</h6>
                                            <div class="row">
                                                <div class="form-group mb-0 col-xl-8 col-lg-12 col-md-8 parent-of-approval-rejected">
                                                    <label for="">Status</label>
                                                    <p class='form-control m-0 sponsor-by-someone-status'>Pending</p>
                                                </div>
                                                <div class="form-group col-12 d-none sponsor-workPermit-textearea">
                                                    <label for='#modify-emirates3-textareara'>Comments</label>
                                                    <textarea type="text" id='modify-emirates3-textareara' name="comment"
                                                        placeholder="Enter Your Comments ..." class="form-control"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 d-none sponsor-workPermit-approval">
                                                    <div class="form-group mb-3">
                                                        <label for="#modify-emirates3-approval">Approval No:</label>
                                                        <input type="text" class="form-control"
                                                            id="modify-emirates3-approval" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modification of Emirates End -->
            </div>

        </div>
        <!-- Workit Permit End -->
        <!-- Cancelatoion Tab -->
        <div class="tab-pane fade nav-bar" id="pills-cancelation" role="tabpanel"
            aria-labelledby="pills-pills-cancelation-tab">
            <ul class="nav nav-pills mb-3 horizontal_tabs" id="cancelation-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active Work-permit-tabs" id="pills-visa-cancel-tab" data-toggle="pill"
                        href="#pills-visa-cancel" role="tab" aria-controls="pills-visa-cancel"
                        aria-selected="false">Visa
                        cancelation</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link Work-permit-tabs-last" id="pills-work-permit-cancel-tab" data-toggle="pill"
                        href="#pills-work-permit-cancel" role="tab" aria-controls="pills-work-permit-cancel"
                        aria-selected="false">Work permit cancelation</a>
                </li>
            </ul>
            <div class="tab-content" id="cancelation-tabContent" aria-labelledby="pills-cancelation-tab">
                <!--  Visa Cancel Tab -->
                <div class="tab-pane active show" id="pills-visa-cancel" role="tabpanel"
                    aria-labelledby="pills-visa-cancel-tab">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4">
                            <div class="nav side-bar flex-row horizontal_tabs flex-lg-column nav-pills"
                                id="visa-cancel-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active bordered_tab" id="v-pills-visa-cancel1-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel1" role="tab" aria-controls="v-pills-visa-cancel1"
                                    aria-selected="true">visa-cancel-1</a>
                                <a class="nav-link bordered_tab" id="v-pills-visa-cancel2-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel2" role="tab" aria-controls="v-pills-visa-cancel2"
                                    aria-selected="false">visa-cancel2</a>
                                <a class="nav-link bordered_tab" id="v-pills-visa-cancel3-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel3" role="tab" aria-controls="v-pills-visa-cancel3"
                                    aria-selected="false">visa-cancel3</a>
                                <a class="nav-link bordered_tab" id="v-pills-visa-cancel4-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel4" role="tab" aria-controls="v-pills-visa-cancel4"
                                    aria-selected="false">visa-cancel4</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3 mt-lg-0 mt-3">
                            <div class="tab-content" id="visa-cancel-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-visa-cancel1" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel1-tab">visa-cancel1</div>
                                <div class="tab-pane fade" id="v-pills-visa-cancel2" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel2-tab">visa-cancel2</div>
                                <div class="tab-pane fade" id="v-pills-visa-cancel3" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel3-tab">visa-cancel3</div>
                                <div class="tab-pane fade" id="v-pills-visa-cancel4" role="tabpanel"
                                    aria-labelledby="v-pills-visa-cancel4-tab">visa-cancel4</div>
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
                                <a class="nav-link active bordered_tab" id="v-pills-work-permit-cancel1-tab"
                                    data-toggle="pill" href="#v-pills-work-permit-cancel1" role="tab"
                                    aria-controls="v-pills-work-permit-cancel1" aria-selected="true">WorkPermit1</a>
                                <a class="nav-link bordered_tab" id="v-pills-work-permit-cancel2-tab" data-toggle="pill"
                                    href="#v-pills-work-permit-cancel2" role="tab"
                                    aria-controls="v-pills-work-permit-cancel2"
                                    aria-selected="false">work-permit-cancel2</a>
                                <a class="nav-link bordered_tab" id="v-pills-work-permit-cancel3-tab" data-toggle="pill"
                                    href="#v-pills-work-permit-cancel3" role="tab"
                                    aria-controls="v-pills-work-permit-cancel3"
                                    aria-selected="false">work-permit-cancel3</a>
                                <a class="nav-link bordered_tab" id="v-pills-work-permit-cancel4-tab" data-toggle="pill"
                                    href="#v-pills-work-permit-cancel4" role="tab"
                                    aria-controls="v-pills-work-permit-cancel4"
                                    aria-selected="false">work-permit-cancel4</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 px-lg-3  mt-lg-0 mt-3">
                            <div class="tab-content" id="work-permit-cancel-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-work-permit-cancel1" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel1-tab">work-permit-cancel1</div>
                                <div class="tab-pane fade" id="v-pills-work-permit-cancel2" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel2-tab">work-permit-cancel2</div>
                                <div class="tab-pane fade" id="v-pills-work-permit-cancel3" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel3-tab">work-permit-cancel3</div>
                                <div class="tab-pane fade" id="v-pills-work-permit-cancel4" role="tabpanel"
                                    aria-labelledby="v-pills-work-permit-cancel4-tab">work-permit-cancel4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- WorkPermit Cancel Tabe End -->
            </div>
        </div>
        <!-- Cancelatoion Tab end -->
    </div>
    <!-- Main Header Tab content end -->



    <!-- Mian tab -->
</div>

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $(function () {
        if($('.entry-visa-select').val()=='yes'){
            let a=$(this).parents('.entry-visa-country').siblings('.Over-stay-fine');
            let fine_select=a.find('.fine-select');
            let file_container=$('.fine-files-container');
            if($(this).val()=='yes'){
                a.removeClass('d-none');
                if(fine_select.val()=='yes'){
                    file_container.removeClass('d-none');
                }
            }else{
                a.addClass('d-none');
                file_container.addClass('d-none');
            }
        }
        if($('.fine-select').val()=='yes'){
            let file_container=$('.fine-files-container');
            file_container.removeClass('d-none');
        }
        $('.fine-select').change(function(){
            let file_container=$('.fine-files-container');
           if ($(this).val()=='yes'){
                file_container.removeClass('d-none');
           }else{
            file_container.addClass('d-none');
           }
        })
        $('.entry-visa-select').change(function(){
            let a=$(this).parents('.entry-visa-country').siblings('.Over-stay-fine');
            let fine_select=a.find('.fine-select');
            let file_container=$('.fine-files-container');
            if($(this).val()=='yes'){
                a.removeClass('d-none');
                if(fine_select.val()=='yes'){
                    file_container.removeClass('d-none');
                }
            }else{
                a.addClass('d-none');
                file_container.addClass('d-none');
            }

        });

        if($('.biometric-file-container').val()=='required'){
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
        $('.select-tawjeeh-payment').change(function(){
          let a=$(this).parents('.tawjeeh-parent').siblings('.tawjeeh-document');
            if($(this).val()=='yes'){
              a.addClass('d-flex');
            }else{
              a.removeClass('d-flex');
            }
        })
        if($('.select-tawjeeh-payment').val()=='yes'){
           $(this).parents('.tawjeeh-parent').siblings('.tawjeeh-document').addClass('d-flex');
        };
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

