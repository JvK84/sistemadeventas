<?php

include('../../config.php');

$id_categoria = $_POST['id_categoria'];
$categoria = $_POST['categoria'];

$password_user = password_hash($password_user, PASSWORD_DEFAULT);
$sentencia = $pdo->prepare("UPDATE tb_categorias
SET   nombre_categoria=:nombre_categoria, 
      fyh_actualizacion=:fyh_actualizacion
WHERE id_categoria=:id_categoria");

$sentencia->bindParam('nombre_categoria',$categoria);
$sentencia->bindParam('fyh_actualizacion',$fecha_hora);
$sentencia->bindParam('id_categoria',$id_categoria);
if($sentencia->execute()){
      session_start();
      $_SESSION['mensaje'] = "Actualización de los datos de la categoría";
      $_SESSION['icono'] = "success";
      header('Location: '.$URL.'/categorias/index.php');
} else {
      //echo "error, las contraseñas no son iguales";
      session_start();
      $_SESSION['mensaje'] = "Error! No se pudo actualizar la categoría";
      $_SESSION['icono'] = "error";
      header('Location: '.$URL.'/categorias/update.php?id='.$id_categoria);
}

?>