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