<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
<?php include "assets/php/head.php" ?>

  <!-- Bootstrap y Font Awesome -->
  <link href="./assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" defer></script>

  <?php
    session_start();
    $id = $_SESSION['id'];
    require "../assets/php/database.php";

    // Datos del sitio
    $rs = mysqli_query($conn, "SELECT * FROM negocio_misitio");
    if ($row = mysqli_fetch_array($rs)) {
        echo "<title>{$row['title']}</title>";
        echo "<link rel='shortcut icon' href='/images/{$row['favicon']}' />";
    }

    // Estilos personalizados
    $estilos = mysqli_query($conn, "SELECT * FROM estilos");
    if ($e = mysqli_fetch_array($estilos)) {
        echo "<meta name='theme-color' content='{$e['color2']}'>";
        echo "<meta name='msapplication-navbutton-color' content='{$e['color2']}'>";
        echo "<meta name='apple-mobile-web-app-status-bar-style' content='{$e['color2']}'>";
    }

    include "assets/css/style.php";
  ?>
  
<?php
  $buscar = mysqli_real_escape_string($conn, filter_var($_GET['buscar'], FILTER_SANITIZE_STRING));
  $negocio = "SELECT * FROM `productos` WHERE `nombre` LIKE '%$buscar%' ORDER BY  `productos`.`nombre` ASC" ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
     ?>     
   <!-- Descripcion -->
    <meta property="og:title" content="<?php echo $negocio['nombre'],' ','$',$negocio['precio'] ?>">
    <meta property="og:image" content="https://tiendaelforastero.com.ar/images/<?php echo $negocio['imagen']?>">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="1452" />
    <meta name="description" property="og:description" content="<?php echo $negocio['descripcion']?>">
    <?php
        }
   ?>

</head>

<body class="bg-light">
<header class="text-center">
  <?php include "assets/php/header.php" ?>
</header>

<main class="container">
  <?php include "assets/php/buscador.php" ?>
</section>
<!-- Producto principal -->
<?php
$buscar = mysqli_real_escape_string($conn, filter_var($_GET['buscar'], FILTER_SANITIZE_STRING));
$productos = "SELECT * FROM productos WHERE nombre LIKE '%$buscar%' ORDER BY nombre";
$resultados = mysqli_query($conn, $productos);

while ($producto = mysqli_fetch_array($resultados)) {
?>
  <div class="row producto-detalle shadow-sm bg-white rounded p-4 mb-5">
    <div class="col-md-6">
      <div class="scroll-container">
        <img class="lazyload" 
             style="height: 400px; object-fit: contain;" 
             data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/https:/tiendaelforastero.com.ar/images/<?php echo $producto['imagen'] ?>"
             src="../images/blanco.webp"
             alt="Imagen principal">
        
        <?php if (!empty($producto['imagen01'])) { ?>
          <img class="lazyload"
               style="height: 400px; object-fit: contain;;margin-left:0.5em"
               data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/https:/tiendaelforastero.com.ar/images/<?php echo $producto['imagen01'] ?>"
               src="../images/blanco.webp"
               alt="Imagen secundaria">
        <?php } ?>

        <?php if (!empty($producto['imagen02'])) { ?>
          <img class="lazyload"
               style="height: 400px;object-fit: contain;margin-left:0.5em"
               data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/https:/tiendaelforastero.com.ar/images/<?php echo $producto['imagen02'] ?>"
               src="../images/blanco.webp"
               alt="Imagen tercera">
        <?php } ?>
      </div>
    </div>
    <div class="col-md-6">
      <h2 class="mb-3"><?php echo $producto['nombre']?></h2>
      <p class="h4 text-success mb-3">$<?php echo $producto['precio']?></p>
      <p class="mb-4"><?php echo $producto['descripcion']?></p>
      <button class="btn btn-dark w-100 mt-auto add-to-cart"
              data-id="<?php echo $producto['id'] ?>"
              data-nombre="<?php echo $producto['nombre'] ?>"
              data-precio="<?php echo $producto['precio'] ?>">
        Agregar al carrito
      </button>
      <!-- Botón de compartir -->
<button class="btn btn-outline-secondary w-100 mt-2 compartir-enlace"
        data-nombre="<?php echo htmlspecialchars($producto['nombre']) ?>"
        data-url="https://tiendaelforastero.com.ar/Penlace?buscar=<?php echo urlencode($producto['nombre']) ?>">
  <i class="fas fa-share-alt me-2"></i> Compartir
</button>
    </div>
  </div>
<?php } ?>
  <!-- Otros productos -->
  <div class="otros-productos mt-5">
    <h4 class="mb-4 text-center">Otros productos</h4>
    <div class="d-flex gap-3 overflow-auto otros-scroll d-flex justify-content-evenly">
      <?php
      $otros = mysqli_query($conn, "SELECT * FROM productos ORDER BY RAND() LIMIT 6");
      while ($p = mysqli_fetch_array($otros)) {
      ?>
        <div class="card flex-shrink-0" style="min-width: 240px; max-width: 240px;">
          <a href="<?php echo './Penlace?buscar=' . urlencode($p['nombre']) ?>">
            <img class="lazyload card-img-top rounded-top"
                 src="../images/blanco.webp"
                 data-src="https://img.gs/jhcplzwzdm/3x,90x90,quality=high/https:/tiendaelforastero.com.ar/images/<?php echo $p['imagen'] ?>"
                 alt="<?php echo $p['nombre'] ?>">
          </a>
          <div class="card-body d-flex flex-column">
            <h6 class="card-title text-truncate"><?php echo $p['nombre'] ?></h6>
            <p class="card-text text-success fw-bold">$<?php echo number_format($p['precio'], 2) ?></p>
            <button class="btn btn-dark btn-sm w-100 mt-auto add-to-cart"
                    data-id="<?php echo $p['id'] ?>"
                    data-nombre="<?php echo $p['nombre'] ?>"
                    data-precio="<?php echo $p['precio'] ?>">
              Agregar
            </button>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include "assets/js/script.php" ?>
</main>

<footer>
  <?php include "assets/php/footer.php" ?>
</footer>

<?php include "assets/php/modalCarrito.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.8.3/lazyload.min.js"></script>
</body>
</html>

