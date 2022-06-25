<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include 'conexao.php';

    if(isset($_REQUEST['id'])){
        $_SESSION['id2'] = $_REQUEST['id'];

    }

    $req = $_SESSION['id2'];

    $sql = "DELETE FROM user WHERE id_user = $req";

    $del = mysqli_query($connect, $sql);

    mysqli_close($connect);

    header('location: usuarios.php');

?>
