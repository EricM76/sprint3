<?php
class RegistrarUsuarios{
//funcion para validar los datos ingresados enviados por $_POST
public function validarDatosUser($datos){
//arrary de errores
    $errores = [];
    $nac=strtotime($datos["fecha"]);
    $limiteEdad=strtotime("-18 year");
//validacion de errores
    if ($datos) {
      if (strlen($datos["nombre"])==0) {
        $errores[0] = "El campo nombre se encuentra vacio";
      }
      if (strlen($datos["apellido"])==0) {
        $errores[1] = "El campo apellido se encuentra vacio";
      }
      if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
        $errores[2] = "El email tiene un formato incorrecto";
      }
      if (strlen($datos["pass"])<8) {
        $errores[3] ="La contraseña tiene menos de 8 caracteres";
      }
      if ($nac>$limiteEdad) {
        $errores[4] ="Eres menor de edad";
      }
      if ($datos["fecha"]== null) {
        $errores[4]= "Debes indicar una fecha";
      }
      if (isset($datos["sexo"]) && $datos["sexo"]==null) {
        $_POST["sexo"]="i";
      }
    }
    //retorna el array de errores
    return $errores;
  }
//funcion que crea una instancia de la clase usuario para luego guardarla en la base de datos
  public static function crearUsuario($datos){
    //hasheo de contraseña
    $contraHash = password_hash($datos["pass"], PASSWORD_DEFAULT);
    $datos["avatar"] = "perfilDesconocido.png";
    //crea una instancia de la clase usuario con los datos recibidos por $_POST. El avatar, perfil y val_user se pasan como un para luego ser cargados de forma independiente
    $usuario = new Usuario($datos["nombre"], $datos["apellido"], $datos["email"], $contraHash, $datos["fecha"], $datos["sexo"], $datos["avatar"], null, null, null, null, null);
    //retorna la instancia de la clase usuario
    return $usuario;
  }
//funcion para guardar un nuevo usuario
  static public function guardarUsuario($pdo, $usuario){
    //genera la consulta sql
      $sql = "INSERT INTO usuarios VALUES(default, :nombre, :apellido, :email, :pass, :fecha, :sexo, :avatar, :perfil=null, :val_user=null, :direccion=null, :telefono=null, :celular=null)";
      //prepara la consulta
      $guardarUsu = $pdo->prepare($sql);
      //bindea los datos
      $guardarUsu->bindValue(':nombre', $usuario->getNombre());
      $guardarUsu->bindValue(':apellido', $usuario->getApellido());
      $guardarUsu->bindValue(':email', $usuario->getEmail());
      $guardarUsu->bindValue(':pass', $usuario->getPass());
      $guardarUsu->bindValue(':fecha', $usuario->getFecha());
      $guardarUsu->bindValue(':sexo', $usuario->getSexo());
      $guardarUsu->bindValue(':avatar', $usuario->getAvatar());
      $guardarUsu->bindValue(':perfil', $usuario->getPerfil());
      $guardarUsu->bindValue(':val_user', $usuario->getVal_user());
      $guardarUsu->bindValue(':direccion', $usuario->getDireccion());
      $guardarUsu->bindValue(':telefono', $usuario->getTelefono());
      $guardarUsu->bindValue(':celular', $usuario->getCelular());

      //ejecuta la consulta
      $guardarUsu->execute();
  }
//funcion que permite guardar en la base datos el nombre del archivo del avatar
  public static function cambiarAvatar($id,$avatar,$pdo){
    $sql = "UPDATE usuarios SET avatar ='$avatar' WHERE id ='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $sql = "UPDATE usuarios SET perfil = null WHERE id = '$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
  }
//funcion que permite guardar la imagen de perfil y actualizarla en la bd
  public static function guardarPerfil($pdo,$id,$imagen){
    $nombre = $imagen["imagen"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $archivoOrigen = $imagen["imagen"]["tmp_name"];
    $rutaDestino = dirname(__DIR__);
    $rutaDestino = $rutaDestino."/images/perfil/";
    $nombreImg = uniqid();
    $rutaDestino = $rutaDestino.$nombreImg.".".$ext;
    move_uploaded_file ($archivoOrigen, $rutaDestino);
//hace la consulta para actualizar la bd
    $sql = "UPDATE usuarios SET perfil ='$nombreImg."."$ext' WHERE id ='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
  }

  function cambiarPass($email,$fecha,$pass,$pdo){
    $error[] = null;
    $usuario = BaseMySQL::buscarPorEmail($email,$pdo,'usuarios');
    $id = $usuario['id'];
  if ($usuario == null) {
    $error[0] = "El email no está registrado";
    return $error[0];
  }
  if ($fecha == null) {
    $error[1] = "Se requiere una fecha para validar identidad";
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
  $passHash = password_hash($pass, PASSWORD_DEFAULT);
  $sql = "UPDATE usuarios SET pass = '$passHash' WHERE id = $id";
  $query = $pdo->prepare($sql);
  $query->execute();

  }

  public static function actualizarDireccion($id,$direccion,$pdo){
    $sql = "UPDATE usuarios SET direccion='$direccion' WHERE id ='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
  }

  public static function actualizarTelefono($id,$telefono,$pdo){
    $sql = "UPDATE usuarios SET telefono='$telefono' WHERE id ='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
  }

  public static function actualizarCelular($id,$celular,$pdo){
    $sql = "UPDATE usuarios SET celular='$celular' WHERE id ='$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
  }

}
 ?>
