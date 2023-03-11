<?php
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
 
foreach ($_FILES["archivo"]['tmp_name'] as $key => $tmp_name) {  
       $nombre = $_FILES['archivo']['name'][$key];
      $guardado = $_FILES['archivo']['tmp_name'][$key];
  
  
      if(!file_exists('../')){
          mkdir('../../images/' ,0777,true);
            
          if(file_exists('../../')){
               if( move_uploaded_file($guardado, '../../images/' .$nombre)){

               }
                 header('Location:/');
             }else{
                  header('Location:../');
             }
    }else{
       if(move_uploaded_file($guardado, '../../images/' .$nombre)){
              header('Location:../');
             }else{
                  header('Location:../');
             } 
       }
 }    
 
?>
