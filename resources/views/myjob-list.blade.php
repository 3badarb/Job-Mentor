<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Job List </title>
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

            <!-- START TOP-BAR -->

            <!-- END TOP-BAR -->

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
                                        <h3 class="mb-4">All Jobs</h3>

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


                    <!-- START JOB-LIST -->

                    <section class="section">


                        <div class="container">

                            <div class="row">
                                @forelse($jobs as $job)
                                @if($loop->index%2===0)
                                <div class="col-lg-6 ">
                                    <div class="job-box bookmark-post card
                                        mt-4  ">
                                        <div class="p-4">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <a
                                                        href="/company-details/{{$job->myuser->id}}"><img
                                                            src="{{asset("storage/".$job->myuser->companyinfo->avatar)}}"
                                                            alt=""
                                                            class="img-fluid
                                                            rounded-0"></a>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="mt-3
                                                        mt-lg-0">
                                                        <h5 class="fs-17
                                                            mb-1"><a
                                                                href="/job-details/{{$job->id}}"
                                                                class="text-dark">{{$job->jobtitle}}</a>
                                                        </h5>
                                                        <ul
                                                            class="list-inline
                                                            mb-0 ">
                                                            <li
                                                                class="list-inline-item">
                                                                <p
                                                                    class="text-muted
                                                                    fs-14
                                                                    mb-0">{{$job->myuser->name}}</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="d-flex
                                                                            mb-0">

                                                                    <i
                                                                        class="uil
                                                                        uil-clock-three
                                                                        text-primary
                                                                        me-1"></i>

                                                                    <p
                                                                        class="text-muted
                                                                    mb-0"> {{\Carbon\Carbon::parse($job->getOriginal()['pivot_created_at'])->diffForHumans()}} you have applied</p>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="">
                                                                <p
                                                                    class="text-muted
                                                                    fs-14
                                                                    mb-0"><i
                                                                        class="uil
                                                                        uil-map-marker"></i>
                                                                    {{$job->myuser->companyinfo->location}}</p>
                                                            </li>
                                                            <li
                                                                class="">
                                                                <p
                                                                    class="text-muted
                                                                    fs-14
                                                                    mb-0"><i
                                                                        class="uil
                                                                        uil-wallet"></i>
                                                                    {{$job->salary}}</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                            <!-- <div class="favorite-icon">
                                                <a
                                                    href="javascript:void(0)"><i
                                                        class="uil
                                                        uil-heart-alt
                                                        fs-18"></i></a>
                                            </div> -->
                                        </div>
                                        <div class="p-3 bg-light">
                                            <div class="row
                                                justify-content-between">
                                                <div class="col-md-8">

                                                    <!-- <div>
                                                        <ul
                                                            class="list-inline
                                                            mb-0">
                                                            <li
                                                                class="list-inline-item"><i
                                                                    class="uil
                                                                    uil-tag"></i>
                                                                Keywords :</li>
                                                            <li
                                                                class="list-inline-item"><a
                                                                    href="javascript:void(0)"
                                                                    class="primary-link
                                                                    text-muted">Ui
                                                                    designer</a>,</li>
                                                            <li
                                                                class="list-inline-item"><a
                                                                    href="javascript:void(0)"
                                                                    class="primary-link
                                                                    text-muted">developer</a></li>
                                                        </ul>
                                                    </div> -->
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="px-3">
                                                    <div class="col-md-4">
                                                        <div>
                                                            <form method="post" action="/delete-apply/{{$job->id}}" class="primary-link">
                                                                @method('delete')
                                                                <button
                                                                    class="btn-1">Delete<i
                                                                        class="uil
                                                                uil-angle-double-right"></i></button></form>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-inline text-md-center  ">
                                                        <a href="/job-details/{{$job->id}}"
                                                            class="primary-link">Explore<i
                                                                class="uil
                                                                uil-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    <!--end job-box-->

                                </div>
                                <!--end col-->
                                @endif
                                @if($loop->index % 2 === 1)
                                        <div class="col-lg-6 ">
                                            <div class="job-box bookmark-post card
                                        mt-4  ">
                                                <div class="p-4">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <a
                                                                href="/company-details/{{$job->myuser->id}}"><img
                                                                    src="{{asset("storage/".$job->myuser->companyinfo->avatar)}}"
                                                                    alt=""
                                                                    class="img-fluid
                                                            rounded-0"></a>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <div class="mt-3
                                                        mt-lg-0">
                                                                <h5 class="fs-17
                                                            mb-1"><a
                                                                        href="/job-details/{{$job->id}}"
                                                                        class="text-dark">{{$job->jobtitle}}</a>
                                                                </h5>
                                                                <ul
                                                                    class="list-inline
                                                            mb-0 ">
                                                                    <li
                                                                        class="list-inline-item">
                                                                        <p
                                                                            class="text-muted
                                                                    fs-14
                                                                    mb-0">{{$job->myuser->name}}</p>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <div class="d-flex
                                                                            mb-0">

                                                                            <i
                                                                                class="uil
                                                                        uil-clock-three
                                                                        text-primary
                                                                        me-1"></i>

                                                                            <p
                                                                                class="text-muted
                                                                    mb-0"> {{\Carbon\Carbon::parse($job->getOriginal('pivot_created_at'))->diffForHumans()}} you have applied</p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="">
                                                                        <p
                                                                            class="text-muted
                                                                    fs-14
                                                                    mb-0"><i
                                                                                class="uil
                                                                        uil-map-marker"></i>
                                                                            {{$job->myuser->companyinfo->location}}</p>
                                                                    </li>
                                                                    <li
                                                                        class="">
                                                                        <p
                                                                            class="text-muted
                                                                    fs-14
                                                                    mb-0"><i
                                                                                class="uil
                                                                        uil-wallet"></i>
                                                                            {{$job->salary}}</p>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                    <!-- <div class="favorite-icon">
                                                        <a
                                                            href="javascript:void(0)"><i
                                                                class="uil
                                                                uil-heart-alt
                                                                fs-18"></i></a>
                                                    </div> -->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                justify-content-between">
                                                        <div class="col-md-8">

                                                            <!-- <div>
                                                                <ul
                                                                    class="list-inline
                                                                    mb-0">
                                                                    <li
                                                                        class="list-inline-item"><i
                                                                            class="uil
                                                                            uil-tag"></i>
                                                                        Keywords :</li>
                                                                    <li
                                                                        class="list-inline-item"><a
                                                                            href="javascript:void(0)"
                                                                            class="primary-link
                                                                            text-muted">Ui
                                                                            designer</a>,</li>
                                                                    <li
                                                                        class="list-inline-item"><a
                                                                            href="javascript:void(0)"
                                                                            class="primary-link
                                                                            text-muted">developer</a></li>
                                                                </ul>
                                                            </div> -->
                                                        </div>
                                                        <!--end col-->
                                                        <!--end col-->
                                                        <div class="px-3">
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <form method="post" action="/delete-apply/{{$job->id}}" class="primary-link">
                                                                        @method('delete')
                                                                        <button
                                                                            class="btn-1">Delete<i
                                                                                class="uil
                                                                uil-angle-double-right"></i></button></form>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="d-inline text-md-center  ">
                                                                <a href="/job-details/{{$job->id}}"
                                                                   class="primary-link">Explore<i
                                                                        class="uil
                                                                uil-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                        </div>
                                @endif
                                @empty
                                    <h1
                                        class="text-center">No Jobs Yet.</h1>

                                @endforelse
                            </div>

                        </div>



                    </section>
                    <div class="col-lg-8 offset-md-4  mb-4">
                        {{$jobs->links()}}
                    </div>

                    <!-- END JOB-LIST -->

                    <!-- START APPLY MODAL -->

                    <!-- END APPLY MODAL -->

                </div>
                <!-- End Page-content -->

                <!-- START SUBSCRIBE -->

                <!-- END SUBSCRIBE -->

                <!-- START FOOTER -->
               @include('downbar')
                <!-- END FOOTER -->

                <!-- START FOOTER-ALT -->

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
