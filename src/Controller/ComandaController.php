<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Controller;

use Exception;
use Marlon\QiWebIiProjetoFinal\Model\Comanda;
use Marlon\QiWebIiProjetoFinal\Model\ItemComanda;
use Marlon\QiWebIiProjetoFinal\Model\Repository\ComandaRepository;

// Importando autoload
require_once dirname(__DIR__, 2) . "/vendor/autoload.php";

// Iniciando sessão
session_start();

// Switch para selecionar operação passada via GET
switch ($_GET["operation"]) {
  // No caso do parâmetro ser addComanda
  case "addComanda":
    addComanda();
    break;

  // No caso da operação passada ser "addItem"
  case "addItem":
    // Executa método "addItem"
    addItem();
    break;

  // No caso da operação passada ser "addItem"
  case "listItems":
    // Executa método "addItem"
    listItems();
    break;

  //Operação padrão, caso não receba uma pensada inicialmente
  default:
    // Armazena na variável de sessão "msg_error" a mensagem de operação inválida
    $_SESSION["msg_error"] = "Operação inválida na Comanda!!";
    // Redireciona a aplicação para a view de mensagens
    header("location:../View/message.php");
    // Saindo da classe controller
    exit;
}

// Criando função add para redirecionar para o repository da comanda
function addComanda()
{
  // Verificando se o método POST está vazio
  if (empty($_POST)) {
    // Se estiver vazio armazena mensagem de erro e redireciona para tela de mensagem
    $_SESSION["msg_error"] = "Erro no método addcomanda da ComandaController (POST VAZIO)!";
    // Redirecionando para tela de mensagem
    header("location:../View/message.php");
    // Encerra essa classe
    exit;
  }

  // Validando os dados passados pelo POST através do formulário
  // Instanciando a classe Comanda com o número da comanda passado
  $comanda = new Comanda($_POST["numero_comanda"]);

  try {
    // Instanciar ComandaRepository para utilizar suas funções de acesso ao banco
    $comanda_repository = new ComandaRepository();

    // Armazena o resultado da chamada do método de adicionar comanda no repositorio
    $result = $comanda_repository->addComanda($comanda);

    // Verifica se resultado der positivo
    if ($result) {
      // Armazena mensagem de sucesso
      $_SESSION["msg_success"] = "Comanda cadastrada com sucesso!!!";

      // Armazena o número e o ID da comanda na sessão atual 
      $_SESSION["numero_comanda"] = $comanda->numeroComanda;
      $_SESSION["id_comanda"] = $comanda->id;

    } else {
      // Se não, armazena mensagem de atenção
      $_SESSION["msg_warning"] = "Lamento, não foi possível registrar a comanda!!!";
    }
  } catch (Exception $e) {
    // Armazena mensagem de erro na sessão 
    $_SESSION["msg_error"] = "Ops, houve um erro insperado em nossa base de dados!!!";
  } finally {
    // Redireciona para a tela de mensagem
    header("location:../View/message.php");
    exit;
  }
}

// Função para adicionar item na comanda
function addItem()
{
  // Verificando se o método POST está vazio
  if (empty($_POST)) {
    // Se estiver vazio armazena mensagem de erro e redireciona para tela de mensagem
    $_SESSION["msg_error"] = "Erro no método addItem da ComandaController (POST VAZIO)!";
    // Redirecionando para tela de mensagem
    header("location:../View/message.php");
    // Encerra essa classe
    exit;
  }

  // Verificando se número da comanda NÃO está setado
  else if (!isset($_SESSION["numero_comanda"])) {
    // Se variável NÃO foi setada, então redireciona para a tela de cadastro de comanda
    header("location:../View/cadastro-comanda.php");
    // Encerra operação dessa classe
    exit;
  }

  // Instanciando a classe ItemComanda com os valores passados
  $item_comanda = new ItemComanda(
    $_POST["item_id"],
    $_SESSION["id_comanda"],
    $_POST["item_quantity"],
    $_POST["item_quantity"] * $_POST["item_price"],
    $_POST["item_observation"],
  );

  try {
    // Instanciando ComandaRepository para utilizar suas funções de acesso ao banco
    $comanda_repository = new ComandaRepository();

    // Armazenando o resultado da chamada do método de adicionar item na comanda, no repositorio
    $result = $comanda_repository->addItem($item_comanda);

    // Verifica se resultado der positivo
    if ($result) {
      // Armazena mensagem de sucesso
      $_SESSION["msg_success"] = "Item cadastrado com sucesso!!!";
    } else {
      // Se não, armazena mensagem de atenção
      $_SESSION["msg_warning"] = "Lamento, não foi possível registrar a comanda!!!";
    }
  } catch (Exception $e) {
    // Armazena mensagem de erro na sessão 
    $_SESSION["msg_error"] = "Ops, houve um erro insperado em nossa base de dados!!!";
  } finally {
    // Redireciona para a tela de mensagem
    header("location:../View/message.php");
    exit;
  }
}

function listItems(){

}

?>