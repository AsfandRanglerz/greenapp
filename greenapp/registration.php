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
        <div class="col-xl-5 col-lg-6 col-sm-8 col-11 px-0 mx-auto auth-form light-box-shadow">
            <div class="auth-form-block-header">
                <div class="position-relative auth-form-block-header-inner">
                    <a class="navbar-brand" href="#" style="position: absolute;right: 0"><img src="images/logo.png" alt="logo" class="logo-img"></a>
                    <p class="mb-2 text-white">Welcome</p>
                    <p class="mb-0 text-white">Please register your account</p>
                    <h5 class="text-white mb-0">Green App</h5>
                </div>
                <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none"
                        xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG">
                        <polygon points="2560 0 2560 100 0 100"
                            class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon>
                    </svg></div>
            </div>
            <form id="authForm" method="POST">
                <h3 class="text-center mb-sm-4 mb-2">Register</h3>
                <div class="form-group">
                    <label for="companyName">Company Name<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-users-cog input-field-left-icon"></span>
                        <input id="companyName" type="text" class="form-control pl-padding" placeholder="Enter Company Name">
                    </div>
                </div>
                <div class="form-row">                    
                    <div class="form-group col-md-6">
                        <label for="companyEmail">Email<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-envelope input-field-left-icon"></span>
                            <input id="companyEmail" type="email" class="form-control pl-padding" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="companyPhone">Phone<span class="required"> *</span></label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="position-absolute fa fa-phone input-field-left-icon"></span>
                            <input id="companyPhone" type="number" class="form-control pl-padding" placeholder="Enter Phone Number">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userPassword">Password<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                        <input id="userPassword" name="password" type="password" class="form-control pl-pr-padding"
                            placeholder="Enter Password">
                        <span toggle="#userPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                            aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="confirmPassword">Confirm Password<span class="required"> *</span></label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="position-absolute fa fa-lock input-field-left-icon"></span>
                        <input id="confirmPassword" name="password" type="password" class="form-control pl-pr-padding"
                            placeholder="Confirm Password">
                        <span toggle="#confirmPassword" class="fa fa-fw fa-eye preview-eye-icon toggle-password"
                            aria-hidden="true"></span>
                    </div>
                </div>
                </div>
                <div class="mt-xl-5 mb-xl-2 my-sm-3 mt-3">
                    <button type="submit" class="w-100 btn-bg">Register</button>
                    <p class="text-center text-dark font-weight-600 mt-2 mb-0">Already have an account? <a href="login.php"
                            class="green-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>