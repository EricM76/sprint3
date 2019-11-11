<?php
class RegistrarAdmin{

  public function validarDatosAdmin($datos){
  //arrary de errores
      $errores = [];

  //validacion de errores
      if ($datos) {
        if (strlen($datos["nombre"]) == 0) {
          $errores[0] = "El campo nombre se encuentra vacio";
        }
        if (strlen($datos["apellido"])== 0) {
          $errores[1] = "El campo apellido se encuentra vacio";
        }
        if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
          $errores[2] = "El email tiene un formato incorrecto";
        }
        if (!filter_var($datos["usuario"],FILTER_VALIDATE_INT)) {
          $errores[3]= "El usuario debe ser el dni (solo números)";
        }
        if (strlen($datos["pass"])<8) {
          $errores[4] ="La contraseña debe tener más de 8 caracteres";
        }
        if ($datos["pass"]!=$datos["pass2"]) {
          $errores[5] ="Las contraseñas no coinciden";
        }
      }
      //retorna el array de errores
      return $errores;
    }

  public static function crearAdmin($datos){
    $passHash = password_hash($datos["pass"], PASSWORD_DEFAULT);
    $admin = new Admin($datos["nombre"],$datos["apellido"],$datos["email"],$datos["usuario"],$passHash);

    return $admin;
  }

  static public function guardarAdmin($pdo, $admin){
    
      $sql = "INSERT INTO admin VALUES(default, :nombre, :apellido, :email, :usuario, :pass)";

      $guardarAdmin = $pdo->prepare($sql);
      $guardarAdmin->bindValue(':nombre', $admin->getNombre());
      $guardarAdmin->bindValue(':apellido', $admin->getApellido());
      $guardarAdmin->bindValue(':email', $admin->getEmail());
      $guardarAdmin->bindValue(':usuario', $admin->getUsuario());
      $guardarAdmin->bindValue(':pass', $admin->getPass());

      $guardarAdmin->execute();
  }

}

 ?>
