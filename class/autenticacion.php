<?php
class Autenticacion{
  public static function inicioSesion($usuario){
    $_SESSION["userEmail"] = $usuario["email"];
    $_SESSION["id"] = $usuario["id"];
    }
  public static function inicioCookies($cookie,$pdo){
    $usuario = BaseMySQL::buscarPorEmail($cookie,$pdo,'usuarios');
    $_SESSION["userEmail"] = $usuario["email"];
    $_SESSION["id"] = $usuario["id"];
  }
}

 ?>
