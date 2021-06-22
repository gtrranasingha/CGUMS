<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color:lightblue;
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <script type="text/javascript">
        function clear_task(){
            
                document.getElementById('exampleInputPassword1').value='';
                document.getElementById('exampleInputPassword2').value='';

		
        }
        </script>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
        <div class="col-md-12">
            @if(Session::has('error_message'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error_message')}}
            </div>
            @endif
        <div>
               <h1>Student Login</h1>
               <form action="/login/getdata" method="post"> 
               {{csrf_field()}}
               <div class="form-group">
    <label for="exampleInputPassword1">Student Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="student_id">
    @if ($errors->has('student_id'))
        <span class="text-danger">{{ $errors->first('student_id') }}</span>
     @endif
  </div>

  <div class="form-group">
    <label for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="password">
    @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
     @endif
  </div>
 
  <button type="submit" class="btn btn-primary">Log</button>
  <input type="button" class="btn btn-warning"  value="Clear" onclick="clear_task()"> 
  <div id="register-link" class="text-right">
                                <a href="/register" class="text-info">Register here</a>
                            </div>
</form>
               
               
               </div>
            </div>
        </div>
    </body>
</html>
