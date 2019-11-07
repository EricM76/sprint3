<?php
include_once('autoload.php');


 $busca = $_GET['resultado'];
 if ($busca == null ) {header("location:home.php");}

 $resultado = BaseMySQL::busqueda($pdo,$busca);


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
            </tr>
          </thead>
          <tbody>
          <?php foreach ($busqueda as $producto):?>
            <td> <a href="producto.php?id=<?=$producto['id']?>&cat=<?=$producto['categoria_id'] ?>"><img class="pic-1" src=<?="images/productos/".$producto["foto1"]?>  width="150px"></a></td>
            <td><?=$producto["titulo"]?></td>
            <td><?=$producto["descripcion"]?></td>
            <td><?=$producto["valor"]?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
       </table>
       </div>
<!-- <?php "productos.php?id=".$producto["id"]."&cat=".$producto["categoria_id"] ?> -->
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
