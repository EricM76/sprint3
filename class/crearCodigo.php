<?php
class GenerarCodigo{
static public function nuevoCodigo($datos){
  //hasheo de codigo
  $codigo = password_hash($datos["new"], PASSWORD_DEFAULT);

  $newCodigo = new Codigo($codigo);
  //retorna la instancia de la clase usuario
  return $newCodigo;
}
//funcion para guardar un nuevo usuario
static public function guardarCodigo($pdo, $codigo){
  //genera la consulta sql
    $sql = "INSERT INTO codigo VALUES(:codigo)";
    //prepara la consulta
    $guardarCod = $pdo->prepare($sql);
    //bindea los datos
    $guardarCod->bindValue(':codigo', $codigo->getCodigo());

    //ejecuta la consulta
    $guardarCod->execute();
}
}
?>
