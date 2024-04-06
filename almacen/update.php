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
                              <h1 class="m-0">Edición del producto</h1>
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
                                          <h3 class="card-title">Modifica los datos del producto</h3>
                                          <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                          </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                          <form action="../app/controllers/almacen/update.php" method="POST">
                                                <div class="row">
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <input type="text" name="id_producto" value="<?= $id_producto_get; ?>" hidden>
                                                                  <label for="">Código del producto</label>
                                                                  <input type="text" name="codigo" class="form-control" value="<?= $codigo; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Nombre del producto</label>
                                                                  <input type="text" name="nombres" class="form-control" value="<?= $nombres; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Descripción del producto</label>
                                                                  <input type="text" name="descripcion" class="form-control" value="<?= $descripcion; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock del producto</label>
                                                                  <input type="number" name="stock" class="form-control" value="<?= $stock; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock minimo del producto</label>
                                                                  <input type="number" name="stock_minimo" class="form-control" value="<?= $stock_minimo; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock maximo del producto</label>
                                                                  <input type="number" name="stock_maximo" class="form-control" value="<?= $stock_maximo; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <a href="index.php" class="btn btn-secondary">Volver</a>
                                                                  <button type="submit" class="btn" style="background-color: #394E75; color: white">Actualizar</button>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label for="">Precio de compra del producto</label>
                                                                  <input type="number" name="precio_compra" class="form-control" value="<?= $precio_compra; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Precio de venta del producto</label>
                                                                  <input type="number" name="precio_venta" class="form-control" value="<?= $precio_venta; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Fecha de ingreso del producto</label>
                                                                  <input type="date" name="fecha_ingreso" class="form-control" value="<?= $fecha_ingreso; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Categoria del producto</label>
                                                                  <input type="text" name="categoria" class="form-control" value="<?= $categoria; ?>" disabled>
                                                            </div>
                                                            <label for="">Imagen del producto</label>
                                                                  <center><img src="<?= $URL."/almacen/img_productos/".$imagen;?>" alt="" width="250px"></center>
                                                      </div>
                                                </div>
                                          </form>
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