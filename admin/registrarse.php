<?php
      require '../assets/php/database.php';
    session_start();
    if (isset($_SESSION["id_admin"]) && $_SESSION['id_admin'] == 1){
    }else{
     header('Location:denegado');
    }
    
?>
<html>

<head>
      <?php include"assets/php/head.php"  ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js" async></script>
      
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    
    <!-- 
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
</head>    
<body>
   <?php include "assets/php/navbar3.php" ?> 
   <?php include 'assets/css/main.php' ?> 
    
    <div class="registrarse__recuadro">
        <div class="header"><i class="fas fa-users"></i> Registro de invitado</div>
         <form class="registro" action="return false" onsubmit="return false">
               <input class="compradores" id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" value="" required >
               <input class="compradores" id="email" name="email" type="email" placeholder="Ingrese correo electrónico" value="" required autocomplete="off">
               <input class="compradores" id="password" name="password" minlength="8" maxlength="15" type="password" placeholder="Ingrese contraseña" value="" required autocomplete="off">
            <button onclick="Validar(document.getElementById('nombre').value, document.getElementById('email').value, document.getElementById('password').value);"  class="button primary compradores" value="enviar" >Completar Registro<i class="fas fa-user-check"></i> </button>
            </form>
    </div>
    <div id="error"></div>
    
     <script>
         function Validar(nombre,email,password)
        {
            var registro = {'nombre':nombre,'email':email,'password':password};
            $.ajax({
                url: "registro.php",
                type: "POST",
                data: registro,
                success: function(resp){
                $('#error').html(resp)
                }       
            });
        }
        </script>
     
    </body> 
</html>


