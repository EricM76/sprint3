<?php
class Validacion{

    public function validarLogin($datos,$usuario){

      if(password_verify($datos, $usuario) == false){
        $errores = "La contraseña es incorrecta";
      }
      // La funcion retorna los errores
      return $errores;
    }

    public function validarAdmin($datos,$pdo,$usuario){
      if ($datos['usuario'] == null) {
        $errores = "Tiene que ingresar un usuario";
        return $errores;
      }
      $usuario=BaseMySQL::buscarPorDNI($datos['usuario'],$pdo);
      if ($usuario == null) {
        $errores = "No está registrado como administrador";
        return $errores;
      }
      if(password_verify($datos['pass'], $usuario['pass']) == false){
        $errores = "La contraseña es incorrecta";
        return $errores;
      }
    }

    public function validarCodigo($old,$pdo){
      $codigo = BaseMySQL::selectCodigo($pdo);
      if(password_verify($old,$codigo['codigo']) == false){
        $errores = "El codigo anterior es incorrecto";
        return $errores;
      }

    }
}

 ?>
