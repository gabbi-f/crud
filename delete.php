</<?php 

    include"conexao.php";

    $id = $_GET['id'];

    $delete = "DELETE FROM professor WHERE id = $id";

    $result = $conn->query($delete);

    header('location: read.php');

    exit();

?>