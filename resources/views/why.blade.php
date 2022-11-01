<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Search | Job Mentor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href={{asset("./assets/images/favicon.ico")}}>


        <!-- Choise Css -->
        <link rel="stylesheet"
              href={{asset("./assets/libs/choices.js/public/./assets/styles/choices.min.css")}}>
        <!-- Swiper Css -->
        <link rel="stylesheet"
              href={{asset("./assets/libs/swiper/swiper-bundle.min.css")}}>
        <!-- Bootstrap Css -->

        <!-- Bootstrap Css -->
        <link href={{asset("./assets/css/bootstrap.min.css")}} id="bootstrap-style"
              rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href={{asset("./assets/css/app.min.css")}} id="app-style" rel="stylesheet"
              type="text/css" />
        <link rel="stylesheet"
              href="https://unicons.iconscout.com/release/v3.0.0/css/unicons.css">
        <!-- App Css-->
        <link href={{asset("./assets/css/app.min.css")}} id="app-style" rel="stylesheet"
              type="text/css" />
        <!--Custom Css-->
        <link href={{asset("./custom.css")}} rel="stylesheet" />
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

                    <!-- START HOME -->
                    <section class="bg-home2 mt-0" id="home">
                        <div class="container">
                            <div class="row  ">
                                <div class="col-lg-7 mt-5  ">
                                    <div class="mb-3 pb-3 me-lg-5">
                                        <h1 class="fw-semibold mb-3 ">Sorry Things Didn't Work Out
                                            <span class="iconify" data-icon="fa-regular:sad-tear" style="color: #1a72cb"></span></h1>
                                        @if($why==='')
                                            <h2>We wish we could tell you why you didn't get approved, but we don't know why ):</h2>
                                        @else
                                        <h2>According to our AI you might didn't get approve for this job because you don't have these Skills:</h2>
                                        <p class="lead text-muted mb-0 fw-semibold">{{$why}}</p>
                                        @endif
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                    <div class="mt-md-0">
                                        <img class="mt-0"
                                             src="{{asset("./assets/images/why1.png")}}"
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

                    <!-- START JOB-LIST -->
                    <
                    <!-- END JOB-LIST -->

                    <!-- START FOOTER -->
                   @include('downbar')
                    <!-- END FOOTER -->

                    <!-- Style switcher -->

                    <!-- end switcher-->
                    <!-- START APPLY MODAL -->
                </div>
            </div>

                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->

            <!-- JAVASCRIPT -->
            <script
                src={{asset("./assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}></script>
            <script
                src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
            <!-- Choice Js -->
            <script
                src={{asset("./assets/libs/choices.js/public/./assets/scripts/choices.min.js")}}></script>
            <!-- Swiper Js -->
            <script src="{{asset("assets/libs/swiper/swiper-bundle.min.js")}}"></script>
        <!-- Index Js -->
        <script src="{{asset("./assets/js/pages/job-list.init.js")}}"></script>

            <!-- Switcher Js -->
            <script src="{{asset("./assets/js/pages/switcher.init.js")}}"></script>
            <script src="{{asset("./assets/js/pages/index.init.js")}}"></script>

            <!-- App Js -->
            <script src="{{asset("./assets/js/app.js")}}"></script>

        </body>

    </html>
