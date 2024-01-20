<?php
include 'database.php';
    session_set_cookie_params(60*60*24*18);
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    }else{
       header('Location: ingresar');
    }
 include 'top-cache.php'    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
   <script src="assets/js/slider/ver.js" defer></script>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
        <?php include"assets/php/navbar.php" ?>

       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <!-- Selector -->
                 <?php include 'assets/php/slider.php' ?>
                <!--Productos -->
                <ul class="uk-container uk-container-xlarge">
                <?php include "assets/php/productos.php" ?>
          
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