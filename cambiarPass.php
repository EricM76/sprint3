<?php
session_start();
include_once("funciones.php");
if ($_POST) {
$error=cambiarPass($_POST["email"],$_POST["fecha"],$_POST["pass"]);
$_SESSION["errorPass"]=$error;
if ($error==null) {
  $_SESSION["userEmail"]=$_POST["email"];
  $_SESSION["userPass"]=$_POST["pass"];
  header("location:home.php");
}
}
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <?php include_once("head.php") ?>
     <title></title>
   </head>
   <body class="bg-dark">


   <div class="modal-dialog modal-md" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Cambiar Contraseña</h3>
       </div>
       <div class="modal-body">
         <form class="form-horizontal" action="cambiarPass.php" method="post">
           <div class="form-group col-12">
               <label class="control-label" for="">Ingrese su e-mail</label>
               <input class="form-control" type="text" name="email" value="<?=persistir('email')?>">
           </div>
           <div class="form-group col-12">
               <label class="control-label" for="">Fecha de nacimiento</label>
               <input class="form-control" type="date" name="fecha" value="<?=persistir('fecha')?>">

           </div>
           <div class="form-group col-12">
               <label class="control-label" for="">Nueva contraseña</label>
               <input class="form-control" type="password" name="pass" value="">
           </div>
           <div class="d-flex justify-content-center">
             <button type="button" name="button" class="btn btn-secondary" onclick="location.href='index.php'">Cancelar</button>
             <button type="submit" name="button" class="btn btn-info ml-2">Cambiar</button>
           </div>
         </form>
       </div>
       <div class="modal-footer text-center">
         <h3 class="text-danger "> <?php if (isset($error))echo $error?></h3>
       </div>
     </div>
   </div>
</body>
</html>
