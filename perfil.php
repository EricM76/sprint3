<?php
include_once("funciones.php");
if ($_POST) {
  // llama a la funcion validarPerfil para verificar que se ha subido un archivo en el formato correcto
  $errores = validarPerfil($_POST);
  if ($errores==null) {
    // genera una variable tomando el 'nombre' de $_FILES
    $nombre=$_FILES["archivo"]["name"];
    // extrae la 'extensión' del archivo subido y genera una variable
    $ext=pathinfo($nombre, PATHINFO_EXTENSION);
    // extrae la 'ubicación temporal' del archivo y genera una variable
    $archivo=$_FILES["archivo"]["tmp_name"];
    // recupera la ruta donde está ubicada la pagina de registro
    $ruta=dirname(__FILE__);
    // señala la ruta donde se van a guardar los archivos (se debe crear la carpeta con anticipación)
    $ruta=$ruta . "/images/perfil/";
    // genera un nombre 'único' para el archivo
    $nombreImagen=uniqid();
    // genera la ruta completa influyendo el nombre y la extensión del archivo
    $rutaFinal=$ruta . $nombreImagen . "." . $ext;
    // guarda el archivo subido con el nombre aleatorio que le dio la función uniqid en la ruta indicada
    move_uploaded_file($archivo, $rutaFinal);
    $imgPerfil="images/perfil/".$nombreImagen.".".$ext;
    // if (isset($_COOKIE["userEmail"])) {
    //   $_SESSION["userEmail"]=$_COOKIE["userEmail"];
    //   $usuario=verificarEmail($_SESSION["userEmail"]);
    // }
    // // guarda la informacion de la imagen subida en una cookie
    // setcookie("imgPerfil",$imgPerfil,time()+(3600*24*365));
    // $avatar=$_COOKIE["imgPerfil"];
    cambiarPerfil($_POST["email"],$imgPerfil);
    header("location:perfil.php");
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <?php include_once("head.php") ?>
     <link rel="stylesheet" href="css/perfil.css">
     <title>Perfil del Usuario</title>
   </head>
   <body>
     <?php include_once("header.php")?>
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-5 img">
      <a href="#" data-toggle="modal" data-target="#avatar">
        <img src=<?php if($usuario["avatar"]!=null){echo$usuario["avatar"];}else{echo$usuario["perfil"];}?>  alt="imagen de perfil" class="" style="width:300px"><br></a><br>
      <a href="#" data-toggle="modal" data-target="#avatar">cambiar avatar</a>

      <?php if (isset($errores)) :?>
        <div class="">
          <p class="text-danger small"><?php if(isset($errores[0]))echo$errores[0]?></p>
          <p class="text-danger small"><?php if(isset($errores[1]))echo$errores[1]?></p>
        </div>
      <?php endif ?>
    </div>



    <div class="col-xs-12 col-md-7 details">
      <blockquote>
        <h2><?php echo $usuario["nombre"]." ".$usuario["apellido"]?></h2>
        <h4><cite title="Source Title"><?=$usuario["email"]?></cite></h4>
      </blockquote>
      <hr>
    <cite>Datos Personales</cite><br>
    <h5><?=$usuario["sexo"]?></h5>
    <h5><?=date("d/m/Y", strtotime($usuario["fecha"]))?></h5>
    <hr>
    <cite>Datos de Contacto</cite><br>
    <a href="#">agregar dirección</a><br>
    <a href="#">agregar teléfono</a><br>
    <a href="#">agregar celular</a><br>
    <a href="cerrar.php"><button class="btn btn-secondary btn-sm my-2 -my-sm-0 mt-4"type="button" name="button" >Cerrar Sesion</button></a>
    <a href="" data-toggle="modal" data-target="#borrar"><button class="btn btn-danger btn-sm my-2 -my-sm-0 mt-4" type="button" name="button" >Eliminar Cuenta</button></a>
    </div>
  </div>
</div>
<?php
include_once("borrarCuenta.php");
include_once("editarAvatar.php");
include_once("script.php");
?>
<script>
  bsCustomFileInput.init()
  var btn = document.getElementById('btnResetForm')
  var form = document.querySelector('form')
  btn.addEventListener('click', function () {
    form.reset()
  })
</script>
<script>
function cambiarImagenJS(){
  document.getElementById("img1").src="image2.jpg";
}
</script>
   </body>
 </html>
