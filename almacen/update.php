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
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <form action="../app/controllers/almacen/update.php" method="POST">
                                                            <div class="form-group">
                                                                  <input type="text" name="id_producto" value="<?php echo $id_producto_get; ?>" hidden>
                                                                  <label for="">Código del producto</label>
                                                                  <input type="text" name="codigo" class="form-control" value="<?php echo $codigo; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Nombre del producto</label>
                                                                  <input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Descripción del producto</label>
                                                                  <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock del producto</label>
                                                                  <input type="number" name="stock" class="form-control" value="<?php echo $stock; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock minimo del producto</label>
                                                                  <input type="number" name="stock_minimo" class="form-control" value="<?php echo $stock_minimo; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock maximo del producto</label>
                                                                  <input type="number" name="stock_maximo" class="form-control" value="<?php echo $stock_maximo; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Precio de compra del producto</label>
                                                                  <input type="number" name="precio_compra" class="form-control" value="<?php echo $precio_compra; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Precio de venta del producto</label>
                                                                  <input type="number" name="precio_venta" class="form-control" value="<?php echo $precio_venta; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Fecha de ingreso del producto</label>
                                                                  <input type="date" name="fecha_ingreso" class="form-control" value="<?php echo $fecha_ingreso; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Categoria del producto</label>
                                                                  <input type="text" name="categoria" class="form-control" value="<?php echo $categoria; ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                  <a href="index.php" class="btn btn-secondary">Volver</a>
                                                                  <button type="submit" class="btn" style="background-color: #394E75; color: white">Actualizar</button>
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