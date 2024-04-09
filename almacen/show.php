<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

include('../app/controllers/almacen/show_productos.php');

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
                              <div class="card">
                                    <div class="card-header first">
                                          <h3 class="card-title">Visualización del producto</h3>
                                          <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                          </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                          <div class="row">
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label for="">Código del producto</label>
                                                            <input type="text" name="codigo" class="form-control" value="<?= $codigo; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Nombre del producto</label>
                                                            <input type="text" name="nombres" class="form-control" value="<?= $nombres; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Descripción del producto</label>
                                                            <input type="text" name="descripcion" class="form-control" value="<?= $descripcion; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Stock del producto</label>
                                                            <input type="text" name="stock" class="form-control" value="<?= $stock; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Stock minimo del producto</label>
                                                            <input type="text" name="stock_minimo" class="form-control" value="<?= $stock_minimo; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Stock maximo del producto</label>
                                                            <input type="text" name="stock_maximo" class="form-control" value="<?= $stock_maximo; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <a href="index.php" class="btn btn-secondary">Volver</a>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label for="">Precio de compra del producto</label>
                                                            <input type="text" name="precio_compra" class="form-control" value="<?= $precio_compra; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Precio de venta del producto</label>
                                                            <input type="text" name="precio_venta" class="form-control" value="<?= $precio_venta; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Fecha de ingreso del producto</label>
                                                            <input type="text" name="fecha_ingreso" class="form-control" value="<?= $fecha_ingreso; ?>" disabled>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="">Categoria del producto</label>
                                                            <input type="text" name="categoria" class="form-control" value="<?= $categoria; ?>" disabled>
                                                      </div>
                                                      <label for="">Imagen del producto</label>
                                                            <center><img src="<?= $URL."/almacen/img_productos/".$imagen;?>" alt="" width="250px"></center>
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