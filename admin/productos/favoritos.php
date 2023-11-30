<div id="favoritos" class="uk-container  uk-container-large wrap">
 <header class="caption"><i class="fas fa-store"> </i>Favoritos</header>        
    <div class="uk-overflow-auto"> 
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>N°</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>IMAGEN</th>
                <th>N° DE USUARIO</th>
              </tr>
        </thead>        
        <?php $productosp1 = 'SELECT * FROM `favoritos`' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['id'] ?></td>
                   <td><?php echo $mostrar_productosp1['nombre'] ?></td>
                   <td><?php echo '$',$mostrar_productosp1['precio'] ?></td>
                   <td><a href="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen'] ?>" target="_Blank"><img class="img__producto"  src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen'] ?>" lazzy="loading" onerror="this.src='../../images/blanco.webp'" /></a></td>
                    <td><?php echo $mostrar_productosp1['usuarioID'] ?></td> 
            </tbody>
            
  <?php
 }
?>  
</table>
</div>
