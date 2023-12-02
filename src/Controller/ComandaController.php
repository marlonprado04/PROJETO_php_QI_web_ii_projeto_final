<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Controller;
use Marlon\QiWebIiProjetoFinal\Model\Repository\ComandaRepository;

// Importando autoload
require_once dirname(__DIR__, 2) ."/vendor/autoload.php";

// Iniciando sessão
session_start();

// Switch para selecionar operação passada via GET
switch ($_GET["operation"]) {
  // No caso do parâmetro ser add
  case "add":
    add();
    break;
  //Operação padrão, caso não receba uma pensada inicialmente
  default:
    // Armazena na variável de sessão "msg_error" a mensagem de operação inválida
    $_SESSION["msg_error"] = "Erro. Esta operação é inválida";
    // Redireciona a aplicação para a view de mensagens
    header("location:../View/message.php");
    // Saindo da classe controller
    exit;
}

// Criando função add para redirecionar para o repository da comanda
function add(){

  // Instanciando a ComandaRepository
  $comanda_repository = new ComandaRepository;

  // Criando
}

?>