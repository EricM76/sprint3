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

// funcion que verifica si el email ingresado se encuentra en la base de datos
function verificarEmail($email){
  // lo primero es traer el array que contiene la base de datos invocando la funcion que se hizo para dicho fin
  $usuarios=abrirJson();
  // se recorre el array usando un foreach, donde el 'value' será el usuario que buscamos
  foreach ($usuarios as $id => $usuario) :
    // usando un if, se busca espeficamente la coincidencia en el campo 'email' del usuario
    if ($email==$usuario["email"]) {
      // si se encuentra se devuelve el usuario
       return $usuario;
    }
  endforeach;
  //si no se encuentra devuelve null
  return null;
}
function validarLogin($datos){
  // Creo el array de errores de login
  $erroresLogin = [];
  // Genero el usuario invocando la funcion 'verificarEmail', usando el mail que viene desde el formulario de login.
  $usuario = verificarEmail($datos["email"]);
  // Si la funcion verificarEmail no devuelve ningun usuario, quiere decir que el usuario no se encuentra registrado.
  if ($usuario == null) {
    $erroresLogin[0] = "Usuario no se encuentra registrado";
    return $erroresLogin;
  }
  // Ahora comparo usando la funcion por defecto 'password_verify' la contraseña ingresada en el login con la que se encuentra en la base de datos.
  if (password_verify($datos["pass"], $usuario["pass"]) == false) {
    $erroresLogin[1] = "La contraseña es incorrecta";
    return $erroresLogin;
  }
  // Devuelve lo errores encontrados. Si no los hubiere, devuelve NULL
}
function borrarRegistro($email){
  $user=verificarEmail($email);
  $error=null;
  // si no se encuentra muestro un error
  if ($user==null) {
    $error="El email no está registrado";
    return $error;
    }else {
      // si se encuentra, creo una variable con el mail ingresado
      $userMail=$user["email"];
      // llamo al archivo json
      $usuarios=abrirJson();
      foreach ($usuarios as $id => $usuario) :
        // busco el registro donde está el mail ingresado
      if ($userMail==$usuario["email"]) {
        // borra el registro
        unset($usuarios[$id]);
        // reescribe el array con el nuevo orden de posiciones
        $usuarios = array_values($usuarios);
        }
    endforeach;
    // borro el archivo json original
    if (file_exists("usuarios.json")){unlink('usuarios.json');}
      // creo un nuevo archivo json, recorriendo el array para que en cada vuelta vaya añadiendo los registros
    foreach ($usuarios as $id => $usuario) :
      $json = json_encode($usuarios[$id]);
      file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
    endforeach;
   }
 }

 function cambiarPass($email,$fecha,$pass){
   $error[]=null;
   $usuario=verificarEmail($_POST["email"]);
 if ($usuario==null) {
   $error[0]="El email no está registrado";
   return $error[0];
 }
 if ($fecha==null) {
   $error[1]="Se requiere una fecha para validar identidad";
   return $error[1];
 }
 if ($usuario["fecha"]!=$fecha) {
   $error[2]="La fecha no coincide con el usuario";
   return $error[2];
 }
 if (strlen($pass) < 8 ) {
   $error[3]="La contraseña debe tener al menos 8 caracteres";
   return $error[3];
 }
   $userMail=$_POST["email"];
   // llamo al archivo json
   $usuarios=abrirJson();
   foreach ($usuarios as $id => $usuario) :
     // busco el registro donde está el mail ingresado
   if ($userMail==$usuario["email"]) {
     // borra el registro
     $newUsuario = [
       "nombre" =>  $usuario["nombre"],
       "apellido" => $usuario["apellido"],
       "email" => $usuario["email"],
       "pass" =>password_hash($pass,PASSWORD_DEFAULT),
       "fecha"=> $usuario["fecha"],
       "sexo" => $usuario["sexo"],
       "avatar" => $usuario["avatar"],
       "perfil" => $usuario["perfil"],
     ];
     unset($usuarios[$id]);
     // reescribe el array con el nuevo orden de posiciones
     $usuarios = array_values($usuarios);
     }
 endforeach;
 // borro el archivo json original
 if (file_exists("usuarios.json")){unlink('usuarios.json');}
   // creo un nuevo archivo json, recorriendo el array para que en cada vuelta vaya añadiendo los registros
 foreach ($usuarios as $id => $usuario) :
   $json = json_encode($usuarios[$id]);
   file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
 endforeach;
   $json = json_encode($newUsuario);
   file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
 }

 function cambiarAvatar($email,$url){
   // $origen=$url;
   // $destino="images/perfil/avatar.png";
   // copy($origen,$destino);
   $usuario=verificarEmail($email);
   $userMail=$usuario["email"];
    // echo "<pre>";
    // var_dump($usuario);
    // echo "</pre>";
    // exit;
  $usuarios=abrirJson();
  foreach ($usuarios as $id => $usuario) :
    // busco el registro donde está el mail ingresado
  if ($userMail==$usuario["email"]) {
    // borra el registro
    $newUsuario = [
      "nombre" =>  $usuario["nombre"],
      "apellido" => $usuario["apellido"],
      "email" => $usuario["email"],
      "pass" =>$usuario["pass"],
      "fecha"=> $usuario["fecha"],
      "sexo" => $usuario["sexo"],
      "avatar" => $url,
      "perfil" => $usuario["perfil"],
    ];
    // $oldAvatar=$usuario["avatar"];
    unset($usuarios[$id]);
    // reescribe el array con el nuevo orden de posiciones
    $usuarios = array_values($usuarios);
    }
endforeach;
// borro el archivo json original
if (file_exists("usuarios.json")){unlink('usuarios.json');}
// if (file_exists($oldPerfil)){unlink($oldPerfil);}
  // creo un nuevo archivo json, recorriendo el array para que en cada vuelta vaya añadiendo los registros
foreach ($usuarios as $id => $usuario) :
  $json = json_encode($usuarios[$id]);
  file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
endforeach;
  $json = json_encode($newUsuario);
  file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
 }

 function cambiarPerfil($email,$url){
   $usuario=verificarEmail($email);
   $userMail=$usuario["email"];
    // echo "<pre>";
    // var_dump($usuario);
    // echo "</pre>";
    // exit;
      $usuarios=abrirJson();
  foreach ($usuarios as $id => $usuario) :
    // busco el registro donde está el mail ingresado
  if ($userMail==$usuario["email"]) {
    // borra el registro
    $newUsuario = [
      "nombre" =>  $usuario["nombre"],
      "apellido" => $usuario["apellido"],
      "email" => $usuario["email"],
      "pass" =>$usuario["pass"],
      "fecha"=> $usuario["fecha"],
      "sexo" => $usuario["sexo"],
      "avatar" => null,
      "perfil" => $url,
    ];
    // echo "<pre>";
    // var_dump($usuarios[$id]);
    // echo "</pre>";
    // echo "<pre>";
    // var_dump($newUsuario);
    // echo "</pre>";
    // exit;
    $oldPerfil=$usuario["perfil"];
    unset($usuarios[$id]);
    // reescribe el array con el nuevo orden de posiciones
    $usuarios = array_values($usuarios);
    }
endforeach;
// borro el archivo json original
if (file_exists("usuarios.json")){unlink('usuarios.json');}
if (file_exists($oldPerfil)){unlink($oldPerfil);}
  // creo un nuevo archivo json, recorriendo el array para que en cada vuelta vaya añadiendo los registros
foreach ($usuarios as $id => $usuario) :
  $json = json_encode($usuarios[$id]);
  file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
endforeach;
  $json = json_encode($newUsuario);
  file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
 }


function guardaCookie($email,$pass){
  setcookie("userEmail",$email,time()+(3600*24*365));
  setcookie("userPass",$pass,time()+(3600*24*365));
}
  ?>
