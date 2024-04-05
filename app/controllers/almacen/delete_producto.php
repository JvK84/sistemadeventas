<?php

include('../../config.php');

$id_producto = $_POST['id_producto'];

$sentencia = $pdo->prepare("DELETE FROM tb_almacen
      WHERE id_producto=:id_producto");

$sentencia->bindParam('id_producto',$id_producto);
$sentencia->execute();
session_start();
$_SESSION['mensaje'] = "Se eliminó el producto de la manera correcta";
$_SESSION['icono'] = "success";
header('Location: '.$URL.'/almacen/index.php');
?>