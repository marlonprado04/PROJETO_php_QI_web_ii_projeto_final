<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model\Repository;

use PDO;

// Incluindo arquivo de configuração de banco (com constantes para acesso)
require_once dirname(__DIR__, 3) . "/Config.php";


// Definindo nome da classe
class Connection
{

  // Definindo variável para conexão
  private static $connection;

  // Definindo construtor vazio
  public function __construct()
  {
  }

  // Definindo variável para realizar a conexão
  public static function getConnection()
  {
    // Se o atributo connection estiver nullo 
    if (self::$connection == null) {
      // Atribui para o atributo connection da própria classe uma nova instância do PDO
      // passando as constantes definidas no Config.php
      self::$connection = new PDO(DSN, USER, PASSWORD);
    }

    // Retorna a própria connection
    return self::$connection;
  }


}

?>