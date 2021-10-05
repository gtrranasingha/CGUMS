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
  <!-- DataTables.net  -->
  <link rel="stylesheet" type="text/css" href="/css/addons/datatables.min.css">
  <link rel="stylesheet" href="/css/addons/datatables-select.min.css">
  <!-- Selected/Not Selected  -->
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
    rel="stylesheet">


  <!-- Your custom styles (optional) -->
  <style>
    .th {
      background-color: rgb(137, 14, 79);
      color: white;
    }

  </style>
</head>

<body class="fixed-sn deep-purple-skin">

  <!-- include('NAVBAR.PHP') -->
  <!-- Main Navigation -->
    <header>
    
      <!-- Sidebar navigation -->
      <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
          <!-- Logo -->
          <li class="logo-sn waves-effect py-3">
            <div class="text-center">
              <a href="#" class="pl-0"><img src="\image\CGUMS.png"
                  class="img-fluid" alt="Responsive image"></a>
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
              <li><a href="/cc/career_counsellor_dashbord" class="collapsible-header waves-effect arrow-r"><i
                    class="fas fa-tachometer-alt"></i>
                  CGU Dashboard</a>
              </li>
    
    
    
          </li -->
    
          <li><a
              href="/cc/career_counsellor_dashbord/programme"
              class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i>Programme Management</a>
          </li>
          <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i>Session Management<i
                class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="/cc/career_counsellor_dashbord/session/Career Counselling Session" class="waves-effect">Career Counselling Session</a>
                </li>
                
                <li><a href="/cc/career_counsellor_dashbord/session/Mock interview" class="waves-effect">Mock interview</a>
                </li>
              </ul>
            </div>
          </li>
    
          <li><a href="#" class="collapsible-header waves-effect arrow-r"><i class="far fa-building"></i>Company
              Management<i
                class="fas fa-angle-down rotate-icon"></i></a>

                <div class="collapsible-body">
              <ul>
                <li><a href="/cc/career_counsellor_dashbord/company/register" class="waves-effect">Company Registration</a>
                </li>
                <li><a href="/cc/career_counsellor_dashbord/company/view" class="waves-effect">View Companies</a>
                </li>
               
                </li>
              </ul>
            </div>
          </li>
          <!-- Simple link -->
          <li><a href="/cc/career_counsellor_dashbord/noties" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
              Manage Notices</a></li>
    
          <li>
            <a href="/cc/career_counsellor_dashbord/job_vacancies" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
              Job Vacancies</a></li>
    
          <!-- <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-comments"></i>
              Messages</a></li> -->
    
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
    
        <div class="d-flex change-mode">
    
    
    
          <!--Navbar links-->
          <ul class="nav navbar-nav nav-flex-icons ml-auto">
    
            <!-- Dropdown -->
            <li class="nav-item">
              <a class="nav-link waves-effect"> <span
                  class="clearfix d-none d-sm-inline-block">{{session('counsellor_user')}}</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              @php $id= Crypt::encrypt(session('counsellor_userId')); @endphp
                <a class="dropdown-item" href="/cc/career_counsellor_dashbord/change_password/{{$id}}">User Account</a>
              </div>
            </li>
    
            <li class="nav-item">
              <a class="nav-link waves-effect" href="/cc/logout"><i class="fas fa-sign-out-alt"></i> <span
                  class="clearfix d-none d-sm-inline-block">Log Out</span></a>
            </li>
    
          </ul>
          <!--/Navbar links-->
        </div>
      </nav>
      <!-- /.Navbar -->
    
    </header>
  <!-- Main Navigation -->

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
                <i class="fas fa-landmark warning-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Registered<br>Companies<br>.</p>
                  <h3 class="font-weight-bold ">{{$comp_count}}</h3>
                </div>
              </div>
  
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar warning-color" role="progressbar" style="width:8%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
            </div>
            <!-- Card -->.
  
          </div>
          <!-- First column -->
  
          <!-- Second column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
  
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
  
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-landmark unique-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Programmes<br><br>.</p>
                  <h3 class="font-weight-bold ">{{$prog_count}}</h3>
                </div>
              </div>
  
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar Unique-color accent-2" role="progressbar" style="width: 50%"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                  <p class="text-uppercase">Career<br>Counselling <br>Appointments</p>
                  <h3 class="font-weight-bold ">{{$ccsession_count}}</h3>
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
                <i class="fas fa-user-tie light-blue lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Mock<br>Interview<br>appointments</p>
                  <h3 class="font-weight-bold ">{{$all_session-$ccsession_count}}</h3>
                </div>
              </div>
  
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 12.25% " aria-valuenow="12.25"
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
          <div class="col-lg-6">

            <div class="card text-center mb-4 pt-4 pb-3 blue-gradient white-text">
              <i class="fas fa-users fa-3x mb-3"></i>
              <h4 class="h4-responsive">Total Student Users</h4>
              <h2 class="h2-responsive">{{$all_student}}</h2>
            </div>
  
          </div>
          <div class="col-lg-3">
            <div class="card text-center mb-4 pt-4 pb-3 peach-gradient white-text">
              <i class="fas fa-user-check fa-3x mb-3"></i>
              <h4 class="h4-responsive">Active CGU Users</h4>
              <h2 class="h2-responsive">{{$all_cgu}}</h2>
            </div>
            </div>
 
            <div class="col-lg-3">
              <div class="card text-center mb-4 pt-4 pb-3 aqua-gradient white-text">
                <i class="fas fa-calendar-plus fa-3x mb-3"></i>
                <h4 class="h4-responsive">Available Programmes</h4>
                <h2 class="h2-responsive">10</h2>
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
  <script src="/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <!-- DataTables  -->
  <script type="text/javascript" src="/js/addons/datatables.min.js"></script>
  <!-- DataTables Select  -->
  <script type="text/javascript" src="/js/addons/datatables-select.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    $(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $('#dtMaterialDesignExample').DataTable();

    $('#dt-material-checkbox').dataTable({

      columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
      }],
      select: {
        style: 'os',
        selector: 'td:first-child'
      }
    });

    $('#dtMaterialDesignExample_wrapper, #dt-material-checkbox_wrapper').find('label').each(function () {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').find(
      'input').each(function () {
        $('input').attr("placeholder", "Search");
        $('input').removeClass('form-control-sm');
      });
    $('#dtMaterialDesignExample_wrapper .dataTables_length, #dt-material-checkbox_wrapper .dataTables_length').addClass(
      'd-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').addClass(
      'md-form');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').removeClass(
      'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select, #dt-material-checkbox_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filte, #dt-material-checkbox_wrapper .dataTables_filterr').find(
      'label').remove();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
    });

  </script>
</body>

</html>

