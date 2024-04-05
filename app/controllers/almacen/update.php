<?php

include('../../config.php');

$id_producto = $_POST['id_producto'];
$codigo = $_POST['codigo'];
$nombres = $_POST['nombres'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$precio_venta = $_POST['precio_venta'];

$sentencia = $pdo->prepare("UPDATE tb_almacen
      SET   codigo=:codigo, 
            nombre=:nombre, 
            descripcion=:descripcion,
            stock=:stock,
            stock_minimo=:stock_minimo,
            stock_maximo=:stock_maximo,
            precio_venta=:precio_venta,
            fyh_actualizacion=:fyh_actualizacion
      WHERE id_producto=:id_producto");

$sentencia->bindParam('codigo',$codigo);
$sentencia->bindParam('nombre',$nombres);
$sentencia->bindParam('descripcion',$descripcion);
$sentencia->bindParam('stock',$stock);
$sentencia->bindParam('stock_minimo',$stock_minimo);
$sentencia->bindParam('stock_maximo',$stock_maximo);
$sentencia->bindParam('precio_venta',$precio_venta);
$sentencia->bindParam('fyh_actualizacion',$fecha_hora);
$sentencia->bindParam('id_producto',$id_producto);
if($sentencia->execute()){
      session_start();
      $_SESSION['mensaje'] = "Actualización de los datos del producto";
      $_SESSION['icono'] = "success";
      header('Location: '.$URL.'/almacen/index.php');
} else {
      session_start();
      $_SESSION['mensaje'] = "Error! No se pudo actualizar el producto";
      $_SESSION['icono'] = "error";
      header('Location: '.$URL.'/almacen/update.php?id='.$id_producto);
}

?>