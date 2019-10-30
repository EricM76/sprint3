<?php
class Validacion{

    public function validarLogin($datos,$usuario){

      if(password_verify($datos, $usuario) == false){
        $errores = "La contraseña es incorrecta";
      }
      // La funcion retorna los errores
      return $errores;
    }
}

 ?>
