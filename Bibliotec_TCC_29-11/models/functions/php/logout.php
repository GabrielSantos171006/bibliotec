<?php
    if(!isset($_SESSION)){
        session_start();
    }
    session_destroy();
    $_SESSION['user_type'] = 'deslogado';
    header("Location: ../../../views/html/index.html");
?>