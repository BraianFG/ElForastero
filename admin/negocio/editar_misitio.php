 <?php 

 include '../../database.php';
 
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
    
    $nombre_sitio = filter_var($_POST['nommbre_sitio'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre_sitio);
    
    $imagen_sitio = filter_var($_POST['imagen_sitio'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $imagen_sitio);
 
    $titulo_sitio = filter_var($_POST['titulo_sitio'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $titulo_sitio);
    
    mysqli_real_escape_string($conn, $sql);
    
//------------------------------------------------------------------------------//
  $sql = "UPDATE `negocio_misitio` SET  title = '$title' , favicon = '$favicon' ,  descripcion = '$descripcion' , nombre_sitio = '$nombre_sitio' ,  imagen_sitio = '$imagen_sitio' , titulo_sitio = '$titulo_sitio' WHERE 1";
   $resultInsert = mysqli_query($conn, $sql);    
   
   mysqli_close($conexion, $sql);   
?>