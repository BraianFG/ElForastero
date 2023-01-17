<?php
   require '../database.php';
   
      $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
      mysqli_real_escape_string($conn , $id);
       
     $productosp1 = "SELECT * FROM negocio";     
          $result3 = mysqli_query($conn,$productosp1);
      while($mostrar_productosp1 = mysqli_fetch_array($result3)){
          $whatsapp = $mostrar_productosp1['whatsapp'];
          $telegram = $mostrar_productosp1['telegram'];
          $celular = $mostrar_productosp1['celular'];
          $email = $mostrar_productosp1['email'];
        $crear = touch("datos3-$id.txt");
        $abrir = fopen("datos3-$id.txt", "a+");
        fwrite($abrir, "CONTACTO :");
        fwrite($abrir, "\n");
        fwrite($abrir, "------------------------------------");
        fwrite($abrir, "\n");
        fwrite($abrir, "Whatsapp : $whatsapp");
        fwrite($abrir, "\n");
        fwrite($abrir, "Telegram : $telegram");
        fwrite($abrir, "\n");
        fwrite($abrir, "Celular: $celular");
        fwrite($abrir, "\n");
        fwrite($abrir, "Email : $email");
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
              $abrir = fopen("datos3-$id.txt", "a+");
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
              $abrir = fopen("datos3-$id.txt", "a+");
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

