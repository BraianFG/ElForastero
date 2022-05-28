<?php
   include 'database.php';
    session_start();
    if (isset($_SESSION["id"])){
      $id = $_SESSION["id"];
    header('Location: index2');
    }
?>
    <?php include "assets/php/head.php"  ?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include "assets/css/style.php" ?>
   <?php include "assets/php/navbar4.php" ?>
         <?php 
          include 'database.php';
          $admin = "SELECT * from negocio  " ;     
          $result2 = mysqli_query($conn,$admin);          
          ?> 
         
         <?php
           while($mostrar_admin=mysqli_fetch_array($result2)){
         ?>
      <p id="error"></p> 
   <div class="login__recuadro">    
      <div class="title">Inicio de sesión</div>
         <form class="registro" action="return false" onsubmit="return false">
             <img class="registro__logo" src="<?php echo '/images/',$mostrar_admin['logo'] ?> ">
             <label class="datos"><i class="fas fa-envelope"></i> Correo Electrónico</label>
               <input class="compradores" id="email" name="email" type="email" placeholder="Ingrese correo electrónico" value="" required maxlenght="90" autocomplete>
               <label class="datos"><i class="fas fa-key"></i> Contraseña</label>
               <input class="compradores" id="password" name="password" type="password" placeholder="Ingrese contraseña" value="" required minlength="8" maxlength="15" autocomplete>
            <button  onclick="Validar(document.getElementById('email').value, document.getElementById('password').value);"  class="button primary compradores">Ingresar <i class="fas fa-sign-in-alt"></i></button>
        </form>
      <?php
          }
        ?>   
   </div>
      
    <div class="pregunta">
         <p class="registro uk-text-center">¿Todavía no tenés una cuenta?<br> <a class="marron" href="registrarse">Registrate para comenzar a comprar</a></a></p>
     </div>
        
      <script>
                function Validar(email, password)
        {
            $.ajax({
                url: "login.php",
                type: "POST",
                data: "email="+email+"&password="+password,
                success: function(resp){
                 $('#error').html(resp)
                }      
            });
        }
    </script>
             <?php include "assets/js/Google-Analytics.php" ?>
             <?php include 'assets/css/main.php' ?>
             <?php include 'assets/js/script.php'?>
    </body> 
</html>