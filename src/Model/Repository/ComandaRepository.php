<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model\Repository;

// Utilizando o PDO
use PDO;

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

  public function add()
  {
  }
}
?>