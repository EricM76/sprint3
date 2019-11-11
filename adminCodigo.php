<?php
include_once('autoload.php');
if ($_POST) {
  $errores = Validacion::ValidarCodigo($_POST['old'],$pdo);
  if ($errores == null) {
    $newCodigo = GenerarCodigo::nuevoCodigo($_POST);
    GenerarCodigo::guardarCodigo($pdo,$newCodigo);
  }
}
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>Generar nuevo Codigo</title>
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
  height: 450px;
  width: 350px;
  margin-top: auto;
  margin-bottom: auto;
  background: #3f51b5;
  position: relative;
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 5px;

}
.brand_logo_container {
  position: absolute;
  height: 200px;
  width: 200px;
  top: -75px;
  border-radius: 50%;
  background: white;
  padding: 30px;
  text-align: center;
}
.brand_logo {
  height: 150px;
  width: 150px;
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

					<form action="adminCodigo.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="old" class="form-control input_user" value="" placeholder="codigo anterior" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="new" class="form-control input_pass" value="" placeholder="nuevo codigo" required>
						</div>
					<div class="d-flex justify-content-center mt-3 login_container">

          <a href=admin.php class="m-2"><button type="button" name="button" class="btn back_btn">Volver</button> </a>
          <button type="submit" name="button" class="btn login_btn m-2">Crear</button>
				   </div>

					</form>

				</div>
        <div class="text-center alert-danger">
          <?php
          if (isset($errores)) {
            echo $errores;
          }
           ?>
        </div>

			</div>
		</div>
	</div>
</body>
</html>
