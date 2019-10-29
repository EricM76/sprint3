<?php
require_once("funciones.php");
require_once("autoload.php");

if ($_POST):
  $errores = $validadorUsuario->validarDatosUser($_POST);
  if (count($errores) == 0) {
      //busca si el email está registrado
        $usuario = BaseMySQL::buscarPorEmail($_POST["email"], $pdo, 'usuarios');
        //si está registrado devuelve un error
        if ($usuario != null) {
          $errores[5] = "El email ya se encuentra registrado";
          // var_dump($errores);
          //si no está registrado continúa con el registro
        } else {
          //genera un usuario
          $usuario = RegistrarUsuarios::crearUsuario($_POST);
          RegistrarUsuarios::guardarUsuario($pdo, $usuario);
          header("location:index.php");
        }
    }else{
      // var_dump($errores);
    }
  endif;
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
  <body>

<?php include("headerIndex.php") ?>
    <!-- cuerpo principal -->

    <div class="container-fluid row">
      <!-- logotipo -->
      <section class="logotipo container  col-xs-12 col-sm-4 col-md-5 col-lg-5 col-xl-6 p-4 m">
        <div class="logo pl-2 pr-2">
          <img class="img-fluid" src="images\logo.png" alt="logo">
        </div><br>
        <div class="text-center">
          <a href="" data-toggle="modal" data-target="#questions">Preguntas frecuentes</a>
        </div>

      </section>
      <!-- formulario de registro -->
      <section class="registro container col-xs-12 col-sm-8 col-md-7 col-lg-7 col-xl-6 pl-4 pr-2 m">

        <div class="p-4">
          <div class="mb-3">
            <h4>Abrí una cuenta</h4>
            <h5>Es fácil y rápido</h5>
          </div>
          <form class="form-row" action="index.php" method="post">
              <div class="form-group col-xs-12 col-md-12 col-lg-6 col-xl-6">
                <label class="sr-only"for="">Nombre</label>
                <input class="form-control <?= valido(persistir('nombre'),$errores[0])?>" type="text" name="nombre" value="<?=persistir('nombre')?>" placeholder="nombre">
              </div>
              <div class="form-group col-xs-12 col-md-12 col-lg-6 col-xl-6">
                <label class="sr-only"for="">Apellido</label>
                <input class="form-control <?= valido(persistir('apellido'),$errores[1]) ?>" type="text" name="apellido" value="<?=persistir('apellido')?>" placeholder="apellido">
              </div>
            <div class="form-group col-xs-12 col-md-12 col-lg-6 ">
              <label class="sr-only"for="">e-mail</label>
              <input class="form-control <?=valido(persistir('email'),$errores[2])?> <?=valido(persistir('email'),$errores[5])?>"

              type="email" name="email" value="<?=persistir('email')?>" placeholder="e-mail">
                <p class="text-danger small"><?php if(isset($errores[5])): echo $errores[5]; endif;if(isset($errores[2])): echo $errores[2]; endif;?></p>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-6  ">
              <label class="sr-only"for="">Contraseña</label>
              <input class="form-control <?= valido(persistir('pass'),$errores[3])?>" type="password" name="pass" value="" placeholder="contraseña">
              <p class="text-danger small"><?php if(isset($errores[3])): echo $errores[3]; endif;?></p>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-6">
              <label class=""for="">Fecha de nacimiento</label>
              <input class="form-control <?= valido(persistir('fecha'),$errores[4])?>" type="date" name="fecha" value="<?=persistir('fecha')?>">
              <p class="text-danger small"><?php if(isset($errores[4])): echo $errores[4]; endif;?></p>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-6">
              <label class=""for="">Sexo</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input p m" type="radio" name="sexo" value="Hombre">
                <label class="form-check-label" for="p m">Hombre</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input p m" type="radio" name="sexo" value="Mujer">
                <label class="form-check-label" for="p m">Mujer</label>
              </div>
            </div>
            <div class="">
              <p class="small">Al hacer clic en <span>"Registrarte"</span>, aceptas nuestras <a href="" data-toggle="modal" data-target="#condiciones">Condiciones,</a> la <a href="" data-toggle="modal" data-target="#datos">Política de datos </a>y la <a href="#" data-toggle="modal" data-target="#cookies">Política de cookies.</a> Es posible que te enviemos notificaciones por SMS, que puedes desactivar cuando quieras.</p>
            </div>
            <button class="btn btn-primary" type="submit" name="button">Registrarse</button>
          </form>
        </div>
      </div>
    </section>
<?php
include("questions.php");
?>
  <footer class="bg-danger text-center mt-5">
    <span class="text-white ">Todos los derechos reservados - AEM - Trabajo Integrador para DigitalHouse 2019</span>
  </footer>
    <script src="js/jquery.js"type="text/javascript"></script>
    <script src="js/bootstrap.js"type="text/javascript"></script>
  </body>
</html>
