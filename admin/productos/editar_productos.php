<?php 
  include '../../database.php';
  
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
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
    
    $imagen = filter_var($_POST['imagen'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $imagen);
    
    $imagen01 = filter_var($_POST['imagen01'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $imagen01);
    
    $imagen02 = filter_var($_POST['imagen02'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $imagen02);
    
    $imagen03 = filter_var($_POST['imagen03'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $imagen03);
    
    $imagen04 = filter_var($_POST['imagen04'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $imagen04);
    
    $modal1 = filter_var($_POST['modal1'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $modal1);
    
    $modal2 = filter_var($_POST['modal2'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $modal2);
    
    $modal3 = filter_var($_POST['modal3'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $modal3);
    
    $modal4 = filter_var($_POST['modal4'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $modal4);
    
    $modal5 = filter_var($_POST['modal5'], FILTER_SANITIZE_URL);
    mysqli_real_escape_string($conn, $modal5);
    
//--------------------------------------------//
 
    if($id ==""){
    header("Location:../../");
   }else{
       header("Location:../../");
    }
//-------------------------------------------//
$sql = "UPDATE productos SET nombre = '$nombre' , descripcion = '$descripcion' , cantidad = '$cantidad' , categoria= '$categoria', precio = '$precio', imagen = '$imagen' , imagen01 = '$imagen01' ,  imagen02 = '$imagen02' ,  imagen03 = '$imagen03' ,  imagen04 = '$imagen04'  , modal1 = '$modal1' , modal2 = '$modal2' , modal3 = '$modal3'  , modal4 = '$modal4' , modal5 ='$modal5'  WHERE productos .id = '$id'";
   $resultInsert = mysqli_query($conn, $sql);   
   mysqli_close($conn);   
?>

