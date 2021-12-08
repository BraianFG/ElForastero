<div class="uk-container  uk-container-large wrap ">
   <div class="modal__header"> <i class="fas fa-cogs"></i> Gestionar imagenes</div>
           <ul class="lista fondo">
             <li class="lista__item"><a href="#eliminar__imagen"  uk-toggle class="button primary"> <i class="fas fa-trash "></i> Eliminar</a></p></li>
              <li class="lista__item"> <a href="#editar__imagen"  uk-toggle class="button primary"> <i class="fas fa-pen"></i> Editar</a></p></li>
           </ul>
</div>

 <div id="editar__imagen" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header"> Editar nombre de imagen</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="archivo/archivos_editar.php">
         <input name="nombre1" type="text" placeholder="Ingrese el nombre orginal de la imagen" value="" >   
            <input name="nombre2" type="text" placeholder="Ingrese el nombre nuevo" value="" >
        </div>

        <div class="uk-modal-footer uk-text-right">
             <button type="submit" class="button primary compradores" value="editar_immagen"> <i class="fas fa-pen"></i> Confirmar</button>
            </form>
        </div>
    </div>
</div>

 <div id="eliminar__imagen" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Eliminar imagen</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="archivo/archivos_eliminar.php">
         <input name="ImagenEliminar" type="text" placeholder="Ingrese el nombre de la imagen a eliminar" value="" > 
        </div>
        <div class="uk-modal-footer uk-text-right">
           <button type="submit" class="button primary compradores" value="eliminar_imagen"> <i class="fas fa-trash"></i> Confirmar</button>
            </form>
        </div>
    </div>
</div>
                