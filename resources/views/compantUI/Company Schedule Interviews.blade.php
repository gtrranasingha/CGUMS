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
    /* Sort the time slots into four separate rows (instead of columns) */
    .time-select-headline+.md-layout.md-align-center {
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
          <a class="dropdown-item" href="#">User Account</a>
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
  @if(Session::has('error_message'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error_message')}}
            </div>
            @endif
            <!-- Section: Docs link -->
            @php $id= Crypt::encrypt($jvdata->id); @endphp
            <form action="/company/company_dashbord/View_applications/accept_job/sendmail/{{$id}}" method="post">
            {{ csrf_field() }} 
            <section class="pb-5">
            
              <!-- Panel -->
              <div class="card text-center">
                <h3 class="card-header blue-gradient white-text">Schedule Interviews</h3>
                <div class="card-body">

                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-4">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="st_name" value="{{$jvdata->st_name}}" readonly>
                      <label for="form5" class="">Name of the Candidate</label>
                      <!-- <p style="text-align:left; color:red;"><small>Name of the Candidate is required</small></p> -->
                    </div>
                
                  </div>
                  <!-- Grid column -->
                  <div class="col-md-4">
                  
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="st_email" value="{{$jvdata->st_email }}" readonly>
                      <label for="form5" class="">Candidate E-mail address</label>
                      <!-- <p style="text-align:left; color:red;"><small>Candidate E-mail address is required</small></p> -->
                    </div>
                  
                  </div>
                
                  <!-- Grid column -->
                  <div class="col-md-4">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="position" value="{{$jvdata->jv_name }}" readonly>
                      <label for="form5" class="">Applied Position</label>
                      <!-- <p style="text-align:left; color:red;"><small>Applied Position is required</small></p> -->
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                </div>
                <div class="row">

                    <div class="col-lg-4">
                    
                      <div class="md-form form-sm mb-0">
                        <input type="text" id="form12" class="form-control form-control-sm" name="comp_name" value="{{$jvdata->comp_name }}" readonly>
                        <label for="form12" class="">Company Name</label>
                        <!-- <p style="text-align:left; color:red;"><small>Company Name field is required</small></p> -->
                      </div>
                    
                    </div>
                  
                  
                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form12" class="form-control form-control-sm" name="comp_email" value="{{$datas->email}}" readonly>
                      <label for="form12" class="">Company E-mail Address (Interview clarifications)</label>
                      <!-- <p style="text-align:left; color:red;"><small>E-mail Address field is required</small></p> -->
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form3" class="form-control form-control-sm" name="comp_tel" value="{{$datas->comp_tel}}" readonly>
                      <label for="form3" class="">Company Contact Number (Interview clarifications)</label>
                      <!-- <p style="text-align:left; color:red;"><small>Company Contact Number field is required</small></p> -->
                    </div>

                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->

                </div>                
                <div class="row">
                
                  <div class="col-lg-4">
                  
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form3" class="form-control form-control-sm" name="location">
                      <label for="form3" class="">Interview Location/Address/Link</label>
                      @error('location')
                      <p style="text-align:left; color:red;"><small>Interview Location/Address field is required</small></p>
                      @enderror
                    </div>
                  
                  </div>
                  <!-- Grid column -->
                  <div class="col-md-4">
                  
                    <div class="md-form form-sm mb-0">
                      <input placeholder="Selected date" type="text" id="date-picker-example" name="date" class="form-control datepicker">
                      <label for="date-picker-example" class="active">Select date</label>
                      @error('date')
                      <p style="text-align:left; color:red;"><small>Date field is required</small></p>
                      @enderror
                      </div>
                  
                  </div>

                  <div class="col-md-4">
                  
                  <div class="md-form form-sm mb-0">
                    <input type="time" id="default-picker" class="form-control" placeholder="Select time" name="time">
                    <label for="default-picker">Select Time</label>
                  </div>
                  @error('time')
                      <p style="text-align:left; color:red;"><small>Time field is required</small></p>
                      @enderror
                    </div>
                  
                  </div>




    <div class="text-center">
      <button  type="submit" class="btn blue-gradient btn-lg">Schedule Interview</button>
    </div>
                   </div>
                  </div>
                </div>
              <!-- Panel -->
            
            
            </section>
            </form>
            <!-- Section: Docs link -->


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

    $('.datepicker').pickadate({
        disable: [
          1, 7
        ], min: +1, max: +60


      })

        // Material Select Initialization
          $(document).ready(function () {
            $('.mdb-select').materialSelect();
          });

  </script>
</body>

</html>
