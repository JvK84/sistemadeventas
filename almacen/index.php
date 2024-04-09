<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/almacen/listado_productos.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de productos</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header first">
              <h3 class="card-title">Productos registrados</h3>
              <div class="card-tools">
                <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>
            <div class="card-body" style="display:block;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>
                      <center>Nro</center>
                    </th>
                    <th>
                      <center>Nombre del producto</center>
                    </th>
                    <th>
                      <center>Imagen del producto</center>
                    </th>
                    <th>
                      <center>Acciones</center>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $contador = 0;
                  foreach ($almacen_datos as $almacen_dato) {
                    $id_producto = $almacen_dato['id_producto']; ?>
                    <tr>
                      <td>
                        <center><?= $contador = $contador + 1; ?></center>
                      </td>
                      <td><?= $almacen_dato['nombre']; ?></td>
                      <td><img src="<?= $URL."/almacen/img_productos/". $almacen_dato['imagen']; ?>" width="100px"></td>
                      <td>
                        <center>
                          <div class="btn-group">
                            <a href="show.php?id_producto=<?= $id_producto; ?>" type="button" class="btn first"><i class="fa fa-eye"></i> Ver</a>
                            <a href="update.php?id_producto=<?= $id_producto; ?>" type="button" class="btn second"><i class="fa fa-pencil-alt"></i> Editar</a>
                            <a href="delete.php?id_producto=<?= $id_producto; ?>" type="button" class="btn third"><i class="fa fa-trash"></i> Borrar</a>
                          </div>
                        </center>
                      </td>
                    </tr>

                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                  <th>
                      <center>Nro</center>
                    </th>
                    <th>
                      <center>Nombre del producto</center>
                    </th>
                    <th>
                      <center>Imagen del producto</center>
                    </th>
                    <th>
                      <center>Acciones</center>
                    </th>
                  </tr>
                </tfoot>
              </table>
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

<script>
  $(function() {
    $("#example1").DataTable({
      "language": {
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
        "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
        "infoFiltered": "(Filtrado de _MAX_ total Productos)",
        "inforPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Productos",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Último",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": true,
      "buttons": [{
        text: 'Copiar',
        extend: 'copy',
      }, {
        extend: 'pdf',
      }, {
        extend: 'csv',
      }, {
        extend: 'excel',
      }, {
        text: 'Imprimir',
        extend: 'print',
      }]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>