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
{{--        <div id="preloader">--}}
{{--            <div id="status">--}}
{{--                <ul>--}}
{{--                    <li></li>--}}
{{--                    <li></li>--}}
{{--                    <li></li>--}}
{{--                    <li></li>--}}
{{--                    <li></li>--}}
{{--                    <li></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
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
                                                            src="{{asset("./assets/images/logo-light.png")}}"
                                                            alt=""
                                                            class="logo-light"
                                                        width="44"
                                                        height="44">
                                                        <img
                                                            src="{{asset("./assets/images/logo-dark.png")}}"
                                                            alt=""
                                                            class="logo-dark pt-2"
                                                            height="70"
                                                        >
{{--                                                            width="300"--}}
{{--                                                            height="80">--}}
                                                    </a>
                                                    <div class="mt-5">
                                                        <img
                                                            src="{{asset("./assets/images/auth/sign-in.png")}}"
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
                                                                to Job Mentor.</p>
                                                        </div>
                                                        @error('email')
                                                            <div class="text-center
                                                            mb-4">
                                                                <p>
                                                                        <small style="color: rgba(67,11,11,0.93)">
                                                                            {{$message}}
                                                                        </small>
                                                                </p>
                                                            </div>
                                                        @enderror
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
                                                                    required
                                                                value="{{old('email')}}">
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
{{--                                                            <div class="mb-4">--}}
{{--                                                                <div--}}
{{--                                                                    class="form-check"><input--}}
{{--                                                                        class="form-check-input"--}}
{{--                                                                        type="checkbox"--}}
{{--                                                                        id="flexCheckDefault">--}}
{{--                                                                    <a--}}
{{--                                                                        href="reset-password.blade.php"--}}
{{--                                                                        class="float-end--}}
{{--                                                                        text-white">Forgot--}}
{{--                                                                        Password?</a>--}}
{{--                                                                    <label--}}
{{--                                                                        class="form-check-label"--}}
{{--                                                                        for="flexCheckDefault">Remember--}}
{{--                                                                        me</label>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
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
        <!-- end switcher-->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script
            src={{asset("./assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <!-- Switcher Js -->
        <script src="{{asset("./assets/js/pages/switcher.init.js")}}"></script>
        <script src="{{asset("./assets/js/pages/index.init.js")}}"></script>



    </body>

</html>
