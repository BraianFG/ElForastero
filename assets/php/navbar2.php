
 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
<header id="header">
           <a class="navTitulo" href="/"><?php echo $negocio['nombre'] ?></a>
            <nav class="main" role="presentation">
                <ul>
                    
                      <?php
                      session_start();
                      if(isset($_SESSION['id'])){
                      $usuario = "SELECT `nombre` FROM `usuarios` WHERE `id` ='$id';";     
                      $resultados2 = mysqli_query($conn,$usuario);          
                            while($usuario= mysqli_fetch_array($resultados2)){
                       ?> 

                     <a class="user2" href="#user2" title="ir a gestion de usuarios" uk-toggle><p class="main__texto-texto"><?php echo $usuario['nombre']?></p></a></li>
                     <?php include"panel.php" ?>

                       <?php
                          }
                       ?> 
                          <?php
                    if(!isset($_SESSION['id'])){
                        $negocio = 'SELECT * FROM negocio' ;     
                      $resultados = mysqli_query($conn,$negocio);          
                            while($negocio= mysqli_fetch_array($resultados)){
                       ?> 
                                <a href="index" class="navTitulo" title="su nombre es <?php echo $negocio['nombre'] ?>"><?php echo $negocio['nombre'] ?></a>
                        <?php 
                            }
                    }
                    }
                       ?>    
                </ul>       
            </nav>
        </header>
    <?php 
        }
    ?>
