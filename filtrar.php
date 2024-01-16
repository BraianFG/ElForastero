
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
         if(!isset($_SESSION['id'])){
             include "visitas.php";
         }
          include"assets/php/navbar3.php" ;
        ?>

       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                 <?php include"assets/php/slider.php" ?>
                 
                
                <!--Productos -->
                  <?php
           $categoria = mysqli_real_escape_string($conn, filter_var($_GET['categoria'], FILTER_SANITIZE_STRING));
          if(isset($categoria)){
        ?>
        <ul class="uk-container uk-container-xlarge"><li class="productos">
        <?php
        $productosB = "SELECT `productos`.`id`, `productos`.`nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` WHERE `categoria`='$categoria'";
        $resultp1 = mysqli_query($conn, $productosB);
        while ($productosp1 = mysqli_fetch_array($resultp1)) {
         include "assets/php/productos/producto.php" ;
        }
          }
     ?>
        
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

