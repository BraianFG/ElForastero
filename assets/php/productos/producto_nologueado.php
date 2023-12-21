<div class="uk-card uk-card-default uk-width-1-5@m uk-container" data-id="<?php echo $productosp1['0'] ?>"  id="<?php echo $productosp1['id'] ?>" >
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <p><?php echo $productosp1['nombre'] ?><a id="favoritos_<?php echo $productosp1['0'] ?>"></p>
            </div>
        </div>
    </div>
        <div class="uk-card-media-top">
         <a href="#<?php echo 'abc__',$productosp1['id'] ,$productosp1['modal1'] ?>" title="ver imagen" uk-toggle class="image"> <img class="lazyload card-img-top" src="images/blanco.webp"data-src="https://img.gs/jhcplzwzdm/3x,90x90,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" alt="<?php echo  $productosp1['nombre'] ?>" class="card-img-top" id="imagen_<?php echo $productosp1['id'] ?>"  width="90" heigh="90" onerror="this.src='images/blanco.webp';"></a>
    </div>

    <div class="uk-card-body">
       <p data-precio="<?php echo $productosp1['precio'] ?>"><?php echo '$',$productosp1['precio'] ?></p>
        <p><?php echo $productosp1['descripcion'] ?></p>
     </div>     
    <div class="uk-card-footer uk-position-bottom uk-flex-inline-nolog">
         <p class="uk-text-meta "><time datetime="<?php echo $productosp1['fecha2'] , ' ', $productosp1['hora2'] ?>"><?php echo $productosp1['fecha2'] , ' ', $productosp1['hora2'] ?></time></p>
            <div  class="uk-flex-inline">   
               <img src="icons/heart-regular.svg" class="icon-heart" id="reaccion_<?php echo $productosp1['0'] ?>" width="10" height="10" alt="reacionar"><p id="reacciones_<?php echo $productosp1['0'] ?>"><?php echo $productosp1['14'] ?></p>
           </div>

    </div>
</div>
