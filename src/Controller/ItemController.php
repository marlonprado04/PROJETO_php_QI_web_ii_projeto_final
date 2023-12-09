<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Controller;

use Exception;
use Marlon\QiWebIiProjetoFinal\Model\Item;
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

  // No caso da operação passada ser "showDetails"
  case "showDetails":
    // Executa método "showDetails"
    showDetails();
    break;

  case "addItem":
    addItem();
    break;
  default:
    // Por padrão, redireciona para a tela de mensagem dizendo que a operação é inválida através da variável de sessão
    $_SESSION["msg_error"] = "Operação inválida no Item!!!";
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

// Declarando função para mostrar detalhes
function showDetails()
{
  // Verificando se o parâmetro id foi fornecido
  if (isset($_GET["id"])) {
    // Instanciando o repositório do item para acessar valores do banco
    $item_repository = new ItemRepository();

    // Criando variável para armazenar os detalhes do item
    $details_of_item = $item_repository->showDetails($_GET["id"]);

    // Verificando se a consulta não retornou algo vazio
    if (!empty($details_of_item)) {
      // Armazenando os detalhes do item em uma variável de sessão
      $_SESSION["details_of_item"] = $details_of_item[0];

      // Redirecionando para a tela de detalhes
      header("location:../View/detalhes-item.php");
      exit;
    } else {
      // Tratamento de erro, id não fornecido
      $_SESSION["msg_error"] = "Falha ao tentar acessar os detalhes do item.";

      // Redirecionando para mensagem
      header("location:../View/message.php");
    }
  } else {
    // Tratamento de erro, id não fornecido
    $_SESSION["msg_warning"] = "ID do item não fornecido para demonstrar detalhe.";

    // Redirecionando para mensagem
    header("location:../View/message.php");
  }
}

function addItem()
{
  if (empty($_POST)) {

    $_SESSION["msg_error"] = "Erro. O POST está vazio no addItem";

    header("location:../View/message.php");

    exit;
  }

  $item = new Item($_POST["nome"], $_POST["preco"]);
  $item->descricao = $_POST["descricao"];
  $item->imagem = $_POST["imagem"];

  $item_repository = new ItemRepository();

  try{
    $item_repository->addItem($item);

    $_SESSION["msg_success"] = "Item cadastrado com sucesso!";
  }
  catch(Exception $error){
    $_SESSION["msg_error"] = "Deu o seguinte erro: <br> $error";
  }
  finally{
    header("location:../View/message.php");
    exit;
  }

}

?>