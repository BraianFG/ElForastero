<?php 
    require '../../database.php';
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date("Y-m-d", time());
    $hora = date("H:i:s");
    
    $id = filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql3 ="UPDATE `totalPedido` SET `total` = (SELECT SUM(precio)FROM carrito WHERE UsuarioID = '$id'),`fecha` ='$fecha',`hora`='$hora' WHERE `ventas`.`UsuarioID` = '$id'";
    
    $resultInsert3 = mysqli_query($conn, $sql3);
    
?>

