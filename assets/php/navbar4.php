 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
<nav id="header" role="presentation">
            <a href="index" class="navTitulo" title="su nombre es <?php echo $negocio['nombre'] ?>"><?php echo $negocio['nombre'] ?></a>
        </nav>
    <?php 
        }
    ?>
    
