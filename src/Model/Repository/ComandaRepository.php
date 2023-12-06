<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model\Repository;

// Utilizando o PDO
use PDO;

use Marlon\QiWebIiProjetoFinal\Model\Comanda;

// Importando autoload
require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

// Definindo classe
class ComandaRepository
{

  // Definindo atributo da classe para conexão
  private $connection;

  // Defindino construtor para gerar a connection
  public function __construct()
  {
    // Definindo que a variável connection desta classe
    // recebe uma nova conexão a partir da classe Connection e do método estático
    // getConnection
    $this->connection = Connection::getConnection();
  }


  // Função para adicionar comanda no banco de dados

  
  public function add($comanda)
  {
    // Criando variável para armazenar o estado da conexão e instrução SQL (statemant)
    $stmt = $this->connection->prepare("INSERT INTO comanda (numero_comanda) VALUES (?);");

    // Passando o número da comanda através do método bindParam
    // e tratando como inteiro através do método estático do PDO
    $stmt->bindParam(1, $comanda->numeroComanda);

    // Retornando o resultado da execução do código acima
    return $stmt->execute();
  }
}
?>