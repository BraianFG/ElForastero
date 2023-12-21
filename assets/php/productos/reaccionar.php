        <script defer>
        document.querySelector("#reaccion_<?php echo $productosp1['0'] ?>").addEventListener("click",presionar);
        
        let iniciar_<?php echo $productosp1['0'] ?> = <?php echo $productosp1['14'] ?>;
        
        function presionar(){
            iniciar_<?php echo $productosp1['0'] ?> = iniciar_<?php echo $productosp1['0'] ?>  + 1;
            document.querySelector("#reacciones_<?php echo $productosp1['0'] ?>").innerHTML= iniciar_<?php echo $productosp1['0'] ?>;
            
            localStorage.setItem("idproducto",<?php echo $productosp1['0'] ?>);
            
            
            $.post( "assets/php/productos/reacciones.php", { idproducto: localStorage.getItem('idproducto'), cantidad: iniciar_<?php echo $productosp1['0'] ?>} );
            $.post( "assets/php/productos/actualizarReacciones.php", { idproducto: localStorage.getItem('idproducto'), cantidad: iniciar_<?php echo $productosp1['0'] ?> } );
        }

        // SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` LIMIT 20;
    </script>
    