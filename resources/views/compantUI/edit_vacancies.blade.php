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

  </style>
</head>

<body class="fixed-sn white-skin">

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

            <!-- Section: Docs link -->
            <section class="pb-5">
            
              <!-- Panel -->
              @php $id= Crypt::encrypt($jobs->id); @endphp
            <form action="/company/company_dashbord/profile_view/view_jobsVacancis/view/edit/save/{{$id}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
              <div class="card text-center">
                <h3 class="card-header blue-gradient white-text">Edit Job Vacancy</h3>
                <div class="card-body">

                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="Job_name" value="{{$jobs->Jv_name}}">
                      <label for="form5" class="">Job Vacancy Name (Ex: Business Analyst Intern,HR Executive,etc.)</label>
                      @error('Job_name')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                      <select class="mdb-select md-form" name="job_type">
                      @if("Accounting & Finance"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" selected>Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("Corparate Management/Analyst"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst" selected>Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("Engineering(Mech/Civil/Elect/Marine)"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)" selected>Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("Healthcare/Nursing"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing"selected>Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("HR & Admin"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin" selected>HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("IT(Software/Network/Systems/QA)"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)" selected>IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("Manufacturing/Operations"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations" selected>Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("Sales & Marketing"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing" selected>Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                        @elseif("Teaching/Academic/Research"==$jobs->Jv_type)
                        <option value="">Job Vacancy Area</option>
                        <option value="Accounting & Finance" >Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research" selected>Teaching/Academic/Research</option>
                        @else
          
                        <option value="" disabled selected>Job Vacancy Area</option>
                        <option value="Accounting & Finance" selected>Accounting & Finance</option>
                        <option value="Corparate Management/Analyst">Corparate Management/Analyst</option>
                        <option value="Engineering(Mech/Civil/Elect/Marine)">Engineering(Mech/Civil/Elect/Marine)</option>
                        <option value="Healthcare/Nursing">Healthcare/Nursing</option>
                        <option value="HR & Admin">HR & Admin</option>
                        <option value="IT(Software/Network/Systems/QA)">IT(Software/Network/Systems/QA)</option>
                        <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Teaching/Academic/Research">Teaching/Academic/Research</option>
                      @endif
                      </select>@error('job_type')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    
                
                  </div>
                  <!-- Grid column -->
                
                </div>

                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" class="form-control form-control-sm" value="{{session('company_user')}}" name="comp_name" readonly>
                      <label  class="">Company Name</label>
                      <!-- <p style="text-align:left; color:red;"><small>Company Name field is required</small></p> -->
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form">
                    <input placeholder="Deadline" type="text" id="date-picker-example" class="form-control datepicker" name="deadline" value="{{$jobs->Jv_deadline}}">
                    <label for="date-picker-example" class="active">Deadline</label>
                    @error('deadline')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                </div>
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-12">

                    <div class="md-form md-outline">
                      <textarea type="text" id="form101" class="form-control" rows="3"  name="companay_description">{{$jobs->comp_description}}</textarea>
                      <label for="form101">Company Description</label>
                      @error('companay_description')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>

                  </div>
                  <!-- Grid column -->
                  <div class="col-md-12">
                  
                    <div class="md-form md-outline">
                      <textarea type="text" id="form101" class="form-control" rows="3" name="job_description">{{$jobs->Jv_description }}</textarea>
                      <label for="form101">Job Description</label>
                      @error('job_description')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                  
                  </div>

                  <!-- Grid column -->
                  <div class="col-md-12">
                  
                    <div class="md-form md-outline">
                      <textarea type="text" id="form101" class="form-control" rows="3" name="responsibilities"> {{$jobs->Jv_respon  }}</textarea>
                      <label for="form101">Responsibilities</label>
                      @error('responsibilities')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                  
                  </div>

                  <!-- Grid column -->
                  <div class="col-md-12">
                  
                    <div class="md-form md-outline">
                      <textarea type="text" id="form101" class="form-control" rows="3" name="qualifications"> {{$jobs->Jv_que}}</textarea>
                      <label for="form101">Qualifications</label>
                      @error('qualifications')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                  
                  </div>

                  <div class="col-md-12">
                  
                    <div class="md-form md-outline">
                      <textarea type="text" id="form101" class="form-control" rows="3" name="additional"> {{$jobs->Jv_addinfo   }}</textarea>
                      <label for="form101">Additional Information</label>
                      @error('additional')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                  
                  </div>
                
                  <!-- Grid column -->
                  <!-- Grid column -->
                            
                  </div> 
                </div> 

                <div class="col-md-12">

                
          
                

                </div>
                   <div class="text-center">
                   <button type="submit"  class="btn blue-gradient btn-lg">Add Job Vacancy</button><br>
                  </div>
                   </div>

                </div>
              <!-- Panel -->
            </form>
            
            </section>
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
        min: +7 , max: 365
      })

        // Material Select Initialization
          $(document).ready(function () {
            $('.mdb-select').materialSelect();
          });

  </script>
</body>

</html>
