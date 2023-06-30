<section id="productos" class="productos">
<?php
  $productos = "SELECT * FROM `productos` WHERE `categoria` = 'Blanquería'";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   

<?php include 'assets/php/productos/producto.php' ?>
<?php include 'assets/php/productos/popup.php' ?>

 <?php 
    }
  ?>
  
 </section> 
