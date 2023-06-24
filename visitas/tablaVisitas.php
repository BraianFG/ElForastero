 
 <header class="caption"> <i class="fas fa-users"> </i>Total de visitas</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>Total</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT  COUNT(`num`) FROM `visitas` " ;
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["COUNT(`num`)"] ?></td>
              </tr>
            </tbody>
        </div>
    </div>
<?php
 }
?>  
            </table>
            
   <header class="caption"> <i class="fas fa-users"> </i>Última visita</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>ciudad</th>
                <th>País</th>
                <th>fecha</th>
                <th>Hora</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `fecha`,`hora`, `ciudad` ,`pais` FROM `visitas` ORDER BY `num` DESC LIMIT 1" ;     
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["ciudad"] ?></td>
                    <td><?php echo $mostrar_productosp1["pais"] ?></td>
                   <td><?php echo $mostrar_productosp1["fecha"] ?></td>
                     <td><?php echo $mostrar_productosp1["hora"] ?></td>
              </tr>
            </tbody>

    </div>
<?php
 }
?>  

 </table>      
 </div>         
 <header class="caption "style="margin-top:1em" > <i class="fas fa-users" class="arreglo"> </i>Países que visitaron</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>Paises</th>
                <th>visitas</th>

              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `pais` , COUNT(`num`) FROM `paises` GROUP BY `pais` ORDER BY COUNT(`num`) DESC;" ;     
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["pais"] ?></td>
                  <td><?php echo $mostrar_productosp1["COUNT(`num`)"] ?></td>

              </tr>
            </tbody>
        </div>
    </div>
<?php
 }
?>  
            </table>

 <header class="caption"> <i class="fas fa-users"> </i>ciudades que visitaron</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>Ciudades</th>
                <th>visitas</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `ciudad` , COUNT(`num`) FROM `ciudades` GROUP BY `ciudad` ORDER BY COUNT(`num`) DESC;";   
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["ciudad"] ?></td>
                    <td><?php echo $mostrar_productosp1["COUNT(`num`)"] ?></td>
              </tr>
            </tbody>
        </div>
    </div>

<?php
 }
?>  

</table>
 
 <header class="caption"> <i class="fas fa-users"> </i>Páginas visitadas</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>páginas</th>
                <th>visitas</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `pagina` , COUNT(`num`) FROM `paginas` GROUP BY `pagina` ORDER BY COUNT(`num`) DESC;";   
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["pagina"] ?></td>
                    <td><?php echo $mostrar_productosp1["COUNT(`num`)"] ?></td>
              </tr>
            </tbody>
        </div>
    </div>

<?php
 }
?>  
 </table>
 </div>
 

 
  <header class="caption" style="margin-top:1em"> <i class="fas fa-users"> </i>Sistema operativo</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>sistema operativo</th>
                <th>visitas</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `so` , COUNT(`num`) FROM `so` GROUP BY `so` ORDER BY COUNT(`num`) DESC;";   
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["so"] ?></td>
                    <td><?php echo $mostrar_productosp1["COUNT(`num`)"] ?></td>
              </tr>
            </tbody>
        </div>
    </div>

<?php
 }
?>  
 </table>
 
  <header class="caption"> <i class="fas fa-users"> </i>¿De dónde viene?</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>referencia</th>
                <th>visitas</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `referido` , COUNT(`num`) FROM `referencia` GROUP BY `referido` ORDER BY COUNT(`num`) DESC;";   
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["referido"] ?></td>
                    <td><?php echo $mostrar_productosp1["COUNT(`num`)"] ?></td>
              </tr>
            </tbody>
        </div>
    </div>

<?php
 }
?>  
 </table>
 </div>
 
   <header class="caption"  style="margin-top:1em"> <i class="fas fa-users"> </i>Direción IP</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>IP</th>
                <th>visitas</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `ip` , COUNT(`num`) FROM `ip` GROUP BY `ip` ORDER BY COUNT(`num`) DESC;";   
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1["ip"] ?></td>
                    <td><?php echo $mostrar_productosp1["COUNT(`num`)"] ?></td>
              </tr>
            </tbody>
        </div>
    </div>

<?php
 }
?>  
 </table>
 </div>
   

 