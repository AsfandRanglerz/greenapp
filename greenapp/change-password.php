<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link data-n-head="ssr" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/common.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/inter.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/bootstrap-4.5.3.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="auth-centered-block">
        <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 mx-auto auth-form light-box-shadow">
            <div class="auth-form-block-header">
                <div class="position-relative auth-form-block-header-inner">
                    <a class="navbar-brand" href="#" style="position: absolute;right: 0"><img src="images/logo.png" alt="logo" class="logo-img"></a>
                    <p class="mt-3 mb-0 text-white">Change Password</p>
                    <h5 class="text-white mb-0">Green App</h5>
                </div>
                <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none"
                        xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG">
                        <polygon points="2560 0 2560 100 0 100"
                            class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon>
                    </svg></div>
            </div>
            <form id="authForm" method="POST">
                <h3 class="text-center mb-4">Change Password</h3>
                <p class="d-block mb-3">Please Change your password, thank you</p>
                <div class="form-group">
                    <label for="oldPassword">Old Password<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                        <input id="oldPassword" name="password" type="password" class="form-control pl-pr-padding"
                            placeholder="Enter Old Password">
                        <span toggle="#oldPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                            aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="newPassword">New Password<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                        <input id="newPassword" name="password" type="password" class="form-control pl-pr-padding"
                            placeholder="Enter New Password">
                        <span toggle="#newPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                            aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="conNewPassword">Confirm New Password<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                    <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                        <input id="conNewPassword" name="password" type="password" class="form-control pl-pr-padding"
                            placeholder="Confirm New Password">
                        <span toggle="#conNewPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                            aria-hidden="true"></span>
                    </div>
                </div>
                <div class="mt-xl-5 mb-xl-2 my-sm-3 mt-3">
                    <button type="submit" class="w-100 btn-bg">Send</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>