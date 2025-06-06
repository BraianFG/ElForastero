<!-- Modal Editar Información del Negocio -->
<div class="modal fade" id="modalEditarNegocio" tabindex="-1" aria-labelledby="modalEditarNegocio" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   <?php
            // Suponiendo que ya tenés una conexión $conn
            $consulta = "SELECT * FROM negocio";
            $resultado = mysqli_query($conn, $consulta);

            while ($usuario = mysqli_fetch_assoc($resultado)) {
                
    ?>
<form action="negocio/editar_negocio.php" method="POST" enctype="multipart/form-data">
  <div class="modal-header bg-success text-white">
    <h5 class="modal-title" id="editarModalLabel">Editar Información del Negocio</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
  </div>

  <div class="modal-body">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre del Negocio</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario['nombre'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="logo" class="form-label">Logo</label>
      <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
      <div class="mt-2">
        <img src="../../images/<?php echo $usuario['logo'] ?>" width="80" height="80" class="img-thumbnail" alt="Logo actual del negocio">
      </div>
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $usuario['descripcion'] ?></textarea>
    </div>

    <div class="mb-3">
      <label for="info" class="form-label">Información adicional</label>
      <textarea class="form-control" id="info" name="info" rows="2"><?php echo $usuario['info'] ?></textarea>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="celular" class="form-label">Celular</label>
        <input type="tel" class="form-control" id="celular" name="celular" value="<?php echo $usuario['celular'] ?>" autocomplete="tel">
      </div>

      <div class="col-md-6 mb-3">
        <label for="alert" class="form-label">Anuncio</label>
        <input type="text" class="form-control" id="alert" name="alert" value="<?php echo $usuario['alert'] ?>">
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario['email'] ?>" autocomplete="email">
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="whatsapp" class="form-label">WhatsApp</label>
        <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?php echo $usuario['whatsapp'] ?>" autocomplete="tel">
      </div>

      <div class="col-md-6 mb-3">
        <label for="whatsapp2" class="form-label">WhatsApp Secundario</label>
        <input type="text" class="form-control" id="whatsapp2" name="whatsapp2" value="<?php echo $usuario['whatsapp2'] ?>">
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="facebook" class="form-label">Facebook</label>
        <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $usuario['facebook'] ?>">
      </div>

      <div class="col-md-4 mb-3">
        <label for="instagram" class="form-label">Instagram</label>
        <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $usuario['instagram'] ?>">
      </div>

      <div class="col-md-4 mb-3">
        <label for="telegram" class="form-label">Telegram</label>
        <input type="text" class="form-control" id="telegram" name="telegram" value="<?php echo $usuario['telegram'] ?>">
      </div>
    </div>
  </div>

  <div class="modal-footer">
    <button type="submit" class="btn btn-success">Guardar Cambios</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
  </div>
</form>

      
      <?php
            }
      ?>
    </div>
  </div>
</div>