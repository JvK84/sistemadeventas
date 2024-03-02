<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Registro de usuarios</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Introduzca los datos del nuevo usuario</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controllers/usuarios/create.php">
                    <div class="form-group">
                      <label for="">Nombre</label>
                      <input type="text" class="form-control" placeholder="nombre del nuevo usuario">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" placeholder="email del nuevo usuario">
                    </div>
                    <div class="form-group">
                      <label for="">Contraseña</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Confirme la ontraseña</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-secondary">Cancelar</button>
                      <button class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include('../layout/parte2.php');
?>