
<?php
require "database.php"; 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
 
        <?php 
         if(isset($_SESSION['id'])){
            include"assets/php/navbar.php"; 
            
         }else{
            include"assets/php/navbar3.php" ;
            
         }
        ?>

       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                 <?php include"assets/php/slider.php" ?>
                 
                
                <!--Productos -->
                  <?php
          $categoria = $_GET['categoria'];
          if(isset($_GET['categoria'])){
        ?>
        <ul class="uk-container uk-container-xlarge"><li class="productos">
        <?php
        $productosB = "SELECT * FROM productos WHERE categoria='$categoria'";
        $resultp1 = mysqli_query($conn, $productosB);
        while ($productosp1 = mysqli_fetch_array($resultp1)) {
         if(isset($_SESSION['id'])){
            include"assets/php/productos/producto.php"; 
            include "productos/popup.php";
            
         }else{
            include"assets/php/productos/producto_nologueado.php" ;
            include "productos/popup.php";
             include "productos/reaccionar.php";
         }
         }
        ?>
        <?php
        }?>
              </li>
        </ul>        
                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
         </div>       

          
        <!-- Hoja de estilo principal -->        
         <?php include 'assets/css/main.php' ?>

         <!--style --> 
  
  <?php  include 'bottom-cache.php' ?>
  
<?php   include 'assets/php/cargar.php' ?>
        
</body>
</html>

