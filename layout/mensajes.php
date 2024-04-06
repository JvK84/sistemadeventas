<?php
if (isset($_SESSION['mensaje']) && isset($_SESSION['icono'])  ) {
      $respuesta = $_SESSION['mensaje'];
      $icono = $_SESSION['icono']; ?>
      <script>
            Swal.fire({
                  position: 'top-end',
                  icon: '<?= $icono; ?>',
                  title: '<?= $respuesta; ?>',
                  showConfirmButton: false,
                  timer: 1500
            })
      </script>
<?php
      unset($_SESSION['mensaje']);
      unset($_SESSION['icono']);
}
?>