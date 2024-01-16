 <?php
 include '../../../database.php' ; 
 
   $cantidad = filter_var($_POST['cantidad'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cantidad);
    
    $id = filter_var($_POST['idproducto'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql2 = "UPDATE `reacciones` SET `likes`='$cantidad' WHERE `idproducto`='$id'";
    $resultInsert2 = mysqli_query($conn, $sql2);
     
?>

