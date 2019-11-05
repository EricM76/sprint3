<?php
include_once('autoload.php');
$autos = BaseMySQL::verProductos($pdo,1);
$auto = $autos[5];
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
      <!-- <iframe src="promo-ejemplo.html" width="100%" height="600px"></iframe> -->
      <div class="container">
          <div class="row mt-4">
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href=<?="post_auto.php?id=".$auto["id"]?>>
                              <img class="pic-1" src=<?="images/productos/".$auto["foto1"]?>>
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href=<?="post_auto.php?id=".$auto["id"]?>><?=$auto['titulo']?> </a></h3>
                          <div class="price"><?=$auto['valor']?> truekoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="post_inmueble.php">
                              <img class="pic-1" src="images/casa1/img1.webp">
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="post_inmueble.php">Casa en Pilar</a></h3>
                          <div class="price">117.000 truekoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="post_celular.php">
                              <img class="pic-1" src="images/celulares/img1.webp">
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="post_celular.php">Iphone 8 Plus 64 Gb</a></h3>
                          <div class="price">470 truekoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="post_herramienta.php">
                              <img class="pic-1" src="images/herramientas/img1.webp">
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="post_herramienta.php">Juego De Tubos Bahco</a></h3>
                          <div class="price">56 truekcoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="post_balanza.php">
                              <img class="pic-1" src="images/hogar/img1.jpeg">
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="post_balanza.php">Balanza Digital</a></h3>
                          <div class="price">2 truekcoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="post_mesa.php">
                              <img class="pic-1" src="images/juguetes/img1.webp">
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="post_mesa.php">Mesa Didáctica</a></h3>
                          <div class="price">20 truekcoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="post_libro.php">
                              <img class="pic-1" src="images/libro1/img1.webp">
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="post_libro.php">Colección Stamateas</a></h3>
                          <div class="price">24 truekcoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid6">
                      <div class="product-image6">
                          <a href="post_bici.php">
                              <img class="pic-1" src="images/rodado1/img1.webp">
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="post_bici.php">Mountain Bike Firebird</a></h3>
                          <div class="price">152 truekcoins
                          </div>
                      </div>
                      <ul class="social">
                          <li><a href="" data-tip="Más información"><i class="fa fa-search"></i></a></li>
                          <li><a href="" data-tip="Agregar a Favoritos"><i class="fa fa-star"></i></a></li>
                          <li><a href="" data-tip="Contactar"><i class="fa fa-handshake-o"></i></a></li>
                      </ul>
                  </div>
              </div>
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
