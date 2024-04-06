<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/categorias/listado_categorias.php');
include('../app/controllers/almacen/listado_usuario.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-6">
                              <h1 class="m-0">Registro de un nuevo producto</h1>
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
                                          <h3 class="card-title">Introduzca los datos del nuevo producto</h3>
                                          <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                          </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                          <form action="../app/controllers/almacen/create.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label for="">Código del producto</label>
                                                                  <input type="text" name="codigo" class="form-control" placeholder="código del producto" required>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Nombre del producto</label>
                                                                  <input type="text" name="nombre" class="form-control" placeholder="nombre del producto" required>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Descripción del producto</label>
                                                                  <input type="text" name="descripcion" class="form-control" placeholder="descripcion del producto">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock del producto</label>
                                                                  <input type="number" name="stock" class="form-control" placeholder="stock actual del producto" required>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock minimo del producto</label>
                                                                  <input type="number" name="stock_minimo" class="form-control" placeholder="stock minimo del producto">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Stock máximo del producto</label>
                                                                  <input type="number" name="stock_maximo" class="form-control" placeholder="Stock máximo del producto">
                                                            </div>
                                                            <div class="form-group">
                                                                  <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                                  <button type="submit" class="btn" style="background-color: #394E75; color: white">Guardar</button>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label for="">Precio de compra del producto</label>
                                                                  <input type="number" name="precio_compra" class="form-control" placeholder="precio de compra del producto" required>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label for="">Precio de venta del producto</label>
                                                                  <input type="number" name="precio_venta" class="form-control" placeholder="precio de venta del producto" required>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Fecha de ingreso del producto</label>
                                                                  <input type="date" name="fecha_ingreso" class="form-control" placeholder="fecha de ingreso del producto" required>
                                                            </div>
                                                            <input type="text" name="id_usuario" class="form-control" value="<?= $id_usuario; ?>" hidden>
                                                            <div class="form-group">
                                                                  <label for="">Categoría del producto</label>
                                                                  <select name="id_categoria" class="form-control">
                                                                        <?php
                                                                        foreach ($categorias_datos as $categorias_dato) { ?>
                                                                              <option value="<?= $categorias_dato["id_categoria"]; ?>" required><?= $categorias_dato["nombre_categoria"]; ?></option>

                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        </option>
                                                                  </select>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="">Imagen del producto</label>
                                                                  <input type="file" name="imagen" class="form-control" id="file">
                                                                  <br>
                                                                  <output id="list"></output>
                                                                  <script>
                                                                        function archivo(evt) {
                                                                              var files = evt.target.files; // FileList object
                                                                              // Obtenemos la imagen del campo "file".
                                                                              for (var i = 0, f; f = files[i]; i++) {
                                                                                    //Solo admitimos imágenes.
                                                                                    if (!f.type.match('image.*')) {
                                                                                          continue;
                                                                                    }
                                                                                    var reader = new FileReader();
                                                                                    reader.onload = (function(theFile) {
                                                                                          return function(e) {
                                                                                                // Insertamos la imagen
                                                                                                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                                                          };
                                                                                    })(f);
                                                                                    reader.readAsDataURL(f);
                                                                              }
                                                                        }
                                                                        document.getElementById('file').addEventListener('change', archivo, false);
                                                                  </script>

                                                            </div>
                                                      </div>
                                                </div>
                                          </form>

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