<?php
include_once("autoload.php");
setcookie("errorLogin0", "",0);
setcookie("errorLogin1", "",0);
if (isset($_COOKIE["userEmail"])) {
  Autenticacion::inicioCookies($_COOKIE["userEmail"],$pdo);
  header("location:home.php");
}
 ?>
 <header>
   <div class="container-fluid">
     <div class="row">
       <!-- caja-titulo -->
       <div class="col-xs-12 col-sm-12 col-md-6 col-md-12 col-lg-6 col-xl-6">
         <h1 class="text-white">SocialTruek</h1>
         <h5 class="text-white">Red del Trueque</h5>
       </div>
       <!-- caja-formulario -->
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p mt-3">
         <form class="form" action="checkUser.php" method="post">
           <!-- caja-imput -->
           <div class="row">
             <!-- caja-usuario -->
             <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
             <input class="form-control" type="email" placeholder="email" name="email" value="<?php
             if (isset($_SESSION["userEmail"])) {echo $_SESSION["userEmail"];} ?>" required>
             <div class="form-check p ml-3">
               <label class="small text-white" for=""><input class="form-check-input" type="checkbox" name="recordar" value="1">Recordarme</label>
             </div>
             </div>
             <!-- caja-contraseña -->
             <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
             <input class="form-control" type="password" placeholder="contraseña" name="pass" value="" required>
             <a class="text-white p m" href="#" data-toggle="modal" data-target="#pass"><p class="small p ml-3">Olvidé mi contraseña</p></a>
             </div>
             <div class="botonIniciar form-group col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
               <button class="btn btn-danger" type="submit" name="button">Iniciar Sesión</button>
               <div class="text-white">
                 <?php if (isset($_SESSION["errorLogin0"])): ?>
                   <?php echo $_SESSION["errorLogin0"] ?>
                 <?php endif; ?>
                 <?php if (isset($_SESSION["errorLogin1"])): ?>
                   <?php echo $_SESSION["errorLogin1"] ?>
                 <?php endif; ?>

               </div>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
<?php include_once("cambiarPassForm.php") ?>
 </header>
