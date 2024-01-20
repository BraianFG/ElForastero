<?php
 session_start();
   require '../../assets/php/database.php';
  
  $numero = $_POST['numero'];
$sql = "SELECT * FROM usuarios LIMIT $numero OFFSET 10";
$result = $conn->query($sql);
while ($mostrar_productosp1 = mysqli_fetch_array($result)) {
?>
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1[0] ?></td>
                   <td><?php echo $mostrar_productosp1[1] ?></td>
                   <td><?php echo $mostrar_productosp1[2] ?></td>
                   <td><?php echo $mostrar_productosp1[3] ?></td>
                   <td><?php echo $mostrar_productosp1[4] ?></td>
                   <td><?php echo $mostrar_productosp1[5] ?></td>
                   <td><?php echo $mostrar_productosp1[6] ?></td>
                   <td><?php echo $mostrar_productosp1[7] ?></td>
                   <td><a class="button primary" href="#eliminar_<?php echo $mostrar_productosp1[0] ?>" uk-toggle><i class="fas fa-trash"></i> Eliminar</a></td>
                    <td><a href="#editar__usuarios_<?php echo $mostrar_productosp1[0] ?>" uk-toggle class="button primary"><i class="fas fa-edit"></i>editar</a></td>
              </tr>
            </tbody>

<?php
}
// Cerrar la conexión
$conn->close();
?>