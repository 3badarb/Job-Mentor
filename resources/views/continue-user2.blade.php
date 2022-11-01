<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Creating Profile</title>
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



            <!--Navbar Start-->



            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <h3 class="mb-4">Creating Your Profile</h3>
                                        <div class="page-next">
                                            <p>Please fill your informatinon</p>
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


                    <!-- START PROFILE -->
                    <section class="section">
                        <div class="container">
                            <div class="row ">

                                <div class="col-lg-9 offset-md-2">
                                    <div class="card profile-content-page mt-4
                                        mt-lg-0">
                                        <ul class="profile-content-nav nav
                                            nav-pills border-bottom mb-4"
                                            id="pills-tab" role="tablist">
                                            <li class="nav-item"
                                                role="presentation">
                                                <button class="nav-link active"
                                                    id="overview-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#settings"
                                                    type="button" role="tab"
                                                    aria-controls="overview"
                                                    aria-selected="true">
                                                    Fill Your Information
                                                </button>
                                            </li>



                                        </ul>
                                        <!--end profile-content-nav-->
                                        <div class="card-body p-4">
                                            <div class="tab-content"
                                                id="pills-tabContent">

                                                <div class="tab-pane fade show
                                                    active"
                                                    id="settings"
                                                    role="tabpanel"
                                                    aria-labelledby="settings-tab">

                                                        <div>

                                                            @if($errors->any())
                                                                @foreach($errors->all() as $error)

                                                                    <p>
                                                                        <small style="color: lightcoral">

                                                                            {{$error}}

                                                                        </small>

                                                                    </p>
                                                                @endforeach
                                                            @endif
                                                            @csrf

                                                            <div
                                                                class="candidate-education-details
                                                        mt-4">
                                                                <h5 class="fs-18 fw-bold
                                                            mb-0 ">Depending on our AI Your job title is:</h5>
                                                                <p class="mb-2 mt-4  fw-bold fs-16
                                                        text-muted">{{auth()->user()->userinfo->jobtitle}}</p>
                                                            </div>
                                                            <!--end row-->

                                                            <!--end row-->


                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">If you want change the Job Title for a one more suitable for you</h5>
                                                            <div
                                                                class="col-lg-12">
                                                                <form method="post" action="/change-job-title">
                                                                    @method("put")
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="jobtilte"
                                                                        class="form-label"></label>

                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        id="jobtilte"
                                                                        name="jobtitle"
                                                                        value="{{old('jobtitle')}}"
                                                                    />
                                                                </div>
                                                                    <div class="mt-4 text-end">
                                                                    <button class="btn btn-primary" type="submit">Save</button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>


                                                            <br>
                                                            <strong>Or press Next</strong>
                                                            <form method="get" action="/select-the-yoe">
                                                        <div class="mt-4
                                                            text-end">
                                                            <button class="btn btn-primary" type="submit">Next</button>

                                                        </div>
                                                            </form>
                                                        </div>

                                                         </div>

                                                    <!--end form-->
                                                </div>
                                            </div>
                                            <!--end tab-content-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end profile-content-page-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->


                        <!--end container-->
                    </section>
                    <!-- END PROFILE -->

                </div>
                <!-- End Page-content -->



                <!-- START FOOTER -->
                @include('downbar')

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
        <!-- Job-list Init Js -->
        <script src={{asset("./assets/js/pages/job-list.init.js")}}></script>

        <!-- Switcher Js -->
        <script src={{asset("./assets/js/pages/switcher.init.js")}}></script>

        <!-- App Js -->
        <script src={{asset("public/assets/js/app.js")}}></script>

    </body>

</html>
