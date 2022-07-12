 <?php 
   require '../../database.php';
 
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
    
    if($nombre == ""){
        header('Location:../../');
    }else{
         header('Location:../../');
    }
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $descripcion);
    
    $info = filter_var($_POST['info'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $info);
     
    $alert = filter_var($_POST['alert'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $alert);
     
    $celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $celular); 
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    mysqli_real_escape_string($conn , $email); 
    
    $whatsapp = filter_var($_POST['whatsapp'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $whatsapp);
    
    $whatsapp2 = filter_var($_POST['whatsapp2'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $whatsapp2);
    
    $facebook = filter_var($_POST['facebook'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $facebook);
   
    $instagram = filter_var($_POST['instagram'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $instagram);
   
   $telegram = filter_var($_POST['telegram'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $telegram);
    
    
 $logo= $_FILES['logo']['name'];
      $guardado = $_FILES['logo']['tmp_name'];
  
  
      if(!file_exists('../')){
          mkdir('../../images/' ,0777,true);
            
          if(file_exists('../../')){
               if( move_uploaded_file($guardado, '../../images/' .$logo)){

               }
                 header('Location:../../');
             }else{
                  header('Location:../../');
             }
    }else{
       if(move_uploaded_file($guardado, '../../images/' .$logo)){
              header('Location:../');
             }else{
                  header('Location:../../');
             } 
       }
       
    if(!empty($logo)){
         $sql2 = "UPDATE `negocio` SET  logo = '$logo'  WHERE 1";
         header("Location:../../");
    }       
//------------------------------------------------------------------------------//
  $sql = "UPDATE `negocio` SET nombre= '$nombre' , descripcion = '$descripcion' , alert = '$alert' , celular = '$celular' , email = '$email' , whatsapp = '$whatsapp' , whatsapp2 = '$whatsapp2' , facebook = '$facebook' , instagram = '$instagram' , telegram = '$telegram' , info = '$info' WHERE 1";
   $resultInsert = mysqli_query($conn, $sql);    
   $resultInsert2 = mysqli_query($conn, $sql2);    
   
   mysqli_close($conexion, $sql);   
?>