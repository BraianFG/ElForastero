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

//------------------------------------------------------------------------------//
   if(!empty($nombre && $apellido && $direccion  && $celular && $ciudad && $codPostal && strlen($nombre)>3 && strlen($apellido) > 3 && strlen($direccion)>3 && strlen($ciudad)>3) && strlen($ciudad)>3 && strlen($codPostal)>3 && strlen($codPostal)< 5 && strlen($celular)>3 && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$nombre) && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$apellido) && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$ciudad) && preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/D',$celular) && preg_match('/^[0-9]+$/' , $codPostal) && !preg_match('/[$%&|<>#]/', $direccion))
   {
         echo "<script>alertify.notify('cambios aplicados','success','8');</script>";
        $sql = "UPDATE `usuarios` SET nombre= '$nombre' , apellido = '$apellido', direccion = '$direccion' , celular = '$celular' , ciudad = '$ciudad' , codPostal = '$codPostal' WHERE `usuarios` .id = '$id' ";
        $resultInsert = mysqli_query($conn, $sql);    
        mysqli_close($conn, $sql);  
   }else{
         echo "<script>alertify.notify('Error al editar','error','8');</script>";
   }
   
?>
  