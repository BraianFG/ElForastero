<?php
   include 'database.php';
    session_start();
    if (isset($_SESSION["id"])){
      $id = $_SESSION["id"];
    header('Location: /');
    }
?>
    <?php include "assets/php/head.php"  ?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include "assets/css/style.php" ?>
   <?php include "assets/php/navbar2.php" ?>
      <p id="error"></p> 
      
<div class="uk-container uk-container-small uk-position-center wrapp">
  <div class="uk-card uk-card-default ">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
            </div>
            <div class="uk-width-expand">
                <p class="uk-margin-remove-bottom">Inicio de sesión</p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
         <form  action="return false" onsubmit="return false">
             <label class="datos"><i class="fas fa-envelope"></i> Correo Electrónico</label>
               <input class="compradores" id="email" name="email" type="email" placeholder="Ingrese correo electrónico" value="" maxlenght="90" autocomplete>
               <label class="datos"><i class="fas fa-key"></i> Contraseña</label>
              <div class="contrasenia">
                 <input class="compradores" id="password" name="password" type="password" placeholder="Ingrese contraseña" value="" minlength="8" maxlength="15" autocomplete><p id="ver">Ver</p>
      
              </div> 
    </div>
    <div class="uk-card-footer">
                       <button  onclick="Validar(document.getElementById('email').value, document.getElementById('password').value);"  class="button primary compradores">Ingresar <i class="fas fa-sign-in-alt"></i></button>
                       
        </form>
    </div>
</div> 
       <div class="uk-card uk-card-default uk-card-body">
                <p class="uk-text-center">¿Todavía no tenés una cuenta?<br> <a class="marron" href="registrarse">Registrate para comenzar a comprar</a></a></p>
                <p class="uk-text-center">¿Olvidadeste tu contraseña? ,<a href="recuperar">Recuperarla</a></p>
         </div>
</div>
<div id="error"></div>

      <?php include "visitas.php" ?>  
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
                    
            $.ajax({
                url: "login2.php",
                type: "POST",
                data: "email="+email+"&password="+password,
                success: function(resp){
                 $('#error').html(resp)
                }      
            });
        }
    </script>
             <?php include 'assets/css/main.php' ?>
             <?php include 'assets/js/script.php'?>
    </body> 
</html>