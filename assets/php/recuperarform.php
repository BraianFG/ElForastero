 <?php
      require "../../database.php";
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
      $hash = password_hash($password ,PASSWORD_DEFAULT, ['cost' => 8]);
      
      $sql ="UPDATE `usuarios_recuperar` SET `password`='$hash' WHERE `email`='$email';";
      
    if(strlen($password)<8){
        echo "<script>alertify.notify('Ingrese una contraseña con un mínimo de 8 caracteres','error','4');</script>";
    }
    
      $resultInsert = mysqli_query($conn, $sql);
  if(empty($password)){
        echo "<script>alertify.notify('Escriba su contraseña nueva','error',5)</script>";
  }else{
  }
?>