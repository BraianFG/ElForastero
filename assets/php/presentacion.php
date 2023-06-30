 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);        
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
            <!-- Intro -->
            <section id="intro">
              <a href="/" class="logo" title="ir a página principal"><img src="images/<?php echo $negocio['logo'] ?>"  width="100%" height="100%"  alt="logo" /></a>
                <div class="header">
                    <a href="/" title="ir a página principal"  class="titulo"><h2><?php echo $negocio['nombre'] ?></h2></a>
                    <a href="/" title="ir a página principal"><p><?php echo $negocio['descripcion'] ?></p></a>
                </div>
            </section>


            <!-- Mini Posts -->
         <section class="uk-alert">
            <p> <?php echo $negocio['alert'] ?></p>
        </section>
                
<?php 
    }
?>    
