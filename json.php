<?php
include_once('autoload.php');
include_once('funciones.php');
if ($_POST) {
  switch ($_POST['backup']) {
    case "u":
      backup('usuarios',$pdo);
      break;
    case "p":
      backup('productos',$pdo);
      break;
    case "c":
      backup('categorias',$pdo);
      break;
    case "a":
      backup('admin',$pdo);
      break;
  }

}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("head.php")?>
    <title>Backup</title>
  </head>
      <?php include("adminHeader.php") ?>
  <body>
    <div class="container mt-5">
      <h2>Respaldo de información</h2>

      <div class="mt-5">
        <form class="form" action="json.php" method="post">
          <div class="form-group">
            <button type="submit" name="backup" value="u"class="btn btn-primary m-2">Usuarios</button>
            <?php if (file_exists('usuarios.json')): ?>
              <?=fechaBackup('usuarios')?>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" name="backup" value="p"class="btn btn-primary m-2">Productos</button>
            <?php if (file_exists('productos.json')): ?>
                <?=fechaBackup('productos')?>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" name="backup" value="c"class="btn btn-primary m-2">Categorias</button>
            <?php if (file_exists('categorias.json')): ?>
                <?=fechaBackup('categorias')?>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" name="backup" value="a"class="btn btn-primary m-2">Administradores</button>
            <?php if (file_exists('admin.json')): ?>
                <?=fechaBackup('admin')?><br>
            <?php endif; ?>
          </div>

        </form>
      </div>


    </div>

  </body>
  <?php include("script.php") ?>
</html>
