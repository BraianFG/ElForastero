<?php 
  require '../../database.php';
  
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
    if($id ==""){
    header("Location:../../admin");
   }else{
       header("Location:../../admin");
    }
   
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $descripcion);
    
    $cantidad = filter_var($_POST['cantidad'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $cantidad);
    
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $precio);
    
    $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $categoria);

//--------------------------------------------//
    $nombreIMG = $_FILES['imagen']['name'];
    $guardado = $_FILES['imagen']['tmp_name'];
  
      if(!file_exists('../')){
          mkdir('../../images/' ,0777,true);
            
          if(file_exists('../../')){
               if(move_uploaded_file($guardado, '../../images/' .$nombreIMG)){
                  $sql2 ="UPDATE `productos` SET `imagen` = '$nombreIMG' WHERE `productos`.`id` = '$id'";
               }
             }else{
               if(!empty($nombreIMG)){
                   $sql2 ="UPDATE `productos` SET `imagen` = '$nombreIMG' WHERE `productos`.`id` = '$id'";  
               }
             }
    }else{
       if(move_uploaded_file($guardado, '../../images/' .$nombreIMG)){
              $sql2 ="UPDATE `productos` SET `imagen` = '$nombreIMG' WHERE `productos`.`id` = '$id'";
        }else{
          if(!empty($nombreIMG)){
            $sql2 ="UPDATE `productos` SET `imagen` = '$nombreIMG' WHERE `productos`.`id` = '$id'";  
          }
         } 
    } 

    
    
 //-------------------------------------------//
 
 
    $nombreIMG2 = $_FILES['imagen01']['name'];
    $guardado2 = $_FILES['imagen01']['tmp_name'];
  
      if(!file_exists('../')){
          mkdir('../../images/' ,0777,true);
            
          if(file_exists('../../')){
               if(move_uploaded_file($guardado2, '../../images/' .$nombreIMG2)){
                  $sql3 ="UPDATE `productos` SET `imagen01` = '$nombreIMG2' WHERE `productos`.`id` = '$id'";
               }
             }else{
               if(!empty($nombreIMG2)){
                   $sql3 ="UPDATE `productos` SET `imagen01` = '$nombreIMG2' WHERE `productos`.`id` = '$id'";  
               }
             }
    }else{
       if(move_uploaded_file($guardado2, '../../images/' .$nombreIMG2)){
              $sql3 ="UPDATE `productos` SET `imagen01` = '$nombreIMG2' WHERE `productos`.`id` = '$id'";
        }else{
          if(!empty($nombreIMG2)){
            $sql3 ="UPDATE `productos` SET `imagen01` = '$nombreIMG2' WHERE `productos`.`id` = '$id'";  
          }
         } 
    } 
//-------------------------------------------//
    $nombreIMG3 = $_FILES['imagen02']['name'];
    $guardado3 = $_FILES['imagen02']['tmp_name'];
  
      if(!file_exists('../')){
          mkdir('../../images/' ,0777,true);
            
          if(file_exists('../../')){
               if(move_uploaded_file($guardado3, '../../images/' .$nombreIMG3)){
                  $sql2 ="UPDATE `productos` SET `imagen02` = '$nombreIMG3' WHERE `productos`.`id` = '$id'";
               }
             }else{
               if(!empty($nombreIMG3)){
                   $sql2 ="UPDATE `productos` SET `imagen02` = '$nombreIMG3' WHERE `productos`.`id` = '$id'";  
               }
             }
    }else{
       if(move_uploaded_file($guardado3, '../../images/' .$nombreIMG3)){
              $sql4 ="UPDATE `productos` SET `imagen02` = '$nombreIMG3' WHERE `productos`.`id` = '$id'";
        }else{
          if(!empty($nombreIMG3)){
            $sql4 ="UPDATE `productos` SET `imagen02` = '$nombreIMG3' WHERE `productos`.`id` = '$id'";  
          }
         } 
    } 
    

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha2 = date("Y-m-d", time());
    $hora2 = date("H:i:s");
    
//-------------------------------------------//
$sql = "UPDATE productos SET nombre = '$nombre' , descripcion = '$descripcion' , cantidad = '$cantidad' , categoria= '$categoria', precio = '$precio',fecha2 ='$fecha2', hora2='$hora2' WHERE productos .id = '$id'";

    $resultInsert = mysqli_query($conn, $sql);  
    $resultInsert2 = mysqli_query($conn, $sql2);  
    $resultInsert3 = mysqli_query($conn, $sql3);  
    $resultInsert4 = mysqli_query($conn, $sql4); 
   mysqli_close($conn); 
   
?>

