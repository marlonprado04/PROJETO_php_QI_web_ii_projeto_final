<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Conectar ao banco de dados
    $servername = "localhost";  // Se o MySQL estiver na mesma máquina
    $username = "root";         // Usuário padrão do XAMPP
    $password = "";             // Senha padrão vazia no XAMPP
    $bancoDados = "poa_burguer";

    $conn = new mysqli($servername, $username, $password, $bancoDados);

    if($conn -> connect_error) {
      die("". $conn -> connect_error);
    }

    $numero_mesa= $_POST["numero_mesa"];

    $sql = "INSERT INTO mesa (numero_mesa) VALUES ($numero_mesa)";

    if($conn->query($sql) === TRUE) {
      echo '<h1 style="color:blue">Inserido com sucesso!</h1>';
    }else{
      echo '<h1 style="color:red"> Erro ao tentar inserir! </h1>';
    }

    $conn->close();

    
}



?>