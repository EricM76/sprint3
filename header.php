<?php
session_start();
if ($_SESSION["userEmail"]==null) {
  header("location:error.php");
}
include_once("funciones.php");
$userEmail=$_SESSION["userEmail"];
// $usuario=verificarEmail($userEmail);
// if (isset($_COOKIE["avatar"])) {
//   $avatar=$_COOKIE["avatar"];
// }
// if (isset($_COOKIE["imgPerfil"])) {
//   $avatar=$_COOKIE["imgPerfil"];
// }

 ?>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <meta http-equiv="Expires" content="0">
   <meta http-equiv="Last-Modified" content="0">
   <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
   <meta http-equiv="Pragma" content="no-cache"> -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/master.css">
   <link rel="stylesheet" href="css/estilos-ejemplos.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/avatar.css">
 </head>
    <header class="container-fluid">
      <!-- parametros de la barra de navegacion -->
      <nav class="navbar navbar-expand-md navbar-dark">
        <!-- boton de navegacion -->
        <a class="navbar-brand mr-5" href="home.php">
          <img src="images\logo-sm.png" width="150" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- barra de navegacion extendida -->
        <div class="row collapse navbar-collapse" id="navbarSupportedContent">
          <!-- barra de menu y busqueda -->
          <div class="col-xs-12 col-sm-6 col-md-9 col-lg- col-xl-5">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control-sm mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" size="35">
              <button class="btn btn-outline-light btn-sm my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="home.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Tendencias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Historial</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <!-- menu desplegable -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="autos.php">Autos</a>
                  <a class="dropdown-item" href="inmueble.php">Inmuebles</a>
                  <a class="dropdown-item" href="hogarnav.php">Hogar</a>
                  <a class="dropdown-item" href="herramientas.php">Herramientas</a>
                  <a class="dropdown-item" href="libros.php">Libros</a>
                  <a class="dropdown-item" href="juguetes.php">Juguetes</a>
                  <a class="dropdown-item" href="rodados.php">Rodados</a>
                  <a class="dropdown-item" href="celulares.php">Celulares</a>
                  <!-- <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Alimentos</a>
                  <a class="dropdown-item" href="#">Oficios</a> -->
                </div>
              </li>
            </ul>
        </div>
        <!-- botones -->
        <div class="d-flex flex-row justify-content-end col-xs-12 col-sm-6 col-md-3 col-lg- col-xl-7">
          <div class="mr-4 mt-2">
            <div class="">
              <button class="btn btn-warning btn-sm my-2 -my-sm-0"type="button" name="button">Truekear!</button>
              <button class="btn btn-danger btn-sm my-2 -my-sm-0"type="button" name="button">Truekoins</button>

              <!-- <a class="text-white mt-2" href="cerrar.php">Salir</a> -->
            </div>
          </div>
          <div class="text-center mt-2">
            <a class="" href="perfil.php">
              <?php  if($usuario["avatar"]!=null){?>
                <img class="user" src="<?=$usuario["avatar"]?>">
              <?php }else {?>
              <img class="user" src="<?=$usuario["perfil"]?>">
              <?php } ?>
            <h5 class="text-white mt-1"><?=$usuario["nombre"]. " " . $usuario["apellido"]?></h5>
          </div>

        </div>
        </div>
      </div>
    </nav>
    </header>
