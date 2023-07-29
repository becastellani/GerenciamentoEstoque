<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Itens</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  
</head>
<body>
<div class="container">
        <h2>Itens no Estoque</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>

            <?php
                require_once '../app/Estoque.php';
                $estoque = new Estoque();
                $itens = $estoque->getItem();
                foreach ($itens as $item) {
                    echo "<tr>";
                    echo "<td>" . $item['id'] . "</td>";
                    echo "<td>" . $item['nome'] . "</td>";
                    echo "<td>" . $item['quantidade'] . "</td>";
                    echo "<td>" . $item['preco'] . "</td>";
                    echo "<td>" . $item['tipo'] . "</td>";
                    echo "<td>
                            <a href=\"./editar.php?id=" . $item['id'] . "\">
                                <i class=\"fa-solid fa-pen-to-square\" style=\"color: #000000\"></i>
                            </a>
                            <a href=\"caminho_para_excluir.php?id=" . $item['id'] . "\">
                                <i class=\"fas fa-trash\" style=\"color: #000000\"></i>
                            </a>
                        </td>";
                    echo "</tr>";
                }
    ?>

            
        </table>
    </div>
</body>
</html>