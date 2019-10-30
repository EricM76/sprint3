<?php
// funcion de persistencia de datos: devuelve si se han cargado datos en $_POST
function persistir($input){
  if(isset($_POST[$input])){
    return $_POST[$input];
  }
}
// funcion de analisis de errores: devuelve si existe el error en una posición deterninada en la variable $errores[]
function errores($input){
  global $errores;
  if(isset($errores[$input])){
    return $errores[$input];
  }
}
// funcion de validación en el input: devuelve la clase para el input que muestra si los datos ingresados son validos o no (cambia de color el input)
function valido($dato,$error){
  if ($error) {
    $valido="is-invalid";
  }
  elseif ($dato&$error) {
    $valido="is-invalid";
  }
  elseif ($dato) {
    $valido="is-valid";
  }
  return $valido;
}
function validoEmail($dato,$error){
  if ($error==$errores[2]){
    $valido="is-invalid";
    return $valido;
  }elseif ($error==$errores[5]) {
    $valido="is-invalid";
    return $valido;
  }elseif($dato){
    $valido="is-valid";
    return $valido;
  }
}

function validarPerfil($datos){
  // validación de los archivos subidos
  $nombre=$_FILES["archivo"]["name"];
  $ext=pathinfo($nombre, PATHINFO_EXTENSION);
  if ($_FILES["archivo"]["error"]!=0) {
    $errores[0]="Debes subir una imagen para cambiar tu foto de perfil";
    return $errores;
  }
  if ($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
    $errores[1]="Los formatos permitidos son jpg, jpeg y png";
    return $errores;
  }
}

function guardaCookie($email,$pass){
  setcookie("userEmail",$email,time()+(3600*24*365));
}
  ?>
