<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro</title>
</head>
<body>
    <a href="read.php"> < voltar</a>
    <br>
    <br>
    <form action="update.php" method="get">
        <label type="">id</label>
        <input type="text" placeholder="id" name="id">

        <label type=""> Nome do professor</label>
        <input type="text" placeholder="nome" name="nome">

        <label for="nota">email</label>
        <input type="text" placeholder="email" name="email">

        <input type="submit" value="Atualizar">

    </form>
</body>
</html>