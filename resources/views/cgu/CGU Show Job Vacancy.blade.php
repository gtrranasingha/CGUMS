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

    .map-container {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }
    .map-container iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  @extends('layouts.cguheader')
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>



      

      <!-- Section: Blog v.2 -->
      <section class="text-center mb-5">
     
        
        <div class="row">
        @foreach($passdata as $pass)
          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

            <!-- Featured image -->
            <div class="view overlay rgba-white-slight z-depth-1-half mb-2">
              <img src="/logo/{{$pass->img_path}}" class="img-fluid" alt="First sample image">
              <a>
                <div class="mask"></div>
              </a>
            </div>

            <!-- Excerpt -->
            <a class="text-info"><h6 class="py-1 mt-3 font-weight-500"><i class="fas fa-laptop mr-2"></i>{{$pass->Jv_type}}</h6></a>
            <h4 class="mb-3 font-weight-500">{{$pass->Jv_name}}</h4>
            <p>by <a href="https://www.ifs.com/lk/" class="font-weight-500">{{$pass->comp_name}}</a>, {{$pass->Jv_deadline}}</p>
              <a href="/cc/career_counsellor_dashbord/job_vacancies/view/{{$pass->id}}" class="btn btn-success btn-rounded">View</a>
              
            

          </div>
          <!-- Grid column -->
          @endforeach
        

        </div>
        
        <!-- Grid row -->

      </section>
      <!-- Section: Blog v.2 -->

      

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

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
       $('[data-toggle="tooltip"]').tooltip()
    })

  </script>

  <!-- Charts -->
  <script>

    // Small chart
    $(function () {
      $('.min-chart#chart-sales').easyPieChart({
        barColor: "#FF5252",
        onStep: function (from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    });

    // Main chart
    var ctxL = document.getElementById("lineChart-main").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                fillColor: "#fff",
                backgroundColor: 'rgba(255, 255, 255, .3)',
                borderColor: 'rgba(255, 255, 255)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        },
        options: {
            legend: {
                labels: {
                    fontColor: "#fff",
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: true,
                        color: "rgba(255,255,255,.25)"
                    },
                    ticks: {
                        fontColor: "#fff",
                    },
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        display: true,
                        color: "rgba(255,255,255,.25)"
                    },
                    ticks: {
                        fontColor: "#fff",
                    },
                }],
            }
        }
    });

  </script>

  <!-- JVectorMap -->
  <link rel="stylesheet" href="../../js/vendor/jvectormap/jquery-jvectormap-2.0.3.css" type="text/css" media="screen" />
  <script src="../../js/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="../../js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>

  <script>

    $(function () {

      colors = {};

      colors['ca'] = '#A4D886';
      colors['ru'] = '#FCECA2';
      colors['cn'] = '#F9573B';
      colors['us'] = '#87CEEB';
      colors['jp'] = '#34BD0E';
      colors['au'] = '#BCC7FC';
      colors['kz'] = '#D4624E';
      colors['de'] = '#34BD0E';

      $('#world-map').vectorMap({
        colors: colors,
        hoverOpacity: 0.7, // opacity for :hover
        hoverColor: false
      });

    });

  </script>
  <!-- JVectorMap -->

</body>

</html>
