 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
<header id="header">
            <h1><a href="#"><?php echo $negocio['nombre'] ?></a></h1>
            <nav class="main">

            </nav>
        </header>
    <?php 
        }
    ?>
    
