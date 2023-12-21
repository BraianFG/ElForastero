<ul class="uk-container uk-container-xlarge"><li class="productos slider"id="slider"><?php
$productos =
    " SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` LIMIT 20;";
$resultp1 = mysqli_query($conn, $productos);
while ($productosp1 = mysqli_fetch_array($resultp1)) {
    include "productos/producto_nologueado.php";
    include "productos/popup.php";
    include "productos/reaccionar.php";
}
?></li></ul>
<ul id="ver2" class="uk-container uk-container-xlarge">

</ul>
<ul id="ver3" class="uk-container uk-container-xlarge">
    
</ul>
<ul id="ver4" class="uk-container uk-container-xlarge">

</ul>
<ul class="uk-pagination paginacion">
    <li id="slider2" class="pagination__item"><a href="#slide2">2</a></li>
    <li id="slider3" class="pagination__item"><a  href="#slide3">3</a></li>
    <li id="slider4" class="pagination__item"><a href="#slide4">4</a></li>
</ul>