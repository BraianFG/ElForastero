
 <?php 
 header('Content-Type: text/plain');
     require '../../../assets/php/database.php';
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $descripcion);
    
    
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $precio);
    
    $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $categoria);
  //------------------------------------------------------------------------------// 
  $nombreIMG = $_FILES['imagen']['name'];
  $guardado = $_FILES['imagen']['tmp_name'];
  
      if(!file_exists('../../')){
          mkdir('../../../images/' ,0777,true);
            
          if(file_exists('../../../')){
               if(move_uploaded_file($guardado, '../../../images/' .$nombreIMG)){

               }
             }else{
             }
    }else{
       if(move_uploaded_file($guardado, '../../../images/' .$nombreIMG)){

             }else{
             } 
    }
    

  //------------------------------------------------------------------------------//     
    $nombreIMG2 = $_FILES['imagen01']['name'];
  $guardado2 = $_FILES['imagen01']['tmp_name'];
  
      if(!file_exists('../../../')){
          mkdir('../../../images/' ,0777,true);
            
          if(file_exists('../../../')){
               if(move_uploaded_file($guardado2, '../../../images/' .$nombreIMG2)){

               }
             }else{
             }
    }else{
       if(move_uploaded_file($guardado2, '../../../images/' .$nombreIMG2)){

             }else{
             } 
    }
    
    
    $nombreIMG3 = $_FILES['imagen02']['name'];
  $guardado3 = $_FILES['imagen02']['tmp_name'];
  
      if(!file_exists('../')){
          mkdir('../../../images/' ,0777,true);
            
          if(file_exists('../../../')){
               if(move_uploaded_file($guardado3, '../../../images/' .$nombreIMG3)){

               }
             }else{
             }
    }else{
       if(move_uploaded_file($guardado3, '../../../images/' .$nombreIMG3)){

             }else{
             } 
    }
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date("Y-m-d", time());
    $hora = date("H:i:s");

//------------------------------------------------------------------------------//
   $sql_productos = "INSERT INTO `productos`(`nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`,`fecha1`,`hora1`) VALUES ('{$nombre}','{$descripcion}','0','{$precio}','{$categoria}','{$nombreIMG}','{$nombreIMG2}','{$nombreIMG3}','{$fecha}','{$hora}')";
 //------------------------------------------------------------------------------//       

   //------------------------------------------------------------------------------//      
    $resultInsert = mysqli_query($conn, $sql_productos); 
    mysqli_close($conn);    
    echo "OK";
    exit;
     header("Location : ../");
    
//------------------------------------------------------------------------------//       

?>

<?php include "productosModal.php" ?>