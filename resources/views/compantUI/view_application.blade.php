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
    <!-- DataTables.net  -->
    <link rel="stylesheet" type="text/css" href="../../css/addons/datatables.min.css">
    <link rel="stylesheet" href="../../css/addons/datatables-select.min.css">
    <!-- Selected/Not Selected  -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
      rel="stylesheet">
    

  <!-- Your custom styles (optional) -->
  <style>
.th {
    background-color: navy;
    color: white;
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

    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead class="th">
        <tr>
          <th class="th-sm">Date
          </th>
          <th class="th-sm">Student ID
          </th>
          <th class="th-sm">Job Vacancy
          </th>
          <th class="th-sm">E-mail 
          </th>
          <th class="th-sm">CV File
          </th>
          <th class="th-sm"> Applicant Status
          </th>
          <th class="th-sm"> Action
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($data as $pass)
     
        <tr>
        @php $id= Crypt::encrypt($pass->id); @endphp
          <td>{{ $pass->created_at }}</td>
          <td>{{ $pass->st_uid}}</td>
          <td>{{ $pass->jv_name}}</td>
          <td>{{ $pass->st_email}}</td>
          <td><a href="/company/company_dashbord/View_applications/downlode_cv/{{ $pass->st_cv}}"  class="btn btn-blue btn-rounded btn-sm m-0" >Download</a></td>
          @if(($pass->confirmed)==0)
          <td><a   type="button" class="btn btn-secondary btn-sm" >Notselected</a></td>
          @else
          <td><a  type="button" class="btn btn-primary btn-sm" >Selected</a></td>
          @endif
          @if(($pass->confirmed)==0)
          <td><a href="/company/company_dashbord/View_applications/accept_job/{{$id}}" type="button" class="btn btn-primary btn-sm" >Select</a></td>
          @else
          <td><a  href="/company/company_dashbord/View_applications/pending_job/{{$id}}" type="button" class="btn btn-secondary btn-sm" >Pending</a></td>
          @endif
        </tr>
        @endforeach
        
      </tbody>
    </table>



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
  <!-- DataTables  -->
  <script type="text/javascript" src="../../js/addons/datatables.min.js"></script>
  <!-- DataTables Select  -->
  <script type="text/javascript" src="../../js/addons/datatables-select.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
      });

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $('#dtMaterialDesignExample').DataTable();

      $('#dt-material-checkbox').dataTable({

        columnDefs: [{
          orderable: false,
          className: 'select-checkbox',
          targets: 0
        }],
        select: {
          style: 'os',
          selector: 'td:first-child'
        }
      });

      $('#dtMaterialDesignExample_wrapper, #dt-material-checkbox_wrapper').find('label').each(function () {
        $(this).parent().append($(this).children());
      });
      $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').find(
        'input').each(function () {
          $('input').attr("placeholder", "Search");
          $('input').removeClass('form-control-sm');
        });
      $('#dtMaterialDesignExample_wrapper .dataTables_length, #dt-material-checkbox_wrapper .dataTables_length').addClass(
        'd-flex flex-row');
      $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').addClass(
        'md-form');
      $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').removeClass(
        'custom-select custom-select-sm form-control form-control-sm');
      $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').addClass('mdb-select');
      $('#dtMaterialDesignExample_wrapper .mdb-select, #dt-material-checkbox_wrapper .mdb-select').materialSelect();
      $('#dtMaterialDesignExample_wrapper .dataTables_filte, #dt-material-checkbox_wrapper .dataTables_filterr').find(
        'label').remove();

        // Material Select Initialization
          $(document).ready(function () {
            $('.mdb-select').materialSelect();
          });

  </script>
</body>

</html>
