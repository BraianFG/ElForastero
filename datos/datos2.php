<?php
   require '../database.php';
   
      $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
      mysqli_real_escape_string($conn , $id);
       
     $productosp1 = "SELECT * FROM transferencia";     
          $result3 = mysqli_query($conn,$productosp1);
      while($mostrar_productosp1 = mysqli_fetch_array($result3)){
          $nombre = $mostrar_productosp1['0'];
          $apellido = $mostrar_productosp1['1'];
          $cuit = $mostrar_productosp1['2'];
          $banco = $mostrar_productosp1['3'];
          $cbu = $mostrar_productosp1['4'];
          $cuenta = $mostrar_productosp1['5'];
          $alias = $mostrar_productosp1['6'];
        $crear = touch("datos-$id.txt");
        $abrir = fopen("datos-$id.txt", "a+");
        fwrite($abrir, "CUENTA :");
        fwrite($abrir, "\n");
        fwrite($abrir, "------------------------------------");
        fwrite($abrir, "\n");
        fwrite($abrir, "Nombre : $nombre");
        fwrite($abrir, "\n");
        fwrite($abrir, "Apellido : $apellido");
        fwrite($abrir, "\n");
        fwrite($abrir, "Cuit/Cuil: $cuit");
        fwrite($abrir, "\n");
        fwrite($abrir, "Banco o billetera digital : $banco");
        fwrite($abrir, "\n");
        fwrite($abrir, "CBU/CVU : $cbu");
        fwrite($abrir, "\n");
        fwrite($abrir, "N° de cuenta : $cuenta ");
        fwrite($abrir, "\n");
        fwrite($abrir, "Alias : $alias");
        fwrite($abrir, "\n");
        fwrite($abrir, "------------------------------------");
        fwrite($abrir, "\n \n \n");
      }    
      
     $productosp2 = "SELECT SUM(`cantidad`), SUM(`precio`),`nombreProduc` ,`prodcutoID` FROM `pedidos` WHERE UsuarioID = '$id' GROUP BY `cantidad`,`prodcutoID`;";     
      $result4 = mysqli_query($conn,$productosp2);

      while($mostrar_productosp2 = mysqli_fetch_array($result4)){
              $nombreProduc = $mostrar_productosp2['nombreProduc'];
              $cantidad = $mostrar_productosp2['SUM(`cantidad`)'];
              $precio = $mostrar_productosp2['SUM(`precio`)'];
              $abrir = fopen("datos-$id.txt", "a+");
              fwrite($abrir,"PEDIDOS : ");
              fwrite($abrir, "\n");
              fwrite($abrir, "------------------------------------");
              fwrite($abrir, "\n");
              fwrite($abrir, "Artículo : $nombreProduc");
              fwrite($abrir, "\n");
              fwrite($abrir, "Cantidad : $cantidad");
              fwrite($abrir, "\n");
              fwrite($abrir, "Precio : $$precio");
              fwrite($abrir, "\n");
              fwrite($abrir, "------------------------------------");
              fwrite($abrir, "\n \n \n");
         
     }    
     
   $productosp2 = "SELECT * FROM `totalPedido` WHERE UsuarioID = '$id' ";     
      $result4 = mysqli_query($conn,$productosp2);

      while($mostrar_productosp2 = mysqli_fetch_array($result4)){
              $fecha = $mostrar_productosp2['3'];
              $hora = $mostrar_productosp2['4'];
              $total = $mostrar_productosp2['5'];
              $abrir = fopen("datos-$id.txt", "a+");
              fwrite($abrir, "\n");
              fwrite($abrir, "TOTAL : ");
              fwrite($abrir, "\n");
              fwrite($abrir, "------------------------------------");
              fwrite($abrir, "\n");
              fwrite($abrir, "Fecha : $fecha");
              fwrite($abrir, "\n");
              fwrite($abrir, "Hora : $hora");
              fwrite($abrir, "\n");
              fwrite($abrir, "Total : $$total");
              fwrite($abrir, "\n");
              fwrite($abrir, "------------------------------------");
               fwrite($abrir, "\n \n \n");
         
     }   
     
?>

