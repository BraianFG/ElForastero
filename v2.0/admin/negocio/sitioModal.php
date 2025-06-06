<!-- Modal Editar Datos del Sitio -->
<div class="modal fade" id="modalEditarSitio" tabindex="-1" aria-labelledby="modalEditarSitioLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php
            $consulta = "SELECT * from negocio_misitio";
            $resultado = mysqli_query($conn, $consulta);

            while ($usuario = mysqli_fetch_assoc($resultado)) {
     ?>
     <form action="negocio/editar_sitio.php" method="POST" enctype="multipart/form-data">
  <div class="modal-header bg-primary text-white">
    <h5 class="modal-title" id="modalEditarSitioLabel">Editar Datos del Sitio</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
  </div>

  <div class="modal-body">
    <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" name="title" value="<?php echo $usuario['title'] ?>" required autocomplete="off">
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $usuario['descripcion'] ?></textarea>
    </div>

    <div class="mb-3">
      <label for="favicon" class="form-label">Favicon</label>
      <input type="file" class="form-control" id="favicon" name="favicon" accept=".ico,.png,.jpg,.jpeg">
      <div class="mt-2">
        <img width="80" height="80" src="./../../images/<?php echo $usuario['favicon'] ?>" class="img-thumbnail" alt="Favicon actual del sitio">
      </div>
    </div>

    <div class="mb-3">
      <label for="imagen_sitio" class="form-label">Imagen del Sitio</label>
      <input type="file" class="form-control" id="imagen_sitio" name="imagen_sitio" accept="image/*">
      <div class="mt-2">
        <img width="80" height="80" src="./../../images/<?php echo $usuario['imagen_sitio'] ?>" class="img-thumbnail" alt="Imagen actual del sitio">
      </div>
    </div>

    <div class="mb-3">
      <label for="dominio" class="form-label">Dominio</label>
      <input type="url" class="form-control" id="dominio" name="dominio" placeholder="https://tusitio.com" value="<?php echo $usuario['dominio'] ?>" required autocomplete="url">
    </div>
  </div>

  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
  </div>
</form>

      <?php
            }
      ?>
    </div>
  </div>
</div>
