<?php

require "../../../assets/php/database.php" ;
header("Content-Type: text/html; charset=UTF-8");

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = 20;

// Consulta segura y ordenada
$query = "SELECT * FROM productos ORDER BY id ASC LIMIT $offset, $limit";
$result = mysqli_query($conn, $query);

if (!$result) {
    http_response_code(500);
    echo "Error en la consulta: " . mysqli_error($conn);
    exit;
}

while ($p = mysqli_fetch_array($result)) {
?>
  <div class="col">
    <div class="card h-100">
      <a href="<?php echo './Penlace?buscar=' . urlencode($p['nombre']) ?>">
        <img class="lazyload card-img-top"
             src="../images/blanco.webp"
             data-src="https://img.gs/jhcplzwzdm/3x,90x90,quality=high/http://tiendaelforastero.com.ar/images/<?php echo htmlspecialchars($p['imagen']) ?>"
             alt="<?php echo htmlspecialchars($p['nombre']) ?>">
      </a>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title"><?php echo htmlspecialchars($p['nombre']) ?></h5>
        <p class="card-text">$<?php echo number_format($p['precio'], 2) ?></p>
        <button class="btn btn-dark w-100 mt-auto add-to-cart"
                data-id="<?php echo $p['id'] ?>"
                data-nombre="<?php echo htmlspecialchars($p['nombre']) ?>"
                data-precio="<?php echo $p['precio'] ?>">
          Agregar
        </button>
      </div>
    </div>
  </div>
<?php
}
?>