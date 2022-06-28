<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>My Profile</title>
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
                                        <h3 class="mb-4">My Profile</h3>
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

                    <!-- START PROFILE -->
                    <section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card profile-sidebar me-lg-4">
                                        <div class="card-body p-4">
                                            <div class="text-center pb-4
                                                border-bottom">
                                                <img
                                                    src="{{asset("storage/".$info->avatar)}}"
                                                    alt="" class="avatar-lg
                                                    img-thumbnail rounded-circle
                                                    mb-4" />
                                                <h5 class="mb-0">{{$user->name}}</h5>
                                                <!-- <p class="text-muted">Developer</p> -->

                                            </div>
                                            <!--end profile-->

                                            <div
                                                class="candidate-profile-overview
                                                card-body border-top p-4">

                                                <ul class="list-unstyled mb-0">

                                                    <li>
                                                        <div class="d-flex">
                                                            <label
                                                                class="text-dark">Phone
                                                                Number</label>
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0 ms-1">{{$info->telephone}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <label
                                                                class="text-dark">Location</label>
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">{{$info->location}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <label
                                                                class="text-dark">Website</label>
                                                            <div>
                                                                <p  type="url"
                                                                    class="text-muted
                                                                    text-break
                                                                    mb-0">{{$info->website}}</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                                <div class="mt-3">

                                                </div>
                                            </div>
                                            <!--end contact-details-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end profile-sidebar-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-8">
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
                                                    data-bs-target="#overview"
                                                    type="button" role="tab"
                                                    aria-controls="overview"
                                                    aria-selected="true">
                                                    Overview
                                                </button>
                                            </li>
                                            <li class="nav-item"
                                                role="presentation">
                                                <button class="nav-link"
                                                    id="settings-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#settings"
                                                    type="button" role="tab"
                                                    aria-controls="settings"
                                                    aria-selected="false">
                                                    Settings
                                                </button>
                                            </li>
                                            <li class="nav-item"
                                                role="presentation">
                                                <button class="nav-link"
                                                        id="settings-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#cv"
                                                        type="button" role="tab"
                                                        aria-controls="settings"
                                                        aria-selected="false">
                                                    Your Info
                                                </button>
                                            </li>
                                            <li class="nav-item"
                                                role="presentation">
                                                <button class="nav-link"
                                                    id="settings-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#job"
                                                    type="button" role="tab"
                                                    aria-controls="settings"
                                                    aria-selected="false">
                                                    Post a job
                                                </button>
                                            </li>
                                            <li class="nav-item"
                                                role="presentation">
                                                <button class="nav-link"
                                                        id="settings-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#alljob"
                                                        type="button" role="tab"
                                                        aria-controls="settings"
                                                        aria-selected="false">
                                                    All the jobs
                                                </button>
                                            </li>


                                        </ul>
                                        <!--end profile-content-nav-->
                                        <div class="card-body p-4">
                                            <div class="tab-content"
                                                id="pills-tabContent">
                                                <div class="tab-pane fade show
                                                    active" id="overview"
                                                    role="tabpanel"
                                                    aria-labelledby="overview-tab">
                                                    <div>
                                                        <h5 class="fs-18
                                                            fw-bold">About</h5>
                                                        <p class="text-muted
                                                            mt-4">
                                                            {{$info->about_us}}
                                                        </p>

                                                    </div>



                                                </div>
                                                <div class="tab-pane fade"
                                                    id="settings"
                                                    role="tabpanel"
                                                    aria-labelledby="settings-tab">
                                                    <form method="POST" action="/change-password">
                                                        @csrf
                                                        @method('PUT')


                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold mb-3
                                                                mb-3">
                                                                Change Password
                                                            </h5>
                                                            <div class="row">
                                                                <div
                                                                    class="col-lg-12">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="current_password"
                                                                            class="form-label">Current
                                                                            password</label>
                                                                        <input
                                                                            type="password"
                                                                            class="form-control"
                                                                            placeholder="Enter&nbsp;Current&nbsp;password"
                                                                            id="current_password"
                                                                        />
                                                                        @if(session('password'))
                                                                            <span>

                                                                                    {{session('password')}}

                                                                                </span>

                                                                        @endif

                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div
                                                                    class="col-lg-6">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="password"
                                                                            class="form-label">New
                                                                            password</label>
                                                                        <input
                                                                            type="password"
                                                                            class="form-control"
                                                                            placeholder="Enter&nbsp;new&nbsp;password"
                                                                            id="password"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div
                                                                    class="col-lg-6">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="password_confirmation"
                                                                            class="form-label">Confirm
                                                                            Password</label>
                                                                        <input
                                                                            type="password"
                                                                            class="form-control"
                                                                            placeholder="Confirm&nbsp;Password"
                                                                            id="password_confirmation"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end Change-password-->
                                                        <div class="mt-4
                                                            text-end">
                                                            <button
                                                                type="submit"
                                                                class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                    <!--end form-->
                                                </div>

                                                <!--end tab-pane-->
                                                <!-- begin tab account -->
                                                <div class="tab-pane fade"
                                                     id="cv"
                                                     role="tabpanel"
                                                     aria-labelledby="settings-tab">
                                                    <div>
                                                        <form method="post" action="/update" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div>
                                                                <h5 class="fs-17
                                                                fw-semibold mb-3
                                                                mb-0">My Account</h5>
                                                                <div
                                                                    class="text-center">
                                                                    <div class="mb-4
                                                                    profile-user">
                                                                        <img
                                                                            src="{{asset("storage/".$info->avatar)}}"
                                                                            class="rounded-circle
                                                                        img-thumbnail
                                                                        profile-img"
                                                                            id="profile-img"
                                                                            alt="">
                                                                        <div
                                                                            class="p-0
                                                                        rounded-circle
                                                                        profile-photo-edit">
                                                                            <input
                                                                                id="profile-img-file-input"
                                                                                name="avatar"
                                                                                type="file"
                                                                                class="profile-img-file-input"
                                                                                onchange="loadFile(event)">
                                                                            <label
                                                                                for="profile-img-file-input"
                                                                                class="profile-photo-edit
                                                                            avatar-xs">
                                                                                <i
                                                                                    class="uil
                                                                                uil-edit"></i>
                                                                            </label>
                                                                            <script>
                                                                                var loadFile = function(event) {
                                                                                    var image = document.getElementById('profile-img');
                                                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                                                };
                                                                            </script>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="col-lg-12">
                                                                        <div
                                                                            class="mb-3">
                                                                            <label
                                                                                for="about_us"
                                                                                class="form-label">About Your Company
                                                                            </label>
                                                                            <textarea
                                                                                class="form-control"
                                                                                id="about_us"
                                                                                name="about_us"
                                                                                style="resize:
                                                                            none;"
                                                                                required
                                                                                rows="5">{{$info->about_us}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-6">
                                                                        <div
                                                                            class="mb-3">
                                                                            <label
                                                                                for="website"
                                                                                class="form-label">Website
                                                                            </label>
                                                                            <input
                                                                                type="url"
                                                                                class="form-control"
                                                                                id="website"
                                                                                name="website"
                                                                                required
                                                                                value="{{$info->website}}"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-6">
                                                                        <div
                                                                            class="mb-3">
                                                                            <label
                                                                                for="location"
                                                                                class="form-label">Location
                                                                            </label>
                                                                            <input
                                                                                type="text"
                                                                                class="form-control"
                                                                                id="location"
                                                                                name="location"
                                                                                required
                                                                                value="{{$info->location}}"

                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-6">
                                                                        <div
                                                                            class="mb-3">
                                                                            <label
                                                                                for="telephone"
                                                                                class="form-label">Telephone

                                                                            </label>
                                                                            <input
                                                                                type="tel"
                                                                                class="form-control"
                                                                                id="telephone"
                                                                                name="telephone"
                                                                                required
                                                                                value="{{$info->telephone}}"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end account-->
                                                            <div class="mt-4
                                                            text-end">
                                                                <button class="btn btn-primary" type="submit">
                                                                    Save
                                                                </button>
                                                            </div>
                                                            <div>
                                                            @if($errors->any())
                                                                @foreach($errors->all() as $error)

                                                                    <p>
                                                                        <small style="color: red">

                                                                            {{$error}}

                                                                        </small>

                                                                    </p>
                                                                @endforeach
                                                            @endif
                                                            </div>
                                                        </form>

                                                    </div>



                                                </div>
                                                <div class="tab-pane fade"
                                                    id="job"
                                                    role="tabpanel"
                                                    aria-labelledby="settings-tab">
                                                    <form method="POST" action="/post-job">

                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">Job
                                                                Information</h5>
                                                            <div class="row">
                                                                <div
                                                                    class="col-lg-6">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="JobTitle"
                                                                            class="form-label">Job
                                                                            Title</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            id="JobTitle"
                                                                            name="jobtitle"
                                                                            required
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
                                                                            class="form-label">Offered
                                                                            Salary
                                                                        </label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            id="JobC"
                                                                            name="salary"
                                                                            required
                                                                            />
                                                                    </div>
                                                                </div>


                                                                <div
                                                                    class="col-lg-12">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="Description"
                                                                            class="form-label">Description</label>
                                                                        <textarea
                                                                            class="form-control"
                                                                            id="Description"
                                                                            style="resize:
                                                                            none;"
                                                                            name="description"
                                                                            required
                                                                            rows="5"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-12">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="requirement"
                                                                            class="form-label">Requirement</label>
                                                                        <textarea
                                                                            class="form-control"
                                                                            id="requirement"
                                                                            name="requirement"
                                                                            required
                                                                            style="resize:
                                                                            none;"
                                                                            rows="5"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-12">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="expirence"
                                                                            class="form-label">Experience</label>
                                                                        <textarea
                                                                            class="form-control"
                                                                            id="expirence"
                                                                            name="expirence"
                                                                            required
                                                                            style="resize:
                                                                            none;"
                                                                            rows="5"></textarea>
                                                                    </div>
                                                                </div>


                                                                <!--end col-->
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>


                                                        <div class="mt-4
                                                            text-end">
                                                            <button class="btn btn-primary" type="submit">Save</button>

                                                        </div>
                                                        @if($errors->any())
                                                            @foreach($errors->all() as $error)

                                                                <p>
                                                                    <small style="color: red">

                                                                        {{$error}}

                                                                    </small>

                                                                </p>
                                                            @endforeach
                                                        @endif
                                                    </form>
                                                    <!--end form-->
                                                </div>
                                                <div class="tab-pane fade"
                                                      id="alljob"
                                                      role="tabpanel"
                                                      aria-labelledby="settings-tab">
                                                    <div>
                                                        @forelse($jobs as $job)

                                                        <li class="fs-18
                                                            fw-bold mb-3 m-lg-5">
                                                            <a
                                                        href="/myjob-details/{{$job->id}}"
                                                            >{{$job->jobtitle}}</a>
                                                        </li>
                                                        @empty
                                                        <h5 class="fs-18
                                                            fw-bold m-lg-5">You haven't post a job yet</h5>

                                                        @endforelse

                                                    </div>



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
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END PROFILE -->

                </div>
                <!-- End Page-content -->



                <!-- START FOOTER -->
                @include("downbar")
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
        <!-- Job-list Init Js -->
        <script src={{asset("./assets/js/pages/job-list.init.js")}}></script>

        <!-- Switcher Js -->
        <script src={{asset("./assets/js/pages/switcher.init.js")}}></script>

        <!-- App Js -->
        <script src={{asset("public/assets/js/app.js")}}></script>
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    </body>

</html>
