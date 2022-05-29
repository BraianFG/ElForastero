<?php 
    require_once 'database.php';
    
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     mysqli_real_escape_string($conn, $email);
     
    $password =filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     mysqli_real_escape_string($conn , $password);
     
    $nombre =filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
     
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $apellido);
    
   $celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $celular);
     
   $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $ciudad);
    
   $direccion = filter_var($_POST['domicilio'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $direccion);
    
    $codPostal = filter_var($_POST['codPostal'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $codPostal);
     
   $hash = password_hash($password ,PASSWORD_DEFAULT, ['cost' => 8]);

   if(!empty($nombre && $apellido && $direccion && $direccion && $email && $hash && $celular && $ciudad && $codPostal && strlen($password)>=8 && strlen($nombre)>2 && strlen($apellido) >=3 && strlen($direccion)>3 && strlen($ciudad)>=3 && strlen($codPostal)>3 && strlen($codPostal)< 5 && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$nombre) && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$apellido) && preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',$ciudad) && preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/',$email) && preg_match('/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/D',$celular) && preg_match('/^[0-9]+$/' , $codPostal) && !preg_match('/[$%&|<>#]/', $direccion)))
    {
     $sql="INSERT INTO `usuarios`(`nombre`,  `apellido`,`direccion`, `ciudad`, `celular`, `email`, `password`,`CodPostal`) VALUES ('$nombre','$apellido', '$direccion','$ciudad' ,'$celular','$email','$hash','$codPostal');";
      $resultInsert = mysqli_query($conn, $sql); 
      mysqli_close($conn);  
      echo '<script>location.href="ingresar";</script>'; 
    } else{
         echo "<script>alertify.notify('Error al registrarse','error','8');</script>";
    }
  

?>