<?php

// Definindo o namespace
namespace Marlon\QiWebIiProjetoFinal\Model\Repository;

// Importando a classe PDO
use PDO;

// Adicionando o autoload
require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

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
  public function listAll()
  {
    // Cria uma variável para armazenar a busca dentro do banco
    $stmt = $this->connection->query("select * from item;");

    // Retornando uma array associativo, ou seja, lista de elementos do banco de dados
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Função para buscar os detalhes do item com base no id passado
  public function showDetails($id)
  {
    // Criando variável para armazenar busca do banco
    $stmt = $this->connection->query("select * from item where id=$id;");

    // Passando o parâmetro através do método bindParam
    // $stmt->bindParam(1, $id, PDO::PARAM_INT);

    // Retornando um array associativo a partir da execução da query 
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function addItem($item)
  {
    $stmt = $this->connection->prepare("INSERT INTO item (nome, preco, descricao, imagem) VALUES (?, ?, ?, ?)");

    $stmt->bindParam(1, $item->nome);
    $stmt->bindParam(2, $item->preco);
    $stmt->bindParam(3, $item->descricao);
    $stmt->bindParam(4, $item->imagem);

    return $stmt->execute();
  }
}

?>