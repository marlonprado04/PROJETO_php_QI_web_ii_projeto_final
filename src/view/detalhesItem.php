<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detalhes item</title>
  <link rel="stylesheet" href="./src/css/reset.css">
  <link rel="stylesheet" href="./src/css/detalhesItem.css">

</head>

<body>

  <header>
    <ol>
      <li> <a href="../../index.php">Index</a></li>
      <li> <a href="cardapio.php">Cardapio</a></li>
      <li> <a href="cadastroComanda.php">Cadastro Comanda</a></li>
      <li> <a href="#">Detalhes Item</a></li>
      <li> <a href="detalhesComanda.php">Detalhes Comanda</a></li>
    </ol>
  </header>

  <div class="container">
    <form action="#">
      <div class="div_image">
        <img class="item_image"
          src="https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/M6HASPARCZHYNN4XTUYT7H6PTE.jpg&w=1200">
      </div>

      <div class="conteudo">
        <h3 class="item_name">PETRÓPOLIS</h3>
        <p class="item_description">Pão,Tomate,Alface,Queijo Cheddar,Carne Bovina E Maionese. </p>
        <p class="item_price "> R$ 27,90 </p>

        <div class="botoes">
          <button class="item_reduc">-</button>
          <button class="item_quantity">1</button>
          <button class="item_sum">+</button>
        </div>

        <textarea class="descricao" class aria-placeholder="area_obs" placeholder="observações"></textarea>

        <button class="item_retorna">VOLTAR</button>
        <button class="item_adds">ADICIONAR</button>

      </div>
    </form>
  </div>
  </div>
  </div>
</body>

</html>