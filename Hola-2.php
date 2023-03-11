<?php
   require 'database.php';
?>
<html>
<head>
   <?php include 'assets/php/head.php'?>
    <?php include 'assets/css/main.php' ?>
    <?php include 'assets/css/style.php' ?>
    <?php include 'assets/js/Google-Analytics.php' ?>
    <?php include 'assets/js/script.php' ?>
</head>
<body>
        <!-- Header -->
        <?php include 'assets/php/navbar3.php' ?>

        <!-- Menu -->
       <?php include 'assets/php/menu.php'  ?>
       
        <div class='uk-container uk-container-large'>
                
                <!-- Main -->
                <?php include 'assets/php/presentacion.php'?>
                
                <!--Selector-->
                <?php include 'assets/php/categorias/slider/slider-Hola.php' ?>

                <!--Productos -->
                <?php include 'assets/php/categorias/productos-Hola.php' ?>
              
                <!-- Botones flotantes-->
                <?php include'assets/php/contacto.php' ?>
        
         <!-- Footer -->
              <?php include 'assets/php/footer.php' ?>
        </div>

</body>
</html>