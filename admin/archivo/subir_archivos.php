<div id="subir_imagenes" class="uk-container  uk-container-large wrap">
    <div class="modal__header"> <i class="fas fa-cloud-upload-alt"></i> Suba la imagenes</div> 
    <form class="upload" method="post" action="archivo/subir.php" enctype="multipart/form-data">
        <label>Suba las imagenes acá</label>
           <input id="#archivo" type="file"  multiple="" onchange="cambiar()" name="archivo" class="archivo" data-classButton="button primary" data-input="false">
           <div id="info"></div>
            <button type="submit" class="button primary "> <i class="fas fa-upload "></i> Subir imagenes</button>
        </div>
    </form>
</div>
