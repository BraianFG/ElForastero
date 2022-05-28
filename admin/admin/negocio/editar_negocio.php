 <?php 
 include '../../database.php';
 
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
 
    $logo = filter_var($_POST['logo'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $logo);
    
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
    
   mysqli_real_escape_string($conn , $sql);

//------------------------------------------------------------------------------//
  $sql = "UPDATE `negocio` SET nombre= '$nombre' , logo = '$logo' ,  descripcion = '$descripcion' , alert = '$alert' , celular = '$celular' , email = '$email' , whatsapp = '$whatsapp' , whatsapp2 = '$whatsapp2' , facebook = '$facebook' , instagram = '$instagram' , telegram = '$telegram' , info = '$info' WHERE 1";
   $resultInsert = mysqli_query($conn, $sql);    
   
   mysqli_close($conexion, $sql);   
?>