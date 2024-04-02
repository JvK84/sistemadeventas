<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Sistema de ventas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templates/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templates/dist/css/adminlte.min.css">
  <!-- Sweetalert library-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->

    <center>
      <img src="https://img.freepik.com/free-photo/computer-security-with-login-password-padlock_107791-16191.jpg?w=1060&t=st=1709281042~exp=1709281642~hmac=25ca1a9fb05a08540b6e37443eeb1df99e997f72d92257ed54376369e50b001d" alt="" width="300px">
    </center>
    <br>
    <div class="card card-outline" >
      <div class="card-header text-center">
        <a href="../public/templates/index2.html" class="h1"><b>Sistema de </b>VENTAS</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Ingrese sus datos</p>

        <form action="../app/controllers/login/ingreso.php" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password_user" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-block" style="background-color: #394E75; color: white">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <?php
  session_start();
  include('../layout/mensajes.php');
  ?>
  <!-- /.login-box -->
  <!-- jQuery -->
  <script src="../public/templates/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../public/templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../public/templates/dist/js/adminlte.min.js"></script>
</body>

</html>