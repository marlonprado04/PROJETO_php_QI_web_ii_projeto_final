<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/cardapio.css">

  <title>CARDAPIO POA-BURGUER</title>
</head>

<body>


  <div class="container">
    <h1>POA-BURGUER: Explorando Sabores Exclusivos em Cada Mordida</h1>

    <main>

      <?php

      use Marlon\QiWebIiProjetoFinal\model\Item;

      session_start();
      ?>

      <?php

      if (empty($_SESSION["list_of_itens"])):
        ?>

        <div>
          <p>Nenhum item cadastrado na base de dados!</p>
        </div>

        <?php

      endif;

      foreach ($_SESSION["list_of_itens"] as $item):
        ?>
        <div class="item_container">
          <div class="img_container">
            <img class="img" src="<?= $item["imagem"] ?>">
          </div>
          <h3>
            <?= $item["nome"] ?>
          </h3>
          <p>R$
            <?= $item["preco"] ?>
          </p>
          <button>DETALHES</button> 
          
          <button>ADICIONAR</button>
        </div>
        <?php
      endforeach;

      ?>

    </main>
  </div>

</body>

</html>