<?php  
  $servername = $_ENV['localhost'];
  $database = $_ENV['u819747409_braianfg287'];
  $username = "$_ENV['u819747409_braianfg287']";
  $password = "$_ENV['123456789Abc'];
   
  $conn = mysqli_connect($servername, $username, $password, $database);
 
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  
  }else{
      
  }
 ?>
