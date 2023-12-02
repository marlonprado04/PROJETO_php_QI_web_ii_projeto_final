<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Controller;

use Marlon\QiWebIiProjetoFinal\Model\Repository\ItemRepository;

// Importando autoload
require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

// Iniciando sessão
session_start();

// Selecionando parâmetro passado via GET dos menus
switch ($_GET["operation"]) {
  // No caso da operação passada ser "listAll"
  case "listAll":
    // Executa método "listAll"
    listAll();
    break;
  default:
    // Por padrão, redireciona para a tela de mensagem dizendo que a operação é inválida através da variável de sessão
    $_SESSION["msg_error"] = "Operação inválida!!!";
    header("location:../View/message.php");
    exit;
}

// Declarando função para listar itens
function listAll()
{
  // Declara variável para armazenar uma nova instância de ItemRepository
  $item_repository = new ItemRepository();

  // Armazena valor do método listAll no ItemRepository dentro da variável de sessão list_of_itens
  $_SESSION["list_of_itens"] = $item_repository->listAll();

  // Redireciona para o cardápio
  header("location:../View/cardapio.php");
}

?>