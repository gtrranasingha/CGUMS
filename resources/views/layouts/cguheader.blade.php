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