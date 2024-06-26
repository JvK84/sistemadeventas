<?php

include('../../config.php');

$id_rol = $_POST['id_rol'];
$rol = $_POST['rol'];


$sentencia = $pdo->prepare("UPDATE tb_roles
SET   rol=:rol,
      fyh_actualizacion=:fyh_actualizacion
WHERE id_rol=:id_rol");

$sentencia->bindParam('rol',$rol);
$sentencia->bindParam('id_rol',$id_rol);
$sentencia->bindParam('fyh_actualizacion',$fecha_hora);
if($sentencia->execute()) {

      session_start();
      $_SESSION['mensaje'] = "Actualización de los datos del rol";
      $_SESSION['icono'] = "success";
      header('Location: '.$URL.'/roles/index.php');
}
else {
      session_start();
      $_SESSION['mensaje'] = "Error! No se pudo actualizar el rol";
      $_SESSION['icono'] = "error";
      header('Location: '.$URL.'/roles/update.php?id='.$id_rol);
}
?>