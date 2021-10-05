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

            <!-- Section: Docs link -->
            <section class="pb-5">
            
              <!-- Panel -->
              <form action="/company/company_dashbord/profile_registration/savedata" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }} 
              <div class="card text-center">
                <h3 class="card-header blue-gradient white-text">Company Profile Registration</h3>
                <div class="card-body">
                <h5 class="card-header aqua-gradient white-text">Company Details</h5>
                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="comp_name" value="{{session('company_user')}}" readonly>
                      <label for="form5" class="">Company Name</label>
                      
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="web_site">
                      <label for="form5" class="">Company Website - URL</label>
                      @error('web_site')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                </div>
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form12" class="form-control form-control-sm" name="email">
                      <label for="form12" class="">Company E-mail Address</label>
                      @error('email')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form3" class="form-control form-control-sm" name="contact_number">
                      <label for="form3" class="">Company Contact Number</label>
                      @error('contact_number')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form4" class="form-control form-control-sm" name="reg_number">
                      <label for="form4" class="disabled">Company Registration Number</label>
                      @error('reg_number')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>                
                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-12">
                  
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="tadd" class="form-control form-control-sm" name="address">
                      <label for="tadd" class="">Office Address(Corprate Office/Head Office)</label>
                      @error('address')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                  
                  </div>

                  <div class="col-md-12">
                  
                    <div class="md-form md-outline">
                      <textarea type="text" id="form101" class="form-control" rows="3" name="description"></textarea>
                      <label for="form101">Company Description</label>
                      @error('description')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                  
                  </div>

                  <div class="col-md-12">
                  
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="image" accept="image/png, image/jpeg"> 
                      <label class="custom-file-label" for="company logo">Upload your company logo here [Maximum File Size - 2MB]</label>
                    </div>
                    @error('logo')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                    

                    </div>
                   
                    <div class="text-center">
                    <button type="submit"  class="btn blue-gradient btn-lg">Submit</button>
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
