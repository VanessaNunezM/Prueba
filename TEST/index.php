<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: pagina3.html');
    }else{
        header('location: login.php');
    }


?>