<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Sign In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href={{asset("./assets/images/favicon.ico")}}>

        <!-- Bootstrap Css -->
        <link href={{asset("./assets/css/bootstrap.min.css")}} id="bootstrap-style"
              rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href={{asset("./assets/css/icons.min.css")}} rel="stylesheet"
              type="text/css"
        />
        <!-- App Css-->
        <link href={{asset("./assets/css/app.min.css")}} id="app-style" rel="stylesheet"
              type="text/css" />
        <!--Custom Css-->
        <link href={{asset("./custom.css")}} rel="stylesheet" />
        <link rel="stylesheet"
              href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    </head>

    <body>
        <!--start page Loader -->
        <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <!--end page Loader -->

        <!-- Begin page -->
        <div>


            <div class="main-content">

                <div class="page-content">

                    <!-- START SIGN-IN -->
                    <section class="bg-auth">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card auth-box">
                                        <div class="row g-0">
                                            <div class="col-lg-6 text-center">
                                                <div class="card-body p-4">
                                                    <a href="/index">
                                                        <img
                                                            src="./assets/images/logo-light.png"
                                                            alt=""
                                                            class="logo-light">
                                                        <img
                                                            src="./assets/images/logo-dark.png"
                                                            alt=""
                                                            class="logo-dark">
                                                    </a>
                                                    <div class="mt-5">
                                                        <img
                                                            src="./assets/images/auth/sign-in.png"
                                                            alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="auth-content
                                                    card-body p-5 h-100
                                                    text-white">
                                                    <div class="w-100">
                                                        <div class="text-center
                                                            mb-4">
                                                            <h5>Welcome Back !</h5>
                                                            <p
                                                                class="text-white-70">Sign
                                                                in to continue
                                                                to Jobcy.</p>
                                                        </div>
                                                        @if($errors->any())
                                                            <div class="text-center
                                                            mb-4">
                                                            @foreach($errors->all() as $error)

                                                                <p>


                                                                            @if($error === "You don't have account with this email")
                                                                        <small style="color: rgba(67,11,11,0.93)">
                                                                                You don't have account with this email
                                                                         </small>
                                                                            @break
                                                                        @else
                                                                        <small style="color: rgba(67,11,11,0.93)">
                                                                            {{$error}}
                                                                        </small>
                                                                        @endif


                                                                </p>
                                                            @endforeach
                                                            </div>
                                                        @endif

                                                        <form method="post"
                                                            action="/log-in"
                                                            class="auth-form">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label
                                                                    for="email"
                                                                    class="form-label">Email</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    id="email"
                                                                    name="email"
                                                                    placeholder="Enter&nbsp;Email"
                                                                    required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label
                                                                    for="password"
                                                                    class="form-label">Password</label>
                                                                <input
                                                                    type="password"
                                                                    class="form-control"
                                                                    id="password"
                                                                    name="password"
                                                                    placeholder="Enter&nbsp;your&nbsp;password"
                                                                    required>
                                                            </div>
                                                            <div class="mb-4">
                                                                <div
                                                                    class="form-check"><input
                                                                        class="form-check-input"
                                                                        type="checkbox"
                                                                        id="flexCheckDefault">
                                                                    <a
                                                                        href="reset-password.blade.php"
                                                                        class="float-end
                                                                        text-white">Forgot
                                                                        Password?</a>
                                                                    <label
                                                                        class="form-check-label"
                                                                        for="flexCheckDefault">Remember
                                                                        me</label>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="text-center">
                                                                <button
                                                                    type="submit"
                                                                    class="btn
                                                                    btn-white
                                                                    btn-hover
                                                                    w-100">Sign
                                                                    In</button>
                                                            </div>
                                                        </form>
                                                        <div class="mt-4
                                                            text-center">
                                                            <p class="mb-0">Don't
                                                                have an account
                                                                ? <a
                                                                    href="sign-up"
                                                                    class="fw-medium
                                                                    text-white
                                                                    text-decoration-underline">
                                                                    Sign Up </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end auth-box-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END SIGN-IN -->

                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()" style="left:
            -165px;">
            <div>
                <h6>Select your color</h6>
                <ul class="pattern list-unstyled mb-0">
                    <li>
                        <a class="color-list color1" href="javascript: void(0);"
                            onclick="setColorGreen()"></a>
                    </li>
                    <li>
                        <a class="color-list color2" href="javascript: void(0);"
                            onclick="setColor('blue')"></a>
                    </li>
                    <li>
                        <a class="color-list color3" href="javascript: void(0);"
                            onclick="setColor('green')"></a>
                    </li>
                </ul>
                <div class="mt-3">
                    <h6>Light/dark Layout</h6>
                    <div class="text-center mt-3">
                        <!-- light-dark mode -->
                        <a href="javascript: void(0);" id="mode" class="mode-btn
                            text-white rounded-3">
                            <i class="uil uil-brightness mode-dark mx-auto"></i>
                            <i class="uil uil-moon mode-light"></i>
                        </a>
                        <!-- END light-dark Mode -->
                    </div>
                </div>
            </div>
            <div class="bottom d-none d-md-block">
                <a href="javascript: void(0);" class="settings rounded-end"><i
                        class="mdi mdi-cog mdi-spin"></i></a>
            </div>
        </div>
        <!-- end switcher-->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <!-- Switcher Js -->
        <script src="./assets/js/pages/switcher.init.js"></script>

    </body>

</html>
