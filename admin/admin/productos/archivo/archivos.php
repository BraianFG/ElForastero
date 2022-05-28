<div id="gestionar_imagenes" class="uk-container  uk-container-large wrap ">
   <div class="modal__header"> <i class="fas fa-cogs"></i> Gestionar imagenes</div>
           <ul class="lista fondo">
                 <li class="lista__item"><a href="#eliminar__imagen"  uk-toggle class="button primary"> <i class="fas fa-trash "></i> Eliminar</a></p></li>
                <li class="lista__item"> <a href="#editar__imagen"  uk-toggle class="button primary"> <i class="fas fa-pen"></i> Editar</a></p></li>
            </ul>
        </div>    
   </div>

 <div id="editar__imagen" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header"> Editar nombre de imagen</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="POST" action="return false" onsubmit="return false">
        <label class="datos"><i class="fas fa-images"></i>Ingrese nombre de orginial de la imagen</label>      
         <input id="nombre1" name="nombre1" type="text" placeholder="Ingrese el nombre orginal de la imagen" value="" >  
         <label class="datos"><i class="fas fa-edit"></i>Ingrese el nuevo nombre de la imagen</label>
            <input id="nombre2" name="nombre2" type="text" placeholder="Ingrese el nombre nuevo" value="" >
        </div>

        <div class="uk-modal-footer uk-text-right">
             <button onclick="Validar_editar(document.getElementById('nombre1').value, document.getElementById('nombre2').value);" class="button primary compradores" value="editar_immagen"> <i class="fas fa-pen"></i> Confirmar</button>
            </form>
            <div id="resultado"></div>
        </div>
    </div>
</div>
      <script>
            function Validar_editar(nombre1, nombre2)
            {
                $.ajax({
                    url: "archivo/archivos_editar.php",
                    type: "POST",
                    data: "nombre1="+nombre1+"&nombre2="+nombre2,
                    success: function(resp){
                    $('#resultado').html(resp)
                    }       
                });
                alertify.notify('Nombre de la imagen editada correctamente','success',8);
            }
        </script>

 <div id="eliminar__imagen" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Eliminar imagen</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="POST" action="return false" onsubmit="return false">
       <label class="datos"><i class="fas fa-trash"></i>Ingrese el nombre de la imagen a eliminar</label>    <input id="ImagenEliminar" name="ImagenEliminar" type="text" placeholder="Ingrese el nombre de la imagen a eliminar" value="" > 
        </div>
        <div class="uk-modal-footer uk-text-right">
           <button onclick="Validar(document.getElementById('ImagenEliminar').value);" class="button primary compradores" value="eliminar_imagen"><i class="fas fa-trash"></i> Confirmar</button>
            </form>
            <div id="resultado"></div>
        </div>
    </div>
</div>

       <script>
            function Validar(ImagenEliminar)
            {
                $.ajax({
                    url: "archivo/archivos_eliminar.php",
                    type: "POST",
                    data: "ImagenEliminar="+ImagenEliminar,
                    success: function(resp){
                    $('#resultado').html(resp)
                    }       
                });
                alertify.notify('Imagen eliminada correctamente','success',8);
            }
        </script>