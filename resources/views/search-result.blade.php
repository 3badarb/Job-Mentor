<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Search | Jobcy</title>
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
                    <section class="bg-home2" id="home">
                        <div class="container mb-0">
                            <div class="row align-items-center mb-0 pb-0">
                                <div class="col-lg-7 mb-0 pb-0">
                                    <div class="mb-4 pb-3 me-lg-5">
                                        <h6 class="text-primary">We have {{\App\Models\job::all()->count()}}
                                            live jobs</h6>
                                        <h1 class="display-5 fw-semibold mb-3">Find
                                            your dream jobs with <span
                                                class="text-primary fw-bold">Jobcy</span></h1>
                                        <p class="lead text-muted mb-0">Find
                                            jobs, create trackable resumes and
                                            enrich your applications.Carefully
                                            crafted after analyzing the needs of
                                            different industries.</p>
                                    </div>
                                    <form method="get" action="/search-job">
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
                                                               name="search"
                                                               class="form-control
                                                                             filter-input-box"
                                                               placeholder="Job,a Description..">
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
                                    <div class="mt-5 mt-md-0 mb-0">
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

                    <!-- START JOB-LIST -->
                    <section class="section mt-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="me-lg-5">


                                        <div class="wedget-popular-title mt-0">
                                            <h4>What you searched for :</h4>
                                        </div>
                                        <!--end wedget-popular-title-->
                                        <!-- Job-list -->
                                        <div class="row ">
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
                                                                                <li
                                                                                    class="list-inline-item ">
                                                                                    <p
                                                                                        class="text-muted
                                                                    fs-14
                                                                    mb-0"><i
                                                                                            class="uil
                                                                        uil-map-marker"></i>
                                                                                        {{$job->myuser->companyinfo->location}}</p>
                                                                                </li>
                                                                                <li class="list-inline-item ">
                                                                                    <div class="d-flex
                                                                            mb-0">

                                                                                        <i
                                                                                            class="uil
                                                                        uil-clock-three
                                                                        text-primary
                                                                        me-1"></i>

                                                                                        <p
                                                                                            class="text-muted
                                                                    mb-0"> {{$job->created_at->diffForHumans()}}</p>
                                                                                    </div>
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
                                                                    <div class="col-md-4">
                                                                        <div
                                                                            class="text-md-end">
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
                                                        <div class="job-box bookmark-post card     mt-4  ">
                                                            <div class="p-4">
                                                                <div class="row">
                                                                    <div class="col-lg-2">
                                                                        <a
                                                                            href="/company-details/{{$job->myuser->id}}"><img
                                                                                src="{{asset("/storage/".$job->myuser->companyinfo->avatar)}}"
                                                                                alt=""
                                                                                class="img-fluid
                                                            rounded-0"></a>
                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <div class="mt-3 mt-lg-0">
                                                                            <h5 class="fs-17 mb-1"><a
                                                                                    href="/job-details/{{$job->id}}"
                                                                                    class="text-dark">{{$job->jobtitle}}</a>
                                                                            </h5>
                                                                            <ul
                                                                                class="list-inline  mb-0 ">
                                                                                <li
                                                                                    class="list-inline-item">
                                                                                    <p
                                                                                        class="text-muted
                                                                    fs-14
                                                                    mb-0">{{$job->myuser->name}}</p>
                                                                                </li>
                                                                                <li
                                                                                    class="list-inline-item ">
                                                                                    <p
                                                                                        class="text-muted
                                                                    fs-14
                                                                    mb-0"><i
                                                                                            class="uil
                                                                        uil-map-marker"></i>
                                                                                        {{$job->myuser->companyinfo->location}}</p>
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
                                                                            class="text-muted  mb-0">
                                                                            {{$job->created_at->diffForHumans()}}</p>
                                                                                    </div>
                                                                                </li>

                                                                                <li
                                                                                    class="">
                                                                                    <p
                                                                                        class="text-muted fs-14 mb-0"><i
                                                                                            class="uil uil-wallet"></i>
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
                                                                <div class="row justify-content-between">
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
                                                                    <div class="col-md-4">
                                                                        <div
                                                                            class="text-md-end">
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
                                                <h5
                                                    class="text-center">No Jobs Yet.</h5>

                                            @endforelse
                                        </div>

                                    </div>
                                </div>
                                <!--end col-->



                            </div>
                            <!--end row-->
                        </div>

                        <!--end container-->
                    </section>
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
