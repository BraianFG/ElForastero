
 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
<header id="header">
           <a class="navTitulo" href="index2"><?php echo $negocio['nombre'] ?></a>
            <nav class="main">
                <ul>
                      <?php
                      $usuario = "SELECT `nombre` FROM `usuarios` WHERE `id` ='$id';";     
                      $resultados2 = mysqli_query($conn,$usuario);          
                            while($usuario= mysqli_fetch_array($resultados2)){
                       ?> 

                     <a id="user2" href="#user2" title="ir a gestion de usuarios" uk-toggle><p class="main__texto-texto"><?php echo $usuario['nombre']?></p></a></li>
                       <?php
                          }
                       ?> 
                </ul>       
            </nav>
        </header>
    <?php 
        }
    ?>
    
<?php include"panel2.php" ?>
  