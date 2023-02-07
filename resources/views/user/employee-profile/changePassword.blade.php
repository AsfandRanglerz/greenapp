<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-book"></span> - Change Password</p>
            <form action="{{ route('EmployeeProfile.changePassword') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        {{-- <h6><span class="fa fa-book"></span> - Company Documents</h6> --}}

                    </div>
                    <div class="form-group col-md-12">
                        <label>Old Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="oldPassword" name="oldPassword" type="password" class="form-control pl-pr-padding"
                                placeholder="Enter Old Password" >
                            <span toggle="#oldPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                                aria-hidden="true"></span>

                        </div>
                        @error('oldPassword')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label>New Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="newPassword" name="newPassword" type="password" class="form-control pl-pr-padding"
                                placeholder="Enter New Password" >
                            <span toggle="#newPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                                aria-hidden="true"></span>

                        </div>
                        @error('newPassword')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label>Confirm New Password<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                            <input id="confirm_password" name="confirm_password" type="password" class="form-control pl-pr-padding"
                                placeholder="Enter Old Password" >
                            <span toggle="#oldPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                                aria-hidden="true"></span>

                        </div>
                        @error('confirm_password')
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
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif
    <script type="text/javascript">
        $(function() {
            /*datepicker*/
            $('.datepicker').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
            });
            $('.issue-date + .input-group-prepend').click(function() {
                $(".issue-date").focus();
            });
            $('.expire-date + .input-group-prepend').click(function() {
                $(".expire-date").focus();
            });
            /*datepicker*/
            /*single-select-dropdowns*/
            $('#selectDocument').select2({
                placeholder: 'Select Document Type'
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
        // function toastrPopUp() {
        //     toastr.options = {
        //         "closeButton": true,
        //         "newestOnTop": false,
        //         "progressBar": true,
        //         "positionClass": "toast-top-right",
        //         "preventDuplicates": false,
        //         "onclick": null,
        //         "showDuration": "3000",
        //         "hideDuration": "1000",
        //         "timeOut": "5000",
        //         "extendedTimeOut": "1000",
        //         "showEasing": "swing",
        //         "hideEasing": "linear",
        //         "showMethod": "fadeIn",
        //         "hideMethod": "fadeOut"
        //     }
        // }
        toastrPopUp();
    </script>
@endsection
