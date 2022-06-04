<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Company List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href={{asset("./assets/images/favicon.ico")}}>

        <!-- Choise Css -->
        <link rel="stylesheet"
              href={{asset("./assets/libs/choices.js/public/./assets/styles/choices.min.css")}}>
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
            <!-- Navbar End -->
            @include('upbar')

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
                                        <h3 class="mb-4">Company List</h3>
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



                    <!-- START COMPANY-LIST -->
                    <section class="section">
                        <div class="container">

                            <!--end row-->
                            <div class="row">
                                @foreach($companies as $company)
                                    @if($loop->index % 3 === 0)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-center mb-4">
                                        <div class="card-body px-4 py-5">
{{--                                            <div class="featured-label">--}}
{{--                                                <span class="featured">4.9</span>--}}
{{--                                            </div>--}}
                                            <img
                                                src="{{asset("storage/".$company->companyinfo->avatar)}}"
                                                alt="" class="col-md-3 img-fluid rounded-3">
                                            <div class="mt-4">
                                                <a href="company-details.html"
                                                    class="primary-link">
                                                    <h6 class="fs-18 mb-2">{{$company->name}}</h6>
                                                </a>
                                                <p class="text-muted mb-4">{{$company->companyinfo->location}}</p>

                                                <!-- <a href="company-details.html"
                                                    class="btn btn-primary">52
                                                    Opening Jobs</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @elseif($loop->index % 3 === 1)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card text-center mb-4">
                                                <div class="card-body px-4 py-5">
                                                    {{--                                            <div class="featured-label">--}}
                                                    {{--                                                <span class="featured">4.9</span>--}}
                                                    {{--                                            </div>--}}
                                                    <img
                                                        src="{{asset("storage/".$company->companyinfo->avatar)}}"
                                                        alt="" class="col-md-3 img-fluid rounded-3">
                                                    <div class="mt-4">
                                                        <a href="company-details.html"
                                                           class="primary-link">
                                                            <h6 class="fs-18 mb-2">{{$company->name}}</h6>
                                                        </a>
                                                        <p class="text-muted mb-4">{{$company->companyinfo->location}}</p>

                                                        <!-- <a href="company-details.html"
                                                            class="btn btn-primary">52
                                                            Opening Jobs</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($loop->index % 3 === 2)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card text-center mb-4">
                                                <div class="card-body px-4 py-5 ">
                                                    {{--                                            <div class="featured-label">--}}
                                                    {{--                                                <span class="featured">4.9</span>--}}
                                                    {{--                                            </div>--}}
                                                    <img
                                                        src="{{asset("storage/".$company->companyinfo->avatar)}}"
                                                        alt="" class="col-md-3 img-fluid rounded-3">
                                                    <div class="mt-4">
                                                        <a href="company-details.html"
                                                           class="primary-link">
                                                            <h6 class="fs-18 mb-2">{{$company->name}}</h6>
                                                        </a>
                                                        <p class="text-muted mb-4">{{$company->companyinfo->location}}</p>

                                                        <!-- <a href="company-details.html"
                                                            class="btn btn-primary">52
                                                            Opening Jobs</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <!--end row-->
                            @if($companies[0]===null)
                                <h1
                                    class="text-center">No Companies Yet.</h1>
                            @endif

                        </div>
                        <!--end container-->
                    </section>
                    <div class="col-lg-8 offset-md-4  mb-4">
                        {{$companies->links()}}
                    </div>
                    <!-- END COMPANY-LIST -->

                </div>
                <!-- End Page-content -->



                <!-- START FOOTER -->
                @include('downbar')
                <!-- END FOOTER -->
                <!-- START FOOTER-ALT -->
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
        <!-- Choice Js -->
        <script
            src={{asset("./assets/libs/choices.js/public/./assets/scripts/choices.min.js")}}></script>
        <!-- Job Init Js -->
        <script src={{asset("./assets/js/pages/job-list.init.js")}}></script>
        <!-- Job-Grid Js -->
        <script src={{asset("./assets/js/pages/job-grid.init.js")}}></script>

        <!-- Switcher Js -->
        <script src={{asset("./assets/js/pages/switcher.init.js")}}></script>
        <!-- App Js -->
        <script src={{asset("public/assets/js/app.js")}}></script>

    </body>

</html>
