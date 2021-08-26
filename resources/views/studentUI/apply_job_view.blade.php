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
   @extends('layouts.header')
  <!--Main Navigation-->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">

      <section class="mb-4">
      
        <div class="card">
          <div class="card-body d-flex justify-content-between">
            <h4 class="h4-responsive mt-3"><Strong>{{$jobs->Jv_name}}</Strong></h4>
      
            <div>
              <a href="/welcome/job_vacancies/apply/request/{{$jobs->id}}" class="btn btn-success">Apply Now</a>
              <a href="#" class="btn btn-info"> Remind Me Later</a>
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
                      At IFS you will work in a growing, global enterprise software company where informal hierarchies promote simplicity and
                      trust with responsibility. We strive to deepen our expertise by taking on challenging and varying work assignments in a
                      collaborative environment together with committed colleagues. With professionalism and a strong customer focus in
                      everything we do, from R&D to Sales and Consultancy, we are proud to serve world-class customers all over the globe with
                      our leading products.We are an equal opportunity employer and value diversity at our company.
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
