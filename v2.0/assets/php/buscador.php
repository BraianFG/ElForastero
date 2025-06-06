<section class="bg-white border-bottom py-3 mb-3 sticky-top" style="top: 0; z-index: 1030;">
  <form action="buscar.php" method="get" class="d-flex flex-column flex-md-row gap-2">
    <label for="buscar"></label>
    <input type="text" name="buscar" class="form-control" placeholder="Buscar productos..." value="<?= htmlspecialchars($_GET['buscar'] ?? '') ?>">
 <label for="categoria" style="display:none">Categoría:</label>
<select aria-label="categoria" name="categoria" id="categoria" class="form-select" style="max-width: 200px;">
  <option value="">Todas las categorías</option>
  <?php
    $productos = "SELECT categoria, COUNT(*) AS cantidad FROM productos GROUP BY categoria ORDER BY categoria;";
    $resultp1 = mysqli_query($conn, $productos);
    $categoriaSeleccionada = $_GET['categoria'] ?? '';

    while ($productosp1 = mysqli_fetch_array($resultp1)) {
      $categoria = $productosp1['categoria'];
      $selected = ($categoriaSeleccionada === $categoria) ? 'selected' : '';
      echo "<option value='" . htmlspecialchars($categoria) . "' $selected>" . htmlspecialchars($categoria) . " ({$productosp1['cantidad']})</option>";
    }
  ?>
</select>


    <button type="submit" class="btn btn-outline-dark">Buscar</button>
  </form>
</section>
