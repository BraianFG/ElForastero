 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
   <header id="header">
            <h1><a href="#"><?php echo $negocio['nombre'] ?></a></h1>
                   <?php
                      $usuario = "SELECT `nombre` FROM `admin` WHERE `id` ='$id_admin';";     
                      $resultados2 = mysqli_query($conn,$usuario);          
                            while($usuario= mysqli_fetch_array($resultados2)){
                       ?> 

                      <a id="user2" href="#user2" title="ir a gestion de usuarios" uk-toggle><p class="main__texto-texto"><?php echo $usuario['nombre']?></a>
                       <?php
                          }
                       ?>

    </header>
    <?php 
        }
    ?>
    
<?php include"panel2.php" ?>
  

