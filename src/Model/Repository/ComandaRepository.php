<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model\Repository;

// Utilizando o PDO
use PDO;

use Marlon\QiWebIiProjetoFinal\Model\Comanda;

// Importando autoload
require_once dirname(__DIR__, 3)."/vendor/autoload.php";

// Definindo classe
class ComandaRepository {

  // Definindo atributo da classe para conexão
  private $connection;

  // Defindino construtor para gerar a connection
  public function __construct() {
    // Definindo que a variável connection desta classe
    // recebe uma nova conexão a partir da classe Connection e do método estático
    // getConnection
    $this->connection = Connection::getConnection();
  }


  // Função para adicionar comanda no banco de dados
  public function addComanda($comanda) {
    // Criando variável para armazenar o estado da conexão e instrução SQL (statemant)
    $stmt = $this->connection->prepare("INSERT INTO comanda (numero_comanda) VALUES (?);");

    // Passando o número da comanda através do método bindParam
    // e tratando como inteiro através do método estático do PDO
    $stmt->bindParam(1, $comanda->numeroComanda);

    // Armazena o resultado da execução da inserção no banco
    $result = $stmt->execute();

    // Recuperando o último ID inserido no banco e armazenando no objeto de comanda passado como parâmetro
    $comanda->id = $this->connection->lastInsertId();

    // Retornando o resultado da execução do código acima
    return $result;
  }

  // Função para adicionar um item na comanda
  public function addItem($item_comanda) {
    // Criando variável para armazenar a instrução SQL (statement)
    $stmt = $this->connection->prepare("INSERT INTO item_comanda VALUES (null,?, ?, ?, ?, ?);");

    // Passando os valores do item da comanda através do método bindParam
    $stmt->bindParam(1, $item_comanda->id_item,PDO::PARAM_INT);
    $stmt->bindParam(2, $item_comanda->id_comanda,PDO::PARAM_INT);
    $stmt->bindParam(3, $item_comanda->quantidade,PDO::PARAM_INT);
    $stmt->bindParam(4, $item_comanda->preco_total);
    $stmt->bindParam(5, $item_comanda->observacao);

    // Armazena o resultado da execução da inserção no banco
    return $stmt->execute();
  }
}
?>