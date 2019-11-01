<?php
include_once("autoload.php");
$id = $_GET["id"];
$auto = BaseMySQL::verProducto($pdo,$id);
$autos = BaseMySQL::verProductos($pdo,'1');
// vardump($autos);
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autos</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/posteo.css">

  </head>

  <body>
    <?php include_once("header.php") ?>
<div class="row">

  <div class="col-1 d-flex align-items-center justify-content-center">
    <?php if ($auto["id"]>1){?>
        <a href="post_auto.php?id=<?=$auto["id"]-1?>"><img class="img-fluid" src="images/back.png" alt="izq"></a>
      <?php }else {?>
        <a href="post_auto.php?id=<?=$auto["id"]?>"><img class="img-fluid" src="images/back.png" alt="izq"></a>
     <?php } ?>
    <a href="post_auto.php?id=<?=$auto["id"]-1?>">
  </div>
    <!-- posteo -->
	<div class="container col-10">
		<div class="card mt-1 pt-4">
			<div class="container-fluid">
				<div class="wrapper row">
					<div class="preview col-sm-12 col-md-12 col-lg-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?="images/productos/".$auto["foto1"]?>" style="height:325px"/></div>
						  <div class="tab-pane" id="pic-2"><img src="<?="images/productos/".$auto["foto2"]?>"style="height:325px"/></div>
						  <div class="tab-pane" id="pic-3"><img src="<?="images/productos/".$auto["foto3"]?>"/style="height:325px"></div>
						  <!-- <div class="tab-pane" id="pic-4"><img src="images/auto1/img4.webp" /></div>
              <div class="tab-pane" id="pic-5"><img src="images/auto1/img5.webp" /></div> -->

						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src=<?="images/productos/".$auto["foto1"]?> /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="<?="images/productos/".$auto["foto2"]?>" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="<?="images/productos/".$auto["foto3"]?>" /></a></li>
						  <!-- <li><a data-target="#pic-4" data-toggle="tab"><img src="images/auto1/img4.webp" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="images/auto1/img5.webp" /></a></li> -->

						</ul>

					</div>
					<div class="details col-sm-12 col-md-12 col-lg-6">
						<h3 class="product-title"><?=$auto["titulo"]?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">visto 16 veces</span>
						</div>
						<p class="product-description"><?=$auto['descripcion'] ?> </p>
						<h4 class="price"><span><?=$auto["valor"]?> Truekoins</span></h4>

						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">contactar</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-star"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="col-1 d-flex align-items-center justify-content-center">
    <?php
       //genera una consulta que devuelve la cantidad de usuarios registrados
       $count = BaseMySQL::contarRegistros($pdo,'productos','categoria_id','1');

       if ($auto["id"]<$count){
        ?>
         <a href="post_auto.php?id=<?=$auto["id"]+1 ?>"><img class="img-fluid" src="images/next.png" alt=""> </a>
       <?php }else{ ?>
         <a href="post_auto.php?id=<?=$auto["id"]?>"><img class="img-fluid" src="images/next.png" alt=""> </a>
       <?php } ?>
  </div>

  </div>

  <script src="js/jquery.js"type="text/javascript"></script>
  <script src="js/bootstrap.js"type="text/javascript"></script>

  </body>
</html>
