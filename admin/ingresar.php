<?php
    require '../database.php';
    session_start();
    if (!isset($_SESSION["id_admin"])){
    }else{
     header('Location: index');
    }
    
?>
<html>
<head>
      <?php include "assets/php/head.php"  ?>
        <?php include 'assets/css/main.php' ?>
        <?php include "assets/css/stlye.php" ?>
        <?php include "assets/js/script.php" ?>
        
        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
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
         <form class="registro" method="POST" action="return false" onsubmit="return false">
             <img class="registro__logo" src="<?php echo '../../images/',$mostrar_admin['logo'] ?> ">
             <label class="datos"> <i class="fas fa-envelope"></i> Correo Electronico</label>
               <input id="email" class="compradores" name="email" type="text" placeholder="Ingrese correo electrónico" value="" required autocomplete>
             <label class="datos"><i class="fas fa-key"></i> Contraseña</label>
              <input id="password" class="compradores" name="password" minlength="8" maxlength="15" type="password" placeholder="Ingrese contraseña" value="" required autocomplete>
            <button onclick="Validar(document.getElementById('email').value, document.getElementById('password').value);" class="button primary compradores " value="login" >Ingresar <i class="fas fa-sign-in-alt"></i></button>
         </form>
         <div id="resultado"></div>
       </div>
       <?php
           }
       ?>
    </div> 
   <script>
         function Validar(email, password)
        {
            $.ajax({
                url: "login.php",
                type: "POST",
                data: "email="+email+"&password="+password,
                success: function(resp){
                $('#resultado').html(resp)
                }       
            });
        }
   </script>
    </body> 
</html>


