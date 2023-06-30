<?php
    session_start();
    include '../../database.php';
    $id =  $_SESSION["id"];


    $nombre =filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    $nombre = ucwords($nombre);
    $nombre = trim($nombre);
    
    if(empty($nombre)){
        echo "<script>alertify.notify('Ingrese su nombre','error','4');</script>"; 
    }
    
    if(!preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$nombre)){
       echo "<script>alertify.notify('Ingrese un nombre valido','error','4');</script>"; 
    }
    
    
    
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $apellido);
    $apellido = ucwords($apellido);
    $apellido = trim($apellido);
    
    if(empty($apellido)){
        echo "<script>alertify.notify('Ingrese su apellido','error','4');</script>"; 
    }
    
    if(!preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$apellido)){
       echo "<script>alertify.notify('Ingrese un apellido valido','error','4');</script>"; 
    }
    
    
    
    $celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $celular);
    $celular = trim($celular);
    
     if(empty($celular)){
        echo "<script>alertify.notify('Ingrese un número de celular','error','4');</script>"; 
    }
     
    if(!preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/D',$celular)){
        echo "<script>alertify.notify('Ingrese un número de celular valido','error','4');</script>"; 
    }
    
    $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $ciudad);
    $ciudad = ucwords($ciudad);
    $ciudad = trim($ciudad);
   
    if(empty($ciudad)){
        echo "<script>alertify.notify('Ingrese la ciudad donde está viviendo','error','4');</script>"; 
    }
    
    if(!preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$ciudad)){
       echo "<script>alertify.notify('Ingrese el nombre de una ciudad que sea valido','error','4');</script>"; 
    }
    
    
    
    
    $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $direccion);
    $direccion = ucwords($direccion);
    $direccion = trim($direccion);
   
    if(empty($direccion)){
        echo "<script>alertify.notify('Ingrese la dirección donde está viviendo','error','4');</script>"; 
    }
    
    if(preg_match('/[$%&|<>#]/', $direccion)){
       echo "<script>alertify.notify('Ingrese la dirección valida','error','4');</script>"; 
    }
    
    
    $codPostal = filter_var($_POST['codPostal'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $codPostal);
    
    if(empty($codPostal)){
        echo "<script>alertify.notify('Ingrese el código postal de la ciudad donde está viviendo','error','8');</script>"; 
    }
    
    if(strlen($codPostal)<4 || strlen($codPostal)>5){
        echo "<script>alertify.notify('Ingrese los 4 números del código postal','error','4');</script>";
    }
    

//------------------------------------------------------------------------------//
 if(!empty($nombre && $apellido && $direccion && $celular && $ciudad && $codPostal) && strlen($codPostal) == 4 && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$nombre) && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$ciudad) && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$apellido) && (!(preg_match('/[$%&|<>#]/', $direccion))) && preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/D',$celular)){

        $sql = "UPDATE `usuarios` SET nombre= '$nombre' , apellido = '$apellido', direccion = '$direccion' , celular = '$celular' , ciudad = '$ciudad' , codPostal = '$codPostal' WHERE `usuarios` .id = '$id';";
         echo "<script>alertify.notify('cambios aplicados con exito','success','8');</script>";
      $resultInsert = mysqli_query($conn, $sql);    
   
   }
   

?>
  