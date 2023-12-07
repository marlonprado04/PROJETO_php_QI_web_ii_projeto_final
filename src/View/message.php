<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mensagem</title>
</head>

<body>



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
      <p>
        <?= $_SESSION["msg_error"]; ?>
      </p>
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
      <p>
        <?= $_SESSION["msg_warning"]; ?>
      </p>
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
    <!-- Imprime um parágrafo com a mensagem armazenada na sessão -->
    <div>
      <p>
        <?= $_SESSION["msg_success"] ?>
      </p>

      <p>Observacao:
        <?= $_SESSION["item_observation"]  ?>
      </p>
      <p>Preço:
        <?= $_SESSION["item_price"]  ?>
      </p>
      <p>Quantidade:
        <?=  $_SESSION["item_quantity"] ?>
      </p>
      <p>ID:
        <?= $_SESSION["item_id"] ?>
      </p>

    </div>
    <?php
    // Depois "destrói" a variável armazenada na sessão
    unset($_SESSION["msg_success"]);
  endif;
  ?>
</body>

</html>