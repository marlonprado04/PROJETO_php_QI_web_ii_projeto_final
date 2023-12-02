<?php

// Definindo o namespace
namespace Marlon\QiWebIiProjetoFinal\Model\Repository;

// Importando a classe PDO
use PDO;

// Definindo classe ItemRepository
class ItemRepository
{

  // Criando variável para conexão
  private $connection;

  // Criando construtor que gera uma conexão com o banco para a classe
  public function __construct()
  {
    $this->connection = Connection::getConnection();
  }


   // Função para buscar todos os itens na base de dados
  public function listAll(){
    // Cria uma variável para armazenar a busca dentro do banco
    $stmt = $this->connection->query("select * from item");

    // Retornando uma array associativo, ou seja, lista de elementos do banco de dados
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>