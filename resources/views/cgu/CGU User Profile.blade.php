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
      background-color: rgb(24, 41, 136);
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
            <a href="#" class="pl-0"><img src="E:\New folder\Temp\Admin Dashboard Template\img\CGUMS.png"
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
            <li><a href="../dashboards/v-3.html" class="collapsible-header waves-effect arrow-r"><i
                  class="fas fa-tachometer-alt"></i>
                CGU Dashboard</a>
            </li>
  

              
            </li -->
  
            <li><a
                href="file:///E:/New%20folder/Temp/Admin%20Dashboard%20Template/html%20-%20CGUMS/dashboards/Programmes.html"
                class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i>Programme Management</a>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i>Session Management<i
                  class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../tables/basic.html" class="waves-effect">Career Counselling Session</a>
                  </li>
                  <li><a href="../tables/extended.html" class="waves-effect">CV Screening</a>
                  </li>
                  <li><a href="../tables/datatables.html" class="waves-effect">Mock interview</a>
                  </li>
                </ul>
              </div>
            </li>
  
            <li><a href="#"
                class="collapsible-header waves-effect arrow-r"><i class="far fa-building"></i>Company Management</a>
            </li>
            <!-- Simple link -->
            <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
                Manage Notices</a></li>
  
            <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i
                  class=" fas fa-th-large"></i>
                Job Vacancies</a></li>
            
            <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-comments"></i>
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
  
      <div class="d-flex change-mode">
  
  
  
        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
  
          <!-- Dropdown -->
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">User Account</a>
            </div>
          </li>
  
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="fas fa-sign-out-alt"></i> <span
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

    <div class="col-lg-12">

      <!-- Card -->
      <div class="card card-cascade narrower">

        <!-- Card image -->
        <div class="view view-cascade card-header purple-gradient">
          <h5 class="mb-0 font-weight-bold white-text text-center">User Account</h5>
        </div>
        <!-- Card image -->
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            @if(Session::has('error_message'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error_message')}}
            </div>
            @endif
        <!-- Card content -->
        <div class="card-body card-body-cascade">

          <!-- Edit Form -->
          <form action="/cc/career_counsellor_dashbord/change_password/savedata/{{$counsellor_user_data->id}}" method="post">
            <!-- First row -->
            {{csrf_field()}}
            <div class="row">

              <!-- First column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text"  class="form-control validate" value="{{$counsellor_user_data->name}}" readonly>
                  <label  >Username</label>
                </div>
              </div>

              <!-- Second column -->
              <div class="col-md-6">
              <div class="md-form mb-0">
                <i class="fas fa-user-lock prefix"></i>
                <input type="password"   name="oldpassword" class="form-control validate">
                <label  >Type current password</label>
                @if ($errors->has('oldpassword'))
                    <span class="text-danger">{{ $errors->first('oldpassword') }}</span>
                @endif
              </div>
              </div>
            </div>

            <!-- First row -->
            <div class="row">
              <div class="col-md-6 mb-4">

                <!-- Password validation -->
                <div class="md-form mb-0">
                  <i class="fas fa-unlock-alt prefix"></i>
                  <input type="password"  name="newpassword" class="form-control validate">
                  <label >New password</label>
                        @if ($errors->has('newpassword'))
                              <span class="text-danger">{{ $errors->first('newpassword') }}</span>
                          @endif
                </div>
              </div>

              <div class="col-md-6 mb-4">

                <!-- Password validation -->
                <div class="md-form mb-0">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password"   name="confirmpassword" class="form-control validate">
                  <label  >Confirm New password</label>
                  @if ($errors->has('confirmpassword'))
                      <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
                  @endif
                </div>
              </div>

            </div>
            <!-- Third row -->

            <!-- Fourth row -->
            <div class="row">
              <div class="col-md-12 text-center my-4">
                <input type="submit" value="Update User Account" class="btn purple-gradient btn-rounded">
              </div>
            </div>
            <!-- Fourth row -->

          </form>
          <!-- Edit Form -->

        </div>
        <!-- Card content -->

      </div>
      <!-- Card -->

    </div>
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

