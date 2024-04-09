<?php

session_start();
if(isset($_SESSION['sesion_email'])) {
  $email_sesion = $_SESSION['sesion_email'];
  $nombre_sesion =  $_SESSION['sesion_nombre'];
  $id_rol =  $_SESSION['id_rol'];
  $rol =  $_SESSION['sesion_rol'];
  
} else {
  echo "no existe la sesion";
  header('Location: '.$URL.'/login');
}
