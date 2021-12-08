<?php
include '../../database.php';

    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
    
if($color2 == ""){
    header('Location:../../');
}else{
     header('Location:../../');
}


$body = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $body);

$color2 = filter_var($_POST['color2'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $color2);

$color3 = filter_var($_POST['color3'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $color3);

$navbar = filter_var($_POST['navbar'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $navbar);

$texto = filter_var($_POST['texto'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $texto);

$buttonColorPrimary = filter_var($_POST['buttonColorPrimary'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $buttonColorPrimary);

$buttonColor = filter_var($_POST['buttonColor'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $buttonColor);

$placeholder = filter_var($_POST['placeholder'], FILTER_SANITIZE_STRING);
mysqli_real_escape_string($conn, $placeholder);

  $sql = "UPDATE `estilos` SET  body = '$body' , color2 = '$color2' ,  color3 = '$color3' , navbar = '$navbar' ,  texto = '$texto' , buttonColor = '$buttonColorPrimary' , buttonColorPrimary = '$buttonColor' ,  placeholder = '$placeholder' WHERE 1";
   $resultInsert = mysqli_query($conn, $sql);    
 mysqli_close($conexion, $sql);   
?>

