<li class="productos"><?php
require '../../../database.php';
$productos =
    "SELECT * FROM productos WHERE `nombre` LIKE '%$buscar%';";
$resultp1 = mysqli_query($conn, $productos);
while ($productosp1 = mysqli_fetch_array($resultp1)) {
    include "../productos/producto_nologueado.php";
    include "../productos/popup.php";
}
?></li>