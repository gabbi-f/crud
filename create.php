<?php
    include "conexao.php";

    $nome = $_GET['nome'];
    $email = $_GET['email'];

    $insert = "INSERT INTO professor (id, nome, email) VALUES (null, '$nome', '$email')";

    $resultado = $conn->query($insert);

    if($resultado == TRUE){
        echo "Professor cadastrado!";
    }else{
        echo "Erro ao cadastrar";
    }

?>