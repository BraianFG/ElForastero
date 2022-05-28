<?php
session_start();
include '../../database.php';
$id_admin =  $_SESSION["id_admin"];

    $nombre =filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    
     mysqli_real_escape_string($conn , $sql);

//------------------------------------------------------------------------------//
   $sql = "UPDATE `admin` SET nombre= '$nombre' WHERE `admin` .id = '$id_admin' ";
   $resultInsert = mysqli_query($conn, $sql);    
   mysqli_close($conexion, $sql);   
?>
  