<?php
include_once("autoload.php");
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
    <div class="col-xs-12 col-md-5 img">

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

    <div class="col-xs-12 col-md-7 details">
      <blockquote>
        <h2><?php echo $usuario["nombre"]." ".$usuario["apellido"]?></h2>
        <h4><cite title="Source Title"><?=$usuario["email"]?></cite></h4>
      </blockquote>
      <hr>
    <cite>Datos Personales</cite><br>
    <h5>
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
    </h5>
    <h5><?=date("d/m/Y", strtotime($usuario["fecha"]))?></h5>
    <hr>
    <cite>Datos de Contacto</cite><br>
    <a href="#">agregar dirección</a><br>
    <a href="#">agregar teléfono</a><br>
    <a href="#">agregar celular</a><br>
    <a href="cerrar.php"><button class="btn btn-secondary btn-sm my-2 -my-sm-0 mt-4"type="button" name="button" >Cerrar Sesion</button></a>
    <a href="" data-toggle="modal" data-target="#borrar"><button class="btn btn-danger btn-sm my-2 -my-sm-0 mt-4" type="button" name="button" >Eliminar Cuenta</button></a>
    </div>
  </div>
</div>
    <?php
    include_once("borrarCuenta.php");
    include_once("editarAvatar.php");
    include_once("script.php");
    ?>
   </body>
 </html>
