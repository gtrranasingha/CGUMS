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