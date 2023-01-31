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
    <link rel="stylesheet" href="{{ asset('public/user/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/bootstrap-4.5.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/user/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/style.css') }}">
</head>

<body>
    <style>
        .faq {
            background: #FFF;
            box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
            border-radius: 4px;
        }

        .faq .card {
            border: none;
            background: none;
            border-bottom: 1px dashed #CEE1F8;
        }

        .faq .card .card-header {
            padding: 0px;
            border: none;
            background: none;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .faq .card .card-header:hover {
            background: rgb(29 44 66 / 9%);
            padding-left: 10px;
        }

        .faq .card .card-header .faq-title {
            display: flex;
            width: 100%;
            text-align: left;
            padding: 0 16px;
            letter-spacing: 1px;
            color: #3B566E;
            text-decoration: none !important;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            cursor: pointer;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-bottom: 0;
        }

        .faq .card .card-header .faq-title .badge {
            display: inline-block;
            width: 20px;
            height: 20px;
            line-height: 14px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            text-align: center;
            background: var(--green-clr);
            color: #FFF;
            font-size: 12px;
            margin-right: 8px;
        }

        .faq .card .card-body {
            padding-bottom: 16px;
            font-weight: 400;
            font-size: 15px;
            color: var(--theme-clr);
            letter-spacing: 1px;
            border-top: 1px solid #F3F8FF;
            text-align: justify;
        }

        .faq .card .card-body p {
            margin-bottom: 0;
        }
    </style>
    @include('user.common.sidebar')
    <div id="dashboardSidebarRightContent" class="position-relative">
        @include('user.common.header')
        <div class="p-xl-4 p-3 admin-main-content">
            <div class="admin-main-content-inner">
                <div class="dashboard-front-pg">
                    @if (Auth::guard('company')->check())
                        <h4>Company Dashboard</h4>
                    @else
                        <h4>Employee Dashboard</h4>
                    @endif
                    <p><span class="fa fa-question-circle"></span> - FAQ's</p>
                    <div class="p-3 rounded light-box-shadow">
                        <section class="faq-section">
                            <div class="faq" id="accordion">
                                @foreach ($data as $data)
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-1">
                                            <div class="mb-0">
                                                <h6 class="faq-title" data-toggle="collapse"
                                                    data-target="#faqCollapse-{{ $data->id }}"
                                                    data-aria-expanded="true"
                                                    data-aria-controls="faqCollapse-{{ $data->id }}">
                                                    <span class="badge">1</span>{!! $data->question ??'' !!}
                                                </h6>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-{{ $data->id }}" class="collapse"
                                            aria-labelledby="faqHeading-1" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>{!! $data->answer ??'' !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/user/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/user/js/bootstrap-4.5.3.min.js') }}"></script>
    <script src="{{ asset('public/user/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('public/user/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('public/user/js/custom.js') }}"></script>
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
