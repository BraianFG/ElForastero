 <div id="usuarios" class="uk-container  uk-container-large wrap">
      <header class="caption"> <i class="fas fa-users"> </i>Visitas</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>N°</th>
                <th>IP</th>
                <th>Página</th>
                <th>Navegador</th>
                <th>Fecha</th>
                <th>Hora</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT  `fecha`,`ip`,`hora`,`num`,`pais`,`pagina`,`navegador`,`referido` FROM `visitas`  GROUP BY `ip`,`pagina` ORDER BY `fecha` , `hora` DESC;" ;     
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["num"] ?></td>
                   <td><?php echo $mostrar_productosp1["ip"] ?></td>
                   <td><?php echo $mostrar_productosp1["pagina"] ?></td>
                   <td><?php echo $mostrar_productosp1["navegador"] ?></td>
                   <td><?php echo $mostrar_productosp1["fecha"] ?></td>
                   <td><?php echo $mostrar_productosp1["hora"] ?></td>
              </tr>
            </tbody>
        </div>
    </div>
</div>    
  <?php
 }
?>  
            </table>

   </div>
</div>



