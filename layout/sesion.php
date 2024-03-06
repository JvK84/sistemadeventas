<?php

session_start();
if(isset($_SESSION['sesion_email'])) {
  //echo "si existe la sesion de ". $_SESSION['sesion_email'];
  $email_sesion = $_SESSION['sesion_email'];
  $nombre_sesion =  $_SESSION['sesion_nombre'];
  
} else {
  echo "no existe la sesion";
  header('Location: '.$URL.'/login');
}
