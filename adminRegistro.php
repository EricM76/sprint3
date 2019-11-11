<?php
include_once('autoload.php');
include_once('funciones.php');
if ($_POST) {
  //genera una array de errores llamando a la funcion de validacion
    $errores = RegistrarAdmin::validarDatosAdmin($_POST);
    $errorCod = Validacion::validarCodigo($_POST['codigo'],$pdo);
  //verifica que no haya errores
    if (count($errores) == 0) {
      //busca si el email está registrado
        $admin = BaseMySQL::buscarPorDNI($_POST["usuario"], $pdo);
        //si está registrado devuelve un error
        if ($admin != null) {
          $errores[] = "El administrador ya se encuentra registrado";
          //si no está registrado continúa con el registro
        } else {
          //genera un usuario
          $admin = RegistrarAdmin::crearAdmin($_POST);
          RegistrarAdmin::guardarAdmin($pdo, $admin);
          header("location:adminAccess.php");
        }
    }
}
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registrar nuevo Administrador</title>
	<?php include_once("head.php") ?>
</head>
<!--Coded with love by Mutiullah Samim-->
<style media="screen">
/* Coded with love by Mutiullah Samim */
body,
html {
  margin: 0;
  padding: 0;
  height: 100%;
  background: grey !important;
}
.user_card {
  height: 480px;
  width: 480px;
  margin-top: auto;
  margin-bottom: auto;
  background: #3f51b5;
  position: relative;
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 5px;

}
.brand_logo_container {
  position: absolute;
  height: 150px;
  width: 150px;
  top: -55px;
  border-radius: 50%;
  background: white;
  padding: 15px;
  text-align: center;
}
.brand_logo {
  height: 120px;
  width: 120px;
  border-radius: ;
  /* border: 2px solid white; */
}
.form_container {
  margin-top: 100px;
}
.login_btn {
  width: 100%;
  background: #c0392b !important;
  color: white !important;
}
.login_btn:focus {
  box-shadow: none !important;
  outline: 0px !important;
}
.back_btn {
  width: 100%;
  background: orange !important;
  color: black !important;
}
.back_btn:focus {
  box-shadow: none !important;
  outline: 0px !important;
}
.login_container {
  padding: 0 2rem;
}
.input-group-text {
  background: #c0392b !important;
  color: white !important;
  border: 0 !important;
  border-radius: 0.25rem 0 0 0.25rem !important;
}
.input_user,
.input_pass:focus {
  box-shadow: none !important;
  outline: 0px !important;
}
.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
  background-color: #c0392b !important;
}
</style>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">

					<form action="adminRegistro.php" method="post" class="form-horizontal">

            <div class="row">
              <div class="input-group mb-3 col-6">
  							<div class="input-group-append">
  								<span class="input-group-text"><i class="far fa-address-book"></i></span>
  							</div>
  							<input type="text" name="nombre" class="form-control input_user" value="<?=persistir('nombre')?>" placeholder="nombre"  required >
  						</div>

              <div class="input-group mb-3 col-6">
  							<div class="input-group-append">
  								<span class="input-group-text"><i class="far fa-address-book"></i></span>
  							</div>
  							<input type="text" name="apellido" class="form-control input_user" value="<?=persistir('apellido')?>" placeholder="apellido" required>
  						</div>
            </div>

            <div class="row">
              <div class="input-group mb-3 col-12">
  							<div class="input-group-append">
  								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
  							</div>
  							<input type="email" name="email" class="form-control input_user" value="<?=persistir('email')?>" placeholder="email" required>
  						</div>
            </div>

            <div class="row">
              <div class="input-group mb-3 col-6">
  							<div class="input-group-append">
  								<span class="input-group-text"><i class="fas fa-user"></i></span>
  							</div>
  							<input type="text" name="usuario" class="form-control input_user" value="" placeholder="usuario" data-toggle="tooltip" data-placement="top" title="DNI (solo numeros)" required>
  						</div>

              <div class="input-group mb-3 col-6">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user-secret"></i></span>
                </div>
                <input type="password" name="codigo" class="form-control input_pass" value="" placeholder="codigo validador" required>
              </div>

            </div>


          <div class="row">
            <div class="input-group mb-3 col-6">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="pass" class="form-control input_user" value="" placeholder="contraseña" data-toggle="tooltip" data-placement="top" title="minimo 8 caracteres" required>
            </div>

            <div class="input-group mb-3 col-6">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="pass2" class="form-control input_user" value="" placeholder="repetir contraseña" data-toggle="tooltip" data-placement="top" title="minimo 8 caracteres" required>
            </div>

          </div>

					<div class="d-flex justify-content-center mt-3 login_container">

          <a href=adminAccess.php class="m-2"><button type="button" name="button" class="btn btn-warning">Volver</button> </a>
          <button type="submit" name="button" class="btn btn-danger m-2">Aceptar</button>
				   </div>

					</form>

				</div>
        <div class="text-center alert-danger">
          <?php
            if (isset($errores)):
              foreach ($errores as $error) {
              echo $error."<br>";
              }
            endif;
            if (isset($errorCod)) {
              echo "$errorCod";
            }
           ?>
        </div>

			</div>
		</div>
	</div>
  <script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
  })
  </script>

</body>
</html>
