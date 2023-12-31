<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/cadastro-comanda.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Red+Hat+Display:wght@500;700&display=swap"
        rel="stylesheet">




    <title>Cadastro de comanda</title>
</head>

<body>

    <div class="guia">
        <a class="b1" href="../Controller/ItemController.php?operation=listAll">Cardapio</a>
        <a class="b1" href="../Controller/ComandaController.php?operation=listItems">Detalhes comanda</a>
    </div>


    <main>


        <form action="../Controller/ComandaController.php?operation=addComanda" method="POST" class="info">

            <img class="logo-comanda" src="./src/img/logo.png" alt="">

            <div class="numero-comanda">
                <label for="Número da comanda">Número da comanda</label>
                <input type="number" name="numero_comanda" id="numero_comanda" placeholder="Digite a sua comanda">
            </div>
            <button class="botao" type="submit">Adicionar</button>
        </form>

    </main>

</body>

</html>