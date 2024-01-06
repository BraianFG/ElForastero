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

<html>
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
        <?php include"assets/php/navbar.php" ?>

       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
              <!--Productos -->
                <?php include"assets/php/productos_favoritos.php" ?>

                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
         </div>       
              <!-- Jquery -->    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
          
        <!-- Hoja de estilo principal -->        
         <?php include 'assets/css/main.php' ?>
                
         <!--style --> 
  
  <?php include 
         include 'bottom-cache.php';
         include 'assets/php/cargar.php';
         ?>
        
</body>
</html>