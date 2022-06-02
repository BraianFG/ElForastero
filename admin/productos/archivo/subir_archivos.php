<div id="subir_imagenes" class="uk-container  uk-container-large wrap">
    <div class="modal__header"> <i class="fas fa-cloud-upload-alt"></i> Suba la imagenes</div> 
    <form class="upload" method="post" action="archivo/subir.php" enctype="multipart/form-data">
        <label>Suba las imagenes acá</label>
           <input id="#archivo" type="file"  multiple=""
            accept="image/png image/jpg, image/svg, image/ico, image/webp, image/jpeg, image/gif "  name="archivo[]" id="archivo[]" class="archivo" data-classButton="button primary" data-input="false" multiple required>
           <div id="info"></div>
            <button type="submit" class="button primary "> <i class="fas fa-upload "></i> Subir imagenes</button>
        </div>
    </form>
</div>
