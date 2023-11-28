<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
    $servername = "localhost";  // Se o MySQL estiver na mesma máquina
    $username = "root";         // Usuário padrão do XAMPP
    $password = "";             // Senha padrão vazia no XAMPP
    $dbname = "poa_burguer";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Preparar e executar a consulta SQL para inserir dados na tabela 'mesa'
    $numero_mesa = $_POST['numero_mesa'];

    $sql = "INSERT INTO mesa (numero_mesa) VALUES ($numero_mesa)";

    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Mesa</title>
</head>
<body>

<h2>Cadastro de Mesa</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero_mesa">Número da Mesa:</label>
    <input type="number" name="numero_mesa" required>

    <button type="submit">Cadastrar Mesa</button>
</form>

</body>
</html>
