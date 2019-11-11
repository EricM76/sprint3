<?php
include("autoload.php");
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php include("head.php")?>
     <title>Productos</title>
   </head>
   <?php include("adminHeader.php") ?>
   <body class="">
     <div class="container-fluid mt-3">
       <?php
       if ($_GET['cat']==0) {
         $registros=BaseMySQL::verRegistros($pdo,'productos');
       }else{
         $registros=BaseMySQL::verProductos($pdo,$_GET['cat']);
       }
       $categorias = baseMySQL::verRegistros($pdo,'categorias');
       ?>

       <table class="table table-
       light">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">foto</th>
            <th scope="col">titulo</th>
            <th scope="col">valor</th>
            <th scope="col">categoria</th>
            <th scope="col">fecha</th>

          </tr>
        </thead>
        <tbody>
        <?php foreach ($registros as $registro): ?>
        <tr>
          <th scope="row"><?=$registro["id"]?></a></th>
          <td><img src="images/productos/<?=$registro["foto1"]?>" alt="" class="img-thumbnail" width="200px"> </td>
          <td><?=$registro["titulo"]?></td>
          <td><?=$registro["valor"]?></td>
          <td>
            <?php foreach ($categorias as $categoria): ?>
              <?php if ($categoria['id']==$registro['categoria_id']): ?>
                <?=$categoria["nombre"]?>
              <?php endif; ?>
            <?php endforeach; ?>
            </td>
          <td><?=$registro["fecha_posteo"]?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
     </table>
     </div>
     <?php include("script.php") ?>
   </body>
 </html>
