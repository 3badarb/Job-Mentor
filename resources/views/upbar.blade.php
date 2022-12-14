
<nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar">
    <div class="container-fluid custom-container" >
        <a class="navbar-brand text-dark fw-bold me-auto"
           href="/index">
            <img src="{{asset("./assets/images/logo-dark.png")}}" height="50"
                 alt="" class="logo-dark" />
            <img class="logo-light"
                 alt=""
                src="{{asset("./assets/images/logo-light.png")}} "
                 height="22"

            />
        </a>
        <div>
            <button class="navbar-toggler me-3" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-label="Toggle
                            navigation">
                <i class="uil uil-align-center-justify"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse mt-0 pt-0" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center">
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link" href="/index#home"
                       id="homedrop" role="button"
                    >
                        Home
                    </a>

                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link" href="javascript:void(0)"
                       id="jobsdropdown" role="button"
                       data-bs-toggle="dropdown">
                        JOBS <i class="uil uil-arrow-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-center"
                        aria-labelledby="jobsdropdown">
                        <li><a class="dropdown-item"
                               href="/job-list">JOBS LIST</a></li>
                        <!--<li><a class="dropdown-item"
                               href="job-categories">JOBS CATEGORIES</a></li>-->

                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link" href="javascript:void(0)"
                       id="pagesdoropdown" role="button"
                       data-bs-toggle="dropdown">
                        Companys
                        <i class="uil uil-arrow-down"></i>
                    </a>
                    <div class="dropdown-menu
                                    dropdown-menu-center"
                         aria-labelledby="pagesdoropdown">
                        <div class="row">
                            <div class="col-12">
                                <div>
{{--                                    <a class="dropdown-item"--}}
{{--                                       href="candidate-list.blade.php">Candidate--}}
{{--                                        List</a>--}}
                                    <a class="dropdown-item"
                                       href="/company-list">Company
                                        List</a>

                                </div>
                            </div>
                            <!--end col-->


                        </div>
                    </div>
                </li>
                <!--end dropdown-->
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link" href="/index#How"
                       id="productdropdown" role="button"

                       aria-expanded="false">
                        How It Works

                    </a>

                </li>
                <!--end dropdown-->
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <!--end navbar-nav-->
        </div>
        <!--end navabar-collapse-->
        @auth()

            <ul class="header-menu list-inline d-flex align-items-center
                        mb-0">

                <li class="list-inline-item dropdown">
                    <a href="javascript:void(0)" class="header-item"
                       id="userdropdown" data-bs-toggle="dropdown">
                        @if(auth()->user()->tag==='U')
                            @if(auth()->user()->userpdf()->exists())
                            <img src="{{asset("storage/".auth()->user()->userpdf->avatar)}}"
                                 height="45"  class="rounded-circle
                            me-1"
                            alt="">
                            @else
                                <img src="{{asset("storage/".auth()->user()->userinfo->avatar)}}"
                                     height="45"  class="rounded-circle
                            me-1"
                                     alt="">
                            @endif
                        @elseif(auth()->user()->tag==='C')

                            <img src="{{asset("storage/".auth()->user()->companyinfo->avatar)}}"
                                   height="40" class="rounded-circle
                            me-1" alt="">
                        @endif

                        <span class="d-none d-md-inline-block fw-bold
                                   ">Hi, {{auth()->user()->name}} </span>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="userdropdown">
                        @if(auth()->user()->tag==='U')
                            @if(auth()->user()->userpdf()->exists())
                            <li>
                                <a class="dropdown-item"
                                   href="/profilepdf">My Profile</a>
                            </li>
                            @else
                                <li>
                                    <a class="dropdown-item"
                                       href="/profile">My Profile</a>
                                </li>
                            @endif
                            <li>
                                <a class="dropdown-item"
                                   href="/notification">Notification
                                    @if(auth()->user()->tag==='U' and
                            App\Models\job_user::where('user_id',auth()->user()->id)->where('reject',1)->exists()
                                and App\Models\job_user::where('user_id',auth()->user()->id)->where('seen',0)->exists())
                                        <i class="iconify" data-icon="carbon:dot-mark" style="color: #c10;" ></i>

                                    @endif
                                </a>

                            </li>
                            @elseif(auth()->user()->tag==='C')
                            <li>
                                <a class="dropdown-item"
                                   href="/profileCompany">My Profile</a>
                            </li>
                            @endif

                        <li><form method="post" action="/log-out">
                                @csrf
                                <button  class="dropdown-item"
                                >Logout</button></form></li>
                    </ul>
                </li>
            </ul>

        @endauth

        @guest()
            <ul class="header-menu list-inline d-flex align-items-center
                        mb-0">

                <li class="list-inline-item">
                    <a href="log-in" class="bg-p ps-4 pt-2 pb-2
                                pe-4">Sign
                        In</a>
                    <a href="sign-up" class="bg-p ps-4 pt-2 pb-2
                                pe-4">Sign
                        Up</a>

                </li>
            </ul>
    @endguest
    <!--end header-menu-->
    </div>
    <!--end container-->
</nav>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<!-- Navbar End -->
