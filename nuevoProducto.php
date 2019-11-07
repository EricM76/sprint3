<?php
include_once("autoload.php");
include_once("funciones.php");

if ($_POST) {
  //genera una variable con el id del usuario recibido por $_POST
  $id=$_POST['id'];
  //valida los datos recibidos por $_POST
  $errores = $validadorProducto->validarDatos($_POST);
  //si no hay errores continúa la registración
  if (count($errores) == 0) {

    $errores = $validadorProducto->validarFotos($_FILES["imagen1"],$_FILES["imagen2"],$_FILES["imagen3"]);
      if (count($errores) == 0) {
        //guarda las fotos subidas
        $foto1 = RegistrarProductos::guardarFotos($_FILES["imagen1"]);
        $foto2 = RegistrarProductos::guardarFotos($_FILES["imagen2"]);
        $foto3 = RegistrarProductos::guardarFotos($_FILES["imagen3"]);
        //genera una instancia de productos enviando los datos y las imagenes
        $producto = RegistrarProductos::crearProducto($_POST,$foto1,$foto2,$foto3);
        RegistrarProductos::guardarProducto($pdo, $producto);
        header('location:home.php');
      }
    }
}
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <?php include_once("head.php")?>
     <title>Publicar Producto</title>
   </head>
   <body>
     <?php include_once("header.php") ?>
     <div class="container">

      <form class="form-horizontal mt-5" action="nuevoProducto.php" method="post" enctype="multipart/form-data" id="producto">
        <div class="row">

        <div class="col-6">
          <div class="form-group">
            <label class="control-label" for="titulo">Titulo</label>
            <div class="">
            <input name="titulo" type="text" placeholder="titulo" class="form-control input-md <?=valido(persistir('titulo'),$errores[0])?>" value="<?=persistir('titulo')?>">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label class="control-label" for="valor">Valor</label>
              <div class="">
              <input id="valor" name="valor" type="number" placeholder="en truekoins" class="form-control input-md <?=valido(persistir('valor'),$errores[1])?>" value="<?=persistir('valor')?>">
              </div>
            </div>

            <div class="form-group col-6">
              <label for="categoria">Categoria</label>
                <select class="form-control <?=valido(persistir('categoria'),$errores[2])?>" id="categoria" name="categoria" value="<?=persistir('categoria')?>">
                  <option selected><?=persistirCat('categoria',$pdo)?></option>
                <?php
                $categorias = BaseMySQL::verCategorias($pdo);
                foreach ($categorias as $categoria) :?>
                <option value=<?=$categoria["id"]?>>
                  <?=$categoria["nombre"]?>
                </option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

        <div class="mt-3">
          <label class="" for="imagen">Subir 3 fotos del producto (formato jpg/jpeg/png)</label>
        </div>
        <!-- <div class="custom-file">
          <input id="imagen1" type="file" class="custom-file-input" value="$_FILES" accept=".png, .jpeg, .jpg">
          <label class="custom-file-label" name="imagen1">Foto 1</label>
        </div>
        <div class="custom-file mt-1">
          <input type="file" class="custom-file-input" >
          <label class="custom-file-label" name="imagen2">Foto 2</label>
        </div>
        <div class="custom-file mt-1">
          <input type="file" class="custom-file-input" >
          <label class="custom-file-label" name="imagen3">Foto 3</label>
        </div> -->
        <div class="">
        <input name="imagen1" type="file" class="form-control-sm" value="" accept=".png, .jpeg, .jpg">
        </div>
        <div class="mt-1">
        <input name="imagen2" type="file" class="form-control-sm" value="" accept=".png, .jpeg, .jpg">
        </div>
        <div class="mt-1">
        <input name="imagen3" type="file" class="form-control-sm" value="" accept=".png, .jpeg, .jpg">
        </div>
      </div>

        <div class="col-6">
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control <?=valido(persistir('descripcion'),$errores[3])?>" name="descripcion" rows="6" placeholder="<?=persistir('descripcion')?>" form="producto"></textarea>
          </div>
          <div class="text-danger" role="alert">
            <?php if (isset($errores[0])){echo "* ". $errores[0];}?><br>
            <?php if (isset($errores[1])){echo "* ". $errores[1];}?><br>
            <?php if (isset($errores[2])){echo "* ". $errores[2];}?><br>
            <?php if (isset($errores[3])){echo "* ". $errores[3];}?>
          </div>
        </div>

      </div>

      <div class="d-flex justify-content-end">
        <div class="form-group">
          <div class="">
            <button value=<?=$_SESSION['id']?> class="btn btn-success" name="id" type="submit">Publicar</button>
          </div>
        </div>
      </div>
    </form>
    </div>
     <?php include_once("script.php") ?>
   </body>
 </html>
