<?php
session_start();
require_once 'database.php';
  
 $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
 mysqli_real_escape_string($conn, $email);
 
$password =filter_var($_POST['password'], FILTER_SANITIZE_STRING);
 mysqli_real_escape_string($conn , $password);
 
    $query = "SELECT * FROM admin WHERE email= '$email'";
    $result = mysqli_query($conn, $query);
    
    if(!empty($result) AND (mysqli_num_rows($result)==1)){
        $fila = mysqli_fetch_array($result);
        if(password_verify($password, $fila['password'])) {
               echo '<script>location.href = "index"</script>';
             $_SESSION["id_admin"] = $fila['id'];
       }else{
        }
    }else{
       echo "<script>alertify.notify('Error al acceder,vuelva a intentarlo','error')</script>";

    }
    
?>