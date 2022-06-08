 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
<header id="header">
            <h1><a href="#"><?php echo $negocio['nombre'] ?></a></h1>
            <nav class="main">
                <ul>
                       <li><a href="#user2" class="fas fa-user" uk-toggle><i class="fas fa-user"></i></a></li>
                </ul>
            </nav>
        </header>
    <?php 
        }
    ?>
    
<?php include"panel2.php" ?>
  

