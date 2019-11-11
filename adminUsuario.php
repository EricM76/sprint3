<?php
include("autoload.php");
include("funciones.php");

if ($_POST){
//genera una array de errores llamando a la funcion de validacion
  $errores = $validadorUsuario->validarDatosUser($_POST);
//verifica que no haya errores
  if (count($errores) == 0) {
    //busca si el email está registrado
      $usuario = BaseMySQL::buscarPorEmail($_POST["email"], $pdo, 'usuarios');
      //si está registrado devuelve un error
      if ($usuario != null) {
        $errores[] = "El email ya se encuentra registrado";
        //si no está registrado continúa con el registro
      } else {
        //genera un usuario
        $usuario = RegistrarUsuarios::crearUsuario($_POST);
        RegistrarUsuarios::guardarUsuario($pdo, $usuario);
        header("location:adminRegistros.php");
      }
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php include("head.php")?>
     <title>Nuevo Usuario</title>
   </head>
     <?php include("adminHeader.php") ?>
   <body>
     <div class="container">

      <form class="form-horizontal mt-5" action="adminUsuario.php" method="post">
        <div class="row">
          <!-- Text input-->
          <div class="form-group col-6">
            <label class="control-label" for="nombre">Nombre</label>
            <div class="">
            <input id="nombre" name="nombre" type="text" placeholder="nombre" class="form-control input-md" value="<?=persistir('nombre')?>">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group col-6">
            <label class="control-label" for="apellido">Apellido</label>
            <div class="">
            <input id="apellido" name="apellido" type="text" placeholder="apellido" class="form-control input-md" value="<?=persistir('apellido') ?>">
            </div>
          </div>
        </div>

      <div class="row">
        <!-- Text input-->
        <div class="form-group col-6">
          <label class="control-label" for="email">Email</label>
          <div class="">
          <input id="email" name="email" type="email" placeholder="email" class="form-control input-md" value="<?=persistir('email')?>">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group col-6">
          <label class=" control-label" for="pass">Contraseña</label>
          <div class="">
          <input id="pass" name="pass" type="password" placeholder="contraseña" class="form-control input-md">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-6">
          <label class="control-label" for="fecha">Cumpleaños</label>
          <div class="">
          <input id="fecha" name="fecha" type="date" placeholder="fecha" class="form-control input-md" value="<?=persistir('fecha')?>">
          </div>
        </div>
        <div class="form-group col-6">
          <label class="control-label mb-3" for="fecha">Sexo</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="h">
            <label class="form-check-label" for="inlineRadio1">Hombre</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="m">
            <label class="form-check-label" for="inlineRadio2">Mujer</label>
          </div>
        </div>
      </div>


      <!-- Button -->
      <div class="d-flex justify-content-end">
        <div class="form-group">
          <div class="">
            <button id="Registrarse" name="Registrarse" class="btn btn-danger">Registrarse</button>
          </div>
        </div>
      </div>

    </div>
  </form>
  <div class="alert">
    <?php if (isset($errores)):
      foreach ($errores as $error) {
      ?> <p class="alert alert-danger"><?=$error ?></p> <?php
      }
    endif; ?>
  </div>
     <?php include("script.php") ?>
   </body>
 </html>
