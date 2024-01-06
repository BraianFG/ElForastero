<?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
          
<header id="header">
            <a href="/" class="navTitulo"><?php echo $negocio['nombre'] ?></a>
            <nav class="main" role="presentation">
                <ul>
                      <?php
                      $usuario = "SELECT `nombre` FROM `usuarios` WHERE `id` ='$id';";     
                      $resultados2 = mysqli_query($conn,$usuario);          
                            while($usuario= mysqli_fetch_array($resultados2)){
                       ?> 

                       <li><a href="#user2" uk-toggle><p class="main__texto"><?php echo $usuario['nombre']?></p></a></li>
                       <?php
                          }
                       ?>  
                     <li class="main">
                         <a href="resumen" ><i class="fa-shopping-cart">m</i></a>
                     </li>
                     <?php
                      $usuarios = "SELECT * FROM `totalCarrito` WHERE `UsuarioID` ='$id';";     
                      $resultados3 = mysqli_query($conn,$usuarios);          
                            while($usuarios= mysqli_fetch_array($resultados3)){
                      ?> 
    
                           <li>
                                <a href="resumen" id="resumen"><?php echo '$',$usuarios['total']?></a>
                            </li>
                             
                    
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

     <!--- estilos --->
       <?php include "assets/css/main.php" ?> 

