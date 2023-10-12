 <?php
      require "../../database.php";
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
      $hash2 = password_hash($password ,PASSWORD_DEFAULT, ['cost' => 8]);
      
      $sql ="UPDATE `usuarios` SET `password`='$hash2' WHERE `email`='$email';";
      $resultInsert = mysqli_query($conn, $sql);
  if(empty($password)){
        echo "<script>alertify.notify('Escriba su contraseña nueva','error',5)</script>";
  }else{
  }
?>