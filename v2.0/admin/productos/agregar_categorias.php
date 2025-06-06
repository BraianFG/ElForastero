
 <?php 
  header('Content-Type: text/plain');
    require '../../../assets/php/database.php';
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    
     mysqli_real_escape_string($conn , $sql_categorias);
     
//------------------------------------------------------------------------------//

    $sql_categorias = "INSERT INTO `categorias` (`nombre`) VALUES ('$nombre')";
      $resultInsert = mysqli_query($conn, $sql_categorias); 
     
     echo "OK";
     exit;
     header("Location : ../");
     
?>     