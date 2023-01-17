
<section class="productos">
<?php
  $productos = "SELECT * FROM productos LIMIT 20";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   

<?php include 'productos/producto_nologueado.php' ?>
<?php include 'productos/popup.php' ?>

 <?php 
    }
  ?>
  
 </section> 
   <a href="index-2" class="paginacion">Ver más <i class="fas fa-arrow-down"></i></a>