<?php
include('app/config.php');
include('layout/sesion.php');
include('layout/parte1.php');

include('app/controllers/usuarios/listado_usuarios.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Bienvenido al sistema de ventas</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-3 col-6">
        <div class="small-box" style="background-color: #394E75; color: white">
            <div class="inner">
              <?php
              $contador_de_usuarios = 0;
              foreach($usuarios_datos as $usuarios_dato){
                $contador_de_usuarios = $contador_de_usuarios + 1;
              }
              ?>
              <h3><?php echo $contador_de_usuarios; ?></h3>
              <p>Usuarios Registrados</p>
            </div>
            <a href="<?php echo $URL;?>/usuarios/create.php">
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL;?>/usuarios" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #394E75; color: white">
            <div class="inner">
              <?php
              $contador_de_usuarios = 0;
              foreach($usuarios_datos as $usuarios_dato){
                $contador_de_usuarios = $contador_de_usuarios + 1;
              }
              ?>
              <h3><?php echo $contador_de_usuarios; ?></h3>
              <p>Roles Registrados</p>
            </div>
            <a href="<?php echo $URL;?>/usuarios/create.php">
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL;?>/usuarios" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include('layout/mensajes.php');
include('layout/parte2.php');
?>