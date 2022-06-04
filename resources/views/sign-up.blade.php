<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Sign Up</title>
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
        <!--
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
        -->
        <!--end page Loader -->

        <!-- Begin page -->
        <div>


            <div class="main-content">

                <div class="page-content">

                    <!-- START SIGN-UP -->
                    <section class="bg-auth mt-0">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card auth-box">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 text-center
                                                mt-5">
                                                <div class="p-4 pt-0">
                                                    <a href="index.blade.php">

                                                        <img
                                                            src="./assets/images/logo-dark.png"
                                                            alt=""
                                                            class="logo-dark">
                                                    </a>
                                                    <p class="pt-3 fw-bold ms-4
                                                        text-center">Choose
                                                        who you are</p>
                                                    <div class="mt-3 p-4 nav
                                                        nav-pills">

                                                        <button class="btn
                                                            me-4
                                                            nav-item nav-link
                                                            active
                                                            ms-5" href="#Cand"
                                                            data-bs-toggle="pill">Candidate</button>
                                                        <button class="btn ms-5
                                                            me-4
                                                            nav-link
                                                            nav-item"
                                                            href="#Comp"
                                                            data-bs-toggle="pill">Company</button>
                                                    </div>
                                                    <div class="mt-2">
                                                        <img
                                                            src="./assets/images/auth/sign-up.png"
                                                            alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6 mt-0 pt-0">
                                                <div class="auth-content
                                                    card-body p-5 text-white">
                                                    <div class="w-100">
                                                        <div
                                                            class="text-center">
                                                            <h5>Let's Get
                                                                Started</h5>
                                                            <p
                                                                class="text-white-70">Sign
                                                                Up and get
                                                                access to all
                                                                the features of
                                                                Jobcy</p>

                                                        </div>
                                                        <div
                                                            class="tab-content">
                                                            <form method="POST" id="Cand"
                                                                style="height:
                                                                79vh;"
                                                                action="/sign-as-user"
                                                                class="auth-form
                                                                tab-pane
                                                                active">
                                                                @csrf
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="name"
                                                                        class="form-label">Name</label>
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"

                                                                        name="name"
                                                                        id="name"
                                                                        placeholder="Enter&nbsp;your&nbsp;Name"
                                                                        value="{{old('name')}}">
                                                                </div>
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="email"
                                                                        class="form-label">Email</label>
                                                                    <input
                                                                        type="email"
                                                                        class="form-control"

                                                                        name="email"
                                                                        id="email"
                                                                        placeholder="Enter&nbsp;your&nbsp;Email"
                                                                        value="{{old('email')}}">
                                                                </div>
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="password"
                                                                        class="form-label">Password</label>
                                                                    <input
                                                                        type="password"
                                                                        class="form-control"
                                                                        name="password"
                                                                        id="password"
                                                                        placeholder="Enter&nbsp;your&nbsp;password">
                                                                </div>
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="password_confirmation"
                                                                        class="form-label">Confirm
                                                                        Password</label>
                                                                    <input
                                                                        type="password"
                                                                        class="form-control"
                                                                        name="password_confirmation"
                                                                        id="password_confirmation"
                                                                        placeholder="ReType&nbsp;your&nbsp;password">
                                                                </div>

                                                                <div
                                                                    class="text-center">
                                                                    <button
                                                                        type="submit"
                                                                        name="form1"
                                                                        class="btn
                                                                        btn-white
                                                                        btn-hover
                                                                        w-100">Sign Up
                                                                        </button>
                                                                </div>
                                                                <div class="mt-3
                                                                    text-center">
                                                                    <p
                                                                        class="mb-0">Already
                                                                        a member
                                                                        ? <a
                                                                            href="/log-in"
                                                                            class="fw-medium
                                                                            text-white
                                                                            text-decoration-underline">
                                                                            Sign
                                                                            In
                                                                        </a></p>
                                                                </div>
                                                                @if($errors->any())
                                                                    @foreach($errors->all() as $error)

                                                                        <p>
                                                                            <small style="color: red">

                                                                                @if($error === "The email has already been taken.")
                                                                                    You did sign before ,You have an account try to login
                                                                                    @break
                                                                                @else
                                                                                    {{$error}}
                                                                                @endif
                                                                            </small>

                                                                        </p>
                                                                    @endforeach
                                                                @endif
                                                                </form>


                                                            <form method="POST" id="Comp"
                                                                style="height:
                                                                79vh;"
                                                                action="/sign-as-company"
                                                                class="auth-form
                                                                tab-pane">
                                                                @csrf
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="nameco"
                                                                        class="form-label">Company&nbsp;Name</label>
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        name="name"

                                                                        id="nameco"
                                                                        placeholder="Enter your Company name">
                                                                </div>
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="emailco"
                                                                        class="form-label">Email</label>
                                                                    <input
                                                                        type="email"
                                                                        class="form-control"
                                                                        name="email"

                                                                        id="emailco"
                                                                        placeholder="Enter&nbsp;your&nbsp;Email">
                                                                </div>
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="passwordco"
                                                                        class="form-label">Password</label>
                                                                    <input
                                                                        type="password"
                                                                        class="form-control"
                                                                        name="password"
                                                                        id="passwordco"
                                                                        placeholder="Enter&nbsp;your&nbsp;password">
                                                                </div>
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="password_confirmationco"
                                                                        class="form-label">Confirm
                                                                        Password</label>
                                                                    <input
                                                                        type="password"
                                                                        class="form-control"
                                                                        name="password_confirmation"
                                                                        id="password_confirmationco"
                                                                        placeholder="ReType&nbsp;your&nbsp;password">
                                                                </div>

                                                                <div
                                                                    class="text-center">
                                                                    <button
                                                                        type="submit"
                                                                        name="form2"
                                                                        class="btn
                                                                        btn-white
                                                                        btn-hover
                                                                        w-100">Sign
                                                                        Up</button>
                                                                    @if($errors->any())
                                                                        @foreach($errors->all() as $error)

                                                                            <p>
                                                                                <small style="color: red">

                                                                                    @if($error === "The email has already been taken.")
                                                                                        You did sign before ,You have an account try to login
                                                                                        @break
                                                                                    @else
                                                                                        {{$error}}
                                                                                    @endif
                                                                                </small>

                                                                            </p>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                <div class="mt-3
                                                                    text-center">
                                                                    <p
                                                                        class="mb-0">Already
                                                                        a member
                                                                        ? <a
                                                                            href="/log-in"
                                                                            class="fw-medium
                                                                            text-white
                                                                            text-decoration-underline">
                                                                            Sign
                                                                            In
                                                                        </a></p>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end auth-box-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END SIGN-UP -->

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



        <!-- JAVASCRIPT -->
        <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <!-- Switcher Js -->
        <script src="./assets/js/pages/switcher.init.js"></script>

    </body>

</html>
