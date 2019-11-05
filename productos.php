<?php
include_once('autoload.php');
if ($_GET) {
  $_SESSION["cat"] = $_GET['cat'];
  $cat = $_GET['cat'];
  $productos = BaseMySQL::verProductos($pdo,$cat);
  $producto0 = $productos[0];
  $producto1 = $productos[1];
  $producto2 = $productos[2];
  $producto3 = $productos[3];
  $producto4 = $productos[4];
  $producto5 = $productos[5];
  $producto6 = $productos[6];
  $producto7 = $productos[7];
}

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/autos.css">
    <link rel="stylesheet" href="css/master_autos.css">
    <title>Truekear Productos</title>
  </head>
  <body class="">
    <?php include("header.php") ?>
    <!-- banner autos -->
<div class="container">
      <!--Start code-->
  <div class="row">
    <div class="col-12 pb-5">
      <!--SECTION START-->
    <section class="row">
        <!--Start slider news-->
      <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <!--dots navigate-->
          <ol class="carousel-indicators top-indicator">
              <li data-target="#featured" data-slide-to="0" class="active"></li>
              <li data-target="#featured" data-slide-to="1"></li>
              <li data-target="#featured" data-slide-to="2"></li>
              <li data-target="#featured" data-slide-to="3"></li>
          </ol>

            <!--carousel inner-->
          <div class="">
              <!--Item slider 1-->
            <div class="carousel-item active">
              <div class="card border-0 rounded-0 text-light overflow zoom">
                <div class="position-relative">
                    <!--thumbnail img-->
                  <div class="ratio_left-cover-1 image-wrapper">
                      <a href=<?="producto.php?id=".$producto0["usuario_id"]."&cat=".$cat?>><img class="img-fluid w-100" src=<?="images/productos/".$producto0["foto1"]?> alt="Image description" style = 'height:400px'></a>
                  </div>
                  <div class="position-absolute p-1 p-lg-3 b-0 w-100 bg-shadow">
                    <ul class="social">
                      <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                      <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                      <li><a href="" data-tip="Comenzar trueke"><i class="fa fa-handshake-o"></i></a></li>
                    </ul>
                      <!--title-->
                    <a href="#"><h2 class="h3 post-title text-white my-1 mb-2 ml-4 "> <?=$producto0["titulo"] ?> </h2></a>
                    <div class="news-meta ml-5">
                      <span class="news-author badge badge-primary"><span class="text-white font-weight-bold"><?=$producto0["valor"]?></span> truekoins</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Item slider 2-->
              <div class="carousel-item">
                <div class="card border-0 rounded-0 text-light overflow zoom">
                  <div class="position-relative">
                      <!--thumbnail img-->
                    <div class="ratio_left-cover-1 image-wrapper">
                        <a href=<?="producto.php?id=".$producto1["usuario_id"]."&cat=".$cat?>><img class="img-fluid w-100" src=<?="images/productos/".$producto1["foto1"]?> alt="Image description" style = 'height:400px'></a>
                    </div>
                    <div class="position-absolute p-1 p-lg-3 b-0 w-100 bg-shadow">
                      <ul class="social ">
                        <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                        <li><a href="" data-tip="Comenzar trueke"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                        <!--title-->
                      <a href="#"><h2 class="h3 post-title text-white my-1 mb-2 ml-4 "><?=$producto1["titulo"] ?></h2></a>
                      <div class="news-meta ml-5">
                        <span class="news-author badge badge-primary"><span class="text-white font-weight-bold"><?=$producto1["valor"]?></span> truekoins</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Item slider 3-->
            <div class="carousel-item">
              <div class="card border-0 rounded-0 text-light overflow zoom">
                <div class="position-relative">
                    <!--thumbnail img-->
                  <div class="ratio_left-cover-1 image-wrapper">
                      <a href=<?="producto.php?id=".$producto2["usuario_id"]."&cat=".$cat?>><img class="img-fluid w-100" src=<?="images/productos/".$producto2["foto1"]?> alt="Image description" style = 'height:400px'></a>
                  </div>
                  <div class="position-absolute p-1 p-lg-3 b-0 w-100 bg-shadow">
                    <ul class="social ">
                      <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                      <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                      <li><a href="" data-tip="Comenzar trueke"><i class="fa fa-handshake-o"></i></a></li>
                    </ul>
                      <!--title-->
                    <a href="#"><h2 class="h3 post-title text-white my-1 mb-2 ml-4 "><?=$producto2["titulo"] ?></h2></a>
                    <div class="news-meta ml-5">
                      <span class="news-author badge badge-primary"><span class="text-white font-weight-bold"><?=$producto2["valor"]?></span> truekoins</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Item slider 4-->
          <div class="carousel-item">
            <div class="card border-0 rounded-0 text-light overflow zoom">
              <div class="position-relative">
                  <!--thumbnail img-->
                <div class="ratio_left-cover-1 image-wrapper">
                    <a href=<?="producto.php?id=".$producto3["usuario_id"]."&cat=".$cat?>><img class="img-fluid w-100" src=<?="images/productos/".$producto3["foto1"]?> alt="Image description" style = 'height:400px'></a>
                </div>
                <div class="position-absolute p-1 p-lg-3 b-0 w-100 bg-shadow">
                  <ul class="social ">
                    <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                    <li><a href="" data-tip="Comenzar trueke"><i class="fa fa-handshake-o"></i></a></li>
                  </ul>
                    <!--title-->
                  <a href="#"><h2 class="h3 post-title text-white my-1 mb-2 ml-4 "><?=$producto3["titulo"] ?></h2></a>
                  <div class="news-meta ml-5">
                    <span class="news-author badge badge-primary"><span class="text-white font-weight-bold"><?=$producto3["valor"]?></span> truekoins</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <!--end item slider-->
          </div>
            <!--end carousel inner-->
        </div>

          <!--navigation-->
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
      <!--End slider news-->

        <!--Start box news-->
      <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
        <div class="row">
            <!--news box-->
          <div class="col-6 pb-1 pt-0 pr-1">
            <div class="card border-0 rounded-0 text-white overflow zoom">
              <div class="position-relative">
                  <!--thumbnail img-->
                <div class="ratio_right-cover-2 image-wrapper">
                  <a href=<?="producto.php?id=".$producto4["usuario_id"]."&cat=".$cat?>><img class="img-fluid" src=<?="images/productos/".$producto4["foto1"]?> alt="Image description" style = 'height:200px'>
                  </a>
                </div>
                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                    <!--title-->
                  <a href=><h2 class="h5 text-white my-1"><?=$producto4["titulo"]?></h2></a>
                  <!-- category -->
                  <span class="p-1 ml-3 badge badge-primary" href="#"><?=$producto4["valor"]?> truekoins</span>
                </div>
              </div>
            </div>
          </div>

            <!--news box-->
          <div class="col-6 pb-1 pl-1 pt-0">
            <div class="card border-0 rounded-0 text-white overflow zoom">
              <div class="position-relative">
                <div class="ratio_right-cover-2 image-wrapper">
                  <a href=<?="producto.php?id=".$producto5["usuario_id"]."&cat=".$cat?>><img class="img-fluid" src=<?="images/productos/".$producto5["foto1"]?> alt="Image description" style = 'height:200px'>
                  </a>
                </div>
                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                    <!--title-->
                  <a href="#"><h2 class="h5 text-white my-1"><?=$producto5["titulo"]?></h2></a>
                  <!-- category -->
                  <span class="p-1 ml-3 badge badge-primary" href="#"><?=$producto5["valor"]?> truekoins</span>
                </div>
              </div>
            </div>
          </div>

            <!--news box-->
          <div class="col-6 pb-1 pr-1 pt-1">
            <div class="card border-0 rounded-0 text-white overflow zoom">
              <div class="position-relative">
                  <!--thumbnail img-->
                  <div class="ratio_right-cover-2 image-wrapper">
                    <a href=<?="producto.php?id=".$producto6["usuario_id"]."&cat=".$cat?>><img class="img-fluid" src=<?="images/productos/".$producto6["foto1"]?> alt="Image description" style = 'height:200px'>
                    </a>
                  </div>
                  <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                      <!--title-->
                    <a href="#"><h2 class="h5 text-white my-1"> <?=$producto6["titulo"]?> </h2></a>
                    <!-- category -->
                    <span class="p-1 ml-3 badge badge-primary" href="#"><?=$producto6["valor"]?> truekoins</span>
                  </div>
              </div>
            </div>
          </div>

            <!--news box-->
          <div class="col-6 pb-1 pl-1 pt-1">
            <div class="card border-0 rounded-0 text-white overflow zoom">
              <div class="position-relative">
                  <!--thumbnail img-->
                  <div class="ratio_right-cover-2 image-wrapper">
                    <a href=<?="producto.php?id=".$producto7["usuario_id"]."&cat=".$cat?>><img class="img-fluid" src=<?="images/productos/".$producto7["foto1"]?> alt="Image description" style = 'height:200px'>
                    </a>
                  </div>
                  <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                      <!--title-->
                    <a href="#"><h2 class="h5 text-white my-1"><?=$producto7["titulo"]?></h2></a>
                    <!-- category -->
                    <span class="p-1 ml-3 badge badge-primary" href="#"><?=$producto7["valor"]?> truekoins</span>
                  </div>
              </div>
            </div>
          </div>
            <!--end news box-->
        </div>
      </div>
        <!--End box news-->
    </section>
    <!--END SECTION-->
    </div>
  </div>
    <!--end code-->

    <div class="row mb-4">
        <div class="col-12 text-center">
            <p>Todos los derechos reservados - AEM - Trabajo Integrador DigitalHouse 2019</p>
        </div>
    </div>
</div>

    <script src="js/jquery.js"type="text/javascript"></script>
    <script src="js/bootstrap.js"type="text/javascript"></script>
  </body>
</html>
