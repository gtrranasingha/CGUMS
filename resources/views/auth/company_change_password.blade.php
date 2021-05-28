<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Company Change Password</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            header{
                background: #EAEAEA;
                overflow: auto;
                padding: 10px;
            }
            #loggedin{
                float: right;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <header>
        <div id="appname"> <b>CGUMS</b></div>
    <div id="loggedin"><b>Welcome {{session('company_user')}}</b> <a href="/company/logout" class="text-info">logout</a></div>
    </header>
    <script type="text/javascript">
        function clear_task(){
            
                document.getElementById('exampleInputPassword1').value='';
                document.getElementById('exampleInputPassword2').value='';
                document.getElementById('exampleInputEmail1').value='';
		
        }
        </script>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
            <div class="col-md-12">
            @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            @if(Session::has('error_message'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error_message')}}
            </div>
            @endif
               <div>
               <h4>Company Change Password</h4>
               <form action="/company/company_dashbord/update/change_password/savedata/{{$company_user_data->id}}" method="post"> 
               {{csrf_field()}}
               <div class="form-group">
    <input type="hidden" class="form-control " id="exampleInputPassword1" value="{{$company_user_data->id}}" name="name">
  </div>
  <div class="form-group">
               <label for="username" class="text-info">Old Password:</label><br>
            <input type="password" name="oldpassword" class="form-control">
    @if ($errors->has('oldpassword'))
        <span class="text-danger">{{ $errors->first('oldpassword') }}</span>
     @endif
  </div>
  <div class="form-group">
               <label for="username" class="text-info">New Password:</label><br>
            <input type="password" name="newpassword" class="form-control" id="password">
    @if ($errors->has('newpassword'))
        <span class="text-danger">{{ $errors->first('newpassword') }}</span>
     @endif
  </div>
  <div class="form-group">
            <label for="username" class="text-info"> <i>Show Password:</i></label> &nbsp;
            <input type="checkbox" name="showpassword" id="showpassword" style="width: 20px;height: 20px">
        </div>
    <div class="form-group">
               <label for="username" class="text-info">Confirm Password:</label><br>
            <input type="password" name="confirmpassword" class="form-control">
    @if ($errors->has('confirmpassword'))
        <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
     @endif
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <input type="button" class="btn btn-warning"  value="Clear" onclick="clear_task()"> 
</form>
               
               
               </div>
            </div>
        </div>
<script src="\js\jquery.js"></script>
<script>
        $(document).ready(function () {
            $('#showpassword').click(function () {
                if($('#showpassword').is(':checked')){
                    $('#password').attr('type','text');
                }else{
                    $('#password').attr('type','password');
                }
            });
        });
</script>
    </body>
</html>
