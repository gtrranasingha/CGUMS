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

<body class="fixed-sn black-skin">

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
              <li><a href="#" class="waves-effect">Trial interview</a>
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
      <form action="/welcome/sessions/cc_session/savedata" method="POST">
                        {{csrf_field()}}
                  <div class="col-md-12">
                
            
                    <!-- Card -->
                    <div class="card card-cascade">
                  
                      <!-- Card image -->
                      <div class="view view-cascade gradient-card-header blue-gradient">
                        <h2 class="card-header-title">Career Counselling Session</h2>
                      </div>
                      <!-- Card image -->
                  
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                  
                        <p class="card-text text-justify">Undergraduates at the university have an opportunity and access to personalized career counselling
                          sessions with expert career counselors at
                          the Career Guidance Unit University of Ruhuna. The Career Guidance Unit(CGU) conducts an orientation on the
                          career counselling sessions for the first year university students. After the orientation, the students have an individual
                          counselling session with the core team of career counsellors at the CGU. These sessions are informative as well as serve as
                          a
                          basic steering mechanism for students to become aware of and get a sense of the future course of action. The sessions
                          not only enable the CGU team along with the students to assess their interests, strengths, and areas of improvement
                          but
                          also play a key role in guiding the student to either enroll in the university placement program or opt for higher
                          education
                          services. After completing personalized counselling session a customized training program is designed for every
                          student.
                        </p>

                        <hr>
                      <div class="row">
                        <div class="col-md-12"><p class="card-text text-justify"><strong>Pick a date & time you would like to visit (9AM - 4PM) on a weekday.</strong>
                        <br>Plan to arrive 10 minutes early to the CGU Office and a assistant will check you up to the Career Counselor's Office when it is time for your
                        appointment.</p></div>
                      
                          
              <!-- Grid column -->
                          <div class="col-md-6">
                          
                <!-- Grid card -->
                          <div class="md-form">
                          <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker" name="appointment_date">
                          <label for="date-picker-example" class="active">Select date</label>
                          @error('appointment_date')
                               <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                        @enderror
                          </div>
                        </div>
            
                        <div class="col-md-6">

                         <select class="mdb-select md-form" name="appointment_time">
                              <option value="" disabled selected>Select Time</option>
                              <optgroup label="Morning Session">
                              <option value="9:00 AM">9:00 AM</option>
                              <option value="9:30 AM">9:30 AM</option>
                              <option value="10:00 AM">10:00 AM</option>
                              <option value="10:30 AM">10:30 AM</option>
                              <option value="11:00 AM">11:00 AM</option>
                              <option value="11:30 AM">11:30 AM</option>
                            </optgroup>
                              <optgroup label="Evening Session">
                                <option value="1:30 PM">1:30 PM</option>
                                <option value="2:00 PM">2:00 PM</option>
                                <option value="2:30 PM">2:30 PM</option>
                                <option value="3:00 PM">3:00 PM</option>
                                <option value="3:30 PM">3:30 PM</option>
                                <option value="4:00 PM">4:00 PM</option>
                            </optgroup>
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
                        <button class="btn btn-success btn-rounded waves-effect waves-light" type="submit" name="submit" >Make an appointment</button>
              <!-- Grid card -->
                        </div>
                       
                        
              <!-- Grid column -->
            
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
          1,7
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
