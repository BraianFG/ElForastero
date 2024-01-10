 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
<header id="header">
     <a class="navTitulo" href="/"><?php echo $negocio['nombre'] ?></a>
     <nav role="presentation">
         <ul>
              <li class="main">
                <a href="#user" title="ir a gestion de usuarios" uk-toggle ><p>Ingresar</p></a>
              </li>
         </ul>
     </nav>
</header>     
 <?php
        }
 ?>
<?php include"panel.php" ?>
<?php include"menu.php" ?>

     <!--- estilos --->
       <?php include "assets/css/main.php" ?> 
