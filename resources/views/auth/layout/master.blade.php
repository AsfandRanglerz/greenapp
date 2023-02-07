<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('public/user/images/logo.png') }}">
    <link data-n-head="ssr" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/user/css/common.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/user/css/inter.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/bootstrap-4.5.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
</head>

<body>
    <div class="auth-centered-block">
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    </div>
    @yield('script')
    <script>
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
</body>

<script>
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
</script>

</html>
