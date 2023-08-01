<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
</head>
<body>
    <?php
    require_once '../app/Item.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $estoque = new Item();
        $item = $estoque->getItemById($id);

        if ($item) {

            ?>
            <div class="container">
                <h2>Editar Tipo</h2>
                <form action="../app/atualizar-item.php" method="post" class="form">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">

                    <label for="nome">Nome:</label>
                    <input class="input" type="text" name="nome" id="nome" value="<?php echo $item['nome']; ?>">
                    <button type="submit" class="submit">Atualizar</button>
                </form>
            </div>
            <?php
        } else {
            echo "Item não encontrado.";
        }
    } else {
        echo "ID do item não fornecido.";
    }
    ?>