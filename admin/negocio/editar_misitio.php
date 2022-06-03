 <?php 

 require '../../database.php';
 
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
 if($title ==""){
    header("Location:../../");
}else{
     header("Location:../../");
}

    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $title);
    
    $favicon = filter_var($_POST['favicon'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $favicon);
    
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $favicon);
    
    $imagen_sitio = filter_var($_POST['imagen_sitio'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $imagen_sitio);
 
    
    mysqli_real_escape_string($conn, $sql);
    
//------------------------------------------------------------------------------//
  $sql = "UPDATE `negocio_misitio` SET  title = '$title' , favicon = '$favicon' ,  descripcion = '$descripcion' ,  imagen_sitio = '$imagen_sitio'  WHERE 1";
   $resultInsert = mysqli_query($conn, $sql);    
   
   mysqli_close($conexion, $sql);   
?>