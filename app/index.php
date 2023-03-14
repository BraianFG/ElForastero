<html>
<head>
       <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" media="all"/>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit.min.js" defer ></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit-icons.min.js" defer></script>
   <?php 
   include '../database.php';
   include "../assets/php/head.php" ;
   include "../assets/css/style.php";
    include "../assets/css/main.php";
   include  "../assets/js/script.php";?>
</head>
<body>

   <?php
  include '../database.php';
   include '../assets/php/navbar4.php';
   include "../assets/css/style.php";
   ?>
   <div class="uk-container wrapp">
        <?php $negocio = 'SELECT * from negocio_misitio' ;     
          $result = mysqli_query($conn,$negocio);
           while($mostrar = mysqli_fetch_array($result)){
         ?> 
    <img src="../images/<?php echo $mostrar[3] ?>" alt="banner" width="100%">
    <?php 
           }
    ?>
  </div>
 

   <div class="uk-container uk-card uk-card-default uk-card-body  wrapp">
       <p class="uk-text-center">Descarga la app para todo dispositivo Android</p>
          <a class="button primary" href="ElForastero.apk" download>Descargar app</a>
         <a class="button primary" href="/" >Ir al sitio web</a>
   </div>
   
    <div class="uk-container uk-card uk-card-default uk-card-body">  
    <p class="uk-text-center">Sitio web creado por <a href="../Braian">BraianFg287</a></p>
    </div>
    <?php include "../visitas.php" ?>
</body>
</html>
