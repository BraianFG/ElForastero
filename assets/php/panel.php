<div id="user" uk-modal>
         <div class="uk-modal-dialog">
           <button class="uk-modal-close-default" type="button" uk-close></button> 
            <div class="modal__header">Ingresar</div>  
            
             <section>
                <ul class="actions stacked">
                    <li class="botones"><a href="ingresar" title="ingresar" class="button primary large fit">Iniciar Sesión</a></li>
                    <li class="botones"><a href="registrarse" title="registrarse" class="button large fit"> Registrarse </a></li>
                    </ul>
            </section>      
        </div>
    </div>
    
   

<div id="info" uk-modal>
   <div class="uk-modal-dialog">
     <?php
          $negocio = "SELECT * FROM negocio" ;     
          $resultados = mysqli_query($conn,$negocio);          
         ?> 
       <?php
          while($negocio= mysqli_fetch_array($resultados)){
        ?>  
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Acerca de <?php echo $negocio['nombre']?></div>
        <div class="uk-modal-body">
             <h2 class="info__titulo"><img class="info__logo" src="images/<?php echo $negocio['logo'] ?>"><?php echo $negocio['nombre'] ?></h2>
              <p class="info__subtitulo"><?php echo $negocio['descripcion'] ?></p>
              <p class="info__descripcion"><?php echo $negocio['info']?> </p>
        <?php
                }
        ?>
    </div>
</div>    
</div>
    