<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

<header class="caption"> <i class="fas fa-users"> </i>Última acceso a la administración</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>ip</th>
                <th>fecha</th>
                <th>Hora</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Navegador</th>
                <th>Dispositvo</th>
                <th>Sistema Operativo</th>
              </tr>
        </thead>        
      <?php $productosp1 = "SELECT `ip`, `fecha`, `hora`, `num`, `pais`, `ciudad`, `navegador`, `sistema_operativo`, `dispositivo` FROM `visitas` WHERE `pagina`='/admin/login.php' ORDER BY `num` DESC LIMIT 1;"; ;     
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['ip'] ?></td>
                   <td><?php echo $mostrar_productosp1['fecha'] ?></td>
                   <td><?php echo $mostrar_productosp1["hora"] ?></td>
                   <td><?php echo $mostrar_productosp1['ciudad'] ?></td>
                   <td><?php echo $mostrar_productosp1['pais'] ?></td>
                   <td><?php echo $mostrar_productosp1['navegador'] ?></td>
                   <td> <?php echo $mostrar_productosp1['dispositivo'] ?></td>
                   <td> <?php echo $mostrar_productosp1['sistema_operativo'] ?></td> 
              </tr>
            </tbody>


<?php
 }
?>  

 </table>
 </div> 
 
   <header class="caption" style="margin-top:1em"> <i class="fas fa-users"> </i>Última visita</header>
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
                   <td><?php echo $mostrar_productosp1['ciudad'] ?></td>
                    <td><?php echo $mostrar_productosp1["pais"] ?></td>
                   <td><?php echo $mostrar_productosp1["fecha"] ?></td>
                     <td><?php echo $mostrar_productosp1["hora"] ?></td>
              </tr>
            </tbody>

    </div>

<?php
 }
?>  
<div >
 </table> 
         </div>
    </div>
 <div>
        </div>
    </div>
<div class="uk-container  uk-container-large wrap">
 <header class="caption">Países</header>  
  <canvas class="grafico" id="paises"></canvas> 
</div>     
<script>
  const ctx = document.getElementById('paises');
  new Chart(ctx, {
    type: 'doughnut',
    

    data: {
      labels: [<?php $productosp1 = "SELECT `pais` , COUNT(`num`) FROM `paises` GROUP BY `pais` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['pais'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
      datasets: [{
        label: 'Países que visitaron',
        data: [ <?php $productosp1 = "SELECT `pais` , COUNT(`num`) FROM `paises` GROUP BY `pais` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['COUNT(`num`)'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
  backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    
        borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      } ]
    },
    options: {
    scales: {
        y: {
          beginAtZero: true
        }
    }
    }
  });

</script>
<div class="uk-container  uk-container-large wrap">
<header class="caption">Ciudades</header>  
  <canvas class="grafico" id="ciudades"></canvas>
</div>


<script>
  const ctx2 = document.getElementById('ciudades');
  new Chart(ctx2, {
    type: 'doughnut',
    

    data: {
      labels: [<?php $productosp1 = "SELECT `ciudad` , COUNT(`num`) FROM `ciudades` GROUP BY `ciudad` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['ciudad'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
 
      datasets: [{
        label: 'Ciudades que visitaron',
        data: [ <?php $productosp1 = "SELECT `ciudad` , COUNT(`num`) FROM `ciudades` GROUP BY `ciudad` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['COUNT(`num`)'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
          
           backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    
        borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],

        borderWidth: 1
        
      } ]
    },
    options: {
          padding: 200,
          
      scales: {
 y: {
          beginAtZero: true
        }
      }
    }
  });

</script>
 
 
 <div class="uk-container  uk-container-large wrap">
<header class="caption">Páginas visitadas</header>       
  <canvas class="grafico" id="paginas"></canvas>
</div>


<script>
  const ctx3 = document.getElementById('paginas');
  new Chart(ctx3, {
    type: 'doughnut',
    

    data: {
      labels: [<?php $productosp1 = "SELECT `pagina` , COUNT(`num`) FROM `paginas` GROUP BY `pagina` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['pagina'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
 
      datasets: [{
        label: 'Paginas que visitaron',
        data: [ <?php $productosp1 = "SELECT `pagina` , COUNT(`num`) FROM `paginas` GROUP BY `pagina` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['COUNT(`num`)'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
          
           backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    
        borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],

        borderWidth: 1
        
      } ]
    },
    options: {
          padding: 200,
          
      scales: {
         y: {
          beginAtZero: true
        }
      }
    }
  });

</script>
 
 
  <div class="uk-container  uk-container-large wrap">
<header class="caption">Sistemas Operativos</header>        
  <canvas class="grafico" id="so"></canvas>
</div>


<script>
  const ctx4 = document.getElementById('so');
  new Chart(ctx4, {
    type: 'doughnut',


    data: {
      labels: [<?php $productosp1 = "SELECT `so` , COUNT(`num`) FROM `so` GROUP BY `so` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['so'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
 
      datasets: [{
        label: 'Sistema operativo usado',
        data: [ <?php $productosp1 = "SELECT `so` , COUNT(`num`) FROM `so` GROUP BY `so` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['COUNT(`num`)'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
          
           backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    
        borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],

        borderWidth: 1
        
      } ]
    },
    options: {
          padding: 200,
          
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

</script>
 
 
 <div class="uk-container  uk-container-large wrap">
<header class="caption">¿De dónde vienen?</header>  
  <canvas class="grafico" id="procedencia"></canvas>
</div>


<script>
  const ctx5 = document.getElementById('procedencia');
  new Chart(ctx5, {
    type: 'doughnut',


    data: {
      labels: [<?php $productosp1 = "SELECT `referido` , COUNT(`num`) FROM `referencia` GROUP BY `referido` ORDER BY COUNT(`num`) DESC LIMIT 5;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['referido'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
 
      datasets: [{
        label: '¿De dónde viene?',
        data: [ <?php $productosp1 = "SELECT `referido` , COUNT(`num`) FROM `referencia` GROUP BY `referido` ORDER BY COUNT(`num`) DESC LIMIT 5;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['COUNT(`num`)'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
          
           backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    
        borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],

        borderWidth: 1
        
      } ]
    },
    options: {
          padding: 200,
          
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

</script>

   <div class="uk-container  uk-container-large wrap">
<header class="caption">Direcciones IP</header>         
  <canvas class="grafico" id="ip"></canvas>
</div>


<script>
  const ctx6 = document.getElementById('ip');
  new Chart(ctx6, {
    type: 'doughnut',
    

    data: {
      labels: [<?php $productosp1 = "SELECT `ip` , COUNT(`num`) FROM `ip` GROUP BY `ip` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['ip'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
 
      datasets: [{
        label: 'Direcciones IP',
        data: [ <?php $productosp1 = "SELECT `ip` , COUNT(`num`) FROM `ip` GROUP BY `ip` ORDER BY COUNT(`num`) DESC LIMIT 10;" ;     
          $result3 = mysqli_query($conn,$productosp1);  while($mostrar_productosp1 = mysqli_fetch_array($result3)){?>'<?php  echo $mostrar_productosp1['COUNT(`num`)'] ?>' <?php echo ' , '?> <?php }?> '<?php echo '.'?>'],
          
           backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    
        borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],

        borderWidth: 1
        
      } ]
    },
    options: {
          padding: 200,
          
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>