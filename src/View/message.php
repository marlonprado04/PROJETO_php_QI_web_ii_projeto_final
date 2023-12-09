<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/css/massage.css">
  <title>Mensagem</title>
</head>

<body>

  <div class="guia">
    <a class="b1" href="../Controller/ItemController.php?operation=listAll">Cardapio</a>
    <a class="b1" href="./cadastro-comanda.php">Cadastrar comanda</a>
    <a class="b1" href="../Controller/ComandaController.php?operation=listItems">Detalhes Comanda</a>
  </div>


  <?php
  // Iniciando sessão
  session_start();
  ?>

  <?php
  // Se variável de sessão "msg_error" não estiver vazia, 
  if (!empty($_SESSION["msg_error"])):
    ?>

    <!-- Imprime um parágrafo com a mensagem armazenada na sessão-->
    <div>
      <h1>
        <?= $_SESSION["msg_error"]; ?>
      </h1>
    </div>

    <!-- Depois "destroi" a variável armazenada na sessão -->
    <?php
    unset($_SESSION["msg_error"]);
  endif;
  ?>


  <?php
  // Se variável de sessão "msg_warning" não estiver vazia, 
  if (!empty($_SESSION["msg_warning"])):
    ?>

    <!-- Imprime um parágrafo com a mensagem armazenada na sessão-->
    <div>
      <h1>
        <?= $_SESSION["msg_warning"]; ?>
      </h1>
    </div>

    <!-- Depois "destroi" a variável armazenada na sessão -->
    <?php
    unset($_SESSION["msg_warning"]);
  endif;
  ?>

  <?php

  // Se variável de sessão "msg_sucess"" não estiver vazia
  if (!empty($_SESSION["msg_success"])):
    ?>


    <!-- Imprime um parágrafo com a mensagem armazenada na sessão-->
    <div>
      <h1>
        <?= $_SESSION["msg_success"]; ?>
      </h1>
    </div>

    <?php
    // Depois "destrói" a variável armazenada na sessão
    unset($_SESSION["msg_success"]);
  endif;
  ?>
</body>

</html>