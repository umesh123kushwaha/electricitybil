<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_assests')}}/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/css/all.min.css">
  <!-- jsGrid -->
    <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Electricity</b>Bill</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to  manage Bill</p>

      <form action="{{route('admins.validateLogin')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" placeholder="Enter User Id">
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('user_id')
           <p class="invalid-feedback">{{$message}}</p>
           @enderror
        </div>
       
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
           <p class=" invalid-feedback">{{$message}}</p>
           @enderror
        </div>
       
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      @if(session()->has('error'))
       <div class="alert alert-danger alert-dismissable">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         {{
           session('error')
         }}
       </div>
       @endif

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/js/adminlte.min.js"></script>

</body>
</html>
