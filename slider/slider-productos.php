<?php
 session_start();
  require '../../assets/php/database.php';
  
  $numero2 = $_POST['numero2'];
$sql = "SELECT * FROM productos LIMIT $numero2";
$result = $conn->query($sql);
while ($mostrar_productosp1 = mysqli_fetch_array($result)) {
?>
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
                   <td><?php echo $mostrar_productosp1['2'] ?></td>
                   <td><?php echo $mostrar_productosp1['3'] ?></td>
                   <td><?php echo '$ '. $mostrar_productosp1['4'] ?></td>
                   <td><?php echo $mostrar_productosp1['5'] ?></td>
                   
                   <td><a href="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen'] ?>" target="_Blank"><img class="img__producto"  src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen'] ?>" lazzy="loading" onerror="this.src='../../images/blanco.webp'" /></a></td>
                   
                   <td><a href="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen01'] ?>" target="_Blank"> <img class="img__producto" src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/mcmasajes/images/<?php echo $mostrar_productosp1['imagen01'] ?>" loading="lazzy"onerror="this.src='../../images/blanco.webp'"  /></a></td>
                   
                   <td><a href="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen02'] ?>" target="_Blank"> <img class="img__producto" src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen02'] ?>" loading="lazzy" onerror="this.src='../../images/blanco.webp'"  /></a></td>
                   
                   <td><a href="#eliminar__productos_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"> <i class="fas fa-trash "></i> Eliminar</a></td>
                    <td><a href="#editar__productos_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"> <i class="fas fa-edit "></i>Editar</a></td>
              </tr>
            </tbody>
<?php
}
// Cerrar la conexión
$conn->close();
?>