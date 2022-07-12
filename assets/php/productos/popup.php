<div id="<?php echo 'abc__',$productosp1['id'] ,$productosp1['modal1'] ?>" uk-modal>
     <div class="uk-modal-dialog">
     <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
     <button class="uk-modal-close-default" type="button" uk-close></button>
     <div uk-slider="center: true">
       <ul class="uk-slider-items uk-grid">
        <li>
            <div class="uk-panel">
                <img class="image__modal" onerror="this.style.display='none'" src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" width="400" height="600" alt="images/<?php echo $productosp1['imagen'] ?>">
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
        <li>
            <div class="uk-panel">
                <img class="image__modal" onerror="this.style.display='none'" src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen01'] ?>" width="400" height="300" alt="images/<?php echo $productosp1['imagen01'] ?>">
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
        <li>
            <div class="uk-panel">
                <img class="image__modal" onerror="this.style.display='none'" src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen02'] ?>" width="400" height="600" alt="images/<?php echo $productosp1['imagen02'] ?>">
                <div class="uk-position-center uk-panel"></div>
            </div>
        </li>
        </ul>
        
       <div class="modal__botones popup">
          <a class="button__modal borrar borrar__carrito " uk-slider-item="previous"> <i class="fa fa-arrow-left"></i>Anterior</a>
          <a  class="button__modal agregar agregar__carrito"  uk-slider-item="next" >Siguiente <i  class="fa fa-arrow-right"> </i> </a>
       </div>   
     </div>
     </div>
</div>
         