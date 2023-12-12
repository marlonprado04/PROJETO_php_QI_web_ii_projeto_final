<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Item</title>
    <link rel="stylesheet" href="src/css/cadastro-item.css">
</head>

<body>

    <h2 class=titulo >Cadastro de Item</h2>

    <form action="../Controller/ItemController.php?operation=addItem" method="POST">
        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <br>

        <!-- Campo Preço -->
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required>

        <br>

        <!-- Campo Descrição -->
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4" cols="50"></textarea>

        <br>

        <!-- Campo Imagem (Link para Web) -->
        <label for="imagem">Link da Imagem:</label>
        <input type="url" id="imagem" name="imagem" placeholder="http://example.com/imagem.jpg" required>

        <br>

        <div class=botao-cadastro>
            <input  type="submit" value="Cadastrar Item">
        </div> <!-- Botão de Envio -->
         
    </form>
       
</body>

</html>