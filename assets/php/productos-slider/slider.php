<li class="productos">
<?php
      require '../database.php';
    session_start();
$numero = mysqli_real_escape_string($conn, filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT));
$sql = "SELECT DISTINCT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` LIMIT $numero OFFSET 21";
$result = $conn->query($sql);
while ($productosp1 = mysqli_fetch_array($result)) {
       include "../productos/producto.php" ;

     include "../productos/popup.php";

     include "../productos/reaccionar.php";


}
// Cerrar la conexión
$conn->close();
?>
</li>