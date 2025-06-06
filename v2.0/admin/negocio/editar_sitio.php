 <?php 

   require '../../../assets/php/database.php';
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $title);
    
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $favicon);
    
    $dominio = filter_var($_POST['dominio'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $dominio);
    
//------------------------------------------------------------------------------//
    $imagen_sitio = $_FILES['imagen_sitio']['name'];
      $guardado1 = $_FILES['imagen_sitio']['tmp_name'];
      if(!file_exists('../')){
          mkdir('../../images/' ,0777,true);
            
          if(file_exists('../../')){
               if( move_uploaded_file($guardado1, '../../images/' .$imagen_sitio)){

               }
                 header('Location:../');
             }else{
                  header('Location:../');
             }
    }else{
       if(move_uploaded_file($guardado1, '../../images/' .$imagen_sitio)){
              header('Location:../');
             }else{
                  header('Location:../../');
             } 
       }
       
    if(!empty($imagen_sitio)){
         $sql2 = "UPDATE `negocio_misitio` SET  imagen_sitio = '$imagen_sitio'  WHERE 1";
         header("Location:../../");
    }
    
//------------------------------------------------------------------------------//
  $favicon = $_FILES['favicon']['name'];
      $guardado2 = $_FILES['favicon']['tmp_name'];
  
  
      if(!file_exists('../')){
          mkdir('../../images/' ,0777,true);
            
          if(file_exists('../../')){
               if( move_uploaded_file($guardado2, '../../images/' .$favicon)){

               }
                 header('Location:../');
             }else{
                  header('Location:../');
             }
    }else{
       if(move_uploaded_file($guardado2, '../../images/' .$favicon)){
              header('Location:../');
             }else{
                  header('Location:../');
             } 
       }
       
    if(!empty($favicon)){
         $sql3 = "UPDATE `negocio_misitio` SET  favicon = '$favicon'  WHERE 1";
         header("Location:../");
    }       
    
  //------------------------------------------------------------------------------//  
        
    $app = $_FILES['app']['name'];
      $app2 = $_FILES['app']['tmp_name'];
      if(!file_exists('../')){
          mkdir('../../app/' ,0777,true);
            
          if(file_exists('../../')){
               if( move_uploaded_file($app2, '../../app/' .$app)){

               }
                 header('Location:../');
             }else{
                  header('Location:../');
             }
    }else{
       if(move_uploaded_file($app2, '../../app/' .$app)){
              header('Location:../');
             }else{
                  header('Location:../');
             } 
       }
       
    if(!empty($app)){
         $sql4 = "UPDATE `negocio_misitio` SET  app = '$app'  WHERE 1";
         header("Location:../");
    }  
//------------------------------------------------------------------------------//

  $sql = "UPDATE `negocio_misitio` SET  title = '$title', descripcion = '$descripcion', dominio = '$dominio'  WHERE 1";
  
   $resultInsert = mysqli_query($conn, $sql);    
   $resultInsert2 = mysqli_query($conn, $sql2);  
   $resultInsert3 = mysqli_query($conn, $sql3);  
   $resultInsert4 = mysqli_query($conn, $sql4); 
   mysqli_close($conexion, $sql);   
   exit;
   header("Location: ../")
?>

