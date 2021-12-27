<?php
session_start();
include '../../database.php';
$id =  $_SESSION["id"];

    $nombre =filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    
    $apellido =filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
   
    $celular=filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $celular);
   
    $ciudad=filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $ciudad);
    
    $direccion=filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $direccion);
    
    $codPostal=filter_var($_POST['codPostal'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $codPostal);

   if($id ==""){
         header("Location:../../");
   }else{
          header("Location:../../");
   }

//------------------------------------------------------------------------------//
   $sql = "UPDATE `usuarios` SET nombre= '$nombre' , apellido = '$apellido', direccion = '$direccion' , celular = '$celular' , ciudad = '$ciudad' , codPostal = '$codPostal' WHERE `usuarios` .id = '$id' ";
   $resultInsert = mysqli_query($conn, $sql);    
   mysqli_close($conexion, $sql);   
?>
  