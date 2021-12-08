  <?php
        if(isset($_GET['vaciar'])) {
        	unset($_COOKIE['carrito']);
        	header('Location:/');
        }
?>