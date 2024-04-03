<?php

include('../../config.php');

$categoria = $_POST['categoria'];

$sentencia = $pdo->prepare("INSERT INTO tb_categorias
      ( nombre_categoria, fyh_creacion ) 
VALUES (:nombre_categoria, :fyh_creacion)");

$sentencia->bindParam('nombre_categoria',$categoria);
$sentencia->bindParam('fyh_creacion',$fecha_hora);
if($sentencia->execute()){
      session_start();
      $_SESSION['mensaje'] = "Se registro la categoría de manera correcta";
      $_SESSION['icono'] = "success";
      header('Location: '.$URL.'/categorias/index.php');
} else {
      session_start();
      $_SESSION['mensaje'] = "Error! No se pudo registrar en la base de datos";
      $_SESSION['icono'] = "error";
      header('Location: '.$URL.'/categorias/create.php');
}