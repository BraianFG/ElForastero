
 <?php 
    require '../../assets/php/database.php';
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    
    if($id  == ""){
    header("Location:../");
    }else{
     header("Location:../");
    }
    
     mysqli_real_escape_string($conn , $sql_categorias);
     
//------------------------------------------------------------------------------//

    $sql_categorias = "INSERT INTO `categorias` (`nombre`) VALUES ('$nombre')";
      $resultInsert = mysqli_query($conn, $sql_categorias); 
     