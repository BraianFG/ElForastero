<?php
  include '../database.php';
  
  if($id == ""){
      header('Location: ../../index2');
  }else{
       header('Location: ../../index2');
  }
  
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $celular = $_POST['celular'];
  $direccion = $_POST['direccion'];
  $ciudad = $_POST['ciudad'];
 
 $id = $_SESSION['id'];

  $sql = "UPDATE `usuarios` SET nombre= '$nombre' , apellido = '$apellido', direccion = '$direccion' , celular = '$celular' , ciudad = '$ciudad' WHERE `usuarios` id = '$id' ";
  
   $resultInsert = mysqli_query($conn, $sql);    
   
   mysqli_close($conexion, $sql);   

?>