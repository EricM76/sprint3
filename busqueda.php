<?php
include_once('autoload.php');

 $busca = $_GET['resultado'];
 // vardump($busca);

 // $producto = BaseMySQL::buscarRegistro($pdo,'productos','titulo',$busca);
 // vardump($producto);
 $resultado = BaseMySQL::busqueda($pdo,$busca);
 // vardump($resultado);

 ?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>

    <title></title>
  </head>
  <body class="">
  <?php include_once("header.php") ?>
<!-- carrusel -->

    <!-- posteos de ejemplo -->
    <section class="mt-3">
      <!-- <iframe src="promo-ejemplo.html" width="100%" height="600px"></iframe> -->
      <div class="container-fluid mt-3">
         <?php
         $busqueda=BaseMySQL::busqueda($pdo,$busca);
         ?>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">producto</th>
              <th scope="col">titulo</th>
              <th scope="col">descripcion</th>
              <th scope="col">valor</th>
              <th scope="col">fecha</th>
              <th scope="col">valoracion</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($busqueda as $producto): ?>
          <tr href=<?="producto.php?id=".$producto["id"]."&cat=1"?>>
            <td> <img class="pic-1" src=<?="images/productos/".$producto["foto1"]?>  width="150px"></td>
            <td><?=$producto["titulo"]?></td>
            <td><?=$producto["descripcion"]?></td>
            <td><?=$producto["valor"]?></td>
            <td><?=$producto["fecha_posteo"]?></td>
            <td><?=$producto["val_product"]?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
       </table>
       </div>

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
