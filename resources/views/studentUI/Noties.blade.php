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
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">

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

<section class="mb-5">
<div class="card text-center">
<h3 class="card-header blue-gradient white-text">Notice</h3>
</div>
<br>

  <div class="row">
  @foreach($noties_datas as $noties_data)
    <div class="col-md-12">

      <!-- Card -->
      <div class="card card-image"
        style="background-image: url('E:/New folder/Temp/Admin Dashboard Template/img/Leadership.jpg');">

        <!-- Content -->
        <div class="text-white text-center align-items-center rgba-black-strong py-5 px-4">
          <div>
          <div class="col-md-4">
           <p>{{$noties_data->created_at}}</p>
          </div>
            <h3 class="card-title pt-4 pb-3 font-weight-bold "><strong>"{{$noties_data->title}}"</strong></h3>
            <p>{{$noties_data->note}}
                  </p>
            <p><a href="{{$noties_data->link1}}">{{$noties_data->link1}}</a><br><a href="{{$noties_data->link1}}">{{$noties_data->link2}}</a><br>
            @if(!empty($noties_data->attachment))
        <div class="col-md-4">

          <div >
            <a href="/welcome/noties/{{$noties_data->attachment}}" class="btn blue-gradient btn m-0">Download
              Attachment</a>
          </div>
        </div>
        @else
        <div class="col-md-4">

          <div>
          
          </div>
        </div>

        @endif
          </div>
        </div>
        <!-- Content -->
      </div>
      <!-- Card -->
      <br>
    </div>
  @endforeach

   
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
