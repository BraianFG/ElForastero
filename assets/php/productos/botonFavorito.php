<a id="favoritosQUITAR_<?php echo $productosp1['0'] ?>" type="button" class="button PRIMARY">Quitar</a>

        <script defer>
        document.querySelector("#favoritosQUITAR_<?php echo $productosp1['0'] ?>").addEventListener("click",presionar2);
        
        function presionar2(){
            $.post( "assets/php/productos/eliminarFavorito.php", { 
             idproducto:"<?php echo $productosp1['0'] ?>"
            });
         alertify.notify('Producto fuera de la lista', 'success', 5);
        }

    </script>
    