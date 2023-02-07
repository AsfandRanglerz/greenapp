<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('public/user/images/logo.png') }}' />
    <link data-n-head="ssr" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/user/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/bootstrap-4.5.3.min.css') }}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/toastr/css/toastr.css')}}">
    <link rel="stylesheet" href="{{ asset('public/user/css/style.css') }}">
</head>
<body>
    @include('user.common.sidebar')
    <div id="dashboardSidebarRightContent" class="position-relative">
        @include('user.common.header')
        <div class="p-xl-4 p-3 admin-main-content">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('public/user/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/user/js/bootstrap-4.5.3.min.js') }}"></script>
    <script src="{{ asset('public/user/js/custom.js') }}"></script>
    <script src="{{ asset('public/user/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{asset('public/admin/assets/toastr/js/toastr.min.js')}}"></script>
    <script src="{{ asset('public/user/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    
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
    @yield('script')
    {{-- <script>
        // var user = {{ Session::get('message') }};
        // alert('user');
    // alert(\Session::get('message'));
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            width: '27rem',
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
            @if (Session()->has('message'))
        var type = "{{ Session::get('alert') }}";
        switch (type) {
            case'info':
                Toast.fire({
                    icon: 'info',
                    title: '{{ Session::get("message") }}'
                })
                break;
            case 'success':
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get("message") }}'
                })
                break;
            case 'warning':
                Toast.fire({
                    icon: 'warning',
                    title: '{{ Session::get("message") }}'
                })
                break;
            case'error':
                Toast.fire({
                    icon: 'error',
                    title: '{{ Session::get("message") }}'
                })
                break;
        }
        @endif
    </script> --}}


</body>

</html>
