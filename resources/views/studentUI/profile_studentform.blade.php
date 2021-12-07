<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile Registration</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/css1/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/css1/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- include('NAVBAR.PHP') -->
  <!-- Main Navigation -->
    @extends('layouts.header')
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">
          <form action="{{ route('profiledata')}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
            <!-- Section: Docs link -->
            <section class="pb-5">
            
              <!-- Panel -->
              <div class="card text-center">
                <h3 class="card-header purple-gradient white-text">Profile Registration</h3>
                <div class="card-body">
                <h5 class="card-header aqua-gradient white-text">Personal Details</h5>
                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="first_name">
                      <label for="form5" class="">First name</label>
                      @error('first_name')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="last_name">
                      <label for="form5" class="">Last name</label>
                      @error('last_name')
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
                      <input type="text" id="form12" class="form-control form-control-sm" name="per_email">
                      <label for="form12" class="">Personal e-mail address</label>
                      @error('per_email')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form3" class="form-control form-control-sm" name="mobile">
                      <label for="form3" class="">Mobile Number</label>
                      @error('mobile')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form4" class="form-control form-control-sm" name="nic">
                      <label for="form4" class="disabled">NIC Number</label>
                      @error('nic')
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
                      <input type="text" id="padd" class="form-control form-control-sm" name="per_address">
                      <label for="padd" class="">Permanant Address</label>
                      @error('per_address')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                
                  </div>
                  <!-- Grid column -->
                  <div class="col-md-12">
                  
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="tadd" class="form-control form-control-sm" name="mob_address">
                      <label for="tadd" class="">Temporary Address (Ex: Hostel/Boarding Place address)</label>
                      @error('mob_address')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                    </div>
                  
                  </div>


                    </div>
                    <br>
                    <br>
                    <h5 class="card-header aqua-gradient white-text">University Details</h5>
                                  <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="St_id" value="{{session('student_id')}}" readonly >
                      <label for="form5" class="">Student ID Number (SC/20XX/XXXXX)</label>
                    </div>
                  </div>
                  <!-- Grid column -->
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="uni_email" value="{{session('student_email')}}" readonly >
                      <label for="form5" class="">University e-mail address</label>
                    </div>
                
                  </div>
                  </div>


                  
                  
                  
                            <div class="row mb-5">
                            
                              <!-- Grid column -->
                              <div class="col-md-6">
                            
                                <!-- Name -->
                                @error('faculty')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                                <select class="mdb-select md-form" id='sel_depart' name='faculty' required>
                                <option value='0'>-- Select Faculty --</option>
                                  @foreach( $faculty['data'] as $fact)
                                    <option value='{{ $fact->id }}'>{{ $fact->faculties}}</option>
                                    @endforeach
                                  
                                </select>
                               
                            
                              </div>
                              <div class="col-md-6">
                            
                                <!-- Name -->
                                <select class="mdb-select md-form" id='sel_emp' name='degree'>
                                  <option value='0'>-- Select Degree --</option>
                                </select>
                                @error('degree')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                              </div>
                              <!-- Grid column -->
                            
                              <!-- Grid column -->

                              <!-- Grid column -->
                            
                              <!-- Grid column -->
                              <div class="col-md-6">
                            
                                <!-- Name -->
                                <select class="mdb-select md-form"  name='gpa'>
                                  <optgroup label="GPA">
                                    <option value="1">4.00 - 3.70</option>
                                    <option value="2">3.69 - 3.30</option>
                                    <option value="3">3.29 - 3.00</option>
                                    <option value="4">2.99 - 2.70</option>
                                    <option value="5">2.69 - 2.30</option>
                                    <option value="6">2.69 - 2.30</option>
                                    <option value="7">2.29 - 2.00</option>
                                    <option value="8">Below 2.00</option>
                                  </optgroup>
                                </select>
                                @error('gpa')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                              </div>
                              <!-- Grid column -->
                            </div>
                            <div class="row">
                            
                              <!-- Grid column -->
                              <div class="col-md-6 mb-4">
                            
                                <form>
                                  <div class="md-form">
                                    <div class="file-field">
                                      <div class="btn btn-primary btn-sm float-left">
                                        <span>Choose file</span>
                                        <input type="file" name='cv'>
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"  placeholder="Upload your CV here">
                                      </div>
                                      @error('cv')
                      <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                      @enderror
                                    </div>
                                  </div>
                                </form>
                            
                              </div>

                                                            <div class="col-md-6 mb-4">
                                                            
                                                              
                                                                <div class="md-form">
                                                                  <div class="file-field">
                                                                    <div class="btn btn-primary btn-sm float-left">
                                                                      <span>Choose photo</span>
                                                                      <input type="file" name='image' multiple>
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                      <input class="file-path validate" type="text" placeholder="Upload your photo here">
                                                                    </div>
                                                                    @error('image')
                                                                    <p style="text-align:left; color:red;"><small>{{ $message }}</small></p>
                                                                    @enderror
                                                                  </div>
                                                                </div>
                                                              
                                                            
                                                            </div>
                              <!-- Grid column -->
                            
                  </div>  
    <div class="text-center">
      <button type="submit" class="btn aqua-gradient btn-lg">Submit</button>
    </div>
    </form>
                   </div>

                </div>
              <!-- Panel -->
            
            
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

        // Material Select Initialization
          $(document).ready(function () {
            $('.mdb-select').materialSelect();
          });

  </script>
  
   <!-- Script -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
   <script type='text/javascript'>
   
   $(document).ready(function(){

      // Department Change
      $('#sel_depart').change(function(){

         // Department id
         var id = $(this).val();

         // Empty the dropdown
         $('#sel_emp').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: '/request_register/sendemail/confirm/savenumbe/register/profile/getDegree/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
                len = response['data'].length;
             }

             if(len > 0){
                // Read data and create <option >
                for(var i=0; i<len; i++){

                   var id = response['data'][i].id;
                   var name = response['data'][i].degree;

                   var option = "<option value='"+id+"'>"+name+"</option>";

                   $("#sel_emp").append(option); 
                }
             }

           }
         });
      });
   });
   </script>
</body>

</html>
