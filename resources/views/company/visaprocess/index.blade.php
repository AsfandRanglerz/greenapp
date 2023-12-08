@extends('company.layout.master')
@section('content')
<style>
    .nav-link {
        color: black;
    }

    .nav-bar .nav-link.active {
        background-color: #1d2c42;
    }

    .nav-bar .nav-link:hover {
        background-color: rgba(29, 44, 66, 0.8);
        color: white;
    }

    .nav-bar .nav-link.active:hover {
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

    .work-permit-nav {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        /* Enable horizontal scrolling */
    }

    .work-permit-nav li {
        list-style: none;
        white-space: nowrap
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
        <ul class="nav nav-bar nav-pills mb-3" id="header-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-visa-tab" data-toggle="pill" href="#pills-visa" role="tab"
                    aria-controls="pills-visa" aria-selected="true">Visa</a>
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
        <div class="tab-pane fade show active" id="pills-visa" role="tabpanel" aria-labelledby="pills-visa-tab">
            <div class="row">
                <div class="col-3">
                    <div class="nav side-bar flex-column nav-pills" id="v-visa-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-visa1-tab" data-toggle="pill" href="#v-pills-visa1"
                            role="tab" aria-controls="v-pills-visa1" aria-selected="true">visa1</a>
                        <a class="nav-link" id="v-pills-visa2-tab" data-toggle="pill" href="#v-pills-visa2" role="tab"
                            aria-controls="v-visa2-profile" aria-selected="false">Visa2</a>
                        <a class="nav-link" id="v-pills-visa3-tab" data-toggle="pill" href="#v-pills-visa3" role="tab"
                            aria-controls="v-pills-visa3" aria-selected="false">Visa3</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-visa4"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false">visa4</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-visa-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-visa1" role="tabpanel"
                            aria-labelledby="v-pills-visa1-tab">visa1</div>
                        <div class="tab-pane fade" id="v-pills-visa2" role="tabpanel"
                            aria-labelledby="v-pills-visa2-tab">Visa2</div>
                        <div class="tab-pane fade" id="v-pills-visa3" role="tabpanel"
                            aria-labelledby="v-pills-visa3-tab">Visa3</div>
                        <div class="tab-pane fade" id="v-pills-visa4" role="tabpanel"
                            aria-labelledby="v-pills-visa4-tab">Visa4</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Renewal Process Tab-->
        <div class="tab-pane fade" id="pills-renewal-process" role="tabpanel"
            aria-labelledby="pills-renewal-process-tab">
            <div class="row">
                <div class="col-3">
                    <div class="nav side-bar flex-column nav-pills" id="v-renewal-proces-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-renewal-process1-tab" data-toggle="pill"
                            href="#v-pills-renewal-process1" role="tab" aria-controls="v-pills-renewal-process1"
                            aria-selected="true">Renewa-lProcess1</a>
                        <a class="nav-link" id="v-pills-renewal-process2-tab" data-toggle="pill"
                            href="#v-pills-renewal-process2" role="tab" aria-controls="v-pills-renewal-process2"
                            aria-selected="false">renewal-process2</a>
                        <a class="nav-link" id="v-pills-renewal-process3-tab" data-toggle="pill"
                            href="#v-pills-renewal-process3" role="tab" aria-controls="v-pills-renewal-process3"
                            aria-selected="false">renewal-process3</a>
                        <a class="nav-link" id="v-pills-renewal-process4-tab" data-toggle="pill"
                            href="#v-pills-renewal-process4" role="tab" aria-controls="v-pills-renewal-process4"
                            aria-selected="false">renewal-process4</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-renewal-process-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-renewal-process1" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process1-tab">RenewalProcess1</div>
                        <div class="tab-pane fade" id="v-pills-renewal-process2" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process2-tab">renewal-process2</div>
                        <div class="tab-pane fade" id="v-pills-renewal-process3" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process3-tab">renewal-process3</div>
                        <div class="tab-pane fade" id="v-pills-renewal-process4" role="tabpanel"
                            aria-labelledby="v-pills-renewal-process4-tab">renewal-process4</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Renewal Process End -->

        <!-- Work Permit -->
        <div class="tab-pane fade nav-bar" id="pills-Work-permit" role="tabpanel"
            aria-labelledby="pills-work-permit-tab">
            <ul class="nav nav-pills mb-3 work-permit-nav" id="work-permit-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-sponsored-tab" data-toggle="pill" href="#pills-sponsored"
                        role="tab" aria-controls="pills-sponsored" aria-selected="false">Sponsored by someone</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-part-time-tab" data-toggle="pill" href="#pills-part-time" role="tab"
                        aria-controls="pills-part-time" aria-selected="false">Part time & temporary</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-UAE-tab" data-toggle="pill" href="#pills-UAE" role="tab"
                        aria-controls="pills-UAE" aria-selected="false">UAE & GCC National</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-modify-contract-tab" data-toggle="pill" href="#pills-modify-contract"
                        role="tab" aria-controls="pills-modify-contract" aria-selected="false">Modify contract</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-modify-visa-tab" data-toggle="pill" href="#pills-modify-visa"
                        role="tab" aria-controls="pills-modify-visa" aria-selected="false">Modification of visa</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-modify-emirates-tab" data-toggle="pill" href="#pills-modify-emirates"
                        role="tab" aria-controls="pills-modify-emirates" aria-selected="false">Modification of
                        Emirates</a>
                </li>
            </ul>
            <div class="tab-content" id="work-permit-tabContent">
                <!-- Sponsored by someone tab -->
                <div class="tab-pane active show" id="pills-sponsored" role="tabpanel"
                    aria-labelledby="pills-sponsored-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="v-sponsored-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-sponsored1-tab" data-toggle="pill"
                                    href="#v-pills-sponsored1" role="tab" aria-controls="v-pills-sponsored1"
                                    aria-selected="true">sponsored1</a>
                                <a class="nav-link" id="v-pills-sponsored2-tab" data-toggle="pill"
                                    href="#v-pills-sponsored2" role="tab" aria-controls="v-pills-sponsored2"
                                    aria-selected="false">sponsored2</a>
                                <a class="nav-link" id="v-pills-sponsored3-tab" data-toggle="pill"
                                    href="#v-pills-sponsored3" role="tab" aria-controls="v-pills-sponsored3"
                                    aria-selected="false">sponsored3</a>
                                <a class="nav-link" id="v-pills-sponsored4-tab" data-toggle="pill"
                                    href="#v-pills-sponsored4" role="tab" aria-controls="v-pills-sponsored4"
                                    aria-selected="false">sponsored4</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-sponsored-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-sponsored1" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored1-tab">sponsored1</div>
                                <div class="tab-pane fade" id="v-pills-sponsored2" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored2-tab">sponsored2</div>
                                <div class="tab-pane fade" id="v-pills-sponsored3" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored3-tab">sponsored3</div>
                                <div class="tab-pane fade" id="v-pills-sponsored4" role="tabpanel"
                                    aria-labelledby="v-pills-sponsored4-tab">sponsored4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sponsored by someone tab end -->
                <!--partime-tab -->
                <div class="tab-pane" id="pills-part-time" role="tabpanel" aria-labelledby="pills-part-time-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="v-part-time-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-part-time1-tab" data-toggle="pill"
                                    href="#v-pills-part-time1" role="tab" aria-controls="v-pills-part-time1"
                                    aria-selected="true">part-time1</a>
                                <a class="nav-link" id="v-pills-part-time2-tab" data-toggle="pill"
                                    href="#v-pills-part-time2" role="tab" aria-controls="v-pills-part-time2"
                                    aria-selected="false">part-time2</a>
                                <a class="nav-link" id="v-pills-part-time3-tab" data-toggle="pill"
                                    href="#v-pills-part-time3" role="tab" aria-controls="v-pills-part-time3"
                                    aria-selected="false">part-time3</a>
                                <a class="nav-link" id="v-pills-part-time4-tab" data-toggle="pill"
                                    href="#v-pills-part-time4" role="tab" aria-controls="v-pills-part-time4"
                                    aria-selected="false">part-time4</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-part-time-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-part-time1" role="tabpanel"
                                    aria-labelledby="v-pills-part-time1-tab">part-time1</div>
                                <div class="tab-pane fade" id="v-pills-part-time2" role="tabpanel"
                                    aria-labelledby="v-pills-part-time2-tab">part-time2</div>
                                <div class="tab-pane fade" id="v-pills-part-time3" role="tabpanel"
                                    aria-labelledby="v-pills-part-time3-tab">part-time3</div>
                                <div class="tab-pane fade" id="v-pills-part-time4" role="tabpanel"
                                    aria-labelledby="v-pills-part-time4-tab">part-time4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partime-tab end -->
                <!-- UAE and Gcc tab -->
                <div class="tab-pane " id="pills-UAE" role="tabpanel" aria-labelledby="pills-UAE-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="v-header-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-UAE1-tab" data-toggle="pill" href="#v-pills-UAE1"
                                    role="tab" aria-controls="v-pills-UAE1" aria-selected="true">UAE1</a>
                                <a class="nav-link" id="v-pills-UAE2-tab" data-toggle="pill" href="#v-pills-UAE2"
                                    role="tab" aria-controls="v-pills-UAE2" aria-selected="false">UAE2</a>
                                <a class="nav-link" id="v-pills-UAE3-tab" data-toggle="pill" href="#v-pills-UAE3"
                                    role="tab" aria-controls="v-pills-UAE3" aria-selected="false">UAE3</a>
                                <a class="nav-link" id="v-pills-UAE4-tab" data-toggle="pill" href="#v-pills-UAE4"
                                    role="tab" aria-controls="v-pills-UAE4" aria-selected="false">UAE4</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-header-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-UAE1" role="tabpanel"
                                    aria-labelledby="v-pills-UAE1-tab">UAE1</div>
                                <div class="tab-pane fade" id="v-pills-UAE2" role="tabpanel"
                                    aria-labelledby="v-pills-UAE2-tab">UAE2</div>
                                <div class="tab-pane fade" id="v-pills-UAE3" role="tabpanel"
                                    aria-labelledby="v-pills-UAE3-tab">UAE3</div>
                                <div class="tab-pane fade" id="v-pills-UAE4" role="tabpanel"
                                    aria-labelledby="v-pills-UAE4-tab">UAE4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- UAE and Gcc tab end -->
                <!-- Modify Contract  -->
                <div class="tab-pane" id="pills-modify-contract" role="tabpanel"
                    aria-labelledby="pills-modify-contract-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="modify-contract-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-modify-contract1-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract1" role="tab" aria-controls="v-pills-modify-contract1"
                                    aria-selected="true">modify-contract1</a>
                                <a class="nav-link" id="v-pills-modify-contract2-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract2" role="tab" aria-controls="v-pills-modify-contract2"
                                    aria-selected="false">modify-contract2</a>
                                <a class="nav-link" id="v-pills-modify-contract3-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract3" role="tab" aria-controls="v-pills-modify-contract3"
                                    aria-selected="false">modify-contract3</a>
                                <a class="nav-link" id="v-pills-modify-contract4-tab" data-toggle="pill"
                                    href="#v-pills-modify-contract4" role="tab" aria-controls="v-pills-modify-contract4"
                                    aria-selected="false">modify-contract4</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="modify-contract-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-modify-contract1" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract1-tab">modify-contract1</div>
                                <div class="tab-pane fade" id="v-pills-modify-contract2" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract2-tab">modify-contract2</div>
                                <div class="tab-pane fade" id="v-pills-modify-contract3" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract3-tab">modify-contract3</div>
                                <div class="tab-pane fade" id="v-pills-modify-contract4" role="tabpanel"
                                    aria-labelledby="v-pills-modify-contract4-tab">modify-contract4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modify Contract End -->
                <!-- Modification Visa Tab -->
                <div class="tab-pane" id="pills-modify-visa" role="tabpanel" aria-labelledby="pills-modify-visa-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="modify-visa-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-modify-visa1-tab" data-toggle="pill"
                                    href="#v-pills-modify-visa1" role="tab" aria-controls="v-pills-modify-visa1"
                                    aria-selected="true">modify-visa1</a>
                                <a class="nav-link" id="v-pills-modify-visa2-tab" data-toggle="pill"
                                    href="#v-pills-modify-visa2" role="tab" aria-controls="v-pills-modify-visa2"
                                    aria-selected="false">modify-visa2</a>
                                <a class="nav-link" id="v-pills-modify-visa3-tab" data-toggle="pill"
                                    href="#v-pills-modify-visa3" role="tab" aria-controls="v-pills-modify-visa3"
                                    aria-selected="false">modify-visa3</a>
                                <a class="nav-link" id="v-pills-modify-visa4-tab" data-toggle="pill"
                                    href="#v-pills-modify-visa4" role="tab" aria-controls="v-pills-modify-visa4"
                                    aria-selected="false">modify-visa4</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="modify-visa-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-modify-visa1" role="tabpanel"
                                    aria-labelledby="v-pills-modify-visa1-tab">modify-visa1</div>
                                <div class="tab-pane fade" id="v-pills-modify-visa2" role="tabpanel"
                                    aria-labelledby="v-pills-modify-visa2-tab">modify-visa2</div>
                                <div class="tab-pane fade" id="v-pills-modify-visa3" role="tabpanel"
                                    aria-labelledby="v-pills-modify-visa3-tab">modify-visa3</div>
                                <div class="tab-pane fade" id="v-pills-modify-visa4" role="tabpanel"
                                    aria-labelledby="v-pills-modify-visa4-tab">modify-visa4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modification VIsa Tab ENd  -->
                <!-- Modification of Emirates -->
                <div class="tab-pane" id="pills-modify-emirates" role="tabpanel"
                    aria-labelledby="pills-modify-emirates-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="modify-emirates-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-modify-emirates1-tab" data-toggle="pill"
                                    href="#v-pills-modify-emirates1" role="tab" aria-controls="v-pills-modify-emirates1"
                                    aria-selected="true">modify-emirates1</a>
                                <a class="nav-link" id="v-pills-modify-emirates2-tab" data-toggle="pill"
                                    href="#v-pills-modify-emirates2" role="tab" aria-controls="v-pills-modify-emirates2"
                                    aria-selected="false">modify-emirates2</a>
                                <a class="nav-link" id="v-pills-modify-emirates3-tab" data-toggle="pill"
                                    href="#v-pills-modify-emirates3" role="tab" aria-controls="v-pills-modify-emirates3"
                                    aria-selected="false">modify-emirates3</a>
                                <a class="nav-link" id="v-pills-modify-emirates4-tab" data-toggle="pill"
                                    href="#v-pills-modify-emirates4" role="tab" aria-controls="v-pills-modify-emirates4"
                                    aria-selected="false">modify-emirates4</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="modify-emirates-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-modify-emirates1" role="tabpanel"
                                    aria-labelledby="v-pills-modify-emirates1-tab">modify-emirates1</div>
                                <div class="tab-pane fade" id="v-pills-modify-emirates2" role="tabpanel"
                                    aria-labelledby="v-pills-modify-emirates2-tab">modify-emirates2</div>
                                <div class="tab-pane fade" id="v-pills-modify-emirates3" role="tabpanel"
                                    aria-labelledby="v-pills-modify-emirates3-tab">modify-emirates3</div>
                                <div class="tab-pane fade" id="v-pills-modify-emirates4" role="tabpanel"
                                    aria-labelledby="v-pills-modify-emirates4-tab">modify-emirates4</div>
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
            <ul class="nav nav-pills mb-3 work-permit-nav" id="cancelation-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-visa-cancel-tab" data-toggle="pill" href="#pills-visa-cancel"
                        role="tab" aria-controls="pills-visa-cancel" aria-selected="false">Visa cancelation</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-work-permit-cancel-tab" data-toggle="pill" href="#pills-work-permit-cancel" role="tab"
                        aria-controls="pills-work-permit-cancel" aria-selected="false">Work permit cancelation</a>
                </li>
            </ul>
            <div class="tab-content" id="cancelation-tabContent" aria-labelledby="pills-cancelation-tab">
                <!--  Visa Cancel Tab -->
                <div class="tab-pane active show" id="pills-visa-cancel" role="tabpanel"
                    aria-labelledby="pills-visa-cancel-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="visa-cancel-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-visa-cancel1-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel1" role="tab" aria-controls="v-pills-visa-cancel1"
                                    aria-selected="true">visa-cancel-1</a>
                                <a class="nav-link" id="v-pills-visa-cancel2-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel2" role="tab" aria-controls="v-pills-visa-cancel2"
                                    aria-selected="false">visa-cancel2</a>
                                <a class="nav-link" id="v-pills-visa-cancel3-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel3" role="tab" aria-controls="v-pills-visa-cancel3"
                                    aria-selected="false">visa-cancel3</a>
                                <a class="nav-link" id="v-pills-visa-cancel4-tab" data-toggle="pill"
                                    href="#v-pills-visa-cancel4" role="tab" aria-controls="v-pills-visa-cancel4"
                                    aria-selected="false">visa-cancel4</a>
                            </div>
                        </div>
                        <div class="col-9">
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
                <div class="tab-pane" id="pills-work-permit-cancel" role="tabpanel" aria-labelledby="pills-work-permit-cancel-tab">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav side-bar flex-column nav-pills" id="work-permit-cancel-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-work-permit-cancel1-tab" data-toggle="pill"
                                    href="#v-pills-work-permit-cancel1" role="tab" aria-controls="v-pills-work-permit-cancel1"
                                    aria-selected="true">WorkPermit1</a>
                                <a class="nav-link" id="v-pills-work-permit-cancel2-tab" data-toggle="pill" href="#v-pills-work-permit-cancel2"
                                    role="tab" aria-controls="v-pills-work-permit-cancel2" aria-selected="false">work-permit-cancel2</a>
                                <a class="nav-link" id="v-pills-work-permit-cancel3-tab" data-toggle="pill" href="#v-pills-work-permit-cancel3"
                                    role="tab" aria-controls="v-pills-work-permit-cancel3" aria-selected="false">work-permit-cancel3</a>
                                <a class="nav-link" id="v-pills-work-permit-cancel4-tab" data-toggle="pill" href="#v-pills-work-permit-cancel4"
                                    role="tab" aria-controls="v-pills-work-permit-cancel4" aria-selected="false">work-permit-cancel4</a>
                            </div>
                        </div>
                        <div class="col-9">
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
<script type="text/javascript">
    $(function () {
        /*datatable search*/
        $('.employees').DataTable({
            "pageLength": 10,
            aaSorting: [
                [0, "asc"]
            ]
        });
        /*datatable search*/

        $('.show_confirm').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
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
        $(document).on('click', '.employee-data', function () {
            var id = $(this).attr('id');
            // alert(id);
            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                url: "{{ url('company/employee-view') }}",
                data: {
                    'id': id,

                },
                succes(r         pons

     });
</script>
@endsection