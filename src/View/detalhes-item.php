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
  <div class="guia">
   <button class=b1>Cardapio</button>

  <button class=b1>Cadastrar comanda</button>
        
  <button class=b1>Detalhes item</button>

  <button class=b1>Detalhes comanda</button>
</div>
 
  
   <div class="container">




    <?php
    use Marlon\QiWebIiProjetoFinal\model\Item;

    // Iniciando uma sessão para fazer uso das variáveis
    session_start();

    // Verificando se variável de sessao "details of item" está setada e se é um array associativo criado pelo banco
    if (isset($_SESSION["details_of_item"]) && is_array($_SESSION["details_of_item"])):
      // No caso de sim, armazena esse array em uma variável
      ?>

      <form method="POST" action="../Controller/ComandaController.php?operation=addItem">
        <div class="div_image">
          <img class="item_image" src="<?= $_SESSION["details_of_item"]["imagem"] ?>">
        </div>

        <div class="conteudo">
          <h3 class="item_name">
            <?= $_SESSION["details_of_item"]["nome"] ?>
          </h3>
          <p class="item_description"><?= $_SESSION["details_of_item"]["descricao"] ?></p>
          <input readonly name="item_price" class="item_price" value="<?= $_SESSION["details_of_item"]["preco"] ?>" ></input>

          <input type="hidden" name="item_id" value="<?= $_SESSION["details_of_item"]["id"] ?>">

          <div class="botoes">
            <button class="item_reduc">-</button>
            <input type="text" name="item_quantity" class="item_quantity" value="1" oninput="validateNumber(this)" required>
            <button class="item_sum">+</button>
          </div>


          <textarea class="observacao" placeholder="Observações..." name="item_observation"></textarea>

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