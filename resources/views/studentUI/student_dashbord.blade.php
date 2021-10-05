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
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/css/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>

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

        <li><a href="/welcome/programmes" class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i>Programmes</a>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Sessions<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="/welcome/sessions/cc_session" class="waves-effect">Career Counselling Session</a>
              </li>
             
              <li><a href="/welcome/sessions/mock_interviews" class="waves-effect">Trial interview</a>
              </li>
            </ul>
          </div>
        </li>
        
        <!-- Simple link -->
        <li><a href="/welcome/noties" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
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
    
      <section class="mt-md-4 pt-md-2 mb-5">
      
        <!-- First row -->
        <div class="row">
      
          <!-- First column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
      
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
      
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-business-time primary-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Job Vacancies</p>
                  <h4 class="font-weight-bold ">{{ $jobCounts }}</h4>
                </div>
              </div>
      
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar primary-color" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
      
            </div>
            <!-- Card -->
      
          </div>
          <!-- First column -->
      
          <!-- Second column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
      
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
      
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-landmark warning-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Programmes</p>
                  <h4 class="font-weight-bold ">{{$proCounts}}</h4>
                </div>
              </div>
      
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar warning-color accent-2" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
      
            </div>
            <!-- Card -->
      
          </div>
          <!-- Second column -->
      
          <!-- Third column -->
          <div class="col-xl-3 col-md-6 mb-md-0 mb-4">
      
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
      
              <!-- Card Data -->
              
              <div class="admin-up">
                <i class="fas fa-chart-pie red lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Sessions</p>
                  <h4 class="font-weight-bold ">{{ $sessionCounts }} </h4>
                </div>
              </div>
             
      
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 12.5%" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
      
            </div>
            <!-- Card -->
      
          </div>
          <!-- Third column -->
      
          <!-- Fourth column -->
          <div class="col-xl-3 col-md-6 mb-0">
      
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
      
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-chart-bar light-blue lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Applied Jobs</p>
                  <h4 class="font-weight-bold ">{{$applyjob}}</h4>
                </div>
              </div>
      
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 12.25%" aria-valuenow="12.25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
      
            </div>
            <!-- Card -->
      
          </div>
          <!-- Fourth column -->      
        </div>
        <!-- First row -->      
      </section>

      <section class="pb-3">
        <div class="row">
        
          <!-- Grid column -->
          <div class="col-lg-6 col-md-12">
          <div class="card mb-lg-0 mb-4">
        
          <div class="card-header white-text light-blue">
            <h5 class="font-weight-500 my-1">Applied Jobs</h5>
          </div>
        
          <div class="card-body">
        
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="font-weight-bold ">Status</th>
                    <th class="font-weight-bold ">Job Vacancy Name</th>
                    <th class="font-weight-bold ">Company</th>
                    <th class="font-weight-bold ">Date</th>
                  </tr>
                </thead>
                <tbody>
                @if(empty($jobs))
                      <tr>
                      <th class="font-weight-bold "></th>
                      <th class="font-weight-bold ">Empty Table</th>
                      <th class="font-weight-bold "></th>
                      </tr>
                      @else
                  @foreach($jobs as $job)
                  <tr>
                    @if(($job->confirmed)==0)
                    <td>Pending</td>
                    @else
                    <td class="info-color">Selected</td>
                    @endif
                    <td>{{$job->jv_name}}</td>
                    <td>{{$job-> 	comp_name}}</td>
                    <td class="date">
                      <span class="grey-text">
                      {{$job->updated_at}}
                      </span>
                    </td>
                  </tr>
                 @endforeach
                 @endif 
                </tbody>
              </table>
            </div>
        
          </div>
        
        </div>


        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card mb-lg-0 mb-4">
        
            <div class="card-header white-text warning-color">
              <h5 class="font-weight-500 my-1">Enrolled Programmes</h5>
            </div>
        
            <div class="card-body">
        
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      
                      <th class="font-weight-bold ">Programme Name</th>
                      <th class="font-weight-bold ">Type</th>
                      <th class="font-weight-bold ">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                      @if(empty($programmes))
                      <tr>
                      <th class="font-weight-bold "></th>
                      <th class="font-weight-bold ">Empty Table</th>
                      <th class="font-weight-bold "></th>
                      </tr>
                      @else
                      @foreach($programmes as $programme)
                      <tr>
                      <td>{{$programme->P_name}}</td>
                      <td>{{$programme->P_type }}</td>
                      <td class="date">
                        <span class="grey-text">
                        {{$programme->P_date}} {{$programme->P_time}}
                        </span>
                      </td>
                    </tr>
                    
                  @endforeach 
                  @endif 
                  </tbody>
                </table>
              </div>
        
            </div>
        
          </div>
        
        
        </div>
        </div>
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

