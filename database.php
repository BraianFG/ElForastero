<?php  
  $servername = $_ENV['DBHOST'];
  $database = $_ENV['DBNAME'];
  $username = "$_ENV['DBUSER']";
  $password = "$_ENV['DBPASS'];
   
  $conn = mysqli_connect($servername, $username, $password, $database);
 
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  
  }else{
      
  }
 ?>
