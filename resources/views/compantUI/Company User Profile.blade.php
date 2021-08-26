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
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/css/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>
.avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
}
  </style>
</head>

<body class="fixed-sn light-blue-skin">

  <!-- include('NAVBAR.PHP') -->
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
<!-- Main Navigation -->

<!-- Main layout -->
<main>

  <div class="container-fluid">

      <div class="col-lg-12">
      
        <!-- Card -->
        <div class="card card-cascade narrower">
      
          <!-- Card image -->
          <div class="view view-cascade card-header blue-gradient">
            <h5 class="mb-0 font-weight-bold white-text text-center">User Account</h5>
          </div>
          <!-- Card image -->
      
          <!-- Card content -->
          <div class="card-body card-body-cascade">
          <div class="col-md-12">
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
          </div>
      
            <!-- Edit Form -->
           <form action="/company/company_dashbord/update/change_password/savedata/{{session('company_userId')}}" method="post">
            {{csrf_field()}}
              <!-- First row -->
              <input type="hidden" class="form-control" id="exampleInputPassword1" value="{{session('company_userId')}}" name="name">
                <div class="row">
                <!-- Second column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form2" class="form-control form-control-sm" value="{{session('company_user')}}" readonly>
                    <label for="form2" >Username</label>
                  </div>
                </div>
              
    
              
                <div class="col-md-6">
    
                  <!-- Password validation -->
                  <div class="md-form mb-0">
                    <i class="fas fa-user-lock prefix"></i>
                    <input type="password"  name="oldpassword" class="form-control form-control-sm">
                    <label for="form3" >Type your current password</label>
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
                    <i class="fas fa-unlock prefix"></i>
                    <input type="password" id="form4" name="newpassword" class="form-control form-control-sm">
                    <label for="form4" >New password</label>
                    @if ($errors->has('newpassword'))
                        <span class="text-danger">{{ $errors->first('newpassword') }}</span>
                    @endif
                  </div>
                  
                </div>
                
    
                <div class="col-md-6 mb-4">
    
                  <!-- Password validation -->
                  <div class="md-form mb-0">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" name="confirmpassword" id="form5" class="form-control form-control-sm">
                    <label for="form5" >Confirm New password</label>
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
<br>
<br>
<br>
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
