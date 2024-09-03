<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <form action="create.php" method="get">
        <label for="">nome do professor</label> <br>
        <input type= "text" name="nome"> 
        <br>

        <label for="">email</label> 
        <br>
        <input type= "text" name="email"> 
        <br>

        <input type= "submit" value="cadastrar"> 
        <br>    
        <a href="read.php"> listar</a> 

    </form>
</body>
</html>