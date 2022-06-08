<?php
    include 'database.php';
    session_start();
    if (!isset($_SESSION["id_admin"])){
    }else{
     header('Location: index');
    }
    
?>
<html>
<head>
      <?php include "assets/php/head.php"  ?>
</head>      
<body>  
   <?php include "assets/php/navbar3.php" ?>
     <div class="registrarse__recuadro">
         <?php $admin = "SELECT * from negocio  " ;     
          $result2 = mysqli_query($conn,$admin);          
          ?> 
         
         <?php
           while($mostrar_admin = mysqli_fetch_array($result2)){
         ?>

         <div class="header"><i class="fas fa-user-cog"></i> Administración</div>
         <form class="registro" method="post" action="login.php">
             <img class="registro__logo" src="<?php echo '../../images/',$mostrar_admin['logo'] ?> ">
             <label class="datos"> <i class="fas fa-envelope"></i> Correo Electronico</label>
               <input class="compradores" name="email" type="text" placeholder="Ingrese correo electrónico" value="" required autocomplete>
             <label class="datos"><i class="fas fa-key"></i> Contraseña</label>
              <input class="compradores" name="password" minlength="8" maxlength="15" type="password" placeholder="Ingrese contraseña" value="" required autocomplete>
            <button type="submit" class="button primary compradores " value="login" >Ingresar <i class="fas fa-sign-in-alt"></i></button>
         </form>
       </div>
       <?php
           }
       ?>
    </div> 
    
    <?php include 'assets/css/main.php' ?>
    </body> 
</html>


