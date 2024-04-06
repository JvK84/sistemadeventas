<?php

$id_producto_get = $_GET['id_producto'];

$sql_producto = "SELECT al.codigo as codigo, al.nombre as nombre, al.descripcion as descripcion, al.stock as stock, al.stock_minimo as stock_minimo, al.stock_maximo as stock_maximo, al.precio_compra as precio_compra,
                  al.precio_venta as precio_venta, al.imagen as imagen, al.fecha_ingreso as fecha_ingreso, ca.nombre_categoria as categoria
                  FROM tb_almacen as al INNER JOIN tb_categorias as ca ON ca.id_categoria = al.id_categoria 
                  WHERE id_producto = '$id_producto_get'";

$query_producto = $pdo->prepare($sql_producto);
$query_producto->execute();
$productos_datos = $query_producto->fetchAll(PDO::FETCH_ASSOC);

foreach ($productos_datos as $productos_dato) {
      $codigo = $productos_dato['codigo'];
      $nombres = $productos_dato['nombre'];
      $descripcion = $productos_dato['descripcion'];
      $stock = $productos_dato['stock'];
      $stock_minimo = $productos_dato['stock_minimo'];
      $stock_maximo = $productos_dato['stock_maximo'];
      $precio_compra = $productos_dato['precio_compra'];
      $precio_venta = $productos_dato['precio_venta'];
      $imagen = $productos_dato['imagen'];
      $fecha_ingreso = $productos_dato['fecha_ingreso'];
      $categoria = $productos_dato['categoria'];
}
