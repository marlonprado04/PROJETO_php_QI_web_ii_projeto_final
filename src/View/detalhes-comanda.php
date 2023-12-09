<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Comanda</title>
    <link rel="stylesheet" href="./src/css/detalhes-comanda.css">
</head>

<body>

    <?php
    session_start();
    ?>

    <div class=guia>
        <a class="b1" href="../Controller/ItemController.php?operation=listAll">Cardapio</a>
    </div>

    <div class="foto">
        <img src="./src/img/logo.png" alt="">
    </div>


    <h2 class="titulo">Detalhes da Comanda: <?=$_SESSION["numero_comanda"];?></h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço total</th>
                <th>Observações</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (empty($_SESSION["items_of_check"])):
                ?>

                <tr>
                    <td colspan="5">
                        <p>Nenhum item cadastrado na comanda ainda!</p>
                    </td>
                </tr>


                <?php
            endif;

            // Variável para armazenar o preço total da comanda
            $preco_total_comanda = 0;

            foreach ($_SESSION["items_of_check"] as $item):
                ?>


                <tr>
                    <td>
                        <?= $item["id"] ?>
                    </td>
                    <td>
                        <?= $item["nome"] ?>
                    </td>
                    <td>
                        <?= $item["quantidade"] ?>
                    </td>
                    <td>
                        <?= $item["preco_total"] ?>
                    </td>
                    <td>
                        <?= $item["observacao"] ?>
                    </td>
                </tr>
                <?php

                // Incrementando no preço total
                $preco_total_comanda += $item["preco_total"];

            endforeach;
            ?>
        </tbody>
    </table>

    <div class="total">
        <p>Total da Comanda:
            <?= $preco_total_comanda; ?>
        </p>
    </div>

    <div class="button">
        <a class="button1">Finalizar pedido </a>
    </div>



</body>

</html>