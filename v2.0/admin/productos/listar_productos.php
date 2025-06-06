<?php
require '../../../assets/php/database.php'; // Ajustá según tu estructura

$sql = "SELECT * FROM productos ORDER BY id DESC LIMIT 1";
$resultado = mysqli_query($conn, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $producto = mysqli_fetch_assoc($resultado);
    
    echo "<tr data-id='" . $producto['id'] . "'> 
            <td class='nombre-producto'>" . htmlspecialchars($producto['nombre']) . "</td>
            <td class='precio-producto'>$" . number_format($producto['precio'], 2) . "</td>
            <td class='text-end'>
               <button class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#editarModal_" . $producto['id'] . "'>
                        <i class='fas fa-edit'></i>
                    </button>
                    <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#eliminarModal_" . $producto['id'] . "'>
                        <i class='fas fa-trash'></i>
                    </button>
                </div>
            </td>
        </tr>";
} else {
    echo "<tr><td colspan='3'>No hay productos disponibles</td></tr>";
}

echo "
<!-- Modal Editar -->
<div class='modal fade' id='editarModal_" . $producto['id'] . "' tabindex='-1' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title'>Editar Producto</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
      </div>
      <div class='modal-body'>
        <!-- Tu formulario para editar -->
        <form id='formEditar_" . $producto['id'] . "'>
          <input type='hidden' name='id' value='" . $producto['id'] . "'>
          <div class='mb-3'>
            <label class='form-label'>Nombre</label>
            <input type='text' name='nombre' class='form-control' value='" . htmlspecialchars($producto['nombre']) . "'>
          </div>
          <div class='mb-3'>
            <label class='form-label'>Precio</label>
            <input type='number' step='0.01' name='precio' class='form-control' value='" . $producto['precio'] . "'>
          </div>
          <div class='modal-footer'>
            <button type='submit' class='btn btn-primary'>Guardar</button>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Eliminar -->
<div class='modal fade' id='eliminarModal_" . $producto['id'] . "' tabindex='-1' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title'>Eliminar Producto</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
      </div>
      <div class='modal-body'>
        ¿Estás seguro de que querés eliminar <strong>" . htmlspecialchars($producto['nombre']) . "</strong>?
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-danger' onclick='eliminarProducto(" . $producto['id'] . ")'>Eliminar</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
      </div>
    </div>
  </div>
</div>
";

mysqli_close($conn);
exit;
header("Location: ../");

