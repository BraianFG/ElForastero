<?php 
session_set_cookie_params(60*60*24*18);
session_start();
require "../assets/php/database.php";
$id = $_SESSION["id"];
?>

<!DOCTYPE html> 
<html lang="es">
<head>
  <?php include "../assets/php/head.php" ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="bg-light">

<header class="text-center">
  <?php include "assets/php/header.php" ?>
</header>

<main class="container my-4">
    <?php include "assets/js/script.php" ?>
  <?php include "assets/php/buscador.php" ?>
      <div id="product-list" class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">

 <?php include "assets/php/productos.php" ?>

   </div>
</main>

</section>
  <!-- Productos iniciales -->

</div>
  <!-- Loading -->
  <div id="loading" class="text-center my-4" style="display: none;">
    <div class="spinner-border" role="status"></div>
  </div>

</main>

<?php include "assets/php/modalCarrito.php" ?>
<footer class="text-center">
  <?php include "./assets/php/footer.php" ?>
</footer>

<!-- Scripts JS -->
<?php include "assets/js/scrollInfinito.php" ?>


</body>
</html>