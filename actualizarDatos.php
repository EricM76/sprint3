<div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $id=$_SESSION["id"]?>
        <form class="form-horizontal mt-4" action="perfil.php" method="post">

            <div class="row">

              <div class="form-group col-12">
                <label class="control-label" for="titulo">Direccion</label>
                <div class="">
                <input id="titulo" name="titulo" type="text" placeholder="ej: General Pico #10631, barrio El Libertador, Loma Hermosa, Buenos Aires" class="form-control input-md" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-6">
                <label class="control-label" for="valor">Telefono</label>
                <div class="">
                <input id="valor" name="valor" type="text" placeholder="sin ceros ni guiones ej: 1147394347" class="form-control input-md" >
                </div>
              </div>

              <div class="form-group col-6">
                <label class="control-label" for="valor">Celular</label>
                <div class="">
                <input id="valor" name="valor" type="text" placeholder="sin 0 ni 15 ej: 1134016800" class="form-control input-md" >
                </div>
              </div>
              </div>
              <div class="d-flex justify-content-end mt-1">
                <button class="btn-sm btn-primary" type="button" name="button">Actualizar</button>

            </div>

            </div>
      </form>
    </div>
  </div>
</div>
</div>
