<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8"/>
    <title>Job Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta content="Themesdesign" name="author"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href={{asset("./assets/images/favicon.ico")}}>

    <!-- Bootstrap Css -->
    <link href={{asset("./assets/css/bootstrap.min.css")}} id="bootstrap-style"
          rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href={{asset("./assets/css/icons.min.css")}} rel="stylesheet" type="text/css"
    />
    <!-- App Css-->
    <link href={{asset("./assets/css/app.min.css")}} id="app-style" rel="stylesheet"
          type="text/css"/>
    <!--Custom Css-->
    <link href={{asset("./custom.css")}} rel="stylesheet"/>
    <link rel="stylesheet"
          href={{asset("https://unicons.iconscout.com/release/v4.0.0/css/line.css")}} />
</head>

<body>
<!--start page Loader -->

<!--end page Loader -->

<!-- Begin page -->
<div>


    <!--Navbar Start-->

    <!--end navbar-nav-->

    <!--end navabar-collapse-->
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
            <section class="section ">
                <div class="container  ">
                    <div class="row ">
                        <div class="col-lg-8 offset-md-2">
                            <div class="card job-detail
                                        overflow-hidden">
                                <div>
                                    <img
                                        src="{{asset("./assets/images/job-detail.jpg")}}"
                                        class="img-custom" alt="">
                                </div>
                                <form method="post" action="/update-job/{{$job->id}}">
                                    @method('put')
                                    @csrf

                                    <div class="mt-4 p-5">
{{--                                        <h5 class="fs-17--}}
{{--                                            fw-semibold mb-3">Job--}}
{{--                                            Information</h5>--}}
                                        <div class="row">
                                            <div
                                                class="col-lg-6">
                                                <div
                                                    class="mb-3">
                                                    <label
                                                        for="JobTitle"
                                                        class="form-label fw-semibold">Job
                                                        Title</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="JobTitle"
                                                        name="jobtitle"
                                                        required
                                                        value="{{$job->jobtitle}}"
                                                    />
                                                </div>
                                            </div>
                                            <!--end col-->


                                            <div
                                                class="col-lg-6">
                                                <div
                                                    class="mb-3">
                                                    <label
                                                        for="JobC"
                                                        class="form-label fw-semibold">Offered
                                                        Salary
                                                    </label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="JobC"
                                                        name="salary"
                                                        required
                                                        value="{{$job->salary}}"
                                                    />
                                                </div>
                                            </div>


                                            <div
                                                class="col-lg-12">
                                                <div
                                                    class="mb-3">
                                                    <label
                                                        for="Description"
                                                        class="form-label fw-semibold">Description</label>
                                                    <textarea
                                                        class="form-control"
                                                        id="Description"
                                                        style="resize:
                                                                            none;"
                                                        name="description"
                                                        required
                                                        rows="5">{{$job->description}}</textarea>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12">
                                                <div
                                                    class="mb-3">
                                                    <label
                                                        for="requirement"
                                                        class="form-label fw-semibold">Requirement</label>
                                                    <textarea
                                                        class="form-control"
                                                        id="requirement"
                                                        name="requirement"
                                                        required
                                                        style="resize:
                                                                            none;"
                                                        rows="5">{{$job->requirement}}</textarea>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12">
                                                <div
                                                    class="mb-3">
                                                    <label
                                                        for="expirence"
                                                        class="form-label fw-semibold">Experience</label>
                                                    <textarea
                                                        class="form-control"
                                                        id="expirence"
                                                        name="expirence"
                                                        required
                                                        style="resize:
                                                                            none;"
                                                        rows="5">{{$job->expirence}}</textarea>
                                                </div>
                                            </div>


                                            <!--end col-->
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)

                                            <p>
                                                <small style="color: lightcoral">

                                                    {{$error}}

                                                </small>

                                            </p>
                                    @endforeach
                                @endif

                                <!-- <div class="mt-4"> -->

{{--                                    <div class="col-lg-4 mt-4 mt-lg-0">--}}
                                        <!--start side-bar-->
{{--                                        <div class="side-bar ms-lg-4">--}}


                                            <div class="row">
                                               <div class="col-lg-8 offset-md-4  ">
                                                   <button
                                                       class="btn   mb-md-2
                                                        btn-primary
                                                        btn-hover w-50
                                                        rounded">
                                                       Save
                                                   </button>
                                               </div>
                                            </div>


{{--                                        </div>--}}
{{--                                        <!--end side-bar-->--}}
                                        <!-- </div> -->
                                        <!--end col-->
{{--                                    </div>--}}
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end container-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- START JOB-DEATILS -->

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
<<script
    src={{asset("./assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script
    src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
<!-- Switcher Js -->
<script src={{asset("./assets/js/pages/switcher.init.js")}}></script>

<!-- App Js -->
<script src={{asset("public/assets/js/app.js")}}></script>

</body>

</html>
