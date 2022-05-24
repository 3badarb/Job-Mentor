<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Company Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href={{asset("./assets/images/favicon.ico")}}>

        <!-- Choise Css -->
        <link rel="stylesheet"
            href={{asset("./assets/libs/choices.js/public/./assets/styles/choices.min.css")}}>
        <!-- Light Box Css -->
        <link rel="stylesheet"
            href={{asset("./assets/libs/glightbox/css/glightbox.min.css")}}>

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

        <!--end page Loader -->

        <!-- Begin page -->
        <div>


            <!--Navbar Start-->
            @include('upbar')
            <!-- Navbar End -->


            <!-- START SIGN-UP MODAL -->

            <!-- END SIGN-UP MODAL -->


            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <h3 class="mb-4">Company Details</h3>
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


                    <!-- START CANDIDATE-DETAILS -->
                    <section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card side-bar">
                                        <div class="card-body p-4">
                                            <div class="candidate-profile
                                                text-center">
                                                <img
                                                    src={{asset("./assets/images/featured-job/img-10.png")}}
                                                    alt="" class="avatar-lg
                                                    rounded-circle">
                                                <h6 class="fs-18 mb-1 mt-4">{{$user->name}}</h6>
                                                <!-- <p class="text-muted mb-4">Since
                                                    July 2017</p> -->

                                            </div>
                                        </div>
                                        <!--end candidate-profile-->

                                        <div class="candidate-profile-overview
                                            card-body border-top p-4">

                                            <ul class="list-unstyled
                                                    mt-4">
                                                <li>
                                                    <div
                                                        class="d-flex">
                                                        <i
                                                            class="uil
                                                                uil-phone-volume
                                                                text-primary
                                                                fs-4"></i>
                                                        <div
                                                            class="ms-3">
                                                            <h6
                                                                class="fs-14
                                                                    mb-2">Phone</h6>
                                                            <p
                                                                class="text-muted
                                                                    fs-14
                                                                    mb-0">{{$user->companyinfo->telephone}}</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="mt-3">
                                                    <div
                                                        class="d-flex">
                                                        <i
                                                            class="uil
                                                                uil-globe
                                                                text-primary
                                                                fs-4"></i>
                                                        <div
                                                            class="ms-3">
                                                            <h6
                                                                class="fs-14
                                                                    mb-2">Website</h6>
                                                            <p
                                                                class="text-muted
                                                                    fs-14
                                                                    text-break
                                                                    mb-0">{{$user->companyinfo->website}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-3">
                                                    <div
                                                        class="d-flex">
                                                        <i
                                                            class="uil
                                                                uil-map-marker
                                                                text-primary
                                                                fs-4"></i>
                                                        <div
                                                            class="ms-3">
                                                            <h6
                                                                class="fs-14
                                                                    mb-2">Location</h6>
                                                            <p
                                                                class="text-muted
                                                                    fs-14
                                                                    mb-0">{{$user->companyinfo->location}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="mt-3">

                                            </div>
                                        </div>
                                        <!--candidate-profile-overview-->
                                        <!--end card-body-->

                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-8">
                                    <div class="card ms-lg-4 mt-4 mt-lg-0">
                                        <div class="card-body p-4">

                                            <div class="mb-5">
                                                <h6 class="fs-17 fw-medium
                                                    mb-4">About Company</h6>
                                                <p class="text-muted">{{$user->companyinfo->about_us}}</p>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END CANDIDATE-DETAILS -->

                    <!-- START APPLY MODAL -->

                    <!-- END APPLY MODAL -->

                </div>
                <!-- End Page-content -->



                <!-- START FOOTER -->
               @include('downbar')
                <!-- END FOOTER -->

                <!-- Style switcher -->

                <!-- end switcher-->


            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script
            src={{asset("./assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <!-- Light Box Js -->
        <script
            src={{asset("./assets/libs/glightbox/js/glightbox.min.js")}}></script>
        <script src={{asset("./assets/js/pages/lightbox.init.js")}}></script>
        <!-- Masonary Js -->
        <script
            src={{asset("./assets/libs/masonry-layout/masonry.pkgd.min.js")}}></script>
        <!-- Choice Js -->
        <script
            src={{asset("./assets/libs/choices.js/public/./assets/scripts/choices.min.js")}}></script>
        <!-- Switcher Js -->
        <script src={{asset("./assets/js/pages/switcher.init.js")}}></script>
        <script src={{asset("./assets/js/app.js")}}></script>

    </body>

</html>
