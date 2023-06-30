<section id="productos" class="productos">
<?php
    
  $productos = "SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` LIMIT 120 OFFSET 60;";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   

<?php include 'productos/producto.php' ?>
<?php include 'productos/popup.php' ?>

 <?php 
    }
  ?>
 </section> 
<div class="paginacion__volver">
       <a href="index" class="paginacion">Ver más <i class="fas fa-arrow-down"></i></a>
  <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="paginacion">ir Atrás  <i class="fas fa-undo"></i></a>
 </div> 