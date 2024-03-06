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
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password_user_tabla = $usuario['password_user'];
}

if($contador == 0 && (password_verify($password_user, $password_user_tabla))){
    echo "Datos incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error: login incorrecto";
    header('Location: '.$URL.'/login');
} else {
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    $_SESSION['sesion_nombre'] = $nombres;
    header('Location: '. $URL .'/index.php');
}