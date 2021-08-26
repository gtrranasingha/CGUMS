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
  <!--Main Navigation-->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">

      <section class="mb-4">
      
        <div class="card">
          <div class="card-body d-flex justify-content-between">
            <h4 class="h4-responsive mt-3"><Strong>{{$jobs->Jv_name}}</Strong></h4>
            @php $id= Crypt::encrypt($jobs->id); @endphp
            <div>
              <a href="/company/company_dashbord/profile_view/view_jobsVacancis/view/edit/{{$id}}" class="btn btn-success">Edit</a>
              <a href="/company/company_dashbord/profile_view/view_jobsVacancis/view/delete/{{$id}}" class="btn btn-danger">Delete</a>
            </div>
      
          </div>
        </div>
      
      </section>

<section>
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
              
                <!-- Accordion card -->
                <div class="card">
              
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingOne1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                      aria-controls="collapseOne1">
                      <h5 class="mb-0">
                        Company Description<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
              
                  <!-- Card body -->
                  <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                    data-parent="#accordionEx">
                    <div class="card-body">
                    {{$jobs->comp_description  }}
                    </div>
                  </div>
                </div>
                <!-- Accordion card -->
              
                <!-- Accordion card -->
                <div class="card">
              
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingTwo2">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false"
                      aria-controls="collapseTwo2">
                      <h5 class="mb-0">
                        Job Description<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
              
                  <!-- Card body -->
                  <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                    <div class="card-body">
                     {{$jobs->Jv_description }}
                    </div>
                  </div>
                </div>
                <!-- Accordion card -->
                <div class="card">
                
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false"
                      aria-controls="collapseThree3">
                      <h5 class="mb-0">
                        Responsibilities<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                
                  <!-- Card body -->
                  <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                    <div class="card-body">
                    {{$jobs->Jv_respon  }}
                    </div>
                  </div>
                </div>
                <!-- Accordion card -->
                <div class="card">
                
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="heading4">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse4" aria-expanded="false"
                      aria-controls="collapse4">
                      <h5 class="mb-0">
                        Qualifications<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                
                  <!-- Card body -->
                  <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx">
                    <div class="card-body">
                    {{$jobs->Jv_que   }}
                    </div>
                  </div>
                </div>
                <!-- Accordion card -->
                <div class="card">
                
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="heading5">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse5" aria-expanded="false"
                      aria-controls="collapse5">
                      <h5 class="mb-0">
                        Additional Information<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                
                  <!-- Card body -->
                  <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx">
                    <div class="card-body">
                    {{$jobs->Jv_addinfo   }}
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
  <script src="/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
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
