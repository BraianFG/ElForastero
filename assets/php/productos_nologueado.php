<div class="mini-posts">
<?php
  $productos = "SELECT * FROM productos";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   

<?php include 'productos/producto_nologueado.php' ?>
<?php include 'productos/popup.php' ?>

 <?php 
    }
  ?>
  
 </section> 