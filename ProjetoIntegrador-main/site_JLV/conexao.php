<?php

    //
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $db_name = "banco_NEABI";


    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if (mysqli_connect_error()){
        echo " Conection error: ". mysqli_connect_error();
    }


    //$conn = new mysqli('localhost', 'root', 'usbw', 'test2') or die('Conection error');

?>
