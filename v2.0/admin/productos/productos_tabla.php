
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Productos</h2>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCrearProducto">
  <i class="fas fa-plus"></i> Nuevo Producto
</button>
    </div>

    <!-- Formulario de búsqueda -->
<form method="GET" class="mb-4">
  <div class="input-group">
    <input type="text" name="busqueda" class="form-control" placeholder="Buscar producto..." value="<?php echo htmlspecialchars($busqueda); ?>" aria-label="Buscar producto">
    <button class="btn btn-primary" type="submit">
      <i class="fas fa-search me-1"></i> Buscar
    </button>
  </div>
</form>


  <table id="TABLAProductos" class="table table-bordered table-hover table-striped bg-white mb-4"> 
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th class="text-end">Acciones</th> <!-- Alineamos el header de acciones a la derecha -->
        </tr>
    </thead>
    <tbody>
        <?php while ($producto = mysqli_fetch_assoc($resultado)) { ?>
        <tr data-id="<?php echo $producto['id']; ?>">
            <td class="nombre-producto"><?php echo htmlspecialchars($producto['nombre']); ?></td>
            <td class="precio-producto">$<?php echo number_format($producto['precio'], 2); ?></td>
            <td class="text-end">
                <div class="d-inline-flex gap-2">
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarModal_<?php echo $producto['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#eliminarModal_<?php echo $producto['id'] ?>">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <tbody id="tablaProductos">
        
    </tbody>
    
</table>


    <!-- Paginación -->
   <nav class="mt-4">
  <ul class="pagination justify-content-center flex-wrap">
    <!-- Botón Anterior -->
    <li class="page-item <?php echo ($pagina_actual == 1) ? 'disabled' : ''; ?>">
      <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1; ?>&busqueda=<?php echo htmlspecialchars($busqueda); ?>" aria-label="Anterior">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <!-- Números de página -->
    <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
      <li class="page-item <?php echo ($i == $pagina_actual) ? 'active' : ''; ?> d-none d-sm-inline-block">
        <a class="page-link" href="?pagina=<?php echo $i; ?>&busqueda=<?php echo htmlspecialchars($busqueda); ?>"><?php echo $i; ?></a>
      </li>
    <?php } ?>

    <!-- Botón Siguiente -->
    <li class="page-item <?php echo ($pagina_actual == $total_paginas) ? 'disabled' : ''; ?>">
      <a class="page-link" href="?pagina=<?php echo $pagina_actual + 1; ?>&busqueda=<?php echo htmlspecialchars($busqueda); ?>" aria-label="Siguiente">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>

<!-- Botón para abrir el modal -->


   <?php
    $consulta = "SELECT * FROM productos ";
    $resultado = mysqli_query($conn, $consulta);

    while ($producto = mysqli_fetch_assoc($resultado)) {
    ?>
    
    
<!-- Modal Editar Producto -->
<div class="modal fade" id="editarModal_<?php echo $producto['id'] ?>" tabindex="-1" aria-labelledby="editarModalLabel_<?php echo $producto['id'] ?>" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="formEditarProducto_<?php echo $producto['id'] ?>" data-id="<?php echo $producto['id'] ?>" enctype="multipart/form-data">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" id="editarModalLabel_<?php echo $producto['id'] ?>">Editar Producto</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body row g-3">
          <input type="hidden" name="id" id="id"  value="<?php echo $producto['id'] ?>">

          <div class="col-md-6">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo htmlspecialchars($producto['nombre']) ?>" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Categoría</label>
            <select name="categoria" class="form-select" required>
              <option value="<?php echo htmlspecialchars($producto['categoria']) ?>"><?php echo $producto['categoria'] ?></option>
              <?php
              $consulta_categorias = "SELECT id, nombre FROM categorias ORDER BY nombre ASC";
              $resultado_categorias = mysqli_query($conn, $consulta_categorias);
              while ($categoria = mysqli_fetch_assoc($resultado_categorias)) {
                  $selected = ($categoria['id'] == $producto['categoria_id']) ? 'selected' : '';
                  echo '<option value="' . $categoria['id'] . '" ' . $selected . '>' . htmlspecialchars($categoria['nombre']) . '</option>';
              }
              ?>
            </select>
          </div>

          <div class="col-12">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3"><?php echo htmlspecialchars($producto['descripcion']) ?></textarea>
          </div>

          <div class="col-md-4">
            <label class="form-label">Precio</label>
            <input type="number" name="precio" value="<?php echo $producto['precio'] ?>" step="0.01" class="form-control" required>
          </div>

          <div class="col-md-4">
            <label class="form-label">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
          </div>

          <div class="col-md-4">
            <label class="form-label">Imagen 02</label>
            <input type="file" name="imagen01" id="imagen01" class="form-control" accept="image/*">
          </div>

          <div class="col-md-4">
            <label class="form-label">Imagen 03</label>
            <input type="file" name="imagen02" id="imagen02" class="form-control" accept="image/*">
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-warning">Guardar Cambios</button>
          <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>




<!-- Modal Eliminar -->
<div class="modal fade" id="eliminarModal_<?php echo $producto['id'] ?>" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <form id="ELIMINAR_<?php echo $producto['id'] ?>" data-id="<?php echo $producto['id'] ?>">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="eliminarModalLabel">Eliminar Producto</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          ¿Estás seguro de que deseas eliminar el producto "<strong><?php echo $producto['nombre'] ?></strong>"?
        </div>
        <div class="modal-footer">
          <button type="submit" class=" ELIMINAR_<?php echo $producto['id'] ?> btn btn-danger">Eliminar</button>
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php 
    }
?>


<script>
document.addEventListener("DOMContentLoaded", () => {
  // ELIMINAR PRODUCTO
  document.querySelectorAll("form[id^='ELIMINAR_']").forEach(formEliminar => {
    formEliminar.addEventListener("submit", function (e) {
      e.preventDefault();

      const productoId = formEliminar.dataset.id;

      if (!productoId) {
        alertify.notify("ID no válido", "error", 4);
        return;
      }

      fetch("./productos/eliminar_productos.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `id=${encodeURIComponent(productoId)}`
      })
      .then(res => res.text())
      .then(response => {
        const cleanResponse = response.trim().toUpperCase();

        if (cleanResponse === "OK") {
          alertify.notify("Producto eliminado correctamente", "success", 4);

          // Cerrar modal si está visible
          const modalEl = document.getElementById("eliminarModal");
          const modalInstance = bootstrap.Modal.getInstance(modalEl);
          if (modalInstance) modalInstance.hide();

          // Animar y eliminar visualmente la fila
          const row = document.querySelector(`[data-id='${productoId}']`)?.closest("tr");
          if (row) {
            row.style.transition = "opacity 0.4s";
            row.style.opacity = "0";
            setTimeout(() => row.remove(), 400);
          }
        } else {
          console.warn("Respuesta inesperada:", response);
          alertify.notify("Error al eliminar el producto.", "error", 4);
        }
      })
      .catch(error => {
        console.error("Error AJAX:", error);
        alertify.notify("Error de red", "error", 4);
      });
    });
  });

  // ACTUALIZAR PRODUCTO (desde formularios con id="formEditarProducto_ID")
  document.querySelectorAll("form[id^='formEditarProducto_']").forEach(form => {
    form.addEventListener("submit", function (event) {
      event.preventDefault();

      const formData = new FormData(form);
      const productoId = formData.get("id");
      const nombre = formData.get("nombre")?.trim();
      const descripcion = formData.get("descripcion")?.trim();
      const precio = parseFloat(formData.get("precio"));
      const categoria = formData.get("categoria")?.trim();

      if (!nombre || !descripcion || !categoria || isNaN(precio) || precio <= 0) {
        alertify.notify("Todos los campos son obligatorios y el precio debe ser válido.", "error", 5);
        return;
      }

      fetch("./productos/editar_productos.php", {
        method: "POST",
        body: formData
      })
      .then(res => res.text())
      .then(response => {
        const cleanResponse = response.trim();

        if (cleanResponse === "OK") {
         $("#TABLAProductos tbody ").load("./productos/listar-productos-editar.php?id=" + encodeURIComponent(productoId));
          alertify.notify("Producto actualizado exitosamente.", "success", 5);
          const modal = bootstrap.Modal.getInstance(form.closest(".modal"));
          if (modal) modal.hide();
          // ACTUALIZAR FILA VISUALMENTE

        } else {
         alertify.notify("Error al editar: " + response, "error", 5);
          console.error("Respuesta del servidor:", response);
        }
      })
      .catch(error => {
        console.error("Error de red:", error);
        alertify.notify("Error de red o servidor.", "error", 5);
      });
    });
  });
});
</script>

<?php include "./productos/categorias_tabla.php" ?>


<script>
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("form[id^='ELIMINAR_']").forEach(formEliminar => {
    formEliminar.addEventListener("submit", function (e) {
      e.preventDefault(); // Evita la recarga

      fetch("./productos/eliminar_productos.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
       // body: `id=${encodeURIComponent(productoId)}` // asegúrate de que coincida con $_POST['id_producto']
      })
      .then(res => res.text())
      .then(response => {
        const cleanResponse = response.trim().toUpperCase();

        if (cleanResponse === "OK") {
          alertify.notify("Producto eliminado correctamente", "success", 4);
         
          // Cerrar modal si está visible
          const modalEl = document.getElementById("eliminarModal");
          const modalInstance = bootstrap.Modal.getInstance(modalEl);
          if (modalInstance) modalInstance.hide();
        } else {
          console.warn("Respuesta inesperada:", response);
          alertify.notify("Error al eliminar el producto.", "error", 4);
        }
      })
      .catch(error => {
        console.error("Error AJAX:", error);
        alertify.notify("Error de red", "error", 4);
      });
    });
  });
});
</script>

 <script>
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("form[id^='ELIMINARC_']").forEach(form => {
    form.addEventListener("submit", function (evento) {
      evento.preventDefault();

      const categoriaId = form.dataset.id;

      if (!categoriaId) {
        alertify.notify("ID no válido", "error", 4);
        return;
      }

      fetch("./productos/eliminar_categorias.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `id=${encodeURIComponent(categoriaId)}`
      })
      .then(respuesta => respuesta.text())
      .then(respuestaTexto => {
        const respuestaLimpia = respuestaTexto.trim().toUpperCase();

        if (respuestaLimpia === "OK") {
          alertify.notify("Categoría eliminada correctamente", "success", 4);

          // Cerrar modal
          const modalCategoria = document.getElementById(`eliminarModalC_${categoriaId}`);
          const instanciaModal = bootstrap.Modal.getInstance(modalCategoria);
          if (instanciaModal) instanciaModal.hide();

          // Eliminar la fila visualmente
          const fila = document.querySelector(`tr[data-id='${categoriaId}']`);
          if (fila) {
            fila.style.transition = "opacity 0.4s";
            fila.style.opacity = "0";
            setTimeout(() => fila.remove(), 400);
          }
        } else {
          console.warn("Respuesta inesperada:", respuestaTexto);
          alertify.notify("Error al eliminar la categoría.", "error", 4);
        }
      })
      .catch(error => {
        console.error("Error AJAX:", error);
        alertify.notify("Error de red", "error", 4);
      });
    });
  });
});

</script>

