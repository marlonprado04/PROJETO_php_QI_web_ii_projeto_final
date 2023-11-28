<?php

// Conectar ao banco de dados
$servername = "localhost";  // Se o MySQL estiver na mesma máquina
$username = "root";         // Usuário padrão do XAMPP
$password = "";             // Senha padrão vazia no XAMPP
$bancoDados = "poa_burguer";

$conn = new mysqli($servername, $username, $password, $bancoDados);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para selecionar todos os registros da tabela 'mesa'
$sql = "SELECT * FROM mesa";

// Executar a consulta
$result = $conn->query($sql);

// Verificar se a consulta retornou resultados
if ($result-> num_rows > 0) {
    // Exibir os resultados em uma tabela HTML
    echo "<h1 style='color: blue'>Registros da tabela mesa:</h1>";

    echo "<table border='1'>";
    
    echo "<tr>
    <th>ID</th>
    <th>Numero</th>
    </tr>";

    // Loop através dos resultados e exibir cada linha na tabela
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["numero_mesa"] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "<h1 style='color: red'>Nenhum registro encontrado na tabela mesa.</h1>";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
