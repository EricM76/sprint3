<?php
session_start();

require_once("class/baseDeDatos.php");
require_once("class/baseMySQL.php");
require_once("class/producto.php");
require_once("class/usuario.php");
require_once("class/categoria.php");
require_once("class/registrarProductos.php");
require_once("class/registrarUsuarios.php");
require_once("class/admin.php");
require_once("class/registrarAdmin.php");
require_once("class/validacion.php");
require_once("class/autenticacion.php");
require_once("class/codigo.php");
require_once("class/crearCodigo.php");






$host = "localhost";
$bd = "socialtruek";
$usuario = "root";
$password = "";
$puerto = "3306";
$charset = "utf8mb4";

$pdo = BaseMySQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);


$validadorUsuario = new RegistrarUsuarios();
$validadorProducto = new RegistrarProductos();


function varDump($variable){
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  exit;
}
 ?>
