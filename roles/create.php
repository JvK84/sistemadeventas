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
          <h1 class="m-0">Registro de un nuevo rol</h1>
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
          <div class="card">
            <div class="card-header" style="background-color: #394E75; color: white">
              <h3 class="card-title">Introduzca los datos del nuevo rol</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controllers/roles/create.php" method="POST">
                    <div class="form-group">
                      <label for="">Nombre del rol</label>
                      <input type="text" name="rol" class="form-control" placeholder="nombre del nuevo rol" required>
                    </div>
                    <div class="form-group">
                      <a href="index.php" class="btn btn-secondary">Cancelar</a>
                      <button type="submit" class="btn" style="background-color: #394E75; color: white">Guardar</button>
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
include('../layout/mensajes.php');
include('../layout/parte2.php');
?>