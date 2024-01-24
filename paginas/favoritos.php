<?php
include '../assets/php/database.php';
    session_set_cookie_params(60*60*24*18);
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    }else{
       header('Location: ingresar');
    }
 include '../assets/php/top-cache.php'   
?>

<html>
<head>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
    <!--head-->
   <?php include "../assets/php/head.php" ?>
   <?php include "../assets/js/script.php" ?>
  <?php include '../assets/css/style.php' ?>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
        <?php include"../assets/php/navbar3.php" ?>

       <div class="uk-container">
                <!-- Main -->
                <?php include "../assets/php/presentacion.php" ?>
                  <?php include "../assets/php/slider.php" ?>
              <!--Productos -->
                <?php include "../assets/php/productos_favoritos.php" ?>

                <!-- Botones flotantes-->
                <?php include "../assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include "../assets/php/footer.php" ?>
         </div>       
              <!-- Jquery -->    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
          
        <!-- Hoja de estilo principal -->        
         <?php include '../assets/css/main.php' ?>
                
         <!--style --> 
  
  <?php include 
         include '../assets/php/bottom-cache.php';
         include '../assets/php/cargar.php';
         ?>
        
</body>
</html>