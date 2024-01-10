

<div class="uk-card uk-card-default uk-width-1-5@m uk-container" data-id="<?php echo $productosp1['0'] ?>"  id="<?php echo $productosp1['id'] ?>" >
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <p><?php echo $productosp1['nombre'] ?><a id="favoritos_<?php echo $productosp1['0'] ?>"></p>
            </div>
        </div>
    </div>
        <div class="uk-card-media-top">
        <img class="lazyload card-img-top" src="images/blanco.webp"data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" alt="<?php echo  $productosp1['nombre'] ?>" class="card-img-top" id="imagen_<?php echo $productosp1['id'] ?>"  width="150" heigh="150" onerror="this.src='images/blanco.webp';">
    </div>

    <div class="uk-card-body">
       <p data-precio="<?php echo $productosp1['precio'] ?>"><?php echo '$',$productosp1['precio'] ?></p>
                <p class="uk-text-meta"><p><?php include 'botonFavorito.php'?></p></p>
     </div>     
</div>