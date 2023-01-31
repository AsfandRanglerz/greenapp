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
    <link rel="stylesheet" href="plugins/DataTables/datatables.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "common/sidebar.php"?>
    <div id="dashboardSidebarRightContent" class="position-relative">
        <?php include "common/header.php"?>
        <div class="p-xl-4 p-3 admin-main-content">
            <div class="mb-5 admin-main-content-inner">
                <h4>Company Dashboard</h4>
                <p><span class="fa fa-user"></span> - Employee Details - <b>John Doe</b></p>
                <div class="text-right">
                    <button class="mb-3 btn btn-success"><span class="fa fa-plus mr-2"></span>Add Document</button>
                </div>
                <div class="p-4 rounded light-box-shadow">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 employees">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Document</th>
                                    <th scope="col">Issue Date</th>
                                    <th scope="col">Expiry Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="employees-body">
                                <tr>
                                    <td># 1</td>
                                    <td>Passport</td>
                                    <td>01-09-2023</td>
                                    <td>01-09-2024</td>
                                    <td class="text-center">
                                        <a href=""><span class="fa fa-download text-success"></span></a>
                                        <a href="" class="mx-2"><span class="fa fa-edit text-info"></span></a>
                                        <a href=""><span class="fa fa-trash text-danger"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td># 2</td>
                                    <td>Identity Card</td>
                                    <td>01-09-2023</td>
                                    <td>01-09-2024</td>
                                    <td class="text-center">
                                        <a href=""><span class="fa fa-download text-success"></span></a>
                                        <a href="" class="mx-2"><span class="fa fa-edit text-info"></span></a>
                                        <a href=""><span class="fa fa-trash text-danger"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td># 3</td>
                                    <td>Visa</td>
                                    <td>01-09-2023</td>
                                    <td>01-09-2024</td>
                                    <td class="text-center">
                                        <a href=""><span class="fa fa-download text-success"></span></a>
                                        <a href="" class="mx-2"><span class="fa fa-edit text-info"></span></a>
                                        <a href=""><span class="fa fa-trash text-danger"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td># 4</td>
                                    <td>Insurance Card</td>
                                    <td>01-09-2023</td>
                                    <td>01-09-2024</td>
                                    <td class="text-center">
                                        <a href=""><span class="fa fa-download text-success"></span></a>
                                        <a href="" class="mx-2"><span class="fa fa-edit text-info"></span></a>
                                        <a href=""><span class="fa fa-trash text-danger"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td># 5</td>
                                    <td>Work Permit</td>
                                    <td>01-09-2023</td>
                                    <td>01-09-2024</td>
                                    <td class="text-center">
                                        <a href=""><span class="fa fa-download text-success"></span></a>
                                        <a href="" class="mx-2"><span class="fa fa-edit text-info"></span></a>
                                        <a href=""><span class="fa fa-trash text-danger"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.5.3.min.js"></script>
    <script src="plugins/DataTables/datatables.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
    $(function() {
        /*datatable search*/
        $('.employees').DataTable({
            "pageLength": 10,
            aaSorting: [
                [0, "asc"]
            ],
            "fnDrawCallback": function(oSettings) {
                if ($('.employees-body > tr').length < 10) {
                    $('.dataTables_paginate').hide();
                }
            },
            /*"columnDefs": [{"type": "date", "targets": 0}]*/
        });
        /*datatable search*/
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
</body>

</html>