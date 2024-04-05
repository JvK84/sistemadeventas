<?php

$nombre_sesion = $_SESSION['sesion_nombre'];

$sql_usuarios = "SELECT id_usuario FROM tb_usuarios WHERE nombres='$nombre_sesion'";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios_datos as $usuarios_dato) {
      $id_usuario = $usuarios_dato['id_usuario'];
}
