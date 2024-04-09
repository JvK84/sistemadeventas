<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/listado_usuarios.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de usuarios</h1>
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
              <h3 class="card-title">Usuarios registrados</h3>
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
                      <center>Nombre</center>
                    </th>
                    <th>
                      <center>Correo</center>
                    </th>
                    <th>
                      <center>Rol</center>
                    </th>
                    <th>
                      <center>Acciones</center>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $contador = 0;
                  foreach ($usuarios_datos as $usuarios_dato) {
                    $id_usuario = $usuarios_dato['id_usuario']; ?>
                    <tr>
                      <td>
                        <center><?= $contador = $contador + 1; ?></center>
                      </td>
                      <td><?= $usuarios_dato['nombres']; ?></td>
                      <td><?= $usuarios_dato['email']; ?></td>
                      <td><?= $usuarios_dato['rol']; ?></td>
                      <td>
                        <center>
                          <div class="btn-group">
                            <a href="show.php?id=<?= $id_usuario; ?>" type="button" class="btn first"><i class="fa fa-eye"></i> Ver</a>
                            <a href="update.php?id=<?= $id_usuario; ?>" type="button" class="btn second"><i class="fa fa-pencil-alt"></i> Editar</a>
                            <a href="delete.php?id=<?= $id_usuario; ?>" type="button" class="btn third"><i class="fa fa-trash"></i> Borrar</a>
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
                      <center>Nombre</center>
                    </th>
                    <th>
                      <center>Correo</center>
                    </th>
                    <th>
                      <center>Rol</center>
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
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
        "inforPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
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