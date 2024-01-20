<?php 
        require '../assets/php/database.php';
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    mysqli_real_escape_string($conn , $email);
    
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $password);
    
     $hash = password_hash($password ,PASSWORD_DEFAULT, ['cost' => 8]);
     
   if(!empty($nombre && $email && $password)){
        $sql ="INSERT INTO `admin`( `email`,`nombre`, `password`) VALUES ('$email','$nombre','$hash');";
        $resultInsert = mysqli_query($conn, $sql); 
        echo '<script>location.href="../admin";</script>';
   }else{
        echo "<script>alertify.notify('Error al registrarse','error','8');</script>";

   }
?>