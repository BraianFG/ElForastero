 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
<header id="header">
            <h1><a href="index2"><?php echo $negocio['nombre'] ?></a></h1>
            <nav class="main">
                <ul>
                       <li><a id="user2" href="#user2" class="fas fa-user" style="margin-top:1.3em;outline:0" uk-toggle><i class="fas fa-user"></i></a></li>
                </ul>
            </nav>
        </header>
    <?php 
        }
    ?>
    
<?php include"panel2.php" ?>
  