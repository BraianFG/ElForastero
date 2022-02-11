<secction class="productos">
<?php
    
  $productos = "SELECT * FROM productos";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   

<?php include 'productos/producto.php' ?>
<?php include 'productos/popup.php' ?>

 <?php 
    }
  ?>
  
 </section> 