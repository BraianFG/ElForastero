 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);        
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
          
        <div id="main">
            <!-- Intro -->
            <section id="intro">
                <a href="#" class="logo"><img height="80" width="100 " src="images/<?php echo $negocio['logo'] ?>" alt="" /></a>
                <div class="header">
                    <h2 class="titulo"><?php echo $negocio['nombre'] ?></h2>
                    <p><?php echo $negocio['descripcion'] ?></p>
                <div class="header">
            </section>


            <!-- Mini Posts -->
         <div class="uk-alert">
            <p class="panel__texto"><i class="fas fa-bullhorn"></i> <?php echo $negocio['alert'] ?></p>
        </div>
                
<?php 
    }
?>    
