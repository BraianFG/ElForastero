<?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
          
<header id="header">
            <a href="/" class="navTitulo"><?php echo $negocio['nombre'] ?></a>
            <nav class="main">
                <ul>
                      <?php
                      $usuario = "SELECT `nombre` FROM `usuarios` WHERE `id` ='$id';";     
                      $resultados2 = mysqli_query($conn,$usuario);          
                            while($usuario= mysqli_fetch_array($resultados2)){
                       ?> 

                       <li><a id="user2" href="#user2" uk-toggle><p class="main__texto"><?php echo $usuario['nombre']?></p></a></li>
                       <?php
                          }
                       ?>  
                    
                    <li class="main">
                        <a href="#menu" uk-toggle ><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
 <?php
   }
?>       
<?php include"panel2.php" ?>
<?php include"menu2.php" ?>

     <!--- estilos --->
       <?php include "assets/css/main.php" ?> 
