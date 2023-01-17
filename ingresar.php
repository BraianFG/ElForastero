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
      <p id="error"></p> 
   <div class="login__recuadro">    
      <div class="title">Inicio de sesión</div>
         <form class="registro" action="return false" onsubmit="return false">
             <label class="datos"><i class="fas fa-envelope"></i> Correo Electrónico</label>
               <input class="compradores" id="email" name="email" type="email" placeholder="Ingrese correo electrónico" value="" maxlenght="90" autocomplete>
               <label class="datos"><i class="fas fa-key"></i> Contraseña</label>
              <div class="contrasenia">
                 <input class="compradores" id="password" name="password" type="password" placeholder="Ingrese contraseña" value="" minlength="8" maxlength="15" autocomplete><p id="ver">Ver</p>
      
              </div> 
                <button  onclick="Validar(document.getElementById('email').value, document.getElementById('password').value);"  class="button primary compradores">Ingresar <i class="fas fa-sign-in-alt"></i></button>
        </form>
   </div>
      
    <div class="pregunta">
         <p class="registro uk-text-center">¿Todavía no tenés una cuenta?<br> <a class="marron" href="registrarse">Registrate para comenzar a comprar</a></a></p>
     </div>
        
      <script>
      
      
     document.querySelector('#ver').addEventListener('click', e => {
    const passwordInput = document.querySelector('#password');
    if (e.target.classList.contains('show')) {
        e.target.classList.remove('show');
        e.target.textContent = 'Ocultar';
        passwordInput.type = 'text';
    } else {
        e.target.classList.add('show');
        e.target.textContent = 'Ver';
        passwordInput.type = 'password';
    }
});
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