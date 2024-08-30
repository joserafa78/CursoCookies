<?php
namespace App\vistas;
require_once '../../config.php';
require_once '../../vendor/autoload.php';
use App\vistas\includes\Header;
new Header;

//Base de datos Usuario
$users = [array("username"=>"jose","email"=>"jose@gmail.com","password"=>"1234"),
array("username"=>"naila","email"=>"naila@gmail.com","password"=>"0000"),
array("username"=>"dalila","email"=>"dalila@gmail.com","password"=>"1111"), ] ;
//Carga Sesion
$user = $_GET["user"] ?? ""; //Operador de fusio a null
$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];

?>
