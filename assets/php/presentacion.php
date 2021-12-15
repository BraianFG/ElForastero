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
                <a href="#" class="logo"><img src="<?php echo $negocio['logo'] ?>" alt="" /></a>
                <header>
                    <h2 class="titulo"><?php echo $negocio['nombre'] ?></h2>
                    <p><?php echo $negocio['descripcion'] ?></p>
                </header>
            </section>


            <!-- Mini Posts -->
     <section>
         <div uk-alert>
        <a class="uk-alert-close" uk-close></a>
            <p class="panel__texto"><i class="fas fa-bullhorn"></i> <?php echo $negocio['alert'] ?>
        </div>
                
<?php 
    }
?>    
