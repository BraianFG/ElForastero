<div class="container">
  <?php
  $negocio = 'SELECT * FROM negocio';
  $resultados = mysqli_query($conn, $negocio);
  if ($negocio = mysqli_fetch_array($resultados)) {
  ?>
    <a href="./" class="d-inline-block" title="inicio">
      <img src="<?php echo $negocio['dominio'] ?>/images/<?php echo $negocio['logo'] ?>" alt="logo" width="100" height="100">
    </a>
    <h1 class="h5 mt-2"><?php echo $negocio['nombre'] ?></h1>
    <p class="texto"><?php echo $negocio['descripcion'] ?></p>
    <p class="fw-semibold"><?php echo $negocio['alert'] ?></p>
  <?php } ?>
</div>
