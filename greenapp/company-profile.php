<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link data-n-head="ssr" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/bootstrap-4.5.3.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "common/sidebar.php"?>
    <div id="dashboardSidebarRightContent" class="position-relative">
        <?php include "common/header.php"?>

        <div class="p-xl-4 p-3 admin-main-content">
            <div class="admin-main-content-inner">
                <div class="dashboard-front-pg">
                    <h4>Company Dashboard</h4>
                    <p><span class="fa fa-building"></span> - Company Profile</p>                  
                    <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                        <div class="form-group col-12">
                            <div class="avatar-wrapper">
                                <img class="profile-pic" id="uploadedImage" src=""/>
                                <div class="upload-button">
                                    <span class="fa fa-plus profile-img-uploaded-icon"></span>
                                </div>
                                <input class="file-upload" name="avatar" type="file" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="companyName">Company Name<span class="required"> *</span></label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="position-absolute fa fa-users-cog input-field-left-icon"></span>
                                <input id="companyName" type="text" class="form-control pl-padding" placeholder="Enter Company Name">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="companyPhone">Phone<span class="required"> *</span></label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="position-absolute fa fa-phone input-field-left-icon"></span>
                                <input id="companyPhone" type="number" class="form-control pl-padding"
                                    placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="companyEmail">Email<span class="required"> *</span></label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                                <input id="companyEmail" type="email" class="form-control pl-padding" placeholder="Enter your email">
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <label>Trade License No</label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                                <input type="text" class="form-control pl-padding" placeholder="Enter Trade License No">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Enter Establishment Card No</label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                                <input type="text" class="form-control pl-padding" placeholder="Enter Establishment Card No">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>MOHRE Company Code</label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                                <input type="text" class="form-control pl-padding" placeholder="Enter MOHRE Company Code">
                            </div>
                        </div>
                        <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                            <button type="submit" class="btn-bg">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.5.3.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $(function() {
        /*Avatar upload*/
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#uploadedImage').attr('src', e.target.result);
                        $('.header-profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function () {
                readURL(this);
            });

            $(".upload-button").on('click', function () {
                $(this).siblings('.file-upload').click();
            });
        });
        /*Avatar upload*/
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
</body>

</html>