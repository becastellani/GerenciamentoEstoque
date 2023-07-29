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
    require_once '../app/Estoque.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $estoque = new Estoque();
        $item = $estoque->getItemById($id);

        if ($item) {
            // Exibir o formulário preenchido com os dados do item para edição
            ?>
            <div class="container">
                <h2>Editar Item</h2>
                <form action="../app/atualizar.php" method="post" class="form">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">

                    <label for="nome">Nome:</label>
                    <input class="input" type="text" name="nome" id="nome" value="<?php echo $item['nome']; ?>">

                    <label for="quantidade">Quantidade:</label>
                    <input class="input" type="number" name="quantidade" id="quantidade" value="<?php echo $item['quantidade']; ?>">

                    <label for="preco">Preço:</label>
                    <input class="input" type="number" step="0.01" name="preco" id="preco" value="<?php echo $item['preco']; ?>">

                    <label for="tipo">Tipo:</label>
                    <select name="tipo" id="tipo">
                        <option value="">Selecione o tipo</option>
                        <option value="1" <?php echo ($item['tipo_id'] == 1) ? 'selected' : ''; ?>>Alimento</option>
                        <option value="2" <?php echo ($item['tipo_id'] == 2) ? 'selected' : ''; ?>>Ferramentas</option>
                        <option value="3" <?php echo ($item['tipo_id'] == 3) ? 'selected' : ''; ?>>Casa&Lar</option>
                    </select>

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