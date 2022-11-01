<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="./assets/images/favicon.png">

        <!-- Bootstrap Css -->
        <link href="./assets/css/bootstrap.min.css" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href="./assets/css/app.min.css" id="app-style" rel="stylesheet"
            type="text/css" />
        <!--Custom Css-->
        <link href="./custom.css" rel="stylesheet" />
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



            <!--Navbar Start-->
            <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
                <div class="container-fluid custom-container">
                    <a class="navbar-brand text-dark fw-bold me-auto"
                        href="index.html">
                        <img src="./assets/images/logo-dark.png" height="22"
                            alt="" class="logo-dark" />
                        <img src="./assets/images/logo-light.png" height="22"
                            alt="" class="logo-light" />
                    </a>
                    <div>
                        <button class="navbar-toggler me-3" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-label="Toggle
                            navigation">
                            <i class="uil uil-align-center-justify"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse mt-0 pt-0"
                        id="navbarCollapse">
                        <ul class="navbar-nav mx-auto navbar-center">
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="./index.html"
                                    id="homedrop" role="button">
                                    Home
                                </a>

                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)"
                                    id="jobsdropdown" role="button"
                                    data-bs-toggle="dropdown">
                                    JOBS <i class="uil uil-arrow-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-center"
                                    aria-labelledby="jobsdropdown">
                                    <li><a class="dropdown-item"
                                            href="./job-list.html">JOBS LIST</a></li>
                                    <li><a class="dropdown-item"
                                            href="job-categories.html">JOBS
                                            CATEGORIES</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)"
                                    id="pagesdoropdown" role="button"
                                    data-bs-toggle="dropdown">
                                    Candidates/Companys
                                    <i class="uil uil-arrow-down"></i>
                                </a>
                                <div class="dropdown-menu
                                    dropdown-menu-center"
                                    aria-labelledby="pagesdoropdown">
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <a class="dropdown-item"
                                                    href="./candidate-list.html">Candidate
                                                    List</a>
                                                <a class="dropdown-item"
                                                    href="company-list.html">Company
                                                    List</a>

                                            </div>
                                        </div>
                                        <!--end col-->


                                    </div>
                                </div>
                            </li>
                            <!--end dropdown-->
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="./index.html#How"
                                    id="productdropdown" role="button"
                                    aria-expanded="false">
                                    How It Works

                                </a>

                            </li>
                            <!--end dropdown-->
                            <li class="nav-item">
                                <a href="./index.html#contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <!--end navbar-nav-->
                    </div>
                    <!--end navabar-collapse-->
                    <ul class="header-menu list-inline d-flex align-items-center
                        mb-0">

                        <li class="list-inline-item">
                            <a href="./sign-in.html" class="bg-p ps-4 pt-2 pb-2
                                pe-4">Sign
                                In</a>
                            <a href="./sign-up.html" class="bg-p ps-4 pt-2 pb-2
                                pe-4">Sign
                                Up</a>

                        </li>
                    </ul>
                    <!--end header-menu-->
                </div>
                <!--end container-->
            </nav>
            <!-- Navbar End -->


            <!-- START SIGN-UP MODAL -->
            <div class="modal fade" id="signupModal" tabindex="-1"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-5">
                            <div class="position-absolute end-0 top-0 p-3">
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="auth-content">
                                <div class="w-100">
                                    <div class="text-center mb-4">
                                        <h5>Sign Up</h5>
                                        <p class="text-muted">Sign Up and get
                                            access to all the features of Job Mentor</p>
                                    </div>
                                    <form action="#" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput"
                                                class="form-label">Username</label>
                                            <input type="text"
                                                class="form-control"
                                                id="usernameInput"
                                                placeholder="Enter your
                                                username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput"
                                                class="form-label">Email</label>
                                            <input type="email"
                                                class="form-control"
                                                id="emailInput"
                                                placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput"
                                                class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control"
                                                id="passwordInput"
                                                placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label"
                                                    for="flexCheckDefault">I
                                                    agree to the <a
                                                        href="javascript:void(0)"
                                                        class="text-primary
                                                        form-text
                                                        text-decoration-underline">Terms
                                                        and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn
                                                btn-primary w-100">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a
                                                href="sign-in.html"
                                                class="form-text text-primary
                                                text-decoration-underline">
                                                Sign-in </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end modal-body-->
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!-- END SIGN-UP MODAL -->

            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <h3 class="mb-4">About Us</h3>
                                        <div class="page-next">

                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- end home -->

                    <!-- START SHAPE -->
                    <div class="position-relative" style="z-index: 1">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0
                                1440 250">
                                <path fill="#FFFFFF" fill-opacity="1"
                                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->


                    <!-- START ABOUT -->
                    <section class="section overflow-hidden">
                        <div class="container">
                            <div class="row align-items-center g-0">
                                <div class="col-lg-6">
                                    <div class="section-title me-lg-5">
                                        <h6 class="sub-title">About Us</h6>
                                        <h2 class="title mb-4">Why <span
                                                class="text-warning fw-bold">35,000+</span>
                                            People Trust On Job Mentor?</h2>

                                        <p class="text-muted">Start working with
                                            Job Mentor that can provide everything
                                            you need to generate awareness,
                                            drive traffic, connect. Dummy text
                                            is text that is used in the
                                            publishing industry or by web
                                            designers to occupy the space which
                                            will
                                            later be filled with 'real' content.</p>
                                        <div class="row mt-4 pt-2">
                                            <div class="col-md-6">
                                                <ul class="list-unstyled
                                                    about-list text-muted mb-0
                                                    mb-md-3">
                                                    <li>Digital Marketing
                                                        Solutions</li>
                                                    <li> Our Talented &
                                                        Experienced Marketing
                                                        Agency</li>
                                                    <li> Creative Design</li>
                                                    <li> New jobs Innovation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-unstyled
                                                    about-list text-muted">
                                                    <li> Create Resume</li>
                                                    <li> 5000+ Comnpanies</li>
                                                    <li> Our Blog</li>
                                                    <li> and more...</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="about-img mt-4 mt-lg-0">
                                        <img
                                            src="./assets/images/about/img-03.jpg"
                                            alt="" class="img-fluid rounded">
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END ABOUT -->





                </div>
                <!-- End Page-content -->



                <!-- START FOOTER -->
                <section class="bg-footer" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                                    <h4 class="text-white mb-4">Job Mentor</h4>
                                    <p class="text-white-50">It is a long
                                        established fact that a reader will be
                                        of a page reader will be of at its
                                        layout.</p>
                                    <p class="text-white mt-3">Follow Us on:</p>
                                    <ul class="footer-social-menu list-inline
                                        mb-0">
                                        <li class="list-inline-item"><a
                                                href="#"><i class="uil
                                                    uil-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a
                                                href="#"><i class="uil
                                                    uil-linkedin-alt"></i></a></li>
                                        <li class="list-inline-item"><a
                                                href="#"><i class="uil
                                                    uil-google"></i></a></li>
                                        <li class="list-inline-item"><a
                                                href="#"><i class="uil
                                                    uil-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">Who we are</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="about.html"><i class="uil
                                                    uil-angle-right-b"></i>
                                                About Us</a></li>

                                    </ul>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">For Jobs</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="job-categories.html"><i
                                                    class="uil
                                                    uil-angle-right-b"></i>
                                                Browser Categories</a></li>
                                        <li><a href="./job-list.html"><i
                                                    class="uil
                                                    uil-angle-right-b"></i>
                                                Browser Jobs</a></li>

                                    </ul>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="text-white fs-16 mb-4">For
                                        Candidates</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="./candidate-list.html"><i
                                                    class="uil
                                                    uil-angle-right-b"></i>
                                                Candidate List</a></li>

                                    </ul>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">For
                                        Companies</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="company-list.html"><i
                                                    class="uil
                                                    uil-angle-right-b"></i>
                                                Companies list
                                            </a></li>

                                    </ul>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </section>
                <!-- END FOOTER -->

                <!-- START FOOTER-ALT -->
                <div class="footer-alt">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-white-50 text-center mb-0">
                                    <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                    &copy; Job Mentor - All Rights Reserved
                                </p>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!-- END FOOTER -->

                <!-- Style switcher -->
                <div id="style-switcher" style="left:
                    -165px;">
                    <div>
                        <h6>Select your color</h6>
                        <ul class="pattern list-unstyled mb-0">
                            <li>
                                <a class="color-list color1" href="javascript:
                                    void(0);"></a>
                            </li>
                            <li>
                                <a class="color-list color2" href="javascript:
                                    void(0);"></a>
                            </li>
                            <li>
                                <a class="color-list color3" href="javascript:
                                    void(0);"></a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <h6>Light/dark Layout</h6>
                            <div class="text-center mt-3">
                                <!-- light-dark mode -->
                                <a href="javascript: void(0);" id="mode"
                                    class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark
                                        mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>
                                <!-- END light-dark Mode -->
                            </div>
                        </div>
                    </div>
                    <div class="bottom d-none d-md-block">
                        <a href="javascript: void(0);" class="settings
                            rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
                    </div>
                </div>
                <!-- end switcher-->


            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <!-- Counter Js -->
        <script src="./assets/js/pages/counter.init.js"></script>

        <!-- Switcher Js -->
        <script src="./assets/js/pages/switcher.init.js"></script>

        <script src="./assets/js/app.js"></script>

    </body>

</html>
