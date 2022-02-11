<?php
 include '../database.php';
?>
<div id="totalPedido" class="uk-container  uk-container-large wrap">
 <header class="caption"><i class="fas fa-tags"></i>Total en pedidos</header>    
    <div class="uk-overflow-auto">  
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>UsuarioID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Total</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT * FROM `totalPedido`" ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['0'] ?></td>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
                   <td><?php echo $mostrar_productosp1['2'] ?></td>
                   <td><?php echo $mostrar_productosp1['3'] ?></td>
                   <td><?php echo $mostrar_productosp1['4'] ?></td>
                   <td><?php echo '$ ',$mostrar_productosp1['5'] ?></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
            </table>
 </div>    
</div>    
           

