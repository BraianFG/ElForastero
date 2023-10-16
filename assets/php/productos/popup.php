
<div id="<?php echo 'abc__',$productosp1['id'] ,$productosp1['modal1'] ?>" uk-modal>
     <div class="uk-modal-dialog">
     <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
     <button class="uk-modal-close-default" type="button" uk-close></button>
     <div uk-slider="center: true">
       <ul class="uk-slider-items uk-grid">
            <div class="uk-panel">
                <img class="image__modal lazyload" width="150" heigh="150" onerror="this.src=' images/blanco.webp'"  src="images/blanco.webp" data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>"  alt="<?php echo $productosp1['nombre'] ?>" >
            </div>

            <div class="uk-panel">
                <img class="image__modal lazyload" width="150" heigh="150"  onerror="this.src='images/blanco.webp'" src="images/blanco.webp" data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen01'] ?>" alt="<?php echo $productosp1['nombre'] ?>" >
            </div>
  
            <div class="uk-panel">
                <img class="image__modal lazyload" width="150" heigh="150" onerror="this.src='images/blanco.webp';" src="images/blanco.webp"  data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen02'] ?>"  alt="<?php echo $productosp1['nombre'] ?>" >
            </div>
        </li>
        </ul>
        
       <div class="modal__botones popup">
          <a href="#" class="button__modal borrar borrar__carrito " uk-slider-item="previous"> Anterior</a>
          <a   href="#" class="button__modal agregar agregar__carrito"  uk-slider-item="next" >Siguiente </a>

         <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

       </div>   
     </div>
     </div>
</div>
