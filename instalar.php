<?php
include 'database.php';
    session_set_cookie_params(60*60*24*18);
?>

<html>
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
</head>

<body class="is-preload">

    <!-- Wrapper -->

        <!-- Header -->
        <?php include"assets/php/navbar2.php" ?>

        <!-- Menu -->
       <?php include"assets/php/menu.php"  ?>
       
        <div class="uk-container uk-container-large">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
              <h2>Empezá a comprar desde la app</h2>
              <a class="button primary" href="ElForastero.apk">Descargar</a>

                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
                
              <!-- Jquery -->    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
          
        <!-- Hoja de estilo principal -->        
         <?php include 'assets/css/main.php' ?>
                

        </div> 

         <!--style --> 
  
  <?php include "assets/js/Google-Analytics.php" ?>
</body>
</html>