@extends('user.layout.master')
@section('content')
    <div class="CV_format_section">
        <form action="">
            <div class="col-lg-12 mx-auto py-3 rounded light-box-shadow">
                <div class="form-group text-right">
                    <button class="d-lg-inline-block btn btn-success" onclick="myFunction()" id="hide_content"><span
                            class="fa fa-print mr-2"></span>Generate CV</button>
                </div>
                {{-- @dd($employee) --}}
                <div class="d-sm-flex justify-content-start">
                    <div class="d-flex flex-column align-items-center">
                        <div class="bg-light CV_dp">
                            <img src="{{ asset($employee->image) }}" alt="" class="img-fluid cv_dp_inner" />
                        </div>
                        <div class="my-sm-3 my-2">
                            <h5 class="mb-0">{{ $employee->name }}</h5>
                        </div>
                    </div>
                    <div class="mt-sm-5 mt-2 ml-5">
                        <p>
                            {{ $employee->carrier_objectives }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="col-lg-9">
                        <h5 class="CV_info py-2 px-3 text-white">Personal Details</h5>
                        <div class="CV_border">
                            <div class="row mx-0 px-sm-0 px-3 py-2">
                                <div class="col-lg-5">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="fullName" class="col-sm-5 col-12 col-form-label">Full Name</label>
                                        <p class="mb-0">{{ $employee->name ?? ' ' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="email" class="col-sm-5 col-12 col-form-label">Email</label>
                                        <p class="mb-0">{{ $employee->email }}.</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="phone" class="col-form-label col-sm-5 col-12">Phone</label>
                                        <p class="mb-0">{{ $employee->phone }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="Nationality" class="col-form-label col-sm-5 col-12">Nationality</label>
                                        <p class="mb-0">{{ $employee->nationality }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="Religion" class="col-form-label col-sm-5 col-12">Religion</label>
                                        <p class="mb-0">{{ $employee->religion }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="Status" class="col-form-label col-sm-5 col-12">Marital Status
                                        </label>
                                        <p class="mb-0">{{ $employee->marital_status }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="Gender" class="col-form-label col-sm-5 col-12">Gender</label>
                                        <p class="mb-0">{{ $employee->gender }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="FatherName" class="col-form-label col-sm-5 col-12">Father
                                            Name</label>
                                        <p class="mb-0">{{ $employee->father_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="CV_info py-2 px-3 text-white mt-2">Education Details</h5>
                        <div class="CV_border">
                            <div class="row mx-0 px-sm-0 px-3 py-2">
                                <div class="col-lg-12">
                                    <div class="form-group align-items-center row mb-0">
                                        {{-- <label for="fullName" class="col-sm-5 col-12 col-form-label">Education</label> --}}
                                        <p class="mb-0 col-12 col-form-label">{{ $employee->education_details }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h5 class="CV_info py-2 px-3 text-white mt-2">Experience</h5>
                        <div class="CV_border">
                            <div class="row mx-0 px-sm-0 px-3 py-2">
                                <div class="col-lg-12">
                                    <div class="form-group align-items-center row mb-0">
                                        {{-- <label for="fullName" class="col-sm-5 col-12 col-form-label">Education</label> --}}
                                        <p class="mb-0 col-12 col-form-label">{{ $employee->experience }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="CV_info py-2 px-3 text-white mt-2">Passport Details</h5>
                        <div class="CV_border">
                            <div class="row mx-0 px-sm-0 px-3 py-2">
                                <div class="col-lg-12">
                                    @foreach ($document as $documents)
                                        <div class="form-group align-items-center row mb-0">
                                            @if ($documents->doc_type == 'Passport')
                                                <div class="col-lg-12">
                                                    <div class="form-group align-items-center row mb-0">
                                                        <label for="Nationality" class="col-form-label col-12">Passport
                                                            No # {{ $employee->passport_number }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group align-items-center row mb-0">
                                                        <label for="email"
                                                            class="col-sm-7 col-12 col-form-label">Passport
                                                            Issue Date:</label>
                                                        <p class="mb-0">
                                                            {{ $documents->doc_type == 'Passport' ? $documents->issue_date : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group align-items-center row mb-0">
                                                        <label for="email"
                                                            class="col-sm-7 col-12 col-form-label">Passport Expiry
                                                            Date:</label>
                                                        <p class="mb-0">
                                                            {{ $documents->doc_type == 'Passport' ? $documents->expiry_date : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                            {{-- <p>{{$documents->doc_type}}</p> --}}

                                            @if ($documents->doc_type == 'Visit Visa')
                                                <div class="col-lg-6">
                                                    <div class="form-group align-items-center row mb-0">
                                                        <label for="email" class="col-sm-7 col-12 col-form-label">Visa
                                                            Issue Date:</label>
                                                        <p class="mb-0">
                                                            {{ $documents->doc_type == 'Visit Visa' ? $documents->issue_date : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group align-items-center row mb-0">
                                                        <label for="email" class="col-sm-7 col-12 col-form-label">Visa
                                                            Expiry Date:</label>
                                                        <p class="mb-0">
                                                            {{ $documents->doc_type == 'Visit Visa' ? $documents->expiry_date : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($documents->doc_type == 'Residence Visa')
                                                <div class="col-lg-6">
                                                    <div class="form-group align-items-center row mb-0">
                                                        <label for="email"
                                                            class="col-sm-7 col-12 col-form-label">Residence Visa
                                                            Issue Date:</label>
                                                        <p class="mb-0">
                                                            {{ $documents->doc_type == 'Residence Visa' ? $documents->issue_date : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group align-items-center row mb-0">
                                                        <label for="email"
                                                            class="col-sm-7 col-12 col-form-label">Residence Visa
                                                            Expiry Date:</label>
                                                        <p class="mb-0">
                                                            {{ $documents->doc_type == 'Residence Visa' ? $documents->expiry_date : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr-lg-0 mb-lg-0 mb-2">
                        <h5 class="CV_info py-2 px-3 text-white">Skills</h5>
                        <div class="CV_border">
                            <div class="row mx-0 px-sm-0 px-3 py-2">
                                <div class="col-lg-12">
                                    <div class="form-group align-items-center row mb-0 mx-0">
                                        {{-- <p for="fullName" class="col-sm-1 col-form-label">{{ $employee->skills }}</p> --}}
                                        <ol class="pl-3 mb-0">

                                            @php
                                                //  $skills=explode(',',$employee->skills);
                                                $skills = explode(',', $employee->skills);
                                            @endphp
                                            @foreach ($skills as $skill)
                                                <li>{{ $skill }}</li>
                                            @endforeach

                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="CV_info py-2 px-3 text-white mt-2">Driving License</h5>
                        <div class="CV_border">
                            <div class="row mx-0 px-sm-0 px-3 py-2">
                                <div class="col-lg-12">
                                    <div class="form-group align-items-center row mb-0">
                                        <label for="fullName"
                                            class="col-sm-5 col-12 col-form-label">{{ $employee->license }}</label>
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
            if (window.ReactNativeWebView) {
                // $('#')
                window.ReactNativeWebView.postMessage(JSON.stringify({
                    generateCv : true
                }));
                window.print();
            } else {
                $("#hide_content,#dashboardSidebar,#menuToggle,.back-btn").hide();
                window.print();
                $("body > *").show();
            }
        }
    </script>
    {{-- <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script>
        function myFunction() {
            // Check if running in a web view
            if(window.navigator.standalone || window.matchMedia('(display-mode: standalone)').matches) {
                // If running in a web view (standalone mode), use Print.js to print
                printJS({ printable: 'hide_content', type: 'html' }); // Replace 'your-content-id' with the ID of the content you want to print
            } else {
                // If running in a browser, use standard window.print() function
                $("#hide_content,#dashboardSidebar,#menuToggle,.back-btn").hide();
                window.print();
                $("body > *").show();
            }
        }
    </script> --}}

@endsection
