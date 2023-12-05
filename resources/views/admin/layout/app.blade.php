<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>GreenApp- Admin Dashboard</title>
    <!-- Developed By Ranglerz -->
    <link rel="stylesheet" href="https://www.ranglerz.com/cost-to-make-a-web-ios-or-android-app-and-how-long-does-it-take.php">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('public/user/images/logo.png') }}' />
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('public/user/plugins/select2/css/select2.min.css') }}">


    <link rel="stylesheet" href="{{ asset('public/admin/assets/toastr/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/datatables.css') }}">

</head>

<body>
    <div class="loader"></div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.common.header')
            @include('admin.common.side_menu')
            @yield('content')
            @include('admin.common.footer')
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('public/admin/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('public/admin/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('public/admin/assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('public/admin/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('public/user/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('public/admin/assets/js/custom.js') }}"></script>
    <script src="{{ asset('public/admin/assets/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/datatables.js') }}"></script>
    <script>
        // notes section
        var textarea = $('.notes-section');

        // Check if there's a stored value in localStorage
        var storedValue = localStorage.getItem('textareaValue');

        // If a stored value exists, set the textarea value to it
        if (storedValue) {
            textarea.val(storedValue);
        }

        // Update the stored value whenever the textarea changes
        textarea.on('input', function() {
            var currentValue = textarea.val();
            localStorage.setItem('textareaValue', currentValue);
        });

        // Reset button par click karne par textarea ki value mai store value rkh do
        $(document).on('click', '.reset-btn', function(event) {
            event.preventDefault();
            textarea.val(storedValue);
        });

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

        /*toastr popup function*/
        toastrPopUp();
    </script>
    @yield('js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
