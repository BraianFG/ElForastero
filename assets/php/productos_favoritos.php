<section id="productos" class="productos">
<?php
  $UsuarioID = $_SESSION["id"];
  $productos = " SELECT * FROM `favoritos` WHERE `usuarioID` = '$UsuarioID';";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
 ?>   
 
  

<?php include 'productos/productosFavoritos.php' ?>

 <?php 
    }
  ?>
 </section> 