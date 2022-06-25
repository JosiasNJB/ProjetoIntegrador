<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['logado'] = false;

    header('location: index.php');

?>
