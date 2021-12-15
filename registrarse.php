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
</head>    
<body>
   <?php include "assets/php/navbar4.php" ?> 
   <?php include 'assets/css/main.php' ?> 
    
    <div class="registrarse__recuadro">
        <div class="title">Registro</div>
         <form class="registro" method="post" action="registro.php">
             <label class="datos"><i class="fas fa-user"></i> Nombre</label>
               <input class="compradores" name="nombre" type="text" placeholder="Ingrese su nombre" value="" required >
                <label class="datos"> <i class="fas fa-user"></i> Apellido</label>
                <input class="compradores" name="apellido" type="text" placeholder="Ingrese su apellido" value="" required>
             <label class="datos"><i class="fas fa-envelope"></i> Correo Electrónico</label>    
               <input class="compradores" name="email" type="email" placeholder="Ingrese correo electrónico" value="" required autocomplete="off">
               <label class="datos"><i class="fas fa-key"></i> Contraseña</label> 
               <input class="compradores" name="password" minlength="8" maxlength="15" type="password" placeholder="Ingrese contraseña" value="" required autocomplete="off">
               <label class="datos"><i class="fas fa-phone"></i> Celular</label> 
                <input class="compradores" name="celular" type="tel" maxlength="18" placeholder="Ingrese su celular" value="" required>
             <label class="datos"><i class="fas fa-directions"></i> Domicilio</label>    
               <input class="compradores" name="domicilio" type="text" placeholder="Ingrese el domicilio a enviar" value="" required>
              <label class="datos"> <i class="fas fa-city"></i> Ciudad</label>  
              <input class="compradores" name="ciudad" type="text" placeholder="Ingrese la ciudad a enviar" value="" required>
              <label class="datos"><i class="fas fa-mail-bulk"></i> Código Postal</label> 
             <input class="compradores" name="codPostal" maxlength="6" type="text" placeholder="Ingrese código postal" value="" >
            <button type="submit" class="button primary compradores" value="enviar" >Completar Registro<i class="fas fa-user-check"></i> </button>
            </form>
    </div>
        <div class="registrarse__recuadro pregunta">
         <p class="registro  uk-text-center">¿Ya tenés una cuenta? ,<br> <a class="marron" href="ingresar">Solo tenés que ingresar para comenzar a comprar </a></a></p>
        </div>
     </div> 

    </body> 
</html>



