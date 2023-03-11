
<section class="productos">
<?php
  $productos = "SELECT * FROM productos LIMIT 120 OFFSET 60";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   

<?php include 'productos/producto_nologueado.php' ?>
<?php include 'productos/popup.php' ?>

 <?php 
    }
  ?>
 </section> 
   <div class="paginacion__volver">
       <a href="/" class="paginacion">Ver más <i class="fas fa-arrow-down"></i></a>
  <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="paginacion">ir Atrás  <i class="fas fa-undo"></i></a>
  </div>