<?php
   require 'database.php';
    session_start();
    if (isset($_SESSION["id"])){
      $id = $_SESSION["id"];
    }else{
        header('Location: RopaInterior');
    }
?>
<html>
<head>
   <?php include "assets/php/head.php" ?>
    <?php include "assets/css/main.php" ?>
    <?php include "assets/css/style.php" ?>
    <?php include "assets/js/Google-Analytics.php" ?>
    <?php include "assets/js/script.php" ?>
        <!-- Jquery -->    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>    
</head>
<body>
        <!-- Header -->
        <?php include"assets/php/navbar.php" ?>

        <!-- Menu -->
       <?php include"assets/php/menu.php"  ?>
       
        <div class="uk-container uk-container-large">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <!--Selector-->
                <?php include 'assets/php/categorias/slider/slider-ropaInterior.php' ?>

                <!--Productos -->
                <?php include "assets/php/categorias/productos-RopaInterior.php" ?>
              
                <!-- Botones flotantes-->
                <?php include"assets/php/contacto.php" ?>
        
         <!-- Footer -->
              <?php include"assets/php/footer.php" ?>
        </div>
   <?php include "assets/js/productos.php" ?>
</body>
</html>