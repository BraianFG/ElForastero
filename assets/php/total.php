<?php
session_start();
include '../../database.php';
$id = $_SESSION["id"];
    
   $total=filter_var($_POST['total'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $total);
    
   if($id ==""){
        header("Location:../../comprar");
   }else{
        header("Location:../../comprar");
   }
   
   $sql ="UPDATE `ventas` SET `total` = '$total' WHERE `ventas`.`UsuarioID` = '$id'";
   
   $sql2 = "INSERT INTO `ventas`(`UsuarioID`, `total`,`vendedor`) VALUES ('$id','$total','El Forastero')";
   $resultInsert = mysqli_query($conn, $sql);   
   $resultInsert = mysqli_query($conn, $sql2);  
   mysqli_close($conn);   
?>