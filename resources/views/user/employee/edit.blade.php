@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-user"></span> - Edit Employee Details</p>
            <form action="{{ route('employee.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="{{ asset($data['image']) }}" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" type="file" name="image" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userName">Name<span class="required"> *</span></label>
                        <input id="userName" type="text" name="name" value="{{ $data['name'] }}" class="form-control"
                            placeholder="Enter Employee Name" >
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date Of Birth<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="text" name="dob"value="{{ $data['dob'] }}" placeholder="dd.mm.yyyy"
                                class="form-control datepicker date-of-birth" >
                            <div class="input-group-prepend">
                                <small class="input-group-text"><span class="fa fa-calendar"></span></small>
                            </div>
                        </div>
                        @error('dob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nationality<span class="required"> *</span></label>
                        <select id="selectCountry" name="nationality" class="form-control" >

                            <option value="Pakistan" {{ $data['nationality'] == 'Pakistan' ? 'selected' : '' }}>Pakistan
                            </option>
                            <option value="Iran" {{ $data['nationality'] == 'Iran' ? 'selected' : '' }}>Iran</option>
                            <option value="Bangladesh" {{ $data['nationality'] == 'Bangladesh' ? 'selected' : '' }}>
                                Bangladesh</option>
                            <option value="Afghanistan" {{ $data['nationality'] == 'Afghanistan' ? 'selected' : '' }}>
                                Afghanistan</option>
                            <option value="India" {{ $data['nationality'] == 'India' ? 'selected' : '' }}>India</option>
                        </select>
                        @error('nationality')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Religion<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="religion" value="{{ $data['religion'] }}"
                            placeholder="Enter Religion">
                        @error('religion')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userPhone">Phone Number<span class="required"> *</span></label>
                        <input id="userPhone" type="number" name="phone" value="{{ $data['phone'] }}"
                            class="form-control" placeholder="Enter Phone Number">
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userEmail">Email<span class="required"> *</span></label>
                        <input id="userEmail" type="email" name="email" value="{{ $data['email'] }}"
                            class="form-control" placeholder="Enter Your Email" readonly>
                        @error('email')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                        <button type="submit" class="btn-bg">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            /*datepicker*/
            $('.date-of-birth').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
            });
            $('.date-of-birth + .input-group-prepend').click(function() {
                $(".date-of-birth").focus();
            });
            /*datepicker*/
            /*single-select-dropdowns*/
            $('#selectCountry').select2({
                placeholder: 'Select Country'
            });
            /*single-select-dropdowns*/
            /*Avatar upload*/
            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#uploadedImage').attr('src', e.target.result);
                        $('.header-profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function() {
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(this).siblings('.file-upload').click();
            });
            /*Avatar upload*/
        });
    </script>
    <script type="text/javascript">
        $(function() {
            /*dashboard right side content toggle*/
            $(document).on('click', '#menuToggle', function() {
                $("#dashboardSidebarRightContent").toggleClass("toggled");
                $("#dashboardSidebar").toggleClass("sidebar-toggle");
            });

            /*dashboard sidebar*/
            $(".sidebar-links").each(function() {
                var currentUrlBase = window.location.href.split('/').pop();
                var activeUrlBase = $(this).attr("href").split('/').pop();
                if (currentUrlBase == activeUrlBase && currentUrlBase != undefined && activeUrlBase !=
                    undefined) {
                    $(this).parent().addClass('active').parent().show().parent().addClass('opend');
                }
                if ($(this).parent().hasClass('active')) {
                    $(this).parent().addClass('active').parent().show().parent().addClass('opend active');
                }
            });

            $('#dashboardSidebar .side-nav .side-nav-links li').on('click', function() {

                var $this = $(this);

                $this.toggleClass('opend').siblings().removeClass('opend');

                if ($this.hasClass('opend')) {
                    $this.find('.side-nav-dropdown').slideToggle('fast');
                    $this.siblings().find('.side-nav-dropdown').slideUp('fast');
                    $this.tooltip('disable');
                } else {
                    $this.find('.side-nav-dropdown').slideUp('fast');
                    $this.tooltip('enable');
                }
            });

            $('#dashboardSidebar .side-nav .close-aside').on('click', function() {
                $('#' + $(this).data('close')).addClass('show-side-nav');
                contents.removeClass('margin');
            });

            /*dashboard right side content and sidebar toggle switching*/
            sideBarToggleSwitch();

            if ($(window).width() <= 991) {
                /*Side-nav-overlay*/
                sideNavOverlay();
            }
        });

        $(window).resize(function() {
            /*dashboard right side content and sidebar toggle switching*/
            sideBarToggleSwitch();

            /*Side-nav-overlay*/
            sideNavOverlay();
        });

        /*Side-nav-overlay*/
        function sideNavOverlay() {
            $(document).on('click', '#menuToggle', function() {
                $('#sideNavOverlay').removeClass('d-none');
            });
        }

        /*dashboard right side content toggle*/
        function sideBarToggleSwitch() {
            $(document).on('click', function(event) {
                if ($(window).width() <= 991 && !$(event.target).closest('#dashboardSidebar, #menuToggle').length) {
                    $('#dashboardSidebar').addClass('sidebar-toggle');
                    /*Side-nav-overlay*/
                    $('#sideNavOverlay').addClass('d-none');
                }
            });

            if ($(window).width() >= 992) {
                $('#dashboardSidebar').removeClass('sidebar-toggle');
                $('#dashboardSidebarRightContent').removeClass('toggled');
            } else {
                $('#dashboardSidebar').addClass('sidebar-toggle');
                $('#sideNavOverlay').addClass('d-none');
            }
        }

        /*toastr popup function*/
        function toastrPopUp() {
            toastr.options = {
                "closeButton": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "3000",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        }
        toastrPopUp();
    </script>
@endsection
