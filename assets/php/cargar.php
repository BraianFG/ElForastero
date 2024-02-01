  <?php
    require "database.php";
  $productos = "SELECT * FROM productos";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
   $id = $productosp1['id'];
    $sql = "INSERT INTO `reacciones`(`idproducto`, `likes`) VALUES ('$id','0')";
     $resultInsert = mysqli_query($conn, $sql);
    
 $sql2 = "INSERT INTO `reacciones`(`idproducto`, `likes`)
VALUES ((SELECT id FROM productos ORDER BY id DESC LIMIT 1), '0');";
     $resultInsert2 = mysqli_query($conn, $sql2);
 ?>
 
 <?php
   }
   ?>
