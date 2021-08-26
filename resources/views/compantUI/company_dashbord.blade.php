<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn light-blue-skin">

  <!-- include('NAVBAR.PHP') -->
  <!-- Main Navigation -->

<!-- Main Navigation -->
<header>
    
<div id="slide-out" class="side-nav sn-bg-4 fixed">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li class="logo-sn waves-effect py-3">
      <div class="text-center">
        <a href="#" class="pl-0"><img src="\image\CGUMS.png" class="img-fluid"
            alt="Responsive image"></a>
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
        <li><a href="/company/company_dashbord" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-tachometer-alt"></i>
            Company Dashboard</a>
        </li>

        <li><a
            href="/company/company_dashbord/profile_view"
            class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Company Profile</a>
          <div class="collapsible-body">

          </div>
        </li>

        <li><a href="/company/company_dashbord/add_vacancies" class="collapsible-header waves-effect arrow-r"><i
              class="far fa-check-square"></i>Add Job Vacancy</a>
        </li>

        <li><a href="/company/company_dashbord/View_applications" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-table"></i>Job Appicants</a>
        </li>

        <li><a href="#" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-th-large"></i>Schedule Interviews</a>
        </li>

        <!-- Simple link -->
        <li><a href="#" class="collapsible-header waves-effect"><i class=" far fa-comments"></i>
            Messages</a></li>


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
  <b>{{session('company_user')}}</b>
  <div class="d-flex change-mode">

    <div class="ml-auto mb-0 mr-3 change-mode-wrapper">

    </div>

    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

      <!-- Dropdown -->

      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
            class="clearfix d-none d-sm-inline-block">Contact</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="/company/company_dashbord/profile_registration">Company Profile</a>
          @php $id= Crypt::encrypt(session('company_userId')); @endphp
          <a class="dropdown-item" href="/company/company_dashbord/update/change_password/{{$id}}">User Account</a>
        </div>
      </li>

      <li class="nav-item">
        <a  href="/company/logout" class="nav-link waves-effect"><i class="fas fa-sign-out-alt"></i> <span
            class="clearfix d-none d-sm-inline-block">Log Out</span></a>
      </li>

    </ul>
    <!--/Navbar links-->
  </div>
</nav>
<!-- /.Navbar -->

</header>
<!-- Main layout -->
<main>
  <div class="container-fluid">

    <section class="mt-md-4 pt-md-2 mb-5">

      <!-- First row -->
      <div class="row">

        <!-- First column -->
        <div class="col-md-4 mb-xl-0 mb-4">

          <!-- Card -->
          <div class="card card-cascade cascading-admin-card">

            <!-- Card Data -->
            <div class="admin-up">
              <i class="fas fa-user-graduate primary-color mr-3 z-depth-2"></i>
              <div class="data">
                <p class="text-uppercase">Job Applicants</p>
                <h4 class="font-weight-bold ">{{$ajCounts}}</h4>
              </div>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar primary-color" role="progressbar" style="width: 60%" aria-valuenow="60"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
          <!-- Card -->

        </div>
        <!-- First column -->

        <!-- Second column -->
        <div class="col-md-4 mb-xl-0 mb-4">

          <!-- Card -->
          <div class="card card-cascade cascading-admin-card">

            <!-- Card Data -->
            <div class="admin-up">
              <i class="far fa-list-alt warning-color mr-3 z-depth-2"></i>
              <div class="data">
                <p class="text-uppercase">Job Vacancies</p>
                <h4 class="font-weight-bold ">{{$jvCounts}}</h4>
              </div>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar warning-color accent-2" role="progressbar" style="width: 75%"
                  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
          <!-- Card -->

        </div>
        <!-- Second column -->

        <!-- Third column -->
        <div class="col-md-4 mb-md-0 mb-4">

          <!-- Card -->
          <div class="card card-cascade cascading-admin-card">

            <!-- Card Data -->
            <div class="admin-up">
              <i class="fas fa-user-tie red lighten-1 mr-3 z-depth-2"></i>
              <div class="data">
                <p class="text-uppercase">Selected Applicants</p>
                <h4 class="font-weight-bold ">{{$selectjobCounts}}</h4>
              </div>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar red accent-2" role="progressbar" style="width: 15%" aria-valuenow="15"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
          <!-- Card -->

        </div>
        <!-- Third column -->

        <!-- Fourth column -->
        
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
              <h5 class="font-weight-500 my-1">Selected Applicants</h5>
            </div>

            <div class="card-body">

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bold ">Interview Status</th>
                      <th class="font-weight-bold ">Job Vacancy Name</th>
                      <th class="font-weight-bold ">Company</th>
                      <th class="font-weight-bold ">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Pending</td>
                      <td>Intern - SE</td>
                      <td>IFS</td>
                      <td class="date">
                        <span class="grey-text">
                          21/09/2021
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="info-color">Successful</td>
                      <td>Intern - BA</td>
                      <td>MAS</td>
                      <td class="date">
                        <span class="grey-text">
                          02/08/2021
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

          </div>


        </div>
        <div class="col-lg-6 col-md-12">


          <div class="card text-center mb-4 pt-4 pb-3 blue-gradient white-text">
            <i class="fas fa-user-graduate fa-3x mb-3"></i>
            <h4 class="h4-responsive">{{$ajCounts -$newcomer}} New Applicants</h4>
          </div>
          <div class =".col-6">
          <a href="/company/company_dashbord/View_applications"><p class="text-center"><button class="btn btn-sm blue-gradient">Click Here to view all applicants</button></p></a>
        </div>
        </div>
      </div>
    </section>
  </div>
</main>

    <footer class="page-footer pt-0 mt-5">
    
      <!-- Copyright -->
      <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
          © 2021 Copyright: Career Guidance Unit - <a href="https://ruh.ac.lk" target="_blank"> University of Ruhuna </a>
    
        </div>
      </div>
      <!-- Copyright -->
    
    </footer>
  <!-- Main layout -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

        // Material Select Initialization
          $(document).ready(function () {
            $('.mdb-select').materialSelect();
          });

  </script>
</body>

</html>
