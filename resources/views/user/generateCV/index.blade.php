@extends('user.layout.master')
@section('content')
<style>
    .CV_format_section .avatar-wrapper .upload-button-removeDrop {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
    }

    .CV_format_section .CV_dp {
        width: 170px;
        height: 170px;
        border-radius: 50%;
    }

    .CV_format_section hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid var(--green-clr);
    }

    .CV_format_section .CV_info {
        background-color: var(--green-clr);
    }

    .CV_format_section .avatar-section {
        text-align: start;
    }

    .CV_format_section .avatar-wrapper {
        display: inline-block;
        position: relative;
    }

    .CV_format_section .cv_dp_inner {
        object-fit: cover;
        width: 170px;
        height: 170px;
        border-radius: 50%;
    }

    .CV_format_section .avatar-wrapper {
        position: relative;
        height: 120px;
        width: 120px;
        border-radius: 0;
        margin: 16px auto;
        overflow: hidden;
        box-shadow: none;
        transition: all 0.3s ease;
    }

    .CV_format_section .upload-button-removeDrop {
        position: absolute;
        bottom: 10px;
        right: 10px;
    }

    .CV_format_section .CV_border {
        border: 1px solid var(--green-clr);
    }

    @media (max-width:575px) {
        .CV_format_section .avatar-section {
            text-align: center;
        }

        .CV_format_section .avatar-wrapper {
            display: inline-block;
            position: relative;
        }
    }
</style>
<div class="CV_format_section">
    <form action="">
        <div class="col-lg-9 mx-auto py-3 rounded light-box-shadow">
            <div class="form-group text-right">
                <button class="btn btn-success" onclick="myFunction()" id="hide_content"><span class="fa fa-print mr-2"></span>Generate CV</button>
            </div>
            {{-- @dd($employee) --}}
            <div class="d-sm-flex justify-content-start">
                <div class="text-center">
                    <div class="bg-light CV_dp">
                        <img src="{{ asset($employee->image)}}" alt="" class="img-fluid cv_dp_inner" />
                    </div>
                    <div class="my-3">
                        <h5>Mr.{{$employee->name}}</h5>
                    </div>
                </div>
                <div class="mt-5">
                    <p>
                        {{$employee->carrier_objectives}}
                    </p>
                </div>
            </div>
            <hr>
            <h3 class="CV_info py-2 px-3 text-white">Personal Details</h3>
            <div class="CV_border">
                <div class="px-sm-3">
                    <div class="row px-sm-0 px-3">
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="fullName" class="col-sm-4 col-12 col-form-label">Full Name</label>
                                <p class="mb-0">{{$employee->name ?? ' '}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="email" class="col-sm-4 col-12 col-form-label">Email</label>
                                <p class="mb-0">{{$employee->email}}.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="phone" class="col-form-label col-sm-4 col-12">Phone</label>
                                <p class="mb-0">{{$employee->phone}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="Nationality" class="col-form-label col-sm-4 col-12">Nationality</label>
                                <p class="mb-0">{{$employee->nationality}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="Religion" class="col-form-label col-sm-4 col-12">Religion</label>
                                <p class="mb-0">{{$employee->religion}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="Status" class="col-form-label col-sm-4 col-12">Marital Status </label>
                                <p class="mb-0">{{$employee->marital_status}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="Gender" class="col-form-label col-sm-4 col-12">Gender</label>
                                <p class="mb-0">{{$employee->gender}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group align-items-center row mb-3">
                                <label for="FatherName" class="col-form-label col-sm-4 col-12">Father Name</label>
                                <p class="mb-0">{{$employee->father_name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="CV_info py-2 px-3 text-white mt-2">Eduction Details</h3>
            <div class="CV_border">
                <div class="px-sm-3">
                    <div class="row px-sm-0 px-3">
                        <div class="col-lg-12">
                            <div class="form-group align-items-center row mb-3">
                                {{-- <label for="fullName" class="col-sm-4 col-12 col-form-label">Education</label> --}}
                                <p class="mb-0 col-sm-12 col-12">{{$employee->education_details}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h3 class="CV_info py-2 px-3 text-white mt-2">Experience</h3>
            <div class="CV_border">
                <div class="px-sm-3">
                    <div class="row px-sm-0 px-3">
                        <div class="col-lg-12">
                            <div class="form-group align-items-center row mb-3">
                                {{-- <label for="fullName" class="col-sm-4 col-12 col-form-label">Education</label> --}}
                                <p class="mb-0 col-sm-12 col-12">{{$employee->experience}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h3 class="CV_info py-2 px-3 text-white mt-2">Skills</h3>
            <div class="CV_border">
                <div class="px-sm-3">
                    <div class="row px-sm-0 px-3">

                        <div class="col-lg-12">
                            <div class="form-group align-items-center row mb-3 ">
                                {{-- <label for="fullName" class="col-sm-4 col-12 col-form-label">Full Name</label> --}}
                                <p for="fullName" class="col-sm-1 col-form-label">{{$employee->skills}}</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <h3 class="CV_info py-2 px-3 text-white mt-2">Passport Details</h3>
            <div class="CV_border">
                <div class="px-sm-3">
                    <div class="row px-sm-0 px-3">
                        <div class="col-lg-12">
                            <div class="form-group align-items-center row mb-3">
                                @foreach ($document as $documents)
                                <div class="form-group align-items-center row mb-3">
                                    {{-- <p class="mb-0">{{$document}}</p> --}}
                                        @if ($documents->doc_type == 'Passport')
                                        <div class="col-lg-6">
                                            <div class="form-group align-items-center row mb-3">
                                                <label for="Nationality" class="col-form-label col-sm-4 col-12">Passport Number</label>
                                                <p class="mb-0">{{$employee->passport_number}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group align-items-center row mb-3">
                                                <label for="email" class="col-sm-4 col-12 col-form-label col-12">Passport Issue Date:</label>
                                                <p>{{$documents->doc_type == 'Passport'? $documents->issue_date : '' }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group align-items-center row mb-3">
                                                <label for="email" class="col-sm-4 col-12 col-form-label">Passport Expiry Date:</label>
                                                <p>{{$documents->doc_type == 'Passport'? $documents->expiry_date : '' }}</p>
                                            </div>
                                        </div>
                                        @endif
                                        {{-- <p>{{$documents->doc_type}}</p> --}}

                                        @if ($documents->doc_type == 'Visit Visa')
                                        <div class="col-lg-6">
                                            <div class="form-group align-items-center row mb-3">
                                                <label for="email" class="col-sm-4 col-12 col-form-label col-12">Visa Issue Date:</label>
                                                <p>{{$documents->doc_type == 'Visit Visa'? $documents->issue_date : '' }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group align-items-center row mb-3">
                                                <label for="email" class="col-sm-4 col-12 col-form-label col-12">Visa Expiry Date:</label>
                                                <p>{{$documents->doc_type == 'Visit Visa'? $documents->expiry_date : '' }}</p>
                                            </div>
                                        </div>
                                        @endif
                                  </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            <h3 class="CV_info py-2 px-3 text-white mt-2">Driving License</h3>
            <div class="CV_border">
                <div class="px-sm-3">
                    <div class="row px-sm-0 px-3">
                        <div class="col-lg-12">
                            <div class="form-group align-items-center row mb-3">
                             <label for="fullName" class="col-sm-4 col-12 col-form-label">{{$employee->license}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </form>
</div>

@endsection
@section('script')
<script>
    $(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#uploadedImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button-removeDrop").on('click', function() {
            $(this).siblings('.file-upload').click();
        });
    });

    // function myFunction() {
    //     window.print();
    // }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function myFunction() {

        // console.log('usman');
        // Hide everything except .CV_format_section
        $("#hide_content,#dashboardSidebar,#menuToggle,.back-btn").hide();
        window.print();
        // Show everything back
        $("body > *").show();
    }
</script>

@endsection
