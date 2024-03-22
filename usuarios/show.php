<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

include('../app/controllers/usuarios/show_usuario.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-6">
                              <h1 class="m-0">Visualización</h1>
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
                                          <h3 class="card-title">Visualización del usuario</h3>
                                          <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                          </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <div class="form-group">
                                                            <label for="">Nombre</label>
                                                            <input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Email</label>
                                                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <a href="index.php" class="btn btn-secondary">Volver</a>
                                                      </div>
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