
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Mesa</title>
</head>
<body>

<h2>Cadastro de Mesa</h2>

<form method="post" action="fazAlgo.php">
    <label for="numero_mesa">Número da Mesa:</label>
    <input type="number" name="numero_mesa" required>

    <button type="submit">Cadastrar Mesa</button>
    <h1><a href="listaMesa.php" name='listar'>LISTAR</a></h1>
    <h1><a href="removeMesa.php" name='deletar'>DELETAR</a></h1>


</form>



</body>
</html>
