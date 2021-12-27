<?php

  $negocio = 'SELECT * FROM negocio_misitio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
 
     <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
 <title><?php echo $negocio['title'] ?></title>
 
    <!--Verificación de Google -->
    <meta name="google-site-verification" content="iO5Q0prwfODQfApglvfiDPWPntEcdaEd4SVlIeJP0ew" />
    
    <!--Google adsense -->
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7760719435894495"
     crossorigin="anonymous"></script>
    
    <!--Repositive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!--Codificación -->
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
   <!--Favicón -->
    <link rel="shortcut icon" href="<?php echo $negocio['favicon']?>" />
    
    <!--UiKit-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/css/uikit.min.css" />

    <!--Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

   <!-- Descripcion -->
    <meta property="og:title" content="<?php echo $negocio['title']?>">
    <meta property="og:image" content="<?php echo $negocio['imagen_sitio']?>" />
    <meta property="og:site_name" content="<?php echo $negocio['title']?>">
    <meta property="og:description" content="<?php echo $negocio['descripcion']?>">


     
<?php
  include 'database.php';
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
     
                
<?php
    }
 ?>
     
<!--UIKIT JS -->
   <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/js/uikit.min.js"></script> 

  <!---Font Awesome icons--->
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg></script>

<!--JQUERY-->
<script src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>

<!--Mercado Pago -->
<script src="https://sdk.mercadopago.com/js/v2"></script>			  

<!--AJAX-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

