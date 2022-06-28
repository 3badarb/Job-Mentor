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
        <script
            src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <!--Custom Css-->
        <link href={{asset("./custom.css")}} rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href={{asset("./assets/css/star-rating-svg.css")}}>
        <script src={{asset("./assets/js/jquery.star-rating-svg.js")}}></script>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                <?php if(Auth::check()){

                    $info=auth()->user()->userinfo;
                      $user=auth()->user();

                }
                else
                    abort(404,"you are not logged in");

                ?>

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
                                                class="avatar-lgg   mb-4 img-thumbnail rounded-circle "
                                                    src="{{asset("storage/".$info->avatar)}}"
                                                     />

                                                <h5 class="mb-0">{{$user->name}}</h5>
                                                 <!--<p class="text-muted">Developer</p>-->

                                            </div>
                                            <!--end profile-->

                                            <div class="mt-4">
                                                <h5 class="fs-17 fw-bold mb-3">Contacts</h5>
                                                <div class="profile-contact">
                                                    <ul class="list-unstyled
                                                        mb-0">
                                                        <li>
                                                            <div class="d-flex">
                                                                <label>Email</label>
                                                                <div>
                                                                    <p
                                                                        class="text-muted
                                                                        text-break
                                                                        mb-0">
                                                                        {{$user->email}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex">
                                                                <label>Phone
                                                                    Number</label>
                                                                <div>
                                                                    <p
                                                                        class="text-muted
                                                                        mb-0">{{$info->phone}}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex">
                                                                <label>Resident</label>
                                                                <div>
                                                                    <p
                                                                        class="text-muted
                                                                        mb-0">{{$info->resident}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex">
                                                                <label>From</label>
                                                                <div>
                                                                    <p
                                                                        class="text-muted
                                                                        mb-0">{{$info->from}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end contact-details-->
                                        </div>
                                        <div class="card-body p-4">
                                            <div>
                                                <form method="get" action="/show-my-jobs/{{$user->id}}">
                                                    @csrf

                                                    <button
                                                        class="btn
                                                        btn-primary
                                                        btn-hover w-100
                                                        rounded"><i class="iconify mb-2" data-icon="mdi:gesture-tap" data-width="24"></i>
                                                        Jobs that you apply</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                        <div class="card-body p-4">
                                            <div>
                                                <form method="get" action="/show-matching-jobs">
                                                    @csrf

                                                    <button
                                                        class="btn
                                                        btn-primary
                                                        btn-hover w-100
                                                        rounded"><i class="iconify mb-1 mx-sm-1" data-icon="icon-park-outline:good-two" data-width="24"></i>
                                                        Jobs mtach you</button>
                                                </form>
                                            </div>
                                        </div>

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
                                                    Your CV
                                                </button>
                                            </li>
                                            <li class="nav-item"
                                                role="presentation">
                                                <button class="nav-link"
                                                    id="settings-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#rating"
                                                    type="button" role="tab"
                                                    aria-controls="settings"
                                                    aria-selected="false">
                                                    Rating CV
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

                                                    <div
                                                        class="candidate-education-details
                                                        mt-4">
                                                        <h6 class="fs-18 fw-bold
                                                            mb-0">Education</h6>
                                                        <p class="mb-2 mt-4 m-lg-4
                                                        text-muted">{{$info->education}}</p>
                                                    </div>
                                                    <div
                                                        class="candidate-education-details
                                                        mt-4">
                                                        <h6 class="fs-18 fw-bold
                                                            mb-0">Experiences</h6>
                                                        <p class="mb-2 mt-4 m-lg-4
                                                        text-muted">
                                                            {{$info->expirence}}
                                                        </p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <h5 class="fs-18
                                                            fw-bold">Skills</h5>
                                                        <p class="mb-2 mt-4 m-lg-4
                                                        text-muted">
                                                            {{$info->skills}}   </p>                                                     </p>


                                                    </div>
                                                </div>
                                                <div class="tab-pane fade"
                                                    id="settings"
                                                    role="tabpanel"
                                                    aria-labelledby="settings-tab">
                                                    <form method="POST" action="/change-password">
                                                        @csrf
                                                        @method('PUT')

                                                        <!--end account-->

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
                                                <div class="tab-pane fade"
                                                    id="cv"
                                                    role="tabpanel"
                                                    aria-labelledby="settings-tab">
                                                    <form method="post" action="/update" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div>
                                                            <h5 class="fs-17
                                                                fw-semibold mb-3
                                                                mb-0">My Account</h5>
                                                            @if($errors->any())
                                                                @foreach($errors->all() as $error)

                                                                    <p>
                                                                        <small style="color: red">

                                                                            {{$error}}

                                                                        </small>

                                                                    </p>
                                                                @endforeach
                                                            @endif
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
                                                                            onchange="loadFile(event)"
                                                                        >
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

                                                            <!--end row-->
                                                        </div>
                                                        <div class="mt-2">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">Profile</h5>
                                                            <div class="row">

                                                                <!--end col-->
                                                                <div
                                                                    class="col-lg-6">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="birth"
                                                                            class="form-label">Birth Date</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            name="birth"
                                                                            id="birth"
                                                                            placeholder="Like 1998-01-01"
                                                                            required
                                                                            value="{{$info->birth}}"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div
                                                                    class="col-lg-6">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="resident"
                                                                            class="form-label">Resident Place</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            name="resident"
                                                                            id="resident"
                                                                            required
                                                                            value="{{$info->resident}}"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-6">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="from"
                                                                            class="form-label">From</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            name="from"
                                                                            id="from"
                                                                            required
                                                                            value="{{$info->from}}"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-6">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="phone"
                                                                            class="form-label">Phone Number</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            name="phone"
                                                                            id="phone"
                                                                            required
                                                                            value="{{$info->phone}}"
                                                                        />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">EDUCATION</h5>
                                                            <div
                                                                class="col-lg-12">
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="education"
                                                                        class="form-label">Add your Education</label>
                                                                    <textarea
                                                                        class="form-control"
                                                                        id="education"
                                                                        style="resize:
                                                                            none;"
                                                                        required
                                                                        name="education"

                                                                        rows="10">{{$info->education}}</textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->

                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">Experiences</h5>
                                                            <!-- <div class="row">
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
                                                                             />
                                                                     </div>
                                                                 </div>
                                                                 -->
                                                            <!--end col-->


                                                            <div
                                                                class="col-lg-12">
                                                                <div
                                                                    class="mb-3">
                                                                    <label
                                                                        for="expirence"
                                                                        class="form-label">Add your experience</label>
                                                                    <textarea
                                                                        class="form-control"
                                                                        id="expirence"
                                                                        name="expirence"
                                                                        required
                                                                        style="resize:
                                                                            none;"

                                                                        rows="5">{{$info->expirence}}</textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->

                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">Skills</h5>
                                                            <div class="row">
                                                                <div
                                                                    class="col-lg-12">
                                                                    <div
                                                                        class="mb-3">
                                                                        <label
                                                                            for="skills"
                                                                            class="form-label">Add
                                                                            your
                                                                            skills</label>
                                                                        <textarea
                                                                            class="form-control"
                                                                            id="skills"
                                                                            name="skills"
                                                                            required
                                                                            style="resize:
                                                                            none;"
                                                                            rows="5">{{$info->skills}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>

                                                        <!--end profile-->

                                                        <div class="mt-4
                                                            text-end">
                                                            <button class="btn btn-primary" type="submit">Update</button>

                                                        </div>

                                                    </form>
                                                    <form method="post" action="/update-jobtitle">
                                                        @method('put')
                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">Job Title</h5>
                                                        </div>
                                                        <div
                                                            class="col-lg-6">
                                                            <div
                                                                class="mb-3">
                                                                <label
                                                                    for="jobtilte"
                                                                    class="form-label">Change your job title</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    id="jobtilte"
                                                                    name="jobtitle"
                                                                    value="{{$info->jobtitle}}"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="mt-4
                                                            text-end">
                                                            <button class="btn btn-primary" type="submit">Update</button>

                                                        </div>
                                                                        </form>
                                                         <form method="post" action="/updatemodel2">
                                                        @method('put')
                                                        <div class="mt-4">
                                                            <h5 class="fs-17
                                                                fw-semibold
                                                                mb-3">if you want change the years of your experience</h5>
                                                        </div>
                                                        <div
                                                            class="col-lg-6">
                                                            <div
                                                                class="mb-3">
                                                                <label
                                                                    for="jobtilte"
                                                                    class="form-label"></label>
                                                                <label for="yoe">Years of experience</label>
                                                        <br>

                                                        <select class="form-select form-select-sm" name="yoe" id="yoe" aria-label=".form-select-sm example">
                                                            <option value="" selected disabled hidden>{{$yoe ?? 'choose'}}</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                        </select>

                                                            </div>
                                                        </div>
                                                        <div class="mt-4
                                                            text-end">
                                                            <button class="btn btn-primary" type="submit">Update</button>

                                                        </div>
                                                                        </form>


                                                    <!--end form-->
                                                </div>
                                                <div class="tab-pane fade"
                                                     id="rating"
                                                     role="tabpanel"
                                                     aria-labelledby="settings-tab">
                                                    <!-- <div
                                                        class="candidate-education-details
                                                        mt-4">
                                                        <h5 class="fs-18 fw-bold
                                                            mb-0 ">Depending on our AI What we give you:</h5>

                                                    </div>
                                                    <br /> -->
                                                    <div
                                                        class="candidate-education-details
                                                        mt-0">
                                                        <h6 class="fs-18 fw-bold
                                                            mb-0 ">The digest of your CV is</h6>
                                                        <p class="mb-2 mt-4 m-lg-4 fw-bold fs-16
                                                        text-muted">{{$info->about_me}}</p>


                                                    </div>

                                                    @if(\App\Models\usermodel2::where('user_id',auth()->user()->id)->exists())
                                                        <div
                                                            class="candidate-education-details
                                                        mt-4">
                                                            <h6 class="fs-18 fw-bold
                                                            mb-0">Expecting Salary is</h6>
                                                            <p class="mb-2 mt-4 m-lg-4
                                                        text-muted">{{auth()->user()->model2->salary}}</p>
                                                        </div>
                                                        <div
                                                            class="candidate-education-details
                                                        mt-4">
                                                            <h6 class="fs-18 fw-bold
                                                            mb-0">Your Evaluation is</h6>
                                                        <!-- <p class="mb-2 mt-4 m-lg-4
                                                        text-muted">{{auth()->user()->model2->evaluation}}</p> -->
                                                            <br>
                                                            <span class="my-rating"></span>
                                                            <span class="ps-4" style=" font-size: 43px;
  margin-left: 10px;
  color: hotPink;
  top: 10px;
  position: relative;" >{{auth()->user()->model2->evaluation}}</span>

                                                        </div>

                                                </div>

                                                    @endif

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
                @include('downbar')
                <!-- END FOOTER -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script>
            $('.my-rating').starRating({
                readOnly: true,
                totalStars: 10,

                emptyColor: 'lightgray',
                hoverColor: 'salmon',
                activeColor: '#0275d8',
                initialRating: {{auth()->user()->model2->evaluation}},
                strokeWidth: 0,
                useGradient: false,
                minRating: 1,
                forceRoundUp:true,

                starShape:'rounded',



            });
        </script>
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <script
            src={{asset("./assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></script>
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
