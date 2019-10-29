<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coleccion Stamateas</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/posteo.css">

  </head>

  <body>
    <?php include_once("header.php") ?>

    <!-- posteo -->
	<div class="container">
		<div class="card mt-1 pt-4">
			<div class="container-fluid">
				<div class="wrapper row">
					<div class="preview col-sm-12 col-md-12 col-lg-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="images/libro1/img1.webp" /></div>
						  <div class="tab-pane" id="pic-2"><img src="images/libros/img9.webp" /></div>
						  <div class="tab-pane" id="pic-3"><img src="images/libros/img10.webp" /></div>
						  <div class="tab-pane" id="pic-4"><img src="images/libros/img11.webp" /></div>
              <div class="tab-pane" id="pic-5"><img src="images/libros/img12.webp" /></div>

						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/libro1/img1.webp" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="images/libros/img9.webp" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="images/libros/img10.webp" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="images/libros/img11.webp" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="images/libros/img12.webp" /></a></li>

						</ul>

					</div>
					<div class="details col-sm-12 col-md-12 col-lg-6">
						<h3 class="product-title"> Coleccion Bernardo Stamateas </h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">visto 50 veces</span>
						</div>
						<p class="product-description">Coleccion de 5 Libros del celebre escritor Bernardo Stamateas en donde podras conseguir las claves para poder superar miedos, inseguridades y fobias para lograr una vida emocional lo mas sana posible </p>
						<h4 class="price"><span>24 Truekoins</span></h4>

						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">contactar</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-star"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script src="js/jquery.js"type="text/javascript"></script>
  <script src="js/bootstrap.js"type="text/javascript"></script>

  </body>
</html>
