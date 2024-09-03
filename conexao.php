<?php
    $servidor = "localhost:3307";
    $user = "root";
    $pass = "";
    $db = "provaCRUD";

    $conn = new  mysqli($servidor, $user, $pass, $db);

    if($conn){
        echo ("Boa! ");
    }

?>