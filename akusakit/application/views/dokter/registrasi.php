
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/dist/img/logo.png">
  <title>Registrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/ionicons/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="http://akusakit.epizy.com/dashboard">AKUSAKIT</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    
      <p class="login-box-msg"></p>

     

      <form action="<?php echo base_url('dokter/registrasi') ?>" method="post">
       
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>'); ?>
        <br>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Masukkan Password" name="password_1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <?php echo form_error('password_1', '<div class="text-danger small ml-3">', '</div>'); ?>
         <br>
         <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Ulangi Password" name="password_2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <?php echo form_error('password_2', '<div class="text-danger small ml-3">', '</div>'); ?>
         <br>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
      <div class="text-center">
        <a class="small" href="<?php echo base_url('dokter/auth') ?>"> Sudah punya akun? Silakan Login! </a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets//dist/js/adminlte.min.js"></script>

</body>
</html>
