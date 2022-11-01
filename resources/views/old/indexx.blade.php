<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="website for finding jobs" />
    <title>Job Mentor</title>
    <link rel="icon" href="./img/favicon.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="./css/index.css">

    <style>
   html {
  scroll-behavior: smooth;
}
    body {
      font-family: 'Tajawal', sans-serif;
    }
     @keyframes slideInLeft {
        0% {
          transform: translateX(-100%);
        }
        100% {
          transform: translateX(0);
        }
      }
      .se1{
            animation: 2s ease-out 0s 1 slideInLeft;
      }
      .se{
            animation: 3s ease-out 0s 1 slideInLeft;
      }
    .fd {
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
  </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-light mb-2 pb-0">
      <a href="./index.html" class="navbar-brand text-secondary fs-3 fw-bold
        mt-2"><img
          src="./img/logo.png" alt="Ana" class="d-inline-block
          align-text-middle me-2 ms-2" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav fw-bold flex-row flex-sm-wrap">
          <li class="nav-item mt-2"><a href="./index.html" class="nav-link">Home</a></li>
          <li class="nav-item mt-2"><a href="#Categories" class="nav-link">Job
              Categories</a></li>
          <li class="nav-item mt-2"><a href="#features" class="nav-link">Features</a></li>
          <li class="nav-item me-5 mt-2"><a href="#aboutUs" class="nav-link">Contact</a></li>
        </ul>
        <div class="d-flex ms-auto">
          <button class="btn btn-outline-primary mt-2 ms-sm-2
            me-2 btn-lg rounded-3" style="width:130px" data-bs-toggle="modal"
            data-bs-target="#myModal">Log
            In</a></button>
        <button class="btn mt-2 me-5
          btn-outline-primary btn-lg rounded-3" style="width:130px"
          data-bs-toggle="modal"
          data-bs-target="#signup">Sign Up</button>
      </div>
    </div>

  </nav>
  <main class="bg-image mb-0 pb-0"
    style="background-image:
    url('./i/bg-slider4.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;">
    <p class="fs-1 p text-light">Join us & Explore Thousands of Jobs</p>
    <p class="p1 text-light">Find Jobs, Employment & Career Opportunities</p>
    <div class="div">
      <div class="input-group input-group-lg mb-3">
        <span class="input-group-text bg-white border-0"><svg
            xmlns="http://www.w3.org/2000/svg" width="25px"
            height="25px"
            fill="currentColor" class="bi bi-search" viewBox="0 0 16
            16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397
              1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0
              1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12
              6.5a5.5
              5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></span>
          <input type="text" class="form-control border-0 shadow-none"
            placeholder="Job Title">
          <button class="input-group-text btn btn-outline-primary">Find
            Jobs</button>

        </div>
      </div>


    </main>
    <section id="features" class="d-md-flex dd">
      <img src="./i/bg.jpg" alt="tab1" width="600" class="ms-5 se1">
      <div class="d mt-5 se">
        <p class="fs-1">Find Your
          Match</p>
        <p class="fs-5">An efficient resume should promote your
          abilities<br/>
            and include tangible accomplishments that are relevant to<br/>
              the job you apply for. You should also prepare a cover letter<br/>
                that is concise and elaborates on how you can put your skills<br/>
                  to use in the organization.</p>
              </div>
            </section>
            <section class="d-md-flex dd">
              <div class="d1">
                <p class="fs-1">Browse Hundreds <br/>
                    of Jobs</p>
                  <p class="fs-5">To start searching for jobs,
                    you can attend job <br/>fairs online or in person,
                      use job boards and<br/> career websites or reach out
                        directly to recruiters in a targeted company<br/>
                          to broaden your network.</p>
                      </div>
                      <img src="./i/app2.png" alt="tab2" width="450"
                        class="ms-5">
                    </section>

                    <section class="d-md-flex dd">
                      <img src="./img/tab3.jpg" alt="tab3" width="450"
                        class="ms-5">
                      <div class="d">
                        <p class="fs-1">Apply Directly</p>
                        <p class="fs-5">An efficient resume should promote
                          your
                          abilities<br/>
                            and
                            include tangible accomplishments that are
                            relevant
                            to
                            the job you apply for. You should also prepare a
                            cover<br/>
                              letter
                              that is concise and elaborates on how you can
                              put
                              your<br/>
                                skills
                                to
                                use
                                in the organization..</p>
                            </div>

                          </section>
                          <div style="text-align: center;" class="fd"
                            id="Categories">
                            <p class="text-primary fs-2 fw-bold p-5">Popular Job
                              Categories</p>
                            <div class="left nav nav-pills">
                              <div class="m-5 ms-0 mmm p-5 rounded"
                                style="width: 200px; height:
                                200px;"><a href="./jobcategory.html#Marketing"
                                  class="text-decoration-none
                                  text-dark">
                                  <img
                                    src="./img/marketing.png" alt=""><p
                                    class="fs-5
                                    pt-2 mt-3">Marketing</p>
                                </a></div>
                              <div class="m-5 ms-0 mmm p-5 rounded"
                                style="width: 200px; height:
                                200px;">
                                <li class="nav-item"><a
                                    href="./jobcategory.html"
                                    data-tab-name="Development"
                                    data-toggle="tab"
                                    class="text-decoration-none
                                    text-dark"><img
                                      src="./img/code.png" alt=""><p
                                      class="fs-5
                                      pt-2 mt-3">Development</p></a></li>
                              </div>
                              <div class="m-5 ms-0 mmm p-5 rounded"
                                style="width: 200px; height:
                                200px;"><img
                                  src="./img/design.png" alt=""><p
                                  class="fs-5
                                  pt-2 mt-3">Design</p></div>
                              <div class="m-5 ms-0 mmm pt-5 rounded"
                                style="width: 200px; height:
                                200px;"><img
                                  src="./img/customer.png"
                                  alt=""><p
                                  class="fs-5 pt-2 mt-3" style="width: 200px;">Customer
                                  Service</p></div>

                            </div>
                          </div>
                          <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-fullscreen-sm-down
                              modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title fw-bold">Log In</h4>
                                  <button type="button" class="btn-close"
                                    data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">

                                  <form action="">
                                    <div class="form-floating mb-3 mt-3">
                                      <input type="email" class="form-control"
                                        id="email"
                                        placeholder="Enter email" name="email">
                                      <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                      <input type="password"
                                        class="form-control" id="pwd"
                                        placeholder="Enter password"
                                        name="pswd">
                                      <label for="pwd" class="form-label">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                      <label class="form-check-label">
                                        <input class="form-check-input"
                                          type="checkbox"
                                          name="remember">
                                        Remember me
                                      </label>
                                    </div>
                                    <a href="#" class="link-primary">Forgetten
                                      password?</a><br/>
                                      <div class="d-grid gap-2">
                                        <button type="submit" class="btn
                                          btn-primary mt-1">Log In</button>
                                      </div>

                                    </form>

                                  </div>

                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="signup"
                              aria-hidden="true"
                              aria-labelledby="exampleModalToggleLabel"
                              tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title fw-bold"
                                      id="exampleModalToggleLabel">Create
                                      your account</h5>
                                    <button type="button" class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <ul class="nav nav-pills nv" role="tablist">
                                      <li class="nav-item text-white">
                                        <a class="nav-link active"
                                          data-bs-toggle="pill"
                                          href="#home">Candidate</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link"
                                          data-bs-toggle="pill" href="#menu1">Employer</a>
                                      </li>

                                    </ul>
                                    <div class="tab-content">
                                      <div id="home" class="container tab-pane
                                        active"><br>
                                        <form method="POST" action="/sign-as-user">
                                            @csrf

                                          <div class="form-floating mb-3 mt-3">
                                            <input type="text"
                                              class="form-control" name="name"
                                              id="name"
                                              placeholder="Your Name"
                                            required>
                                            <label for="name"
                                              class="form-label">Name</label>
                                          </div>

                                          <div class="form-floating mb-3 mt-3">
                                            <input type="email"
                                              class="form-control" name="email"
                                              id="email"
                                              placeholder="Email"
                                            required>
                                            <label for="email"
                                              class="form-label">Email</label>
                                          </div>
                                          <div class="form-floating mb-3 mt-3">
                                            <input type="password"
                                              class="form-control"
                                              name="password"
                                              id="password"
                                              placeholder="Password"
                                            required>
                                            <label for="password"
                                              class="form-label">Password</label>
                                          </div>
                                          <div class="form-floating mb-3 mt-3">
                                            <input type="password"
                                              class="form-control"
                                              name="password_confirmation"
                                              id="password_confirmation"
                                              placeholder="Confirm Password">
                                            <label for="password_confirmation"
                                              class="form-label">Confirm
                                              Password</label>
                                          </div>
                                          <div class="d-grid gap-2">
                                            <input type="submit" name="submit"
                                              class="btn
                                              btn-primary"
                                              value="Sign Up">
                                          </div>
                                            @if($errors->any())
                                                @foreach($errors->all() as $error)

                                                    <p>
                                                        <small style="color: lightcoral">

                                                            @if($error === "The email has already been taken.")
                                                                You did sign before ,You have an account try to login
                                                                @break
                                                            @else
                                                                {{$error}}
                                                            @endif
                                                        </small>

                                                    </p>
                                                @endforeach
                                            @endif
                                        </form>
                                      </div>
                                      <div id="menu1" class="container tab-pane
                                        fade"><br>
                                        <form action="">
                                          <div class="form-floating mb-3 mt-3">
                                            <input type="text"
                                              class="form-control" name="cname"
                                              id="cname"
                                              placeholder="Company Name">
                                            <label for="cname"
                                              class="form-label">Company Name</label>
                                          </div>

                                          <div class="form-floating mb-3 mt-3">
                                            <input type="email"
                                              class="form-control" name="cemail"
                                              id="cemail"
                                              placeholder="Email">
                                            <label for="cemail"
                                              class="form-label">Email</label>
                                          </div>
                                          <div class="form-floating mb-3 mt-3">
                                            <input type="password"
                                              class="form-control"
                                              name="cpassword"
                                              id="cpassword"
                                              placeholder="Password">
                                            <label for="cpassword"
                                              class="form-label">Password</label>
                                          </div>
                                          <div class="form-floating mb-3 mt-3">
                                            <input type="password"
                                              class="form-control"
                                              name="cconfirm"
                                              id="cconfirm"
                                              placeholder="Confirm Password">
                                            <label for="cconfirm"
                                              class="form-label">Confirm
                                              Password</label>

                                          </div>
                                          <div class="d-grid gap-2">
                                            <input type="submit" name="submit"
                                              class="btn
                                              btn-primary"
                                              value="Sign Up">
                                          </div>

                                        </form>
                                      </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>


                            <div style="background-image:

                              url('./img/bg_shape.jpg');
                              height:
                              480px;">
                              <p class="fw-bold fs-1 text-light p-5">Get
                                Matched
                                The
                                Most
                                Valuable
                                Jobs, Just Drop
                                <br/> Your Cv at Superio</p>
                                <p class="text-light p-5 pt-0 pb-1">The
                                  template
                                  is
                                  really
                                  nice
                                  and<br/>
                                    quite
                                    a
                                    large set of
                                    options.<br/> It’s beautiful and the
                                      coding
                                      is
                                      done
                                      quickly
                                      and
                                      seamlessly. Thank you!</p>
                                    <button class="btn btn-outline-primary
                                      btn-lg ms-5
                                      mt-0"
                                      data-bs-toggle="modal"
                                      data-bs-target="#signup">Register
                                      now</button>
                                  </div>

                                  <div class="container-fluid">
                                    <footer class="row p-5 bg-secondary"
                                      id="aboutUs">
                                      <div class="col-md-3">
                                        <img src="./img/logo.png" alt="">
                                        <p class="text-light mt-3">Praesent
                                          sollicitudin
                                          felis
                                          a
                                          ornare
                                          volutpat.<br/>
                                            Nullam
                                            malesuada sem sit amet semper
                                            tristique.<br/>
                                              Donec
                                              nec
                                              neque
                                              lectus.</p>
                                          </div>
                                          <div class="col text-light ps-5">
                                            <p class="fw-bold fs-5">For
                                              Candidates</p>
                                            <p>
                                              <a href="#"
                                                class="link-secondary
                                                text-decoration-none">Browse
                                                Jobs</a>
                                            </p>
                                            <p>
                                              <a href="#"
                                                class="link-secondary
                                                text-decoration-none">Browse
                                                Candidates</a>
                                            </p>
                                          </div>
                                          <div class="col-md-3 text-light">
                                            <p class="fw-bold fs-5">For
                                              Employers</p>
                                            <a href="#"
                                              class="link-secondary
                                              text-decoration-none">All
                                              Employers</a>
                                          </div>
                                          <div class="col-md-3 text-light">
                                            <p class="fw-bold fs-5">About Us</p>
                                            <p>
                                              <a href="#"
                                                class="link-secondary
                                                text-decoration-none">Contact
                                                Us</a>
                                            </p>
                                            <p>
                                              <a href="#"
                                                class="link-secondary
                                                text-decoration-none">About Us</a>
                                            </p>
                                            <p>
                                              <a href="#"
                                                class="link-secondary
                                                text-decoration-none">Terms</a>
                                            </p>
                                          </div>
                                        </footer>
                                      </div>
                                      <div class="d-flex bg-secondary">
                                        <div class="ps-5 pt-2 mt-5">
                                          <p class="text-light">© Copyright
                                            2022
                                            Job Mentor.
                                            All
                                            Rights
                                            Reserved.</p>
                                        </div>
                                        <div class="ms-auto me-5 pe-5 mt-5
                                          pb-5">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            x="0px"
                                            y="0px"
                                            width="30" class="h"
                                            height="30" style="margin: 0;"
                                            fill="gray"
                                            viewBox="0 0 24 24">
                                            <path
                                              d="M12,2C6.477,2,2,6.477,2,12c0
                                              ,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749
                                              c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,
                                              0-1.379,0.969-1.379,2.061v1.437h2.995
                                              l-0.406,2.629h-2.588v7.247C18.235
                                              ,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                                            </path>
                                          </svg>
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            x="0px"
                                            y="0px"
                                            class="ms-2 me-2 h" width="30"
                                            height="30"
                                            style="margin:
                                            0;" fill="gray"
                                            viewBox="0 0 50 50">
                                            <path d="M 50.0625 10.4375 C
                                              48.214844
                                              11.257813
                                              46.234375
                                              11.808594
                                              44.152344 12.058594 C
                                              46.277344
                                              10.785156
                                              47.910156 8.769531 48.675781
                                              6.371094 C
                                              46.691406 7.546875 44.484375
                                              8.402344
                                              42.144531
                                              8.863281
                                              C 40.269531 6.863281 37.597656
                                              5.617188
                                              34.640625
                                              5.617188
                                              C 28.960938 5.617188 24.355469
                                              10.21875
                                              24.355469
                                              15.898438
                                              C 24.355469 16.703125
                                              24.449219
                                              17.488281
                                              24.625
                                              18.242188
                                              C
                                              16.078125 17.8125 8.503906
                                              13.71875
                                              3.429688
                                              7.496094
                                              C
                                              2.542969 9.019531 2.039063
                                              10.785156
                                              2.039063
                                              12.667969
                                              C 2.039063 16.234375 3.851563
                                              19.382813
                                              6.613281
                                              21.230469
                                              C 4.925781 21.175781 3.339844
                                              20.710938
                                              1.953125
                                              19.941406
                                              C 1.953125 19.984375 1.953125
                                              20.027344
                                              1.953125
                                              20.070313
                                              C 1.953125 25.054688 5.5
                                              29.207031
                                              10.199219
                                              30.15625
                                              C 9.339844 30.390625 8.429688
                                              30.515625
                                              7.492188
                                              30.515625
                                              C 6.828125 30.515625 6.183594
                                              30.453125
                                              5.554688
                                              30.328125
                                              C 6.867188 34.410156 10.664063
                                              37.390625
                                              15.160156
                                              37.472656
                                              C 11.644531 40.230469 7.210938
                                              41.871094
                                              2.390625
                                              41.871094
                                              C 1.558594 41.871094 0.742188
                                              41.824219
                                              -0.0585938
                                              41.726563
                                              C 4.488281 44.648438 9.894531
                                              46.347656
                                              15.703125
                                              46.347656
                                              C 34.617188 46.347656
                                              44.960938
                                              30.679688
                                              44.960938
                                              17.09375
                                              C 44.960938 16.648438
                                              44.949219
                                              16.199219
                                              44.933594
                                              15.761719
                                              C 46.941406 14.3125 48.683594
                                              12.5
                                              50.0625
                                              10.4375
                                              Z"></path>
                                          </svg>
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            x="0px"
                                            y="0px" class="me-2 h"
                                            width="30" style="margin: 0;"
                                            height="30" class="inst"
                                            fill="gray"
                                            viewBox="0 0 50 50">
                                            <path d="M 16 3 C 8.83 3 3 8.83
                                              3
                                              16
                                              L 3
                                              34
                                              C 3
                                              41.17
                                              8.83
                                              47
                                              16
                                              47
                                              L 34 47 C 41.17 47 47 41.17 47
                                              34
                                              L 47
                                              16
                                              C 47
                                              8.83
                                              41.17
                                              3
                                              34
                                              3
                                              L
                                              16 3 z M 37 11 C 38.1 11 39
                                              11.9
                                              39 13 C
                                              39 14.1
                                              38.1
                                              15
                                              37
                                              15
                                              C
                                              35.9 15 35 14.1 35 13 C 35
                                              11.9
                                              35.9 11
                                              37
                                              11 z
                                              M
                                              25
                                              14
                                              C
                                              31.07
                                              14
                                              36 18.93 36 25 C 36 31.07
                                              31.07
                                              36
                                              25 36
                                              C
                                              18.93
                                              36
                                              14
                                              31.07
                                              14
                                              25
                                              C 14 18.93 18.93 14 25 14 z M
                                              25
                                              16 C
                                              20.04 16
                                              16
                                              20.04
                                              16
                                              25
                                              C
                                              16
                                              29.96 20.04 34 25 34 C 29.96
                                              34
                                              34
                                              29.96
                                              34 25 C
                                              34
                                              20.04
                                              29.96
                                              16
                                              25 16 z"></path></svg>
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            x="0px"
                                            y="0px"
                                            width="30" style="margin: 0;"
                                            fill="gray"
                                            height="30" class="h"
                                            viewBox="0 0 50 50">
                                            <path
                                              d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z
                                              M17,20v19h-6V20H17z
                                              M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z
                                              M39,39h-6c0,0,0-9.26,0-10
                                              c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56
                                              c3.97,0,7.19,2.73,7.19,8.26V39z"></path></svg>
                                        </div>
                                      </div>



                                    </body>

                                  </html>
