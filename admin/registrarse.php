<?php
    include 'database.php';
    session_start();
    if (isset($_SESSION["id_admin"]) && $_SESSION['id_admin'] == 1){
    }else{
     header('Location: index');
    }
    
?>
<html>

<head>
      <?php include"assets/php/head.php"  ?>
</head>    
<body>
   <?php include "assets/php/navbar3.php" ?> 
   <?php include 'assets/css/main.php' ?> 
    
    <div class="registrarse__recuadro">
        <div class="header"><i class="fas fa-users"></i> Registro de invitado</div>
         <form class="registro" method="post" action="registro.php">
               <input class="compradores" name="nombre" type="text" placeholder="Ingrese su nombre" value="" required >
               <input class="compradores" name="email" type="email" placeholder="Ingrese correo electrónico" value="" required autocomplete="off">
               <input class="compradores" name="password" minlength="8" maxlength="15" type="password" placeholder="Ingrese contraseña" value="" required autocomplete="off">
            <button type="submit" class="button primary compradores" value="enviar" >Completar Registro<i class="fas fa-user-check"></i> </button>
            </form>
    </div>
    </body> 
</html>


