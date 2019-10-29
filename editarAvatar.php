
<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Imagen de Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center mb-3">Elige un avatar</h5>
          <form class="" action="cambiarAvatar.php" method="post">
            <input type="image" name="avatarD" src="images/avatar/perfilDesconocido.png" style="width:80px">
            <input type="image" name="avatarH" src="images/avatar/perfilHombre.png" style="width:80px">
            <input type="image" name="avatarM" src="images/avatar/perfilMujer.png" style="width:80px">
            <input type="image" name="avatar01" src="images/avatar/avatar01.png" style="width:80px">
            <input type="image" name="avatar02" src="images/avatar/avatar02.png" style="width:80px">
            <input type="image" name="avatar03" src="images/avatar/avatar03.png" style="width:80px">
            <input type="image" name="avatar04" src="images/avatar/avatar04.png" style="width:80px">
            <input type="image" name="avatar05" src="images/avatar/avatar05.png" style="width:80px">
            <input type="image" name="avatar06" src="images/avatar/avatar06.png" style="width:80px">
            <input type="image" name="avatar07" src="images/avatar/avatar07.png" style="width:80px">
            <input type="image" name="avatar08" src="images/avatar/avatar08.png" style="width:80px">
            <input type="image" name="avatar09" src="images/avatar/avatar09.png" style="width:80px">
            <input type="image" name="avatar10" src="images/avatar/avatar10.png" style="width:80px">
            <input type="image" name="avatar11" src="images/avatar/avatar11.png" style="width:80px">
            <input type="image" name="avatar12" src="images/avatar/avatar12.png" style="width:80px">
            <input type="image" name="avatar13" src="images/avatar/avatar13.png" style="width:80px">
            <input type="image" name="avatar14" src="images/avatar/avatar14.png" style="width:80px">
            <input type="image" name="avatar15" src="images/avatar/avatar15.png" style="width:80px">
            <input type="image" name="avatar16" src="images/avatar/avatar16.png" style="width:80px">
            <input type="image" name="avatar17" src="images/avatar/avatar17.png" style="width:80px">
            <input type="image" name="avatar18" src="images/avatar/avatar18.png" style="width:80px">
            <input type="image" name="avatar19" src="images/avatar/avatar19.png" style="width:80px">
            <input type="image" name="avatar20" src="images/avatar/avatar20.png" style="width:80px">
            <input type="image" name="avatar21" src="images/avatar/avatar21.png" style="width:80px">
            <input type="image" name="avatar22" src="images/avatar/avatar22.png" style="width:80px">
            <input type="image" name="avatar23" src="images/avatar/avatar23.png" style="width:80px">
            <input type="image" name="avatar24" src="images/avatar/avatar24.png" style="width:80px">
            <!-- <input type="image" name="avatar25" src="images/avatar/avatar25.png" style="width:80px">
            <input type="image" name="avatar26" src="images/avatar/avatar26.png" style="width:80px">
            <input type="image" name="avatar27" src="images/avatar/avatar27.png" style="width:80px">
            <input type="image" name="avatar28" src="images/avatar/avatar28.png" style="width:80px">
            <input type="image" name="avatar29" src="images/avatar/avatar29.png" style="width:80px">
            <input type="image" name="avatar30" src="images/avatar/avatar30.png" style="width:80px"> -->
          </form>
          <div class="d-flex mt-5">
            <div class="d-flex justify-content-center col-12">
              <div class="">

              </div>

              <form class="form" action="perfil.php" method="post" enctype="multipart/form-data">
                <h5 class="mt-3">O sube tu propia imagen</h5>
                <div class="input-group mt-3">
                  <div class="custom-file">
                    <input id="inputGroupFile01" type="file" class="custom-file-input" name="archivo">
                    <label class="custom-file-label" for="inputGroupFile01">elegir foto de perfil</label>
                  </div>
                  <button class="btn btn-primary ml-2" value=<?=$_SESSION["userEmail"]?> type="submit" name="email">Aceptar</button>

                </div>
              </form>
            </div>
          </div>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Volver</button>
      </div> -->
    </div>
  </div>
</div>
