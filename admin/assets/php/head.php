<?php
  $negocio = 'SELECT * FROM negocio_misitio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
 
     <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
 <title><?php echo $negocio['title'] ?></title>
    <meta charset="utf-8" />

    <!--AJAX-->		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!---Font Awesome icons JS--->
   <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg></script>
   
    <!--UiKit-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/css/uikit.min.css" />
    
     <!---Font Awesome icons--->
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
    <!--Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

   
    <!-- Descripcion del sitio  -->
    <meta property="og:title" content="<?php echo $negocio['title']?>">
    <meta property="og:image" content="<?php echo $negocio['imagen_sitio']?>" />
    <meta property="og:site_name" content="<?php echo $negocio['title']?>">
    <meta property="og:description" content="<?php echo $negocio['descripcion']?>">
    <link rel="shortcut icon" href="<?php echo $negocio['favicon']?>" />
    
    <!-- No indexar a buscadores -->
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    
    <!-- Reponsitive -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
      <?php
      }
     ?>
     
 <?php
  include '../database.php';
  $negocio = 'SELECT * FROM estilos' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
 
     <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?>      
     <meta name="theme-color" content="<?php echo $negocio['color2'] ?>" />
     <meta name="msapplication-navbutton-color" content="<?php echo $negocio['color2'] ?>"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $negocio['color2'] ?>">
     
                
      <?php
      }
     ?>
     
   <!--UIKIT JS -->
   <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/js/uikit.min.js"></script>