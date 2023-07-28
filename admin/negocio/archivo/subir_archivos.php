<div id="subir_imagenes" class="uk-container  uk-container-large wrap">
    <div class="modal__header"> <i class="fas fa-cloud-upload-alt"></i> Suba sus archivos</div> 
    <form class="upload" method="post" action="./negocio/archivo/subir.php" enctype="multipart/form-data">
        <label>Subír imagen o documentación </label>
           <input id="#archivo" type="file"  multiple=""  name="archivo[]" id="archivo[]" class="archivo" data-classButton="button primary" data-input="false" multiple required>
           <div id="info"></div>
            <button type="submit" class="button primary "> <i class="fas fa-upload "></i> Subír</button>
        </div>
    </form>
</div>
