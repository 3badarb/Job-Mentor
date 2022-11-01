<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Home | Job Mentor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="./assets/images/favicon.ico">

        <!-- Choise Css -->
        <link rel="stylesheet"
            href="index.blade.php">
        <!-- Swiper Css -->
        <link rel="stylesheet"
            href="./assets/libs/swiper/swiper-bundle.min.css">
        <!-- Bootstrap Css -->

        <link href="./assets/css/bootstrap.min.css" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css"
            />
        <link rel="stylesheet"
            href="https://unicons.iconscout.com/release/v3.0.0/css/unicons.css">
        <!-- App Css-->
        <link href="./assets/css/app.min.css" id="app-style" rel="stylesheet"
            type="text/css" />
        <!--Custom Css-->
        <link href="./custom.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
        <style>
                 html {
               scroll-behavior: smooth;
                    }
            </style>
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
                        href="index.blade.php">
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
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse mt-0 pt-0"
                        id="navbarCollapse">
                        <ul class="navbar-nav mx-auto navbar-center">
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="index.blade.php"
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
                                            href="job-list.blade.php">JOBS LIST</a></li>
                                    <li><a class="dropdown-item"
                                            href="job-categories.blade.php">JOBS
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
                                                    href="candidate-list.blade.php">Candidate
                                                    List</a>
                                                <a class="dropdown-item"
                                                    href="company-list.blade.php">Company
                                                    List</a>

                                            </div>
                                        </div>
                                        <!--end col-->


                                    </div>
                                </div>
                            </li>
                            <!--end dropdown-->
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="#How"
                                    id="productdropdown" role="button"
                                    aria-expanded="false">
                                    How It Works

                                </a>

                            </li>
                            <!--end dropdown-->
                            <li class="nav-item">
                                <a href="#contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <!--end navbar-nav-->
                    </div>
                    <!--end navabar-collapse-->
                    <ul class="header-menu list-inline d-flex align-items-center
                        mb-0">

                        <li class="list-inline-item dropdown">
                            <a href="javascript:void(0)" class="header-item"
                                id="userdropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="./assets/images/profile.jpg" alt="mdo"
                                    width="35" height="35" class="rounded-circle
                                    me-1"> <span class="d-none d-md-inline-block
                                    fw-medium">Hi, Lena</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="userdropdown">
                                <li><a class="dropdown-item"
                                        href="profile.blade.php">My Profile</a></li>
                                <li><a class="dropdown-item"
                                        href="sign-out.html">Logout</a></li>
                            </ul>
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
                                                href="log-in.blade.php"
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

                    <!-- START HOME -->
                    <section class="bg-home2" id="home">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="mb-4 pb-3 me-lg-5">
                                        <h6 class="sub-title">We have 150,000+
                                            live jobs</h6>
                                        <h1 class="display-5 fw-semibold mb-3">Find
                                            your dream jobs with <span
                                                class="text-primary fw-bold">Job Mentor</span></h1>
                                        <p class="lead text-muted mb-0">Find
                                            jobs, create trackable resumes and
                                            enrich your applications.Carefully
                                            crafted after analyzing the needs of
                                            different industries.</p>
                                    </div>
                                    <form action="">
                                        <div class="registration-form">
                                            <div class="row g-0">
                                                <div class="col-md-8">
                                                    <div
                                                        class="filter-search-form
                                                        filter-border mt-3
                                                        mt-md-0">
                                                        <i class="uil
                                                            uil-briefcase-alt"></i>
                                                        <input type="search"
                                                            id="job-title"
                                                            class="form-control
                                                            filter-input-box"
                                                            placeholder="Job">
                                                    </div>
                                                </div>


                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div class="mt-3 mt-md-0
                                                        h-100">
                                                        <button class="btn
                                                            btn-primary
                                                            submit-btn w-100
                                                            h-100"
                                                            type="submit"><i
                                                                class="uil
                                                                uil-search
                                                                me-1"></i> Find
                                                            Job</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </form>
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                    <div class="mt-5 mt-md-0">
                                        <img
                                            src="./assets/images/process-02.png"
                                            alt="" class="home-img" />
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- End Home -->

                    <!-- START SHAPE -->
                    <div class="position-relative">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="1440" height="150"
                                preserveAspectRatio="none" viewBox="0 0 1440
                                220">
                                <g mask="url(&quot;#SvgjsMask1004&quot;)"
                                    fill="none">
                                    <path d="M 0,213 C 288,186.4 1152,106.6
                                        1440,80L1440 250L0 250z" fill="rgba(255,
                                        255, 255, 1)"></path>
                                </g>
                                <defs>
                                    <mask id="SvgjsMask1004">
                                        <rect width="1440" height="250"
                                            fill="#ffffff"></rect>
                                    </mask>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->

                    <!-- START CATEGORY -->
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center">
                                        <h3 class="title">Browser Jobs
                                            Categories </h3>
                                        <p class="text-muted">Post a job to tell
                                            us about your project. We'll quickly
                                            match you with the right
                                            freelancers.</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-layers-alt"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">IT & Software</h5>
                                            </a>
                                            <p class="text-muted mb-0">2024 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-airplay"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">Technology</h5>
                                            </a>
                                            <p class="text-muted mb-0">1250 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-bag"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">Government</h5>
                                            </a>
                                            <p class="text-muted mb-0">802 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-user-md"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">Accounting /
                                                    Finance</h5>
                                            </a>
                                            <p class="text-muted mb-0">577 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-hospital"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">Construction /
                                                    Facilities</h5>
                                            </a>
                                            <p class="text-muted mb-0">285 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-telegram-alt"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">Tele-communications</h5>
                                            </a>
                                            <p class="text-muted mb-0">495 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-scenery"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">Design &
                                                    Multimedia</h5>
                                            </a>
                                            <p class="text-muted mb-0">1045 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="popu-category-box rounded
                                        text-center">
                                        <div class="popu-category-icon
                                            icons-md">
                                            <i class="uim uim-android-alt"></i>
                                        </div>
                                        <div class="popu-category-content mt-4">
                                            <a href="job-list.blade.php"
                                                class="text-dark
                                                stretched-link">
                                                <h5 class="fs-18">Human Resource</h5>
                                            </a>
                                            <p class="text-muted mb-0">1516 Jobs</p>
                                        </div>
                                    </div>
                                    <!--end popu-category-box-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-5 text-center">
                                        <a href="job-categories.blade.php" class="btn
                                            btn-primary btn-hover">Browse All
                                            Categories <i class="uil
                                                uil-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END CATEGORY -->

                    <!-- START JOB-LIST -->
                    <section class="section bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center mb-4
                                        pb-2">
                                        <h4 class="title">New & Random Jobs</h4>
                                        <p class="text-muted mb-1">Post a job to
                                            tell us about your project. We'll
                                            quickly match you with the right
                                            freelancers.</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <ul class="job-list-menu nav nav-pills
                                        nav-justified flex-column flex-sm-row
                                        mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item"
                                            role="presentation">
                                            <button class="nav-link active"
                                                id="recent-jobs-tab"
                                                data-bs-toggle="pill"
                                                data-bs-target="#recent-jobs"
                                                type="button" role="tab"
                                                aria-controls="recent-jobs"
                                                aria-selected="true">Recent Jobs</button>
                                        </li>
                                        <li class="nav-item"
                                            role="presentation">
                                            <button class="nav-link"
                                                id="featured-jobs-tab"
                                                data-bs-toggle="pill"
                                                data-bs-target="#featured-jobs"
                                                type="button" role="tab"
                                                aria-controls="featured-jobs"
                                                aria-selected="false">Featured
                                                Jobs</button>
                                        </li>
                                        <li class="nav-item"
                                            role="presentation">
                                            <button class="nav-link"
                                                id="freelancer-tab"
                                                data-bs-toggle="pill"
                                                data-bs-target="#freelancer"
                                                type="button" role="tab"
                                                aria-controls="freelancer"
                                                aria-selected="false">Freelancer</button>
                                        </li>
                                        <li class="nav-item"
                                            role="presentation">
                                            <button class="nav-link"
                                                id="part-time-tab"
                                                data-bs-toggle="pill"
                                                data-bs-target="#part-time"
                                                type="button" role="tab"
                                                aria-controls="part-time"
                                                aria-selected="false">Part Time</button>
                                        </li>
                                        <li class="nav-item"
                                            role="presentation">
                                            <button class="nav-link"
                                                id="full-time-tab"
                                                data-bs-toggle="pill"
                                                data-bs-target="#full-time"
                                                type="button" role="tab"
                                                aria-controls="full-time"
                                                aria-selected="false">Full Time</button>
                                        </li>
                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content"
                                        id="pills-tabContent">
                                        <div class="tab-pane fade show active"
                                            id="recent-jobs" role="tabpanel"
                                            aria-labelledby="recent-jobs-tab">
                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-01.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Web
                                                                        Developer</a>
                                                                </h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Web
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Oakridge
                                                                    Lane
                                                                    ssRichardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt-1">Full
                                                                    Time</span>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-info
                                                                    fs-13 mt-1">Private</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    1 - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-02.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Pixel
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Dodge
                                                                    City,
                                                                    Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-danger
                                                                    fs-13 mt-1">Part
                                                                    Time</span>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-info
                                                                    fs-13 mt-1">Private</span>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-warning
                                                                    fs-13 mt-1">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    0 - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-03.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Digital
                                                                        Marketing
                                                                        Manager</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Job Mentor
                                                                    Technology
                                                                    Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Phoenix,
                                                                    Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-purple
                                                                    fs-13 mt-1">Freelancer</span>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-info
                                                                    fs-13 mt-1">Private</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-04.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt">Full
                                                                    Time</span>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-warning
                                                                    fs-13 mt-1">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.blade.php"
                                                    class="btn btn-primary">View
                                                    More <i class="uil
                                                        uil-arrow-right"></i></a>
                                            </div>

                                        </div>
                                        <!--end recent-jobs-tab-->

                                        <div class="tab-pane fade"
                                            id="featured-jobs" role="tabpanel"
                                            aria-labelledby="featured-jobs-tab">
                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-01.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Web
                                                                        Developer</a>
                                                                </h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Web
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Oakridge
                                                                    Lane
                                                                    Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt-1">Full
                                                                    Time</span>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-info
                                                                    fs-13 mt">Private</span>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-warning
                                                                    fs-13 mt-1">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    1 - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-02.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Pixel
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Dodge
                                                                    City,
                                                                    Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-danger
                                                                    fs-13 mt-1">Part
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    0 - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-03.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Digital
                                                                        Marketing
                                                                        Manager</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Job Mentor
                                                                    Technology
                                                                    Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Phoenix,
                                                                    Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-purple
                                                                    fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-04.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt-1">Full
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.blade.php"
                                                    class="btn btn-primary">View
                                                    More <i class="uil
                                                        uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end featured-jobs-tab-->

                                        <div class="tab-pane fade"
                                            id="freelancer" role="tabpanel"
                                            aria-labelledby="freelancer-tab">
                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-01.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Web
                                                                        Developer</a>
                                                                </h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Web
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Oakridge
                                                                    Lane
                                                                    Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-purple
                                                                    fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    1 - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-02.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Pixel
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Dodge
                                                                    City,
                                                                    Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-purple
                                                                    fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    0 - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-03.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Digital
                                                                        Marketing
                                                                        Manager</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Job Mentor
                                                                    Technology
                                                                    Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Phoenix,
                                                                    Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-purple
                                                                    fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-04.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-purple
                                                                    fs-13 mt-1">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.blade.php"
                                                    class="btn btn-primary">View
                                                    More <i class="uil
                                                        uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end freelancer-tab-->

                                        <div class="tab-pane fade"
                                            id="part-time" role="tabpanel"
                                            aria-labelledby="part-time-tab">
                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-01.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Web
                                                                        Developer</a>
                                                                </h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Web
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Oakridge
                                                                    Lane
                                                                    Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-danger
                                                                    fs-13 mt-1">Part
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    1 - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-02.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Pixel
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Dodge
                                                                    City,
                                                                    Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-danger
                                                                    fs-13 mt-1">Part
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    0 - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-03.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Digital
                                                                        Marketing
                                                                        Manager</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Job Mentor
                                                                    Technology
                                                                    Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">
                                                                    Phoenix,
                                                                    Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-danger
                                                                    fs-13 mt-1">Part
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-04.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-danger
                                                                    fs-13 mt-1">Part
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.blade.php"
                                                    class="btn btn-primary">View
                                                    More <i class="uil
                                                        uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end part-time-tab-->

                                        <div class="tab-pane fade"
                                            id="full-time" role="tabpanel"
                                            aria-labelledby="full-time-tab">
                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-01.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Web
                                                                        Developer</a>
                                                                </h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Web
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Oakridge
                                                                    Lane
                                                                    Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt-1">Full
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    1 - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-02.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Business
                                                                        Associate</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Pixel
                                                                    Technology
                                                                    pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Dodge
                                                                    City,
                                                                    Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>800-1800/m
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt-1">Full
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    0 - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6
                                                            col-md-5">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Notes
                                                                        :</span>
                                                                    languages
                                                                    only differ
                                                                    in their
                                                                    grammar.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-md-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-03.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Digital
                                                                        Marketing
                                                                        Manager</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Job Mentor
                                                                    Technology
                                                                    Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Phoenix,
                                                                    Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt-1">Full
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="text-white
                                                        align-middle"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.blade.php"><img
                                                                        src="./assets/images/featured-job/img-04.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-1"><a
                                                                        href="job-details.blade.php"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-2"><span
                                                                        class="text-primary">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-success
                                                                    fs-13 mt-1">Full
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="mdi
                                                                        mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="text-center mt-4 pt-2">
                                                <a href="job-list.blade.php"
                                                    class="btn btn-primary">View
                                                    More <i class="uil
                                                        uil-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end full-time-tab-->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END JOB-LIST -->

                    <!-- START PROCESS -->
                    <section class="section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="section-title me-5">
                                        <h3 class="title">How It Work</h3>
                                        <p class="text-muted">Post a job to tell
                                            us about your project. We'll quickly
                                            match you with the right
                                            freelancers.</p>
                                        <div class="process-menu nav flex-column
                                            nav-pills" id="v-pills-tab"
                                            role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active"
                                                id="v-pills-home-tab"
                                                data-bs-toggle="pill"
                                                href="#v-pills-home" role="tab"
                                                aria-controls="v-pills-home"
                                                aria-selected="true">
                                                <div class="d-flex">
                                                    <div class="number
                                                        flex-shrink-0">
                                                        1
                                                    </div>
                                                    <div class="flex-grow-1
                                                        text-start ms-3">
                                                        <h5 class="fs-18">Register
                                                            an account</h5>
                                                        <p class="text-muted
                                                            mb-0">Due to its
                                                            widespread use as
                                                            filler text for
                                                            layouts,
                                                            non-readability is
                                                            of great importance.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link"
                                                id="v-pills-profile-tab"
                                                data-bs-toggle="pill"
                                                href="#v-pills-profile"
                                                role="tab"
                                                aria-controls="v-pills-profile"
                                                aria-selected="false">
                                                <div class="d-flex">
                                                    <div class="number
                                                        flex-shrink-0">
                                                        2
                                                    </div>
                                                    <div class="flex-grow-1
                                                        text-start ms-3">
                                                        <h5 class="fs-18">Find
                                                            your job</h5>
                                                        <p class="text-muted
                                                            mb-0">There are many
                                                            variations of
                                                            passages of
                                                            avaibookmark-label,
                                                            but the majority
                                                            alteration in some
                                                            form.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link"
                                                id="v-pills-messages-tab"
                                                data-bs-toggle="pill"
                                                href="#v-pills-messages"
                                                role="tab"
                                                aria-controls="v-pills-messages"
                                                aria-selected="false">
                                                <div class="d-flex">
                                                    <div class="number
                                                        flex-shrink-0">
                                                        3
                                                    </div>
                                                    <div class="flex-grow-1
                                                        text-start ms-3">
                                                        <h5 class="fs-18">Apply
                                                            for job</h5>
                                                        <p class="text-muted
                                                            mb-0">It is a long
                                                            established fact
                                                            that a reader will
                                                            be distracted by the
                                                            readable content of
                                                            a page.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="tab-content"
                                        id="v-pills-tabContent">
                                        <div class="tab-pane fade show active"
                                            id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <img
                                                src="./assets/images/process-01.png"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane fade"
                                            id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <img
                                                src="./assets/images/process-02.png"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane fade"
                                            id="v-pills-messages"
                                            role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            <img
                                                src="./assets/images/process-03.png"
                                                alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END PROCESS -->

                    <!--START CTA-->
                    <section class="section bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="text-center">
                                        <h2 class="text-primary mb-4">Browse Our
                                            <span class="text-warning fw-bold">5,000+</span>
                                            Latest Jobs
                                        </h2>
                                        <p class="text-muted">Post a job to tell
                                            us about your project. We'll quickly
                                            match you with the right
                                            freelancers.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="sign-up.blade.php"
                                                class="btn btn-primary
                                                btn-hover">Started Now <i
                                                    class="uil uil-rocket
                                                    align-middle ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!--END CTA-->

                    <!-- START TESTIMONIAL -->

                    <!-- END TESTIMONIAL -->

                    <!-- START BLOG -->

                    <!-- END BLOG -->

                    <!-- START CLIENT -->

                    <!-- END CLIENT -->

                    <!-- START APPLY MODAL -->
                    <div class="modal fade" id="applyNow" tabindex="-1"
                        aria-labelledby="applyNow" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5">
                                    <div class="text-center mb-4">
                                        <h5 class="modal-title"
                                            id="staticBackdropLabel">Apply For
                                            This Job</h5>
                                    </div>
                                    <div class="position-absolute end-0 top-0
                                        p-3">
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nameControlInput"
                                            class="form-label">Name</label>
                                        <input type="text" class="form-control"
                                            id="nameControlInput"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailControlInput2"
                                            class="form-label">Email Address</label>
                                        <input type="email" class="form-control"
                                            id="emailControlInput2"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="messageControlTextarea"
                                            class="form-label">Message</label>
                                        <textarea class="form-control"
                                            id="messageControlTextarea" rows="4"
                                            placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"
                                            for="inputGroupFile01">Resume Upload</label>
                                        <input type="file" class="form-control"
                                            id="inputGroupFile01">
                                    </div>
                                    <button type="submit" class="btn btn-primary
                                        w-100">Send Application</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END APPLY MODAL -->

                </div>
                <!-- End Page-content -->

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
                                        <li><a href="about.blade.php"><i class="uil
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
                                        <li><a href="job-categories.blade.php"><i
                                                    class="uil
                                                    uil-angle-right-b"></i>
                                                Browser Categories</a></li>
                                        <li><a href="job-list.blade.php"><i
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
                                        <li><a href="candidate-list.blade.php"><i
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
                                        <li><a href="company-list.blade.php"><i
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

                <!-- Style switcher -->
                <div id="style-switcher"
                    style="left:
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

                                <a href="javascript: void(0);" id="mode"
                                    class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark
                                        mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="bottom d-none d-md-block">
                        <a href="javascript: void(0);" class="settings
                            rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
                    </div>
                </div>
                <!-- end switcher-->

                <!--start back-to-top-->
                <!-- <button onclick="topFunction()" id="back-to-top">
                    <i class="mdi mdi-arrow-up"></i>
                </button> -->
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <!-- Choice Js -->
        <script
            src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <!-- Swiper Js -->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        <!-- Index Js -->
        <script src="./assets/js/pages/job-list.init.js"></script>

        <!-- Switcher Js -->
        <script src="./assets/js/pages/switcher.init.js"></script>
        <script src="./assets/js/pages/index.init.js"></script>

        <!-- App Js -->
        <script src="./assets/js/app.js"></script>

    </body>

</html>
