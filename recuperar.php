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

      <div class="uk-position-center wrapp">
  <div class="uk-card uk-card-default ">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
            </div>
            <div class="uk-width-expand">
                <p class="uk-margin-remove-bottom">Recuperar contraeña</p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
         <form  action="return false" onsubmit="return false">
             <label class="datos"><i class="fas fa-envelope"></i>Recuperar contraseña</label>
               <input class="compradores" id="email" name="email" type="email" placeholder="Ingrese correo electrónico" value="" maxlenght="90" autocomplete>
    </div>
    <div class="uk-card-footer">
                       <button  onclick="Validar();"  class="button primary compradores">Ir<i class="fas fa-sign-in-alt"></i></button>                      
        </form>
    </div>
</div> 
      <?php
            
      ?>
      <script>
      function Validar(){
                $.post( "recuperacion.php", { email:document.getElementById('email').value});
                $.post( "assets/php/recuperarform.php", { email:document.getElementById('email').value});
                alertify.notify("Mensaje enviado al correo electrónico","success",5)
     }
      </script>
             <?php include "assets/js/Google-Analytics.php" ?>
             <?php include 'assets/css/main.php' ?>
             <?php include 'assets/js/script.php'?>
    </body> 
</html>

