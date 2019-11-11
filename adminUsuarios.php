<?php
include("autoload.php");
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php include("head.php")?>
     <title>Usuarios</title>
   </head>
   <?php include("adminHeader.php") ?>
   <body class="">
   <div class="container mt-3 col-10">
     <?php
     $registros=BaseMySQL::verRegistros($pdo,'usuarios');
     ?>
     <table class="table table-
     light">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">apellido</th>
          <th scope="col">email</th>
          <th scope="col">valoracion</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($registros as $registro): ?>
      <tr>
        <th scope="row"><a href="adminUsuarios.php?id=<?=$registro["id"]?>"><?=$registro["id"]?></a></th>
        <td><?=$registro["nombre"]?></td>
        <td><?=$registro["apellido"]?></td>
        <td><?=$registro["email"]?></td>
        <td><?=$registro["val_user"]?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
   </table>
   </div>

   <div class="modal fade" id="perfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLongTitle">Perfil de Usuario</h5>
          </div>
         <div class="modal-body">
           <form>
             <?php
             $user = BaseMySQL::buscarRegistro($pdo,'usuarios','id',$_GET["id"]);
              ?>
            <div class="form-row container">
              <div class="col-3">
                <img src="images/avatar/<?=$user["avatar"] ?>" alt="" class="img-fluid">
                </div>
              <div class="col-9 mt-3">
                <div class="">
                    <label for="" class="text-uppercase"><strong><?=$user["nombre"]?> <?=$user["apellido"] ?></strong> </label>
                </div>
                <div class="">
                  <label for=""><?=$user["email"]?></label>
                </div>
                <br>
                <div class="row">
                  <div class="col-5">
                    <label>Sexo: </label>
                    <label for=""><?php
                    if ($user["sexo"]='h'){
                    echo " hombre";
                    }elseif($user["sexo"]='m'){
                      echo " mujer";
                    }else {
                      echo " no declarado";
                    }?></label>
                  </div>
                  <div class="col-5">
                    <label for="">Cumpleaños: </label>
                    <label for=""><?=$user["fecha"]?></label>
                  </div>

                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <label>Domicilio: </label>
                    <label for=""><?=$user["direccion"]?></label>
                  </div>
                  <div class="col-5">
                    <label for="">Telefono: </label>
                    <label for=""><?=$user["telefono"]?></label>
                  </div>
                  <div class="col-5">
                    <label for="">Celular: </label>
                    <label for=""><?=$user["celular"]?></label>
                  </div>
                </div>
              </div>
          </form>
         </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-primary"><a class="text-white" style="text-decoration:none" href="adminUsuarios.php" >Cerrar</a></button>
      </div>
    </div>
  </div>

   </div>
   <?php
   //codigo para habilitar el uso de javascript
   include_once("script.php");
   ?>
   <!-- si la pagina vuelve a cargarse recibe el id por $_GET -->
   <?php if (isset($_GET["id"])): ?>
    <!-- funcion en javascript que permite recibir un dato por $_GET y volver a cargar la pagina y abrir una ventana emergente -->
     <script type="text/javascript">
      $(function(){
       $("#perfil").modal();
        });
        <?php $_GET["id"]=null ?>
     </script>
   <?php endif; ?>


   </body>
 </html>
