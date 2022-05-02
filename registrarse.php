<?php
    include 'database.php';
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION["id"])){
        $id = $_SESSION["id"];
       header('Location: index2');

    }
?>
<html>

<head>
      <?php include"assets/php/head.php"  ?>
      <?php include 'assets/css/main.php' ?>
       <?php include 'assets/js/script.php'?>
      <?php include "assets/css/style.php" ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>    
<body>
   <?php include "assets/php/navbar4.php" ?> 
   <?php include 'assets/css/main.php' ?> 
   <div id="resultado__registro"></div>
    <div class="registrarse__recuadro">
        <div class="title">Registro</div>
         <form class="registro" method="POST" action="return false" onsubmit="return false">
             <label class="datos"><i class="fas fa-user"></i> Nombre</label>
               <input  minlength="3" class="compradores" id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" value="" required >
                <label class="datos"> <i class="fas fa-user"></i> Apellido</label>
                <input class="compradores"  minlength="3" id="apellido" name="apellido" type="text" placeholder="Ingrese su apellido" value="" required>
             <label class="datos"><i class="fas fa-envelope"></i> Correo Electrónico</label>    
               <input class="compradores" id="email" name="email" type="email" placeholder="Ingrese correo electrónico" value="" required autocomplete="off">
               <label class="datos"><i class="fas fa-key"></i> Contraseña</label> 
               <input class="compradores" id="password" name="password" minlength="8" maxlength="15" type="password" placeholder="Ingrese contraseña" value="" required autocomplete="off">
               <label class="datos"><i class="fas fa-phone"></i> Celular</label> 
                <input class="compradores" id="celular" name="celular" type="tel" maxlength="18" placeholder="Ingrese su celular" value="" required>
             <label class="datos"><i class="fas fa-directions"></i> Domicilio</label>    
               <input minlength="3" class="compradores" id="domicilio" name="domicilio" type="text" placeholder="Ingrese el domicilio a enviar" value="" required>
              <label class="datos"> <i class="fas fa-city"></i> Ciudad</label>  
              <input minlength="3" class="compradores" id="ciudad" name="ciudad" type="text" placeholder="Ingrese la ciudad a enviar" value="" required>
              <label class="datos"><i class="fas fa-mail-bulk"></i> Código Postal</label> 
             <input class="compradores" id="codPostal" name="codPostal" maxlength="4" type="text" placeholder="Ingrese código postal" value="" required>
            <button class="button primary compradores" onclick="Validar__registro(document.getElementById('nombre').value, document.getElementById('apellido').value,document.getElementById('email').value,document.getElementById('password').value,document.getElementById('celular').value,document.getElementById('domicilio').value,document.getElementById('ciudad').value,document.getElementById('codPostal').value);" value="enviar" >Completar Registro<i class="fas fa-user-check"></i> </button>
            </form>
    </div>
        <div class="pregunta">
         <p class="registro  uk-text-center">¿Ya tenés una cuenta? ,<br> <a class="marron" href="ingresar">Solo tenés que ingresar para comenzar a comprar </a></a></p>
        </div>
     </div> 
     
     <script>
         function Validar__registro(nombre,apellido,email,password,celular,domicilio,ciudad,codPostal)
        {
            var registro = {'nombre':nombre,'apellido':apellido,'email':email,'password':password,'celular':celular,'domicilio':domicilio,'ciudad':ciudad,'codPostal':codPostal};
            $.ajax({
                url: "registro.php",
                type: "POST",
                data: registro,
                success: function(resp){
                $('#resultado__registro').html(resp)
                }       
            });
        }
        </script>
     </script>
    </body> 
</html>



