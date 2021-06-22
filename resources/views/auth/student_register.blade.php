<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CGUMS Registration</title>

  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  <style>

    html,
        body,
        header,
        .view {
          height: 100vh;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .view {
            height: 815px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .view  {
            height: 650px;
          }
        }

        .intro-2 {
            background: url("E:/New folder/Temp/MDB Pro/img/loginbackground.jpg")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #2e2e30 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }


        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/

        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #8EDEF8;
            box-shadow: 0 1px 0 0 #8EDEF8;
        }
        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #8EDEF8;
        }

        .md-form .form-control {
            color: #fff;
        }


    </style>

</head>

<body>


  <!--Main Navigation-->
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>CGUMS</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                        </li>
          </ul>
          
        </div>
      </div>
    </nav>

    <!--Intro Section-->
    <section class="view intro-2">
      <div class="mask rgba-black-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

              <!--Form with header-->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header aqua-gradient">
                    <h3><i class="fas fa-info-circle mt-2 mb-2"></i> REGISTRATION</h3>
                  </div>
                   <!--Error msg-->
                <div class="col-md-12">
                    @if(Session::has('error_message'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error_message')}}
                    </div>
                    @endif
                <div>
                  <!--Body-->
        <form action="/register/savedata" method="post"> 
                    {{csrf_field()}}
                  <div class="md-form">
                    <i class="fas fa-id-badge prefix white-text"></i>
                    <input type="text" id="orangeForm-studid"  name="student_id" class="form-control">
                    <label for="orangeForm-studid">Student ID (SC/20XX/XXXXX)</label>
                    @if ($errors->has('student_id'))
                        <span class="text-danger">{{ $errors->first('student_id') }}</span>
                     @endif
                  </div>
                  
                  <div class="md-form">
                    <i class="fas fa-user prefix white-text"></i>
                    <input type="text" id="orangeForm-name" name="student_name" class="form-control">
                    <label for="orangeForm-name">Name with Initials</label>
                    @if ($errors->has('student_name'))
                        <span class="text-danger">{{ $errors->first('student_name') }}</span>
                     @endif
                  </div>

                  <div class="md-form">
                      <i class="fas fa-envelope prefix white-text"></i>
                      <input type="email" id="orangeForm-email" name="email" class="form-control">
                      <label for="orangeForm-email">E-mail</label>
                      @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>

                  <div class="md-form">
                    <i class="fas fa-lock prefix white-text"></i>
                    <input type="password" name="password" id="orangeForm-pass" class="form-control">
                    <label for="orangeForm-pass">Password</label>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>

                  <div class="text-center">
                    <button  type="submit" class="btn aqua-gradient btn-lg">Sign Up</button>
                    </div>
            </form>
                  </div>
        
                </div>
              </div>
   
              <!--/Form with header-->

            </div>
          </div>
        </div>
      </div>
    </section>

  </header>

  <footer class="page-footer bg-dark pt-0 mt-0">
    
      <!-- Copyright -->
      <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">© 2021 Copyright: Career Guidance Unit Management System [CGUMS] | Career Guidance
          Unit<a href="https://ruh.ac.lk" target="_blank"> University of Ruhuna </a>
    
        </div>
      </div>
      <!-- Copyright -->
    
  </footer>

  <!--Main Navigation-->


  <!--  SCRIPTS  -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <script>
    new WOW().init();

  </script>
</body>

</html>
