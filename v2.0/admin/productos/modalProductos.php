<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>

<!-- Modal crear productos -->
<div class="modal fade" id="modalCrearProducto" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" id="formCrearProductoForm" enctype="multipart/form-data">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="crearModalLabel">Nuevo Producto</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body row g-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label for="categoria" class="form-label">Categoría</label>
            <select name="categoria" id="categoria" class="form-control" required>
              <?php
              $query = "SELECT nombre FROM categorias ORDER BY nombre ASC";
              $result = mysqli_query($conn, $query);
              if ($result && mysqli_num_rows($result) > 0):
                while ($row = mysqli_fetch_assoc($result)): ?>
                  <option value="<?= htmlspecialchars($row['nombre']) ?>">
                    <?= htmlspecialchars($row['nombre']) ?>
                  </option>
                <?php endwhile;
              else: ?>
              <?php endif; ?>
            </select>
          </div>

          <div class="col-12">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
          </div>

          <div class="col-md-4">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" required>
          </div>

          <div class="col-md-4">
            <label for="imagen01" class="form-label">Imagen 01</label>
            <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
          </div>

          <div class="col-md-4">
            <label for="imagen02" class="form-label">Imagen 02</label>
            <input type="file" name="imagen01" id="imagen01" class="form-control" accept="image/*">
          </div>

          <div class="col-md-4">
            <label for="imagen03" class="form-label">Imagen 03</label>
            <input type="file" name="imagen02" id="imagen02" class="form-control" accept="image/*">
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar Producto</button>
          <button  class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formCrearProductoForm");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(form);

    const nombre = formData.get("nombre")?.trim();
    const descripcion = formData.get("descripcion")?.trim();
    const precio = parseFloat(formData.get("precio"));
    const categoria = formData.get("categoria")?.trim();

    if (!nombre || !descripcion || !categoria || isNaN(precio) || precio <= 0) {
      alertify.notify("Todos los campos son obligatorios y el precio debe ser válido.", "error", 5);
      return;
    }

    fetch("./productos/agregar_productos.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.text())
    .then(response => {
      // El backend solo debería devolver "OK"
      if (response.trim() === "OK") {
        alertify.notify("Producto creado exitosamente.", "success", 5);
        $("#tablaProductos").load("./productos/listar_productos.php");
        form.reset();
        const modal = bootstrap.Modal.getInstance(document.getElementById("modalCrearProducto"));
        if (modal) modal.hide();
      } else {
        console.warn("Respuesta inesperada:", response);
        alertify.notify("Error al guardar el producto: " + response, "error", 5);
      }
    })
    .catch(error => {
      console.error("Error AJAX:", error);
      alertify.notify("Error de red o servidor.", "error", 5);
    });
  });
});
</script>


