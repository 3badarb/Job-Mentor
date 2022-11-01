<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Candidate Details</title>
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
                                        <h3 class="mb-4">Candidate Details</h3>
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
                                                    src="{{asset("storage/".$user->userinfo->avatar)}}"
                                                    alt="" class="avatar-lg
                                                    rounded-circle">
                                                <h6 class="fs-18 mb-0 mt-4">{{$user->name}}</h6>


                                            </div>
                                        </div>
                                        @if(\App\Models\job_user::where('job_id',$job_id)->where('user_id',$user->id)->value('reject') === 0)
                                            <div class="card-body p-4">
                                                <div>
                                                    <form method="post" action="/reject/{{$user->id}}/{{$job_id}}">
                                                        @csrf

                                                        <button
                                                            class="btn
                                                        btn-primary
                                                        btn-hover w-100
                                                        rounded"><i class="iconify" data-icon="bi:person-x-fill" style="color: white;" data-width="24"></i>
                                                            Reject</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @else
                                            <div class="card-body p-4">
                                                <div>
                                                    <h4 class="fs-15
                                                                mb-1" style="color: #1a72cb">You Reject This Applier</h4>
                                                </div>
                                            </div>
                                    @endif
                                        <!--end candidate-profile-->
                                        <!--candidate-profile-overview-->
                                        <!--end card-body-->
                                        <div class="candidate-contact-details
                                            card-body p-4 border-top">
                                            <h6 class="fs-17 fw-semibold mb-3">Contact
                                                Details</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <div class="d-flex
                                                        align-items-center
                                                        mt-4">
                                                        <div class="icon
                                                            bg-soft-primary
                                                            flex-shrink-0">
                                                            <i class="uil
                                                                uil-envelope-alt"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="fs-14
                                                                mb-1">Email</h6>
                                                            <p class="text-muted
                                                                mb-0">{{$user->email}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex
                                                        align-items-center
                                                        mt-4">
                                                        <div class="icon
                                                            bg-soft-primary
                                                            flex-shrink-0">
                                                            <i class="uil
                                                                uil-map-marker"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="fs-14
                                                                mb-1">Address</h6>
                                                            <p class="text-muted
                                                                mb-0">{{$info->resident}}</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="d-flex
                                                        align-items-center
                                                        mt-4">
                                                        <div class="icon
                                                            bg-soft-primary
                                                            flex-shrink-0">
                                                            <span class="iconify" data-icon="icon-park-outline:international" ></span>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="fs-14
                                                                mb-1">From</h6>
                                                            <p class="text-muted
                                                                mb-0">{{$info->from}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex
                                                        align-items-center
                                                        mt-4">
                                                        <div class="icon
                                                            bg-soft-primary
                                                            flex-shrink-0">
                                                            <i class="uil
                                                                uil-phone"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="fs-14
                                                                mb-1">Phone</h6>
                                                            <p class="text-muted
                                                                mb-0">{{$info->phone}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex
                                                        align-items-center
                                                        mt-4">
                                                        <div class="icon
                                                            bg-soft-primary
                                                            flex-shrink-0">
                                                            <span class="iconify" data-icon="cil:birthday-cake" ></span>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="fs-14
                                                                mb-1">Birth</h6>
                                                            <p class="text-muted
                                                                mb-0">{{$info->birth}}</p>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

                                        <!--end candidate-overview-->
                                    </div>


                                    <!--end card-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-8">
                                    <div class="card candidate-details ms-lg-4
                                        mt-4 mt-lg-0">
                                        <div class="card-body p-4
                                            candidate-personal-detail">
                                            <div>
                                                <h6 class="fs-17 fw-semibold
                                                    mb-3">About me</h6>
                                                <p class="text-muted mb-2" style="white-space: pre-line;">{{$info->about_me}}</p>
                                            </div>
                                            <br/>

                                            <div>
                                                <h6 class="fs-17 fw-semibold
                                                    mb-3">Education</h6>
                                                <p class="text-muted mb-2" style="white-space: pre-line;">{{$info->education}}</p>
                                            </div>


                                            <div
                                                class="candidate-education-details
                                                mt-4 pt-3">
                                                <h6 class="fs-17 fw-bold mb-0">Experience</h6>
                                                <div
                                                    class="candidate-education-content
                                                    mt-4 d-flex">


                                                        <p class="mb-2
                                                            text-muted" style="white-space: pre-line;">{{$info->expirence}}</p>
                                                    </div>
                                                </div>
                                             <div class="mt-4">
                                                        <h5 class="fs-18
                                                            fw-bold">Skills</h5>
                                                        <p class="mb-2
                                                            text-muted" style="white-space: pre-line;">{{$info->skills}}</p>

                                                    </div>
                                             </div>
                                            </div>

                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->


                            <!--end container-->


                        </section>
                        <!-- END CANDIDATE-DETAILS -->

                    </div>
                    <!-- End Page-content -->

            </div>
        </div>
                    <!-- START FOOTER -->
                    @include('downbar')
                    <!-- END FOOTER -->

                    <!-- Style switcher -->
                                        <!-- end switcher-->


        <!-- end main content-->

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
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

        </body>

    </html>
