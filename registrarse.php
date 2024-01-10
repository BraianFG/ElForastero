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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
</head>    
<body>
    <?php include "visitas.php" ?>
   <?php include "assets/php/navbar4.php" ?> 
   <?php include 'assets/css/main.php' ?> 
 <div class="uk-container uk-container-xsmall wrapp">
    <div class="uk-card uk-card-default   wrap">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-zgrid>
            <div class="uk-width-expand">
                <p class="uk-margin-remove-bottom">Registro</p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
                <form  method="POST" action="return false" onsubmit="return false">
             <label class="datos"><i class="fas fa-user"></i> Nombre (NO usar símbolos y/o números)</label>
               <input  minlength="3" class="compradores" id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" value="" >
                <label class="datos"> <i class="fas fa-user"></i> Apellido (NO usar símbolos y/o números)</label>
                <input   minlength="3" id="apellido" name="apellido" type="text" placeholder="Ingrese su apellido" value="">
             <label class="datos"><i class="fas fa-envelope"></i> Correo Electrónico</label>    
               <input  id="email" name="email" type="email" placeholder="Ingrese correo electrónico" value="" autocomplete="off">
               <label class="datos"><i class="fas fa-key"></i> Contraseña (NO MENOS DE 8 CARACTERES)</label> 
               <input  id="password" name="password" minlength="8" maxlength="15" type="password" placeholder="Ingrese contraseña" value="" autocomplete="off">
               <label class="datos"><i class="fas fa-phone"></i> Celular (No usar +54,15,0,9 o espacios)</label> 
               
           <?php $productosp1 = "SELECT * FROM localidad" ;     
              $result3 = mysqli_query($conn,$productosp1);
               while($mostrar_productosp1 = mysqli_fetch_array($result3)){
           ?>        
                <input class="compradores" id="celular" name="celular" type="tel" maxlength="17" placeholder="EJ. 2346123456" value="<?php echo $mostrar_productosp1['codArea']?>" >
            <?php
               }
            ?>   
             <label class="datos"><i class="fas fa-directions"></i> Domicilio</label>    
               <input minlength="3" class="compradores" id="domicilio" name="domicilio" type="text" placeholder="EJ. Laprida 123" value="">
              
         <label class="datos"> <i class="fas fa-city"></i> Localidad (NO usar símbolos y/o números) </label>   
          <?php $productosp1 = "SELECT * FROM localidad" ;     
              $result3 = mysqli_query($conn,$productosp1);
               while($mostrar_productosp1 = mysqli_fetch_array($result3)){
           ?> 
                <input class="compradores" id="ciudad" type="text" name="ciudad" value="<?php echo $mostrar_productosp1['localidad'] ?>">
            <?php
               }
            ?>

            <label class="datos"><i class="fas fa-mail-bulk"></i> Código Postal (Sólo escribír los números)</label> 
           <?php $productosp1 = "SELECT * FROM localidad" ;     
              $result3 = mysqli_query($conn,$productosp1);
              
               while($mostrar_productosp1 = mysqli_fetch_array($result3)){
             ?> 
             <input minlength="4" maxlength="4" class="compradores_num" id="codPostal" name="codPostal" type="number" value="<?php echo $mostrar_productosp1['codPostal'] ?>">
            <?php
               }
            ?>
            </select>  
    </div>
    <div class="uk-card-footer">
                    <button class="button primary compradores" onclick="Validar__registro(document.getElementById('nombre').value, document.getElementById('apellido').value,document.getElementById('email').value,document.getElementById('password').value,document.getElementById('celular').value,document.getElementById('domicilio').value,document.getElementById('ciudad').value,document.getElementById('codPostal').value);" value="enviar" >Completar Registro<i class="fas fa-user-check"></i> </button>
            </form>
           
     </div> 
    </div>
                  <div class="uk-card uk-card-default uk-card-body">
         <p class="uk-text-center">¿Ya tenés una cuenta? ,<br> <a class="marron" href="ingresar">Solo tenés que ingresar para comenzar a comprar </a></a></p>
        </div>
        <div id="resultado__registro">
            
        </div>
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



