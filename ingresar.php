<?php
   include 'database.php';
    session_start();
    if (isset($_SESSION["id"])){
      $id = $_SESSION["id"];
    header('Location: index2');
    }
?>
      <?php include "assets/php/head.php"  ?>
   <?php include "assets/php/navbar4.php" ?>
  <?php include 'assets/css/main.php' ?> 
    <div class="registrarse__recuadro">
         <?php 
          include 'database.php';
          $admin = "SELECT * from negocio  " ;     
          $result2 = mysqli_query($conn,$admin);          
          ?> 
         
         <?php
           while($mostrar_admin=mysqli_fetch_array($result2)){
         ?>
      </div>
              <div class="title">Inicio de sessión</div>
         <form class="registro" method="post" action="login.php">
             <img class="registro__logo" src="<?php echo $mostrar_admin['logo'] ?> ">
               <input class="compradores" name="email" type="email" placeholder="Ingrese correo electrónico" value="" required maxlenght="90" autocomplete>
               <input class="compradores" name="password" type="password" placeholder="Ingrese contraseña" value="" required minlength="8" maxlength="15" autocomplete>
            <button type="submit" class="button primary compradores " value="login"  >Ingresar</button>
            </form>
      <?php
          }
        ?>   
       </div>
    </div> 
    <div class="registrarse__recuadro pregunta">
         <p class="registro">¿Todavía no tenés una cuenta? ,<br> <a class="marron" href="registrarse">Registrate para comenzar a comprar</a></a></p>
        </div>
     </div>   
    </body> 
</html>