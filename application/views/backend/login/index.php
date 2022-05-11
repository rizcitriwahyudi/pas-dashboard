
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PAS-Dashboard Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="icon" href="<?php echo base_url('assets/template/backend/dist')?>/img/ericsson_black.png" type="image/ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/backend/plugins')?>/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/backend/plugins')?>/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/backend/dist')?>/css/adminlte.min.css">
  <style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
    b {text-align: center;}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-dark">
    <div class="card-header text-center">
    <img src="<?php echo base_url('assets/template/backend/dist')?>/img/Ericsson-Logo.png" alt="" width="120" text-align="center" >
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      
      <form action="<?php echo base_url('admin/login/login')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="login" name="login" class="btn btn-dark btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div><br>
        <div class="card-header text-center">
            <a href="#" class="h5"><b>Ericsson </b>Mini Dashboard</a>
        </div>

      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/template/backend/plugins')?>/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/template/backend/plugins')?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/backend/dist/js')?>/adminlte.min.js"></script>
</body>
</html>
