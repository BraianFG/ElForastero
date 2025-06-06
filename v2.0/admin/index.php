<?php 
require '../../assets/php/database.php';
session_start();
if (isset($_SESSION["id_admin"])){
   $id_admin=$_SESSION["id_admin"];
}else{
    header('Location:ingresar');
}

if (empty($_SESSION['csrf_token'])) {
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
include '../top-cache.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include "../../assets/php/head.php" ?>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>
    body {
      background: #f8f9fa;
    }
    .table th, .table td {
      vertical-align: middle;
    }
  </style>
</head>
<body class="bg-light">

<?php
// Obtener nombre del admin antes del HTML para evitar lógica en la vista
$admin_nombre = '';
$consulta = "SELECT nombre FROM admin WHERE id='$id_admin' LIMIT 1";
$resultado = mysqli_query($conn, $consulta);
if ($admin = mysqli_fetch_assoc($resultado)) {
  $admin_nombre = $admin['nombre'];
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 sticky-top shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Administración</a>

    <!-- Botón hamburguesa para colapsar en pantallas pequeñas -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarOpciones" aria-controls="navbarOpciones" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- Contenido colapsable -->
<div class="collapse navbar-collapse justify-content-end" id="navbarOpciones">
  <ul class="navbar-nav align-items-lg-center gap-2">
    
    <!-- Saludo -->
    <li class="nav-item d-flex align-items-center text-white">
      <span class="fw-semibold">
        👋 Hola <?php echo $admin_nombre; ?>
      </span>
    </li>

    <!-- Menú desplegable -->
   <li class="nav-item dropdown">
  <button class="btn btn-outline-light btn-sm dropdown-toggle fw-semibold px-3 py-2 rounded-pill shadow-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    ⚙️ Opciones
  </button>

  <ul class="dropdown-menu dropdown-menu-end bg-dark text-white p-3 shadow-lg border-0 rounded-4 animate__animated animate__fadeIn" style="min-width: 260px;">
    <li>
      <a href="../../admin/productos/fpdf/fpdf/Lista.php" class="btn btn-outline-primary btn-sm w-100 rounded-pill mb-2 text-start">
        📥 Descargar lista de productos
      </a>
    </li>
    <li>
      <button class="btn btn-success btn-sm w-100 rounded-pill shadow-sm mb-2 text-start" data-bs-toggle="modal" data-bs-target="#modalEditarNegocio">
        <i class="fas fa-store me-2"></i>Editar Datos del Negocio
      </button>
    </li>
    <li>
      <button class="btn btn-info btn-sm w-100 rounded-pill shadow-sm mb-2 text-start" data-bs-toggle="modal" data-bs-target="#modalEditarSitio">
        <i class="fas fa-cogs me-2"></i>Editar Datos del Sitio
      </button>
    </li>
    <li>
      <button class="btn btn-outline-danger btn-sm w-100 rounded-pill shadow-sm mb-2 text-start" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="fas fa-sign-out-alt me-2"></i>Cerrar sesión
      </button>
    </li>

    <li><hr class="dropdown-divider border-secondary"></li>

    <li>
      <a class="dropdown-item small text-white-50" href="#">📝 Editar mi nombre de admin</a>
    </li>
    <li>
      <a class="dropdown-item text-white" href="../">👁️ Ver cambios</a>
    </li>
  </ul>
</li>

      </ul>
    </li>
  </ul>
</div>

</nav>

<!-- Modal Confirmación de Cierre de Sesión -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="logoutModalLabel">¿Cerrar sesión?</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¿Estás seguro de que querés cerrar sesión?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
    <form method="POST" action="./salir.php">
      <!-- Token CSRF -->
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    
      <!-- Botón de Cerrar Sesión -->
      <button type="submit" name="salir" class="btn btn-danger">Sí, cerrar sesión</button>
    </form>
      </div>
    </div>
  </div>
</div>


<?php include "./productos/modalProductos.php" ?>



<?php
// Definir el número de registros por página
$registros_por_pagina = 10;

// Obtener el número de página actual
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina_actual - 1) * $registros_por_pagina;

// Obtener el término de búsqueda si está presente
$busqueda = isset($_GET['busqueda']) ? mysqli_real_escape_string($conn, $_GET['busqueda']) : '';

// Consultar los productos con paginación y búsqueda
if ($busqueda) {
    $consulta = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%' LIMIT $inicio, $registros_por_pagina";
} else {
    $consulta = "SELECT * FROM productos LIMIT $inicio, $registros_por_pagina";
}

$resultado = mysqli_query($conn, $consulta);

// Contar el total de productos para la paginación (considerando la búsqueda)
if ($busqueda) {
    $consulta_total = "SELECT COUNT(*) AS total FROM productos WHERE nombre LIKE '%$busqueda%'";
} else {
    $consulta_total = "SELECT COUNT(*) AS total FROM productos";
}
$resultado_total = mysqli_query($conn, $consulta_total);
$fila_total = mysqli_fetch_assoc($resultado_total);
$total_productos = $fila_total['total'];
$total_paginas = ceil($total_productos / $registros_por_pagina);
?>


<?php include "./productos/productos_tabla.php" ?>

<script>
    // Script para llenar los modales de editar y eliminar con los datos correspondientes
    const modalEditar = document.getElementById('modalEditarCategoria');
    modalEditar.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const categoriaId = button.getAttribute('data-id');
        const categoriaNombre = button.getAttribute('data-nombre');
        document.getElementById('idCategoriaEditar').value = categoriaId;
        document.getElementById('nombreCategoriaEditar').value = categoriaNombre;
    });

    const modalEliminar = document.getElementById('modalEliminarCategoria');
    modalEliminar.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const categoriaId = button.getAttribute('data-id');
        const categoriaNombre = button.getAttribute('data-nombre');
        document.getElementById('idCategoriaEliminar').value = categoriaId;
        document.getElementById('nombreCategoriaEliminar').textContent = categoriaNombre;
    });
</script>


<?php include "negocio/negocioModal.php" ?>


<?php include "negocio/sitioModal.php" ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Accesos</h3>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCrearUsuario">
            <i class="fas fa-user-plus me-2"></i> Nuevo Usuario
        </button>
    </div>


    <table class="table table-bordered table-hover table-striped bg-white">
        <thead class="table-dark">
            <tr>
                <th>NOMBRE</th>
                <th>ELIMINAR</th>
                <th>EDITAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Suponiendo que ya tenés una conexión $conn
            $consulta = "SELECT * FROM admin LIMIT 100000000 OFFSET 1";
            $resultado = mysqli_query($conn, $consulta);

            while ($usuario = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                        <td>" . htmlspecialchars($usuario['nombre']) . "</td>
                        <td>
                            <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modalEliminarUsuario_{$usuario['id']}'>
                                <i class='fas fa-trash'></i>
                            </button>
                        </td>
                        <td>
                            <button class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#modalEditarUsuario_{$usuario['id']}'>
                                <i class='fas fa-edit'></i>
                            </button>
                        </td>
                      </tr>";

                // Modal Eliminar
                echo "
                <div class='modal fade' id='modalEliminarUsuario_{$usuario['id']}' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <form method='POST' action='eliminar_usuario.php'>
                                <input type='hidden' name='id' value='{$usuario['id']}'>
                                <div class='modal-header'>
                                    <h5 class='modal-title'>Eliminar Usuario</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                                </div>
                                <div class='modal-body'>
                                    ¿Estás seguro de que querés eliminar a <strong>{$usuario['nombre']}</strong>?
                                </div>
                                <div class='modal-footer'>
                                    <button type='submit' class='btn btn-danger'>Eliminar</button>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>";

                // Modal Editar
                echo "
                <div class='modal fade' id='modalEditarUsuario_{$usuario['id']}' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <form method='POST' action='editar_usuario.php'>
                                <input type='hidden' name='id' value='{$usuario['id']}'>
                                <div class='modal-header'>
                                    <h5 class='modal-title'>Editar Usuario</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                                </div>
                                <div class='modal-body'>
                                    <div class='mb-3'>
                                        <label class='form-label'>Nombre</label>
                                        <input type='text' class='form-control' name='nombre' value='" . htmlspecialchars($usuario['nombre']) . "' required>
                                    </div>
                                    <div class='mb-3'>
                                        <label class='form-label'>Email</label>
                                        <input type='email' class='form-control' name='email' value='" . htmlspecialchars($usuario['email']) . "' required>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='submit' class='btn btn-primary'>Guardar Cambios</button>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </tbody>
    </table>
</div>


<!-- Modal Crear Usuario -->
<div class="modal fade" id="modalCrearUsuario" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="crear_usuario.php">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
