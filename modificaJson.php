<?php
include_once("funciones.php");
if ($_POST) {
  // verifico si el mail ingresado se encuentra registrado
  $User=verificarEmail($_POST["e-mail"]);
  // si no se encuentra muestro un error
  if ($User==null) {echo "el usuario no se encuentra";
  }else {
    // si se encuentra, creo una variable con el mail ingresado
    $userMail=$_POST["e-mail"];
    // llamo al archivo json
    $baseDatosJson = file_get_contents("usuarios2.json");
    // recorro el archivo json y creo una variable con su contenido
    $baseDatosJson = explode(PHP_EOL,$baseDatosJson);
    // borro el ultimo registro que está en blanco
    array_pop($baseDatosJson);
    // recorro la variable y genero un array
    foreach ($baseDatosJson as $usuario) {
    $usuarios[]= json_decode($usuario,true);}
    // recorro el array
    foreach ($usuarios as $id => $usuario) :
      // busco el registro donde está el mail ingresado
    if ($userMail==$usuario["email"]) {
      // si encuentra el mail borra el registro
      unset($usuarios[$id]);
      // reescribe el array con el nuevo orden de posiciones
      $usuarios = array_values($usuarios);
      // muestro el array 'sin el registro que fue borrado'
      echo "<pre>";
      var_dump($usuarios);
      echo "</pre>";
      }
  endforeach;
  // borro el archivo json original
    unlink('usuarios2.json');
    // creo un nuevo archivo json, recorriendo el array para que en cada vuelta vaya añadiendo los registros
  foreach ($usuarios as $id => $usuario) {
    $json = json_encode($usuarios[$id]);
    file_put_contents("usuarios2.json",$json.PHP_EOL,FILE_APPEND);
  }
   }
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Buscar Usuario</h1>
    <form class="" action="modificaJson.php" method="post">
      <label for="">buscar por mail</label>
      <input type="text" name="e-mail" value="">
      <button type="submit" name="button">buscar</button>
    </form>
  </body>
</html>
