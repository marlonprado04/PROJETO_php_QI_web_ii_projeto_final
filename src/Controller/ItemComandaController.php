<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Controller;

use Marlon\QiWebIiProjetoFinal\Model\ItemComanda;
use Marlon\QiWebIiProjetoFinal\Model\Repository\ComandaRepository;

// Importando autoload
require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

// Iniciando sessão
session_start();

// Selecionando parâmetro passado via GET dos menus
switch ($_GET["operation"]) {
  // No caso da operação passada ser "addItem"
  case "addItem":
    // Executa método "addItem"
    addItem();
    break;
  default:
    // Por padrão, redireciona para a tela de mensagem dizendo que a operação é inválida através da variável de sessão
    $_SESSION["msg_error"] = "Operação inválida no ItemComandaController!!!";
    header("location:../View/message.php");
    exit;
}

// Função para adicionar item na comanda
function addItem()
{
  // Verificando se o método POST está vazio
  if (empty($_POST)) {
    // Se estiver vazio armazena mensagem de erro e redireciona para tela de mensagem
    $_SESSION["msg_error"] = "Erro no método addItem da ItemComandaController!";
    // Redirecionando para tela de mensagem
    header("location:../View/message.php");
    // Encerra essa classe
    exit;
  }
// Verificando se a variável de sessão com número da comanda NÃO está setada
else if(!isset($_SESSION["numero_comanda"])){
  // Se não estiver, redireciona para o comanda controller e passa a operação para cadastrar comanda e item no processo)
  header("location:./ComandaController.php?operation=addCamandaComItem")
}


  // Validando os dados passados pelo POST através do formulário
  // Instanciando a classe ItemComanda com os valores passados
  $item_comanda = new ItemComanda();

  // Tentando...
  try {
    // Instanciar ComandaRepository para utilizar suas funções de acesso ao banco
    $comanda_repository = new ComandaRepository();

    // Armazena o resultado da chamada do método de adicionar comanda no repositorio
    $result = $comanda_repository->addComanda($comanda);

    // Verifica se resultado der positivo
    if ($result) {
      // Armazena mensagem de sucesso
      $_SESSION["msg_success"] = "Comanda cadastrada com sucesso!!!";

      // Armazena o número da comanda (único) na sessão atual 
      $_SESSION["numero_comanda"] = $comanda->numeroComanda;
    } else {
      // Se não, armazena mensagem de atenção
      $_SESSION["msg_warning"] = "Lamento, não foi possível registrar a comanda!!!";
    }
  }

  // No caso de erro...
  catch (Exception $e) {
    // Armazena mensagem de erro na sessão 
    $_SESSION["msg_error"] = "Ops, houve um erro insperado em nossa base de dados!!!";
  }

  // Independente de dar certo ou errado...
  finally {
    // Redireciona para a tela de mensagem
    header("location:../View/message.php");
    exit;
  }
}

?>