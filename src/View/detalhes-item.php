<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detalhes item</title>
  <link rel="stylesheet" href="./src/css/reset.css">
  <link rel="stylesheet" href="./src/css/detalhes-item.css">


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var reduceButton = document.querySelector('.item_reduc');
      var quantityInput = document.querySelector('.item_quantity');
      var sumButton = document.querySelector('.item_sum');
      var form = document.getElementById('itemForm');

      reduceButton.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o envio do formulário
        updateQuantity(-1);
      });

      sumButton.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o envio do formulário
        updateQuantity(1);
      });

      function updateQuantity(change) {
        var currentQuantity = parseInt(quantityInput.value);
        var newQuantity = currentQuantity + change;
        newQuantity = Math.max(newQuantity, 1);
        quantityInput.value = newQuantity;
      }

      // Adiciona um manipulador de evento ao formulário para tratar o envio
      form.addEventListener('submit', function (event) {
        event.preventDefault(); // Impede o envio do formulário
      });
    });

    function validateNumber(input) {
      // Remove qualquer caracter que não seja número
      input.value = input.value.replace(/[^0-9]/g, '');
    }

  </script>

  </script>
</head>

<body>
  
  <button class=b1>Cardapio</button>

  <button class=b1>Cadastrar comanda</button>
        
  <button class=b1>Detalhes item</button>

  <button class=b1>Detalhes comanda</button>
  
   <div class="container">




    <?php
    use Marlon\QiWebIiProjetoFinal\model\Item;

    session_start();

    if (isset($_SESSION["details_of_item"]) && is_array($_SESSION["details_of_item"])):
      $details_of_item = $_SESSION["details_of_item"];
      ?>

      <form method="POST" action="../Controller/ItemComandaController.php?operation=addItem">
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
            <input type="text" name="quantidade" class="item_quantity" value="1" oninput="validateNumber(this)" required>
            <button class="item_sum">+</button>
          </div>


          <textarea class="observacao" placeholder="Observações..." name="observacao"></textarea>

          <a class="item_return" href="../Controller/ItemController.php?operation=listAll">VOLTAR</a>
          <button type="submit" class="item_adds">ADICIONAR</button>

      </form>
    </div>

  <?php else: ?>
    <div>
      <p>Nenhum item localizado com o ID passado!</p>
    </div>
  <?php endif; ?>

  </div>

</body>

</html>