<?php 
    include 'database.php';
//------------------------------------------------------------------------------//
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("Y-m-d", time());
$hora = date("H:i:s");

$nombre = $_SESSION["nombre"];
$apelldo =  $_SESSION["apellido"];

$id = filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
mysqli_real_escape_string($conn , $id);

$sql ="INSERT INTO `pedidos`(SELECT * FROM carrito WHERE UsuarioID = '$id')";

$sql2 ="INSERT INTO `totalPedido`(SELECT * FROM totalCarrito WHERE UsuarioID = '$id')";

$sql3 ="UPDATE `totalPedido` SET `total` = (SELECT SUM(precio)FROM pedidos WHERE UsuarioID = '$id'),`fecha` ='$fecha',`hora`='$hora' WHERE `totalPedido`.`UsuarioID` = '$id';";  

$sql4 ="DELETE FROM `carrito` WHERE `carrito`.`UsuarioID` = '$id'";
     
$sql5="DELETE FROM `totalCarrito` WHERE `totalCarrito`.`UsuarioID` = '$id'";  

  
$resultInsert = mysqli_query($conn, $sql);
$resultInsert2 = mysqli_query($conn, $sql2);
$resultInsert3 = mysqli_query($conn, $sql3);
$resultInsert4 = mysqli_query($conn, $sql4);
$resultInsert5 = mysqli_query($conn, $sql5);