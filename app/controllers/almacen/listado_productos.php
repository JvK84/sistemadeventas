<?php

$sql_almacen = "SELECT id_producto, nombre FROM tb_almacen";
$query_almacen = $pdo->prepare($sql_almacen);
$query_almacen->execute();
$almacen_datos = $query_almacen->fetchAll(PDO::FETCH_ASSOC);