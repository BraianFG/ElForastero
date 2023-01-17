<?php
   $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    unlink("datos3-$id.txt");
?>