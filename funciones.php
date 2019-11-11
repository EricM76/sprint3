<?php
// funcion de persistencia de datos: devuelve si se han cargado datos en $_POST
function persistir($input){
  if(isset($_POST[$input])){
    return $_POST[$input];
  }
}
// funcion de persistencia de datos: devuelve si se han cargado datos en $_POST
function persistirCat($input,$pdo){
  if(isset($_POST[$input])){
    $categorias = BaseMySQL::verCategorias($pdo);
    foreach ($categorias as $categoria){
      if ($categoria['id']==$_POST[$input]) {
        return $categoria['nombre'];
      }
    }
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

function guardaCookie($email,$pass){
  setcookie("userEmail",$email,time()+(3600*24*365));
}

function guardarUsuario($usuario){
  $json = json_encode($usuario);
  file_put_contents("usuarios.json",$json.PHP_EOL, FILE_APPEND);
}
function backup($tabla,$pdo){
  $usuarios = BaseMySQL::verRegistros($pdo,$tabla);
  $json = JSON_ENCODE($usuarios);
  file_put_contents($tabla.".json",$json.PHP_EOL);
}
function fechaBackup($tabla){
  if (file_exists($tabla.'.json')) {
      $modificacion = "La última modificación fue el " . date('d/m/Y h:i:s', filectime($tabla.'.json'));
  }
  return $modificacion;
}
function abrirJson($tabla){
  $usuarios = file_get_contents($tabla.".json");
  $usuarios = explode(PHP_EOL,$usuarios);
  array_pop($usuarios);
  foreach ($usuarios as $usuario) {
        $array[]= json_decode($usuario,true);
    }
  return $array;
}
function generarCodigo($codigo){
  $codigo = password_hash($codigo,PASSWORD_DEFAULT);
  
}
?>
