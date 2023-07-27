
<section class="productos">
<?php 
  $productos = "SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` WHERE `categoria` = 'Trabajo';";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   
<?php include 'assets/php/productos/producto_nologueado.php' ?>
<?php include 'assets/php/productos/popup.php' ?>

 <?php 
    }
  ?>
  
 </section> 