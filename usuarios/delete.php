<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

include('../app/controllers/usuarios/update_usuario.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-6">
                              <h1 class="m-0">Eliminar usuario</h1>
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
                                    <div class="card-header" style="background-color: #394E75; color:white">
                                          <h3 class="card-title">¿Está seguro de eliminar el usuario?</h3>
                                          <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                          </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <form action="../app/controllers/usuarios/delete_usuario.php" method="POST">
                                                            <input type="text" name="id_usuario" class="form-control" value="<?= $id_usuario_get; ?>" hidden>
                                                            <div class="form-group">
                                                                  <label for="">Nombre</label>
                                                                  <input type="text" name="nombres" class="form-control" value="<?= $nombres; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Email</label>
                                                                  <input type="email" name="email" class="form-control" value="<?= $email; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Rol del usuario</label>
                                                                  <input type="text" name="rol" class="form-control" value="<?= $rol; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                                  <button class="btn" style="background-color: #394E75; color:white">Eliminar</button>
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