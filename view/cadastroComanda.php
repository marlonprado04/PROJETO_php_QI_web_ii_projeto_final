<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/cadastroComanda.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Red+Hat+Display:wght@500;700&display=swap"
        rel="stylesheet">

    <title>Cadastro de comanda</title>
</head>

<body>

    <header>
        <ol>
            <li> <a href="../index.php">Index</a></li>
            <li> <a href="cardapio.php">Cardapio</a></li>
            <li> <a href="#">Cadastro Comanda</a></li>
            <li> <a href="detalhesItem.php">Detalhes Item</a></li>
            <li> <a href="detalhesComanda.php">Detalhes Comanda</a></li>
        </ol>
    </header>

    <main>
        <img class="logo-comanda" src="./src/img/logo.png" alt="">

        <div class="info">
            <div class="numero-comanda">
                <label for="Número da comanda">Número da comanda</label>
                <input type="number" name="numero_comanda" id="numero_comanda" placeholder="Digite a sua comanda">
            </div>

            <div class="numero-comanda">
                <label for="Número da mesa">Número da mesa</label>
                <input type="number" name="numero_mesa" id="numero_mesa" placeholder="Digite a sua mesa">
            </div>
            <input class="botao" type="button" value="Adicionar">
        </div>

    </main>

</body>

</html>