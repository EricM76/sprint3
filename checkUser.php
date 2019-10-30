<?php
include_once("autoload.php");

if ($_POST) {

  $_SESSION["errorLogin0"]="";
  $_SESSION["errorLogin1"]="";

$usuario=BaseMySQL::buscarPorEmail($_POST["email"],$pdo,'usuarios');

if ($usuario!=null) {

  $errores = Validacion::validarLogin($_POST['pass'],$usuario['pass']);
  if ($errores == null) {
    $_SESSION["id"] = $usuario['id'];
    $_SESSION["userEmail"] = $usuario['email'];
    header("location:home.php");
  }else{
    $_SESSION["errorLogin1"] ="contraseña incorrecta";
    $_SESSION["userEmail"] = $usuario["email"];
    header("location:index.php");
  };

  // if (isset($_POST["recordar"])) {
  //   guardaCookie($_POST["email"],$_POST["pass"]);
  // }

}else {
  $_SESSION["errorLogin0"]="no se encuentra registrado";
  $_SESSION["userEmail"] = "";
  header("location:index.php");
};

}

 ?>
