<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Candidate List</title>
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
                                        <h3 class="mb-4">Candidate List</h3>
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


                    <!-- START CANDIDATE-GRID -->
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="candidate-list-widgets mb-4">
                                        <!--end form-->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->






                            <div class="candidate-list">

                                <div class="row">
                                    @forelse($users as $user)
                                        @if($loop->index % 3 === 0)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box
                                            bookmark-post card mt-4">
                                            <div class="card-body p-4">
                                                <div class="featured-label">
                                                    <!-- <span class="featured">featured</span> -->
                                                </div>
                                                <div class="d-flex mb-4">
                                                    <div
                                                        class="flex-shrink-0
                                                        position-relative">
                                                        <img
                                                            src="{{asset("storage/".$user->avatar)}}"
                                                            alt=""
                                                            class="avatar-md
                                                            rounded">

                                                    </div>
                                                    <div class="ms-3">
                                                        <a
                                                            href="/candidate-details/{{$user->user->id}}"
                                                            class="primary-link">
                                                            <h5
                                                                class="fs-17">{{$user->user->name}}</h5>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="border rounded
                                                    mb-4">

                                                </div>
                                                <p class="text-muted">{{$user->about_me}}</p>
                                                <div class="mt-3">
                                                    <a
                                                        href="/candidate-details/{{$user->user->id}}"
                                                        class="btn
                                                        btn-soft-primary
                                                        btn-hover w-100
                                                        mt-2"><i class="uil
                                                            uil-eye"></i>
                                                        View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    @endif
                                    @if($loop->index % 3 === 1)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box
                                            bookmark-post card mt-4">
                                            <div class="card-body p-4">
                                                <div class="d-flex mb-4">
                                                    <div
                                                        class="flex-shrink-0
                                                        position-relative">
                                                        <img
                                                            src="{{asset("storage/".$user->avatar)}}"
                                                            alt=""
                                                            class="avatar-md
                                                            rounded">
                                                        <!-- <span
                                                            class="profile-active
                                                            position-absolute
                                                            badge
                                                            rounded-circle
                                                            bg-success"><span
                                                                class="visually-hidden">active</span></span> -->
                                                    </div>
                                                    <div class="ms-3">
                                                        <a
                                                            href="/candidate-details/{{$user->user->id}}"
                                                            class="primary-link">
                                                            <h5
                                                                class="fs-17">{{$user->user->name}}</h5>
                                                        </a>

                                                    </div>
                                                </div>

                                                <div class="border rounded
                                                    mb-4">

                                                    <!--end row-->
                                                </div>
                                                <p class="text-muted">{{$user->about_me}}</p>
                                                <div class="mt-3">

                                                    <a
                                                        href="/candidate-details/{{$user->user->id}}"
                                                        class="btn
                                                        btn-soft-primary
                                                        btn-hover w-100
                                                        mt-2"><i class="uil
                                                            uil-eye"></i>
                                                        View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                    </div>
                                    @endif
                                    @if($loop->index % 3 ===2)
                                    <!--end col-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="candidate-grid-box card
                                            mt-4">
                                            <div class="card-body p-4">
                                                <div class="featured-label">

                                                </div>
                                                <div class="d-flex mb-4">
                                                    <div
                                                        class="flex-shrink-0
                                                        position-relative">
                                                        <img
                                                            src="{{asset("storage/".$user->avatar)}}"
                                                            alt=""
                                                            class="avatar-md
                                                            rounded">

                                                    </div>
                                                    <div class="ms-3">
                                                        <a
                                                            href="/candidate-details/{{$user->user->id}}"
                                                            class="primary-link">
                                                            <h5
                                                                class="fs-17">{{$user->user->name}}</h5>
                                                        </a>

                                                    </div>
                                                </div>

                                                <div class="border rounded
                                                    mb-4">

                                                    <!--end row-->
                                                </div>
                                                <p class="text-muted">{{$user->about_me}}</p>
                                                <div class="mt-3">
                                                    <a
                                                        href="/candidate-details/{{$user->user->id}}"
                                                        class="btn
                                                        btn-soft-primary
                                                        btn-hover w-100
                                                        mt-2"><i class="uil
                                                            uil-eye"></i>
                                                        View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    @endif
                                    <!--end row-->
                                    @empty
                                        <div class="">
                                            <h1
                                                class="text-center">No Appliers Yet.</h1>
                                        </div>

                                @endforelse
                                    <!--end col-->
                                </div>

                            </div>
                            <!--end candidate-list-->



                        </div>

                        <!--end container-->
                    </section>
                    <div class="col-lg-8 offset-md-4  mb-4">
                        {{$users->links()}}
                    </div>
                    <!-- END CANDIDATE-GRID -->

                    <!-- START HIRE-NOW MODAL -->

                    <!-- END HIRE-NOW MODAL -->

                </div>
                <!-- End Page-content -->


                <!-- START FOOTER -->
                @include('downbar')
                <!-- END FOOTER -->

                <!-- Style switcher -->

                <!-- end switcher-->

                <!--start back-to-top-->

                <!--end back-to-top-->
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
        <!-- Candidate Init Js -->
        <script src={{asset("./assets/js/pages/candidate.init.js")}}></script>

        <!-- Job-list Init Js -->
        <script src={{asset("./assets/js/pages/job-list.init.js")}}></script>

        <!-- Switcher Js -->
        <script src={{asset("./assets/js/pages/switcher.init.js")}}></script>
        <!-- App Js -->
        <script src={{asset("./assets/js/app.js")}}></script>

    </body>

</html>
