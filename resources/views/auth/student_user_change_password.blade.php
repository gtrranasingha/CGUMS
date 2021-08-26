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
/* Sort the time slots into four separate rows (instead of columns) */
.time-select-headline + .md-layout.md-align-center {
  flex-direction: column;
}

ul.time-listing {
  justify-content: center;
  display: flex;
  flex-wrap: wrap;
}
/* ---------------------------------------- */
  </style>
</head>

<body class="fixed-sn white-skin">

   <!--Main Navigation-->
   @extends('layouts.header')
  <!--Main Navigation-->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">
    
      <div class="col-lg-12">
    
        <!-- Card -->
        <div class="card card-cascade narrower">
    
          <!-- Card image -->
          <div class="view view-cascade card-header purple-gradient">
            <h5 class="mb-0 font-weight-bold white-text text-center">User Account</h5>
          </div>
          <!-- Card image -->
    
          <!-- Card content -->
          <div class="card-body card-body-cascade">
          <div class="col-md-12">
          @if(Session::has('error_message'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error_message')}}
            </div>
            @endif
          </div>
            <!-- Edit Form -->
            <form method="post" action="/welcome/change_password/savedata/{{$student_user_data->id}}">
                        {{csrf_field()}}
              <!-- First row -->
              <input type="hidden" class="form-control " id="exampleInputPassword1" value="{{$student_user_data->id}}" name="name">
                <div class="row">
                <!-- Second column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form2" class="form-control form-control-sm" value="{{session('student_id')}}" readonly>
                    <label for="form2" >Username</label>
                  </div>
                </div>
              
    
              
                <div class="col-md-6">
    
                  <!-- Password validation -->
                  <div class="md-form mb-0">
                    <i class="fas fa-user-lock prefix"></i>
                    <input type="password"  name="oldpassword" class="form-control form-control-sm">
                    <label for="form3" >Type your current password</label>
                    @if ($errors->has('oldpassword'))
                        <span class="text-danger">{{ $errors->first('oldpassword') }}</span>
                    @endif
                  </div>
                </div>
    
                </div>
              <!-- First row -->
              <div class="row">
                <div class="col-md-6 mb-4">
    
                  <!-- Password validation -->
                  <div class="md-form mb-0">
                    <i class="fas fa-unlock prefix"></i>
                    <input type="password" id="form4" name="newpassword" class="form-control form-control-sm">
                    <label for="form4" >New password</label>
                    @if ($errors->has('newpassword'))
                        <span class="text-danger">{{ $errors->first('newpassword') }}</span>
                    @endif
                  </div>
                  
                </div>
                
    
                <div class="col-md-6 mb-4">
    
                  <!-- Password validation -->
                  <div class="md-form mb-0">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" name="confirmpassword" id="form5" class="form-control form-control-sm">
                    <label for="form5" >Confirm New password</label>
                    @if ($errors->has('confirmpassword'))
        <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
     @endif
                  </div>
                </div>
    
              </div>
              <!-- Third row -->
    
              <!-- Fourth row -->
              <div class="row">
                <div class="col-md-12 text-center my-4">
                  <input type="submit" value="Update User Account" class="btn purple-gradient btn-rounded">
                </div>
              </div>
              <!-- Fourth row -->
    
            </form>
            <!-- Edit Form -->
    
          </div>
          <!-- Card content -->
    
        </div>
        <!-- Card -->
    
      </div>
    </div>
  </main>
  <!-- Main layout -->
<br>
<br>
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

    $('.datepicker').pickadate({
        disable: [
          1,2,3,5,6,7
        ], min: +1, max: +60

         
      })

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
