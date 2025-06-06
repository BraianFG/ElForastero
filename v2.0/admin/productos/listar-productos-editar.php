<?php
require '../../../assets/php/database.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    exit;
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM productos WHERE id = $id LIMIT 1";
$resultado = mysqli_query($conn, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $producto = mysqli_fetch_assoc($resultado);

    echo "<tr data-id='" . $producto['id'] . "'> 
            <td class='nombre-producto'>" . htmlspecialchars($producto['nombre']) . "</td>
            <td class='precio-producto'>$" . number_format($producto['precio'], 2) . "</td>
            <td class='text-end'>
                <div class='d-inline-flex gap-1'>
                    <button class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#editarModal_" . $producto['id'] . "'>
                        <i class='fas fa-edit'></i>
                    </button>
                    <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#eliminarModal_" . $producto['id'] . "'>
                        <i class='fas fa-trash'></i>
                    </button>
                </div>
            </td>
        </tr>";
}

mysqli_close($conn);
?>
