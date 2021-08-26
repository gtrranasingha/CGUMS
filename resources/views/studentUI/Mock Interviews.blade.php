<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CGUMS</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>
/* Sort the time slots into four separate rows (instead of columns) */
.time-select-headline + .md-layout.md-align-center {
  flex-direction: column;
}

ul.time-listing {
  justify-content: center;
  display: flex;
  flex-wrap: wrap;
}
/* ---------------------------------------- */
  </style>
</head>

<body class="fixed-sn white-skin">

   <!--Main Navigation-->
   <header>

<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li class="logo-sn waves-effect py-3">
      <div class="text-center">
        <a href="#" class="pl-0"><img src="\image\CGUMS.png" class="img-fluid" alt="Responsive image"></a>
      </div>
    </li>
    <!--/. Logo -->

    <!--Search Form-->
    <li>
      <form class="search-form" role="search">
        <div class="md-form mt-0 waves-light">
          <input type="text" class="form-control py-2" placeholder="Search">
        </div>
      </form>
    </li>
    <!--/.Search Form-->
    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">
        <li><a href="/welcome" class="collapsible-header waves-effect arrow-r"><i class="fas fa-tachometer-alt"></i>
            My Dashboard</a>
        </li>
        
        <li><a href="/welcome/profile" class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Profile</a>
          <div class="collapsible-body">

          </div>
        </li>

        <li><a href="#" class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i>Programmes</a>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Sessions<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="/welcome/sessions/cc_session" class="waves-effect">Career Counselling Session</a>
              </li>
              <li><a href="#" class="waves-effect">CV Screening</a>
              </li>
              <li><a href="/welcome/sessions/mock_interviews" class="waves-effect">Trial interview</a>
              </li>
            </ul>
          </div>
        </li>
        
        <!-- Simple link -->
        <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
            Notices</a></li>

        <li><a href="/welcome/job_vacancies" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
            Job Vacancies</a></li>

      </ul>
    </li>
    <!--/. Side navigation links -->
  </ul>
  <div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
  <!-- SideNav slide-out button -->
  <div class="float-left">
    <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
  </div>
  <!-- Breadcrumb-->
  <div class="breadcrumb-dn mr-auto">
    <p><b>Career Guidance Unit Management System [CGUMS]</b></p>
  </div>
  <b> {{session('student_user')}}</b>
  <div class="d-flex change-mode">



    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

    <!-- Dropdown -->
    <li class="nav-item dropdown notifications-nav">
      <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="badge red">3</span> <i class="fas fa-bell"></i>
        <span class="d-none d-md-inline-block">Notifications</span>
      </a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">
          <i class="fas fa-money mr-2" aria-hidden="true"></i>
          <span>New order received</span>
          <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 13 min</span>
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-money mr-2" aria-hidden="true"></i>
          <span>New order received</span>
          <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 33 min</span>
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-line-chart mr-2" aria-hidden="true"></i>
          <span>Your campaign is about to end</span>
          <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 53 min</span>
        </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
    </li>

    <li class="nav-item dropdown">
   
      <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">My Profile</a>
            @php $id= Crypt::encrypt(session('student_userId')); @endphp
            <a class="dropdown-item" href="/welcome/change_password/{{$id}}">User Account</a>
          </div>
      </li>

    <li class="nav-item">
      <a href="/logout" class="nav-link waves-effect"><i class="fas fa-sign-out-alt"></i> <span
          class="clearfix d-none d-sm-inline-block">Log Out</span></a>
    </li>

  </ul>
  <!--/Navbar links-->
</div>  
</nav>
<!-- /.Navbar -->

</header>
  <!--Main Navigation-->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">
      <section>
        <form action="/welcome/sessions/mock_interviews/savedata" method="post">
                  {{csrf_field()}}
                  <div class="col-md-12">
                  
                    <!-- Card -->
                    <div class="card card-cascade">
                  
                      <!-- Card image -->
                      <div class="view view-cascade gradient-card-header aqua-gradient">
                        <h2 class="card-header-title">Mock Interviews</h2>
                      </div>
                      <!-- Card image -->
                  
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        
                        <p class="card-text text-justify">A mock interview, also known as a practice interview, is a simulation of an actual job interview. It provides job
                        seekers with an opportunity to practice for an interview and receive feedback on their interviewing skills.Where undergraduates are given the experience on how to face a job interview and identify their weaknesses and improve
                        their strengths before facing interview with a company.<br><br>

                        <strong>Mock interviews will be conducted in both Online and In-Person. If you're unable to visit the CGU office in Wellamadama Complex
                        we encourage you to choose the Online Mock Interview (Specially for the students who are not studying in a faculty at the Wellamadama Complex)</strong></p>

                    
                      <div class="row">
                        <div class="col-md-12">
                          <p class="card-text text-justify blue-text"><strong>Mock interviews will be conducted only on Wednesdays after 1.30 PM</strong></p>
                          <p class="card-text text-left deep-blue-text">- All information & instructions will be informed to you via your university e-mail address after approving your mock interview request.
                          <br><br>- Your uploaded CV to CGUMS will be used as your reference for this mock interview.(If you have a updated version than the one you uploaded to CGUMS we advise you to update your CGUMS profile with the latest version before the request)
                          </p>
                          <hr>
                        </div>
                        

              <!-- Grid column -->
                          <div class="col-lg-4 col-md-6 mb-4">
              
                                <select class="mdb-select md-form" name="appointment_name">
                                  <option value="In-Person Mock Interview">In-Person Mock Interview</option>
                                  <option value="Online Mock Interview">Online Mock Interview</option>
                                </select>
                                @error('appointment_name')
                               <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                        @enderror
                          </div>
                          <div class="col-lg-4 col-md-6 mb-4">
                          
                <!-- Grid card -->
                          <div class="md-form">
                          <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker" name="appointment_date">
                          <label for="date-picker-example" class="active">Select date</label>
                          @error('appointment_date')
                               <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                        @enderror
                          </div>
                        </div>
            
                        <div class="col-lg-4 col-md-6 mb-4">

                         <select class="mdb-select md-form" name="appointment_time">
                              <option value="" disabled selected>Select Time</option>
                              <option value="1:30 PM">1:30 PM</option>
                              <option value="2:00 PM">2:00 PM</option>
                              <option value="2:30 PM">2:30 PM</option>
                              <option value="3:00 PM">3:00 PM</option>
                              <option value="3:30 PM">3:30 PM</option>
                              <option value="4:00 PM">4:00 PM</option>
                         </select>
                         @error('appointment_time')
                               <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                        @enderror
                        </div>
                        <div class="col-md-12">
                        @if(Session::has('err_message'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('err_message')}}
                        </div>
                        @endif
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif

                        <div class="col-md-12">
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit" name="submit" >Request for a mock interview</button>
              <!-- Grid card -->
                        </div>
                        </div>
                        </div>
              <!-- Grid column -->
            </div>
            </div>
                    </div>
                  </div>
                      <!-- Card content -->
                  
                    </div>
                    <!-- Card -->
                  
                  </div>
      
        </div>
        </form>
      </section>
    </div>
  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-0 mt-5">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2021 Copyright: Career Guidance Unit - <a href="https://ruh.ac.lk" target="_blank"> University of Ruhuna </a>

      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
  <!--Custom scripts-->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $('.datepicker').pickadate({
        disable: [
          1,2,3,5,6,7
        ], min: +1, max: +60

         
      })

    $(document).ready(function () {
        $('.mdb-select').materialSelect();
      });

        $(function () {
            $('#dark-mode').on('click', function (e) {

              e.preventDefault();

              $('footer, .card').toggleClass('dark-card-admin');
              $('body, .navbar').toggleClass('white-skin navy-blue-skin');
              $(this).toggleClass('white text-dark btn-outline-black');
              $('body').toggleClass('dark-bg-admin');
              $('h6, .card, p, td, th, i, li a, h4, input, label').not(
                '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
              $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
              $('.gradient-card-header').toggleClass('white black lighten-4');
              $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

            });
          });

  </script>
</body>

</html>
