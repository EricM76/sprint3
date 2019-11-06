<?php
include_once('autoload.php');
$autos = BaseMySQL::verProductos($pdo,1);
$auto = $autos[0];
$inmuebles = BaseMySQL::verProductos($pdo,2);
$inmueble = $inmuebles[1];
$hogars = BaseMySQL::verProductos($pdo,3);
$hogar = $hogars[2];
$herramientas = BaseMySQL::verProductos($pdo,4);
$herramienta = $herramientas[3];
$libros = BaseMySQL::verProductos($pdo,5);
$libro = $libros[4];
$juguetes = BaseMySQL::verProductos($pdo,6);
$juguete = $juguetes[5];
$rodados = BaseMySQL::verProductos($pdo,7);
$rodado = $rodados[6];
$celulars = BaseMySQL::verProductos($pdo,8);
$celular = $celulars[7];
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
                          <a href=<?="producto.php?id=".$auto["id"]."&cat=1"?>>
                              <img class="pic-1" src=<?="images/productos/".$auto["foto1"]?>>
                          </a>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href=<?="producto.php?id=".$auto["id"]."&cat=1"?>><?=$auto['titulo']?> </a></h3>
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
                        <a href=<?="producto.php?id=".$inmueble["id"]."&cat=2"?>>
                              <img class="pic-1" src=<?="images/productos/".$inmueble["foto1"]?>>
                        </a>
                    </div>
                      <div class="product-content">
                        <h3 class="title"><a href=<?="producto.php?id=".$inmueble["id"]."&cat=2"?>><?=$inmueble['titulo']?> </a></h3>
                        <div class="price"><?=$inmueble['valor']?> truekoins
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
                        <a href=<?="producto.php?id=".$hogar["id"]."&cat=3"?>>
                              <img class="pic-1" src=<?="images/productos/".$hogar["foto1"]?>>
                        </a>
                      </div>
                      <div class="product-content">
                        <h3 class="title"><a href=<?="producto.php?id=".$hogar["id"]."&cat=3"?>><?=$hogar['titulo']?> </a></h3>
                        <div class="price"><?=$hogar['valor']?> truekoins
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
                        <a href=<?="producto.php?id=".$herramienta["id"]."&cat=4"?>>
                              <img class="pic-1" src=<?="images/productos/".$herramienta["foto1"]?>>
                        </a>
                      </div>
                      <div class="product-content">
                        <h3 class="title"><a href=<?="producto.php?id=".$herramienta["id"]."&cat=4"?>><?=$herramienta['titulo']?> </a></h3>
                        <div class="price"><?=$herramienta['valor']?> truekoins
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
                        <a href=<?="producto.php?id=".$libro["id"]."&cat=5"?>>
                              <img class="pic-1" src=<?="images/productos/".$libro["foto1"]?>>
                        </a>
                      </div>
                      <div class="product-content">
                        <h3 class="title"><a href=<?="producto.php?id=".$libro["id"]."&cat=5"?>><?=$libro['titulo']?> </a></h3>
                        <div class="price"><?=$libro['valor']?> truekoins
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
                        <a href=<?="producto.php?id=".$juguete["id"]."&cat=6"?>>
                              <img class="pic-1" src=<?="images/productos/".$juguete["foto1"]?>>
                        </a>
                      </div>
                      <div class="product-content">
                        <h3 class="title"><a href=<?="producto.php?id=".$juguete["id"]."&cat=6"?>><?=$juguete['titulo']?> </a></h3>
                        <div class="price"><?=$juguete['valor']?> truekoins
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
                        <a href=<?="producto.php?id=".$rodado["id"]."&cat=7"?>>
                              <img class="pic-1" src=<?="images/productos/".$rodado["foto1"]?>>
                        </a>
                      </div>
                      <div class="product-content">
                        <h3 class="title"><a href=<?="producto.php?id=".$rodado["id"]."&cat=7"?>><?=$rodado['titulo']?> </a></h3>
                        <div class="price"><?=$rodado['valor']?> truekoins
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
                        <a href=<?="producto.php?id=".$celular["id"]."&cat=8"?>>
                              <img class="pic-1" src=<?="images/productos/".$celular["foto1"]?>>
                        </a>
                      </div>
                      <div class="product-content">
                        <h3 class="title"><a href=<?="producto.php?id=".$celular["id"]."&cat=7"?>><?=$celular['titulo']?> </a></h3>
                        <div class="price"><?=$celular['valor']?> truekoins
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
