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
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">

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
  @extends('layouts.cheader')
<!-- Main Navigation -->

<!-- Main layout -->
<main>
  <div class="container-fluid">

<section>
@foreach($datas as $pass)
  <!-- Grid row -->
  <div class="row ml-auto"></div>

    <!-- Grid column -->
    <div class=".col-12 .col-md-8 col d-flex justify-content-center">

      <!-- Section: Basic Info -->
      <section class="card profile-card mb-4 text-center" >
        <div class="avatar z-depth-1-half">
          <img src="/logo/{{$pass->logo}}" class="img-fluid" >
        </div>
        <!-- Card content -->

        <div class="card-body">
          <!-- Title + Website in the href area-->
          <h4 class="card-title"><strong><a href="https://www.ifs.com/">{{$pass->Com_name}}</a></strong></h4>
          <p class="dark-grey-text text-justify">{{$pass->Com_description}}</p>
          <hr>
          <div class ="row">
          <!-- Company Address -->
          <div class="col-lg-4 col-md-6 mb-4 text-muted">
            <i class="fas fa-map-marker-alt"></i> {{$pass->comp_address}}
          </div>

          <!-- Company Email -->
          <div class="col-lg-4 col-md-6 mb-4 text-muted">
            <i class="fas fa-envelope"></i> {{$pass->email}}
          </div>
          
          <!-- Company Contact Number -->
          <div class="col-lg-4 col-md-6 mb-4 text-muted">
            <i class="fas fa-phone"></i>{{$pass->comp_tel}}
          </div>
          
          </div>

          <a class="btn blue-gradient btn-rounded justify-content-center" href="/company/company_dashbord/profile_view/view_jobsVacancis">View Job Vacancies</a>

          </div>

      </section>

@endforeach
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
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
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
