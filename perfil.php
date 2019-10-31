<?php
include_once("autoload.php");
if ($_POST) {
  if ($_POST["direccion"]!=null) {
    RegistrarUsuarios::actualizarDireccion($_SESSION["id"],$_POST["direccion"],$pdo);
  }
  if ($_POST["telefono"]!=null) {
    RegistrarUsuarios::actualizarTelefono($_SESSION["id"],$_POST["telefono"],$pdo);
  }
  if ($_POST["celular"]!=null) {
    RegistrarUsuarios::actualizarCelular($_SESSION["id"],$_POST["celular"],$pdo);
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <?php include_once("head.php") ?>
     <link rel="stylesheet" href="css/perfil.css">
     <title>Perfil del Usuario</title>
   </head>
   <body>
     <?php include_once("header.php")?>
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-4 img">

      <a href="#" data-toggle="modal" data-target="#avatar">
        <img src=<?php if($usuario['perfil'] == null){echo "images/avatar/".$usuario["avatar"];}else{echo "images/perfil/".$usuario["perfil"];}?> alt="imagen de perfil" class="" style="width:300px"><br></a><br>

      <a href="#" data-toggle="modal" data-target="#avatar">cambiar avatar</a>

      <?php if (isset($errores)) :?>
        <div class="">
          <p class="text-danger small"><?php if(isset($errores[0]))echo$errores[0]?></p>
          <p class="text-danger small"><?php if(isset($errores[1]))echo$errores[1]?></p>
        </div>
      <?php endif ?>
    </div>

    <div class="col-xs-12 col-md-8 details">
      <blockquote>
        <h2><?php echo $usuario["nombre"]." ".$usuario["apellido"]?></h2>
        <h4><cite title="Source Title"><?=$usuario["email"]?></cite></h4>
      </blockquote>
      <hr>
    <p><u>DATOS PERSONALES</u></p>
    <div class="col-12">
      <h6 class="ml-2"><strong>sexo: </strong>
        <?php
        switch ($usuario['sexo']) {
          case 'h':
            echo "hombre";
            break;
          case 'm':
            echo "mujer";
            break;
          case 'i':
            echo "indefinido";
            break;
          }
        ?>
      </h6>
      <h6 class="ml-2"><strong>cumpleaños: </strong><?=date("d/m/Y", strtotime($usuario["fecha"]))?></h6>
    </div>

    <hr>
    <p><u>DATOS DE CONTACTO</u></p>
    <div class="col-12">
      <h6 class="ml-2"><strong>dirección: </strong><?=$usuario["direccion"]?></h6>
      <h6 class="ml-2"><strong>teléfono: </strong><?=$usuario["telefono"]?></h6>
      <h6 class="ml-2"><strong>celular: </strong><?=$usuario["celular"]?></h6>
    </div>

    <a href=""><button class="btn btn-warning btn-sm my-2 -my-sm-0 mt-4"type="button" name="button" >Mis Truekes</button></a>

    <a href="" data-toggle="modal" data-target="#actualizar" ><button class="btn btn-info btn-sm my-2 -my-sm-0 mt-4"type="button" name="button" >Modificar Datos</button></a>

    <a href="cerrar.php"><button class="btn btn-secondary btn-sm my-2 -my-sm-0 mt-4"type="button" name="button" >Cerrar Sesion</button></a>

    <a href="" data-toggle="modal" data-target="#borrar"><button class="btn btn-danger btn-sm my-2 -my-sm-0 mt-4" type="button" name="button" >Eliminar Cuenta</button></a>
    </div>
  </div>
</div>
    <?php
    include_once("borrarCuenta.php");
    include_once("editarAvatar.php");
    include_once("actualizarDatos.php");
    include_once("script.php");
    ?>
   </body>
 </html>
