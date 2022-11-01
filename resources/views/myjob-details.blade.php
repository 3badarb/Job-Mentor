<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Job Details</title>
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
        <link href={{asset("./assets/css/icons.min.css")}} rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href={{asset("./assets/css/app.min.css")}} id="app-style" rel="stylesheet"
            type="text/css" />
        <!--Custom Css-->
        <link href={{asset("./custom.css")}} rel="stylesheet" />
        <link rel="stylesheet"
            href={{asset("https://unicons.iconscout.com/release/v4.0.0/css/line.css")}} />
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
                                        <h3 class="mb-4">Job Details</h3>
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


                    <!-- START JOB-DEATILS -->
                    <section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card job-detail
                                        overflow-hidden">
                                        <div>
                                            <img class="img-fluid img-custom"
                                                 alt=""
                                                src={{asset("./assets/images/job-detail.jpg")}}
                                                >

                                        </div>
                                        <div class="card-body p-4">
                                            <div>
                                                <div class="row">

                                                        <h4 class="mb-1">{{$job->jobtitle}}</h4>

                                                </div>
                                                <!--end row-->
                                            </div>


                                            <!--end Experience-->

                                            <div class="mt-4">
                                                <h5 class="mb-3">Job Description</h5>
                                                <div class="job-detail-desc">
                                                    <p class="text-muted mb-0 " style="white-space: pre-line">{{$job->description}}</p>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <h5 class="mb-3">Requirement</h5>
                                                <div class="job-detail-desc
                                                    mt-2">

                                                    <p class="job-detail-list
                                                        list-unstyled mb-0
                                                        text-muted">{{$job->requirement}}
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="mt-4">
                                                <h5 class="mb-3">Skill &
                                                    Experience</h5>
                                                <div class="job-details-desc mb-2">
                                                    <p class="job-detail-list
                                                        list-unstyled mb-0
                                                        text-muted">
                                                       {{$job->expirence}}
                                                    </p>

                                                </div>
                                            </div>


                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end job-detail-->
                                </div>
                                <!-- <div class="mt-4"> -->

                                <div class="col-lg-4 mt-4 mt-lg-0">
                                    <!--start side-bar-->
                                    <div class="side-bar ms-lg-4">
                                        <div class="card job-overview">
                                            <div class="card-body p-4">
                                                <h6 class="fs-17">Job
                                                    Overview</h6>
                                                <ul class="list-unstyled
                                                    mt-4
                                                    mb-0">
                                                    <li>
                                                        <div
                                                            class="d-flex
                                                            mt-4">
                                                            <i
                                                                class="
                                                                icon
                                                                bg-soft-primary"><span class="iconify" data-icon="fluent:subtitles-16-regular" style="color: blue;" data-width="22"></span></i>
                                                            <div
                                                                class="ms-3">
                                                                <h6
                                                                    class="fs-14
                                                                    mb-2">Job
                                                                    Title</h6>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">{{$job->jobtitle}}</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div
                                                            class="d-flex
                                                            mt-4">
                                                            <i
                                                                class="uil
                                                                uil-location-point
                                                                icon
                                                                bg-soft-primary"></i>
                                                            <div
                                                                class="ms-3">
                                                                <h6
                                                                    class="fs-14
                                                                    mb-2">Location</h6>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">
                                                                    {{$job->myuser->companyinfo->location}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="d-flex
                                                            mt-4">
                                                            <i
                                                                class="uil
                                                                uil-usd-circle
                                                                icon
                                                                bg-soft-primary"></i>
                                                            <div
                                                                class="ms-3">
                                                                <h6
                                                                    class="fs-14
                                                                    mb-2">Offered
                                                                    Salary</h6>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">{{$job->salary}}</p>
                                                            </div>
                                                        </div>
                                                    </li>



                                                </ul>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end job-overview-->

                                        <div class="card company-profile
                                            mt-4">
                                            <div class="card-body p-4">
                                                <div class="mt-4">
                                                  <form method="post" action="/delete-job/{{$job->id}}">
                                                      @csrf
                                                      @method('delete')
                                                      <button
                                                        class="btn
                                                        btn-primary
                                                        btn-hover w-100
                                                        rounded"><i class="iconify mb-1 " data-icon="icomoon-free:bin" data-width="20"></i>
                                                        Delete this Opportunity </button>
                                                  </form>
                                                </div>
                                            </div>
                                            <div class="card-body p-4">
                                                <div>
                                                    <form method="get" action="/edit-job/{{$job->id}}">
                                                        @csrf

                                                        <button
                                                            class="btn
                                                        btn-primary
                                                        btn-hover w-100
                                                        rounded"><i class="iconify mb-1" data-icon="ant-design:edit-outlined" data-width="25"></i>
                                                            Edit it</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card-body p-4">
                                                <div>
                                                    <form method="get" action="/show-appliers/{{$job->id}}">
                                                        @csrf

                                                        <button
                                                            class="btn
                                                        btn-primary
                                                        btn-hover w-100
                                                        rounded"><i class="iconify mb-1" data-icon="bi:person" data-width="20"></i>
                                                            Show Appliers</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card-body p-4">
                                                <div>
                                                    <form method="get" action="/the-perfects/{{$job->id}}">
                                                        @csrf

                                                        <button
                                                            class="btn
                                                        btn-primary
                                                        btn-hover w-100
                                                        rounded"><i class="iconify mb-1 mx-sm-1 uil-align-left" data-icon="icon-park-outline:good-two" data-width="20"></i>
                                                            The PERFECT one's for you</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!--end side-bar-->
                                    <!-- </div> -->
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end container-->
                        </div>
                        </section>
                        <!-- START JOB-DEATILS -->

                        <!-- START APPLY MODAL -->
{{--                        <div class="modal fade" id="applyNow" tabindex="-1"--}}
{{--                            aria-labelledby="applyNow" aria-hidden="true">--}}
{{--                            <div class="modal-dialog modal-dialog-centered">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-body p-5">--}}
{{--                                        <div class="text-center mb-4">--}}
{{--                                            <h5 class="modal-title"--}}
{{--                                                id="staticBackdropLabel">Apply--}}
{{--                                                For--}}
{{--                                                This Job</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="position-absolute end-0--}}
{{--                                            top-0--}}
{{--                                            p-3">--}}
{{--                                            <button type="button"--}}
{{--                                                class="btn-close"--}}
{{--                                                data-bs-dismiss="modal"--}}
{{--                                                aria-label="Close"></button>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label for="nameControlInput"--}}
{{--                                                class="form-label">Name</label>--}}
{{--                                            <input type="text"--}}
{{--                                                class="form-control"--}}
{{--                                                id="nameControlInput"--}}
{{--                                                placeholder="Enter&nbsp;your&nbsp;name">--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label for="emailControlInput2"--}}
{{--                                                class="form-label">Email--}}
{{--                                                Address</label>--}}
{{--                                            <input type="email"--}}
{{--                                                class="form-control"--}}
{{--                                                id="emailControlInput2"--}}
{{--                                                placeholder="Enter&nbsp;your&nbsp;email">--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label--}}
{{--                                                for="messageControlTextarea"--}}
{{--                                                class="form-label">Message</label>--}}
{{--                                            <textarea class="form-control"--}}
{{--                                                id="messageControlTextarea"--}}
{{--                                                rows="4"--}}
{{--                                                placeholder="Enter&nbsp;your&nbsp;message"></textarea>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-4">--}}
{{--                                            <label class="form-label"--}}
{{--                                                for="inputGroupFile01">Resume--}}
{{--                                                Upload</label>--}}
{{--                                            <input type="file"--}}
{{--                                                class="form-control"--}}
{{--                                                id="inputGroupFile01">--}}
{{--                                        </div>--}}
{{--                                        <button type="submit" class="btn--}}
{{--                                            btn-primary--}}
{{--                                            w-100">Send Application</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
             <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
            <script
                src={{asset("./assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}></script>
            <script
                src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
            <!-- Switcher Js -->
            <script src={{asset("./assets/js/pages/switcher.init.js")}}></script>

            <!-- App Js -->
            <script src={{asset("public/assets/js/app.js")}}></script>

        </body>

    </html>
