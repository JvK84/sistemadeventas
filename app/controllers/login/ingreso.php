<?php
/**
 * Created by Javier Alonso González
 * 
 * 
 */

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];

$contador = 0;
$sql = "SELECT us.id_usuario as id_usuario, us.nombres as nombres, us.email as email, us.password_user as password_user, rol.rol as rol 
FROM tb_usuarios as us INNER JOIN tb_roles as rol ON us.id_rol = rol.id_rol WHERE us.email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password_user_tabla = $usuario['password_user'];
    $rol = $usuario['rol'];
}

if($contador > 0 && (password_verify($password_user, $password_user_tabla))){
    session_start();
    $_SESSION['mensaje'] = "Login correcto";
    $_SESSION['icono'] = "success";
    $_SESSION['sesion_email'] = $email;
    $_SESSION['sesion_nombre'] = $nombres;
    $_SESSION['sesion_rol'] = $rol;
    header('Location: '.$URL.'/index.php');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: login incorrecto";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/login');
}