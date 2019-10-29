<?php
// $_POST=null;
?>

<div class="modal fade" id="pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cambiar Contraseña</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="cambiarPass.php" method="post">
          <div class="form-group col-12">
              <label class="control-label" for="">Ingrese su e-mail</label>
              <input class="form-control" type="text" name="email" value="">
          </div>
          <div class="form-group col-12">
              <label class="control-label" for="">Fecha de nacimiento</label>
              <input class="form-control" type="date" name="fecha" value="">
          </div>
          <div class="form-group col-12">
              <label class="control-label" for="">Nueva contraseña</label>
              <input class="form-control" type="password" name="pass" value="">
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="button" class="btn btn-info">Cambiar</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Volver</button> -->
      </div>
    </div>
  </div>
</div>
