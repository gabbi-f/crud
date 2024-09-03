<?php
    include "conexao.php";

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    $update = "UPDATE professor SET nome = '$nome' , email = '$email' WHERE id = $id";

    $result = $conn->query($update);

    if($result === true){
        echo "atualizado com sucesso!";
    }else{
        echo "Erro!";
    }
?>

<a href="read.php"> voltar</a> 