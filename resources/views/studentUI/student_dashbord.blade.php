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
   
  <!--Main Navigation-->
  @extends('layouts.header')
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
                <i class="fas fa-business-time primary-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Job Vacancies</p>
                  <h4 class="font-weight-bold ">{{ $jobCounts }}</h4>
                </div>
              </div>
      
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar primary-color" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
      
            </div>
            <!-- Card -->
      
          </div>
          <!-- First column -->
      
          <!-- Second column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
      
            <!-- Card -->
            <div class="card card-cascade cascading-admin-card">
      
              <!-- Card Data -->
              <div class="admin-up">
                <i class="fas fa-landmark warning-color mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Programmes</p>
                  <h4 class="font-weight-bold ">{{$proCounts}}</h4>
                </div>
              </div>
      
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar warning-color accent-2" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
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
                  <p class="text-uppercase">Sessions</p>
                  <h4 class="font-weight-bold ">{{ $sessionCounts }} </h4>
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
                <i class="fas fa-chart-bar light-blue lighten-1 mr-3 z-depth-2"></i>
                <div class="data">
                  <p class="text-uppercase">Applied Jobs</p>
                  <h4 class="font-weight-bold ">{{$applyjob}}</h4>
                </div>
              </div>
      
              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 12.25%" aria-valuenow="12.25"
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
          <div class="col-lg-6 col-md-12">
          <div class="card mb-lg-0 mb-4">
        
          <div class="card-header white-text light-blue">
            <h5 class="font-weight-500 my-1">Applied Jobs</h5>
          </div>
        
          <div class="card-body">
        
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="font-weight-bold ">Status</th>
                    <th class="font-weight-bold ">Job Vacancy Name</th>
                    <th class="font-weight-bold ">Company</th>
                    <th class="font-weight-bold ">Date</th>
                  </tr>
                </thead>
                <tbody>
                @if(empty($jobs))
                      <tr>
                      <th class="font-weight-bold "></th>
                      <th class="font-weight-bold ">Empty Table</th>
                      <th class="font-weight-bold "></th>
                      </tr>
                      @else
                  @foreach($jobs as $job)
                  <tr>
                    @if(($job->confirmed)==0)
                    <td>Pending</td>
                    @else
                    <td class="info-color">Selected</td>
                    @endif
                    <td>{{$job->jv_name}}</td>
                    <td>{{$job-> 	comp_name}}</td>
                    <td class="date">
                      <span class="grey-text">
                      {{$job->updated_at}}
                      </span>
                    </td>
                  </tr>
                 @endforeach
                 @endif 
                </tbody>
              </table>
            </div>
        
          </div>
        
        </div>


        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card mb-lg-0 mb-4">
        
            <div class="card-header white-text warning-color">
              <h5 class="font-weight-500 my-1">Enrolled Programmes</h5>
            </div>
        
            <div class="card-body">
        
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      
                      <th class="font-weight-bold ">Programme Name</th>
                      <th class="font-weight-bold ">Type</th>
                      <th class="font-weight-bold ">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                      @if(empty($programmes))
                      <tr>
                      <th class="font-weight-bold "></th>
                      <th class="font-weight-bold ">Empty Table</th>
                      <th class="font-weight-bold "></th>
                      </tr>
                      @else
                      @foreach($programmes as $programme)
                      <tr>
                      <td>{{$programme->P_name}}</td>
                      <td>{{$programme->P_type }}</td>
                      <td class="date">
                        <span class="grey-text">
                        {{$programme->P_date}} {{$programme->P_time}}
                        </span>
                      </td>
                    </tr>
                    
                  @endforeach 
                  @endif 
                  </tbody>
                </table>
              </div>
        
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
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
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

    $(document).ready(function () {
        $('.mdb-select').materialSelect();
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

