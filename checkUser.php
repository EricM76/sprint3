<?php
include_once("funciones.php");
session_start();

if ($_POST) {
  $_SESSION["errorLogin0"]="";
  $_SESSION["errorLogin1"]="";
  // llamo a la funcion validarLogin para verificar si el email se encuentra registrado y si es así, verificar si la contraseña es la correcta
$erroresLogin=validarLogin($_POST);
// si no devuelve ningun error, accede al home

if ($erroresLogin==null) {
  $_SESSION["userEmail"]=$_POST["email"];
  $_SESSION["userPass"]=$_POST["pass"];
  if (isset($_POST["recordar"])) {
    guardaCookie($_POST["email"],$_POST["pass"]);
  }
  header("location:home.php");
}
// si el email no se encuentra registrado genera un error que se mostrará en pantalla una vez que vuelva al index
if (isset($erroresLogin[0])) {
  // setcookie("errorLogin0", "no se encuentra registrado",0);
  $_SESSION["errorLogin0"]="no se encuentra registrado";
  $_SESSION["userEmail"]="";
  header("location:index.php");
}
// si el email está registrado, pero la contraseña es incorrecta genera un error que se mostrará en pantalla uan vez que vuelva al index
if (isset($erroresLogin[1])) {
  // setcookie("errorLogin1", "contraseña incorrecta",0);
  $_SESSION["errorLogin1"]="contraseña incorrecta";
  $_SESSION["userEmail"]=$_POST["email"];
  header("location:index.php");
}
}
 ?>
