<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link data-n-head="ssr" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/user/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/bootstrap-4.5.3.min.css') }}">
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
    <script src="{{ asset('public/user/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    @yield('script')
</body>

</html>
