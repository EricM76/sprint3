<?php
include_once('autoload.php');
$productos = BaseMySQL::selectProduc($pdo);
// vardump($auto['id']);
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>

    <title></title>
  </head>
  <body class="">
  <?php include_once("header.php") ?>
<!-- carrusel -->
    <section class="carrousel mb-0 mt-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>


        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="3000">
            <img src="images\hogar.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\audioVideo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\electroHogar.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\encuentra.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\juguetes.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\nuevaCasa.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="images\smartphone.jpg" class="d-block w-100" alt="...">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- posteos de ejemplo -->
    <section class="mt-3">

      <div class="container">
          <div class="row mt-4">

            <?php foreach ($productos as $producto): ?>

                <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="producto.php?id=<?=$producto["id"]?>&cat=<?=$producto["categoria_id"] ?>">
                              <img class="pic-1" src=<?="images/productos/".$producto["foto1"]?>>
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="producto.php?id=<?=$producto["id"]?>&cat=<?=$producto["categoria_id"] ?>"><?=$producto['titulo']?> </a></h3>
                          <div class="price"><?=$producto['valor']?> truekoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>

            <?php endforeach; ?>

          </div>
      </div>
      <hr>
    </section>
    <!-- pie de página -->
    <footer>
      <p class="text-center"><span>Todos los derechos reservados - AEM - Trabajo Integrador para DigitalHouse 2019</span></p>
    </footer>
<!-- script de javascript -->
    <script src="js/jquery.js"type="text/javascript"></script>
    <script src="js/bootstrap.js"type="text/javascript"></script>
  </body>
</html>
