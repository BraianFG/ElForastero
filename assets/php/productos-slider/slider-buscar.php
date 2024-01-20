
<li class="productos">
<?php
  session_start();
       require '../database.php';
  
$buscar = mysqli_real_escape_string($conn, filter_var($_GET['buscar'], FILTER_SANITIZE_STRING));
$numero = mysqli_real_escape_string($conn, filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT));
$sql = "SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` WHERE `nombre` LIKE '%$buscar%' LIMIT $numero OFFSET 21 ";
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