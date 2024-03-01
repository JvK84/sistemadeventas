<?php 
/**
 * Created by Javier Alonso González
 * User: imper84
 * Date: 29-02-2024
 */
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexion a la BD fue con exito";
} catch (PDOException $e){
    //print_r($e);
    echo "Erro al conectar a la base de datos";
}

$URL = "http://localhost/www.sistemadeventas.com";