<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detalhes item</title>
  <link rel="stylesheet" href="./src/css/reset.css">
  <link rel="stylesheet" href="./src/css/detalhes-item.css">

  <!-- Script para atualizar o valor de acordo com o clique -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var reduceButton = document.querySelector('.item_reduc');
      var quantityButton = document.querySelector('.item_quantity');
      var sumButton = document.querySelector('.item_sum');
      var form = document.getElementById('itemForm'); // Adicione um id ao formulário

      reduceButton.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o envio do formulário
        updateQuantity(-1);
      });

      sumButton.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o envio do formulário
        updateQuantity(1);
      });

      function updateQuantity(change) {
        var currentQuantity = parseInt(quantityButton.textContent);
        var newQuantity = currentQuantity + change;
        newQuantity = Math.max(newQuantity, 1);
        quantityButton.textContent = newQuantity;
      }

      // Adiciona um manipulador de evento ao formulário para tratar o envio
      form.addEventListener('submit', function (event) {
        event.preventDefault(); // Impede o envio do formulário
        // Adicione aqui o código para lidar com o envio do formulário, se necessário
      });
    });
  </script>
  </script>
</head>

<body>

  <div class="container">

    <?php
    use Marlon\QiWebIiProjetoFinal\model\Item;

    session_start();

    if (isset($_SESSION["details_of_item"]) && is_array($_SESSION["details_of_item"])):
      $details_of_item = $_SESSION["details_of_item"];
      ?>

      <div class="div_image">
        <img class="item_image" src="<?= $details_of_item["imagem"] ?>">
      </div>

      <div class="conteudo">
        <h3 class="item_name">
          <?= $details_of_item["nome"] ?>
        </h3>
        <p class="item_description">
          <?= $details_of_item["descricao"] ?>
        </p>
        <p class="item_price "> R$
          <?= $details_of_item["preco"] ?>
        </p>

        <div class="botoes">
          <button class="item_reduc">-</button>
          <button class="item_quantity">1</button>
          <button class="item_sum">+</button>
        </div>

        <textarea class="descricao" class aria-placeholder="area_obs" placeholder="observações"></textarea>

        <a class="item_return" href="../Controller/ItemController.php?operation=listAll">VOLTAR</a>
        <a class="item_adds" href="../Controller/ComandaController.php?operation=addItem">ADICIONAR</a>
      </div>

    <?php else: ?>
      <div>
        <p>Nenhum item localizado com o ID passado!</p>
      </div>
    <?php endif; ?>

  </div>

</body>

</html>