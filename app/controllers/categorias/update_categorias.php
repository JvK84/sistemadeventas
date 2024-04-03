<?php

$id_categoria_get = $_GET['id_categoria'];

$sql_categoria = "SELECT * FROM tb_categorias WHERE id_categoria = '$id_categoria_get'";
$query_categorias = $pdo->prepare($sql_categoria);
$query_categorias->execute();
$categorias_datos = $query_categorias->fetchAll(PDO::FETCH_ASSOC);

foreach ($categorias_datos as $categorias_dato) {
      $categoria = $categorias_dato['nombre_categoria'];
}
