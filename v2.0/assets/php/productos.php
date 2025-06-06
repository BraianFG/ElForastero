<?php
$buscar = isset($_GET['buscar']) ? trim($_GET['buscar']) : '';
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';

// Construcción de la consulta
$sql = "SELECT * FROM productos WHERE 1";

if ($buscar !== '') {
    $buscar = mysqli_real_escape_string($conn, $buscar);
    $sql .= " AND nombre LIKE '%$buscar%'";
}

if ($categoria !== '') {
    $categoria = mysqli_real_escape_string($conn, $categoria);
    $sql .= " AND categoria = '$categoria'";
}

$resultado = mysqli_query($conn, $sql);

// Mostrar productos
while ($producto = mysqli_fetch_assoc($resultado)) {
    echo "<div class='col'>
            <div class='card h-100'>
              <a href='./Penlace?buscar=" . urlencode($producto['nombre']) . "'>
                <img class='lazyload card-img-top'
                     src='../images/blanco.webp'
                     data-src='https://img.gs/jhcplzwzdm/3x,90x90,quality=high/http://tiendaelforastero.com.ar/images/{$producto['imagen']}'
                     alt='" . htmlspecialchars($producto['nombre']) . "'>
              </a>
              <div class='card-body d-flex flex-column'>
                <p class='card-title'>" . htmlspecialchars($producto['nombre']) . "</p>
                <p class='card-text'>$" . number_format($producto['precio'], 2) . "</p>
                <button class='btn btn-dark w-100 mt-auto add-to-cart'
                        data-id='{$producto['id']}'
                        data-nombre='" . htmlspecialchars($producto['nombre']) . "'
                        data-precio='{$producto['precio']}'>Agregar</button>
              </div>
            </div>
          </div>";
}
?>