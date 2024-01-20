<html>
    <head>
         <?php include 'database.php' ?>
        <?php include "assets/css/main.php"?>
        <?php include "assets/css/style.php" ?>
        <?php include "assets/js/script.php" ?>
        <?php include "assets/php/head.php" ?>
    </head>
    
    <body>
        <div id="producto" class="uk-container  uk-container-large wrap">
<header class="caption"><i class="fas fa-store"> </i> Productos</header>        
    <div class="uk-overflow-auto"> 
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>N°</th>
                <th>NOMBRE</th>
                <th>DESCRIPCÍÓN</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>CATEGORIA</th>
                <th>IMAGEN</th>
                <th>IMAGEN01</th>
                <th>IMAGEN02</th>
              </tr>
        </thead>        
        <?php $productosp1 = 'SELECT * FROM `productos` ORDER BY `id` ASC' ;     
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
                   <td><?php echo '$ ',$mostrar_productosp1['4'] ?></td>
                   <td><?php echo $mostrar_productosp1['5'] ?></td>
                   <td><a href="images/<?php echo $mostrar_productosp1['imagen'] ?>" target="_Blank"><img class="img__producto"  src="https://ik.imagekit.io/gomva6ojv/images/<?php echo $mostrar_productosp1['imagen'] ?>" lazzy="loading" onerror="this.style.display='none'"/></a></td>
                   
                   <td><a href="images/<?php echo $mostrar_productosp1['imagen01'] ?>" target="_Blank"> <img class="img__producto" src="https://ik.imagekit.io/gomva6ojv/images/<?php echo $mostrar_productosp1['imagen01'] ?>" loading="lazzy" onerror="this.style.display='none'"/></a></td>
                   
                   <td><a href="images/<?php echo $mostrar_productosp1['imagen02'] ?>" target="_Blank"> <img class="img__producto" src="https://ik.imagekit.io/gomva6ojv/images/<?php echo $mostrar_productosp1['imagen02'] ?>" loading="lazzy" onerror="this.style.display='none'" /></a></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
            </table>

    </body>
</html>

