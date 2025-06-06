


   <div class="d-flex justify-content-between align-items-center mb-3 container">
        <h2 class="mb-0">Categorías</h2>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCrearC">
  <i class="fas fa-plus"></i> Nueva categoría
</button>
    </div> 
    
<!-- Modal Crear Categoría -->
<div class="modal fade" id="modalCrearC" tabindex="-1" aria-labelledby="modalCrearCLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" id="crearCategoriaForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCrearCLabel">Nueva Categoría</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="nombre_categoria" class="form-label">Nombre de la categoría</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button  class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
// Definir número de registros por página
$registrosPorPaginaCat = 10;

// Página actual
$paginaCat = isset($_GET['paginaCat']) ? (int)$_GET['paginaCat'] : 1;
$paginaCat = max($paginaCat, 1); // Evita números negativos o cero

// Búsqueda
$busquedaCat = isset($_GET['busquedaCat']) ? mysqli_real_escape_string($conn, $_GET['busquedaCat']) : '';

// Cálculo del inicio
$inicio = ($paginaCat - 1) * $registrosPorPaginaCat;

// Consulta de categorías con paginación
if (!empty($busquedaCat)) {
    $sqlCategorias = "SELECT * FROM categorias WHERE nombre LIKE '%$busquedaCat%' LIMIT $inicio, $registrosPorPaginaCat";
    $sqlTotalCat = "SELECT COUNT(*) AS total FROM categorias WHERE nombre LIKE '%$busquedaCat%'";
} else {
    $sqlCategorias = "SELECT * FROM categorias LIMIT $inicio, $registrosPorPaginaCat";
    $sqlTotalCat = "SELECT COUNT(*) AS total FROM categorias";
}

// Ejecutar consultas
$resultado = mysqli_query($conn, $sqlCategorias);
$resultadoTotal = mysqli_query($conn, $sqlTotalCat);
$filaTotal = mysqli_fetch_assoc($resultadoTotal);

// Calcular total de páginas
$totalCategorias = $filaTotal['total'];
$totalPaginasCat = ceil($totalCategorias / $registrosPorPaginaCat);
?>


<div class="container">
  <!-- Formulario de Búsqueda -->
<?php
$busquedaCat = isset($_GET['busquedaCat']) ? mysqli_real_escape_string($conn, $_GET['busquedaCat']) : '';
?>



<form method="GET" class="mb-4">
  <div class="input-group">
    <input type="text" name="busquedaCat" class="form-control" placeholder="Buscar categoría..." value="<?php echo htmlspecialchars($busquedaCat); ?>" aria-label="categoría">
    <button class="btn btn-primary" type="submit">
      <i class="fas fa-search me-1"></i> Buscar
    </button>
  </div>
</form>

  <!-- Tabla de Categorías -->
<table class="table table-bordered table-hover table-striped bg-white mb-4">  
  <thead class="table-dark">
    <tr>
      <th>Nombre</th>
      <th class="text-end">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($categoria = mysqli_fetch_assoc($resultado)) { ?>
      <tr data-id="<?php echo $categoria['id'] ?>">
        <td class="nombre-categoria"> <?php echo htmlspecialchars($categoria['nombre']) ?></td>
        <td class="text-end">
          <div class="d-inline-flex gap-2">
            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarModalC_<?php echo $categoria['id']; ?>">
              <i class="fas fa-edit"></i>
            </button>
            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#eliminarModalC_<?php echo $categoria['id']; ?>">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </td>
      </tr>

<!-- Modal para Editar Categoría -->
<div class="modal fade" id="editarModalC_<?php echo $categoria['id']; ?>" tabindex="-1" aria-labelledby="modalEditarCategoriaLabel_<?php echo $categoria['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="formEditarCategoria_<?php echo $categoria['id']; ?>" data-id="<?php echo $categoria['id']; ?>" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarCategoriaLabel_<?php echo $categoria['id']; ?>">Editar Categoría</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="nombreCategoriaEditar_<?php echo $categoria['id']; ?>" class="form-label">Nombre de la Categoría</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo htmlspecialchars($categoria['nombre']); ?>">
            <input type="hidden" id="id" name="id" value="<?php echo $categoria['id']; ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning">Actualizar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="eliminarModalC_<?php echo $categoria['id']; ?>" tabindex="-1" aria-labelledby="modalEliminarCategoriaLabel_<?php echo $categoria['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="ELIMINARC_<?php echo $categoria['id']; ?>" method="POST" data-id="<?php echo $categoria['id']; ?>">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEliminarCategoriaLabel_<?php echo $categoria['id']; ?>">Confirmar Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de eliminar la categoría <strong><?php echo htmlspecialchars($categoria['nombre']); ?></strong>?</p>
          <input type="hidden" name="idCategoria" value="<?php echo $categoria['id']; ?>">
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
      <?php } ?>
    </tbody>
  </table>

  <!-- Paginación -->
<nav class="mt-4"> 
  <ul class="pagination justify-content-center flex-wrap">
    <!-- Botón Anterior -->
    <li class="page-item <?php echo ($paginaCat == 1) ? 'disabled' : ''; ?>">
      <a class="page-link" href="?paginaCat=<?php echo $paginaCat - 1; ?>&busquedaCat=<?php echo htmlspecialchars($busquedaCat); ?>" aria-label="Anterior">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <!-- Números de página -->
    <?php for ($i = 1; $i <= $totalPaginasCat; $i++) { ?>
      <li class="page-item <?php echo ($i == $paginaCat) ? 'active' : ''; ?> d-none d-sm-inline-block">
        <a class="page-link" href="?paginaCat=<?php echo $i; ?>&busquedaCat=<?php echo htmlspecialchars($busquedaCat); ?>"><?php echo $i; ?></a>
      </li>
    <?php } ?>

    <!-- Botón Siguiente -->
    <li class="page-item <?php echo ($paginaCat == $totalPaginasCat) ? 'disabled' : ''; ?>">
      <a class="page-link" href="?paginaCat=<?php echo $paginaCat + 1; ?>&busquedaCat=<?php echo htmlspecialchars($busquedaCat); ?>" aria-label="Siguiente">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("crearCategoriaForm");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(form);

    const nombre = formData.get("nombre")?.trim();

    if (!nombre) {
      alertify.notify("Escriba el nombre de la categoria", "error", 5);
      return;
    }

    fetch("./productos/agregar_categorias.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.text())
    .then(response => {
      // El backend solo debería devolver "OK"
      if (response.trim() === "OK") {
        alertify.notify("categoria creada exitosamente.", "success", 5);
        form.reset();
        const modal = bootstrap.Modal.getInstance(document.getElementById("modalCrearC"));
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

<script>
document.addEventListener("DOMContentLoaded", () => {
  // ACTUALIZAR CATEGORÍA
  document.querySelectorAll("form[id^='formEditarCategoria_']").forEach(form => {
    form.addEventListener("submit", function (event) {
      event.preventDefault();

      const id = form.dataset.id;
      if (!id) {
        alertify.notify("ID no válido", "error", 4);
        return;
      }

      const formData = new FormData(form);
      const nombre = formData.get("nombre")?.trim();

      if (!nombre) {
        alertify.notify("El nombre no puede estar vacío.", "error", 5);
        return;
      }

      fetch("./productos/editar_categorias.php", {
        method: "POST",
        body: formData
      })
      .then(res => res.text())
      .then(response => {
        const cleanResponse = response.trim();

        if (cleanResponse === "OK") {
          alertify.notify("Categoría actualizada exitosamente.", "success", 5);

          const modal = bootstrap.Modal.getInstance(form.closest(".modal"));
          if (modal) modal.hide();

          // ACTUALIZAR LA FILA EN LA TABLA
          const row = document.querySelector(`[data-id='${categoriaId}']`)?.closest("tr");
          if (row) {
            row.querySelector(".nombre-categoria").textContent = nombre;
          }

        } else {
          alertify.notify("Error al actualizar: " + response, "error", 5);
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


