<?php
   include 'database.php';
    session_cache_limiter('private');
    $cache_limiter = session_cache_limiter();
    session_cache_expire(1);
    $cache_expire = session_cache_expire();
    session_start();
?>
    <?php include "assets/php/head.php"  ?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include "assets/css/style.php" ?>
   <?php include "assets/php/navbar4.php" ?>
      <p id="error"></p> 


     <div class="uk-position-center wrapp">
  <div class="uk-card uk-card-default ">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
            </div>
            <div class="uk-width-expand">
                <p class="uk-margin-remove-bottom">Recuperar contraseña</p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
         <form  action="return false" onsubmit="return false">
             <label class="datos"><i class="fas fa-envelope"></i>Nueva contraseña</label>
                            <input class="compradores" id="password" name="password" type="password" placeholder="Ingrese contraseña" value="" minlength="8" maxlength="15" autocomplete><p id="ver">Ver</p>

    </div>
    <div class="uk-card-footer">
                       <button  onclick="Validar();"  class="button primary compradores">Ir<i class="fas fa-sign-in-alt"></i></button>                      
        </form>
    </div>
</div> 
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
        function Validar(password)
        {
            $.ajax({
                url: "assets/php/recuperarform.php",
                type: "POST",
                data: "&password="+password,
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