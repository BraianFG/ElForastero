<ul class="uk-container uk-container-xlarge"><li class="productos slider"><?php
$productos =
    "SELECT DISTINCT`productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` LIMIT 20 ; ";
$resultp1 = mysqli_query($conn, $productos);
while ($productosp1 = mysqli_fetch_array($resultp1)) {
 include "assets/php/productos/producto.php" ;
     include "assets/php/productos/popup.php";
     include "assets/php/productos/reaccionar.php";

    ?>
    
<?php
} ?>
</li></ul>

<label for="ver más" class="datos" id="ver">Ver más</label>
<div id="resultado2"></div>
     <select id="enviar" name="numero" onchange="ver()" aria-label="select" class="uk-select  uk-input uk-form-width-medium uk-form-small">
        <option value="25">20</option>
        <option value="50">50</option>
        <option value="25">75</option>
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="300">300</option>
        <option value="500">500</option>
        <option value="750">750</option>
        <option value="100">1000</option>
    </select>

<script>
   function ver() {
        // Obtén el valor seleccionado
        var numero = $('#enviar').val();
        // Realiza la petición Ajax
        $.post("assets/php/productos-slider/slider.php", { numero: numero }, function(response) {
            // Maneja la respuesta del servidor
            $('#resultado2').html(response);
        });
                  
            document.querySelector("#enviar").style="display:none";  
            document.querySelector("#ver").style="display:none"; 
    }
    </script>