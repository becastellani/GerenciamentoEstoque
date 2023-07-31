<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Itens</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
<div class="container1">
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
                    echo "<td style=\"display = flex\">
                    <div style=\"display: flex;\">
                    <a href=\"./editar.php?id=" . $item['id'] . "\">
                        <i class=\"fa-solid fa-pen-to-square\" style=\"color: #000000\"></i>
                    </a>
                    <button type=\"button\" onclick=\"confirmExclusao(" . $item['id'] . ")\">
                        <i class=\"fas fa-trash\" style=\"color: #000000\"></i>
                    </button>
                    <!-- Formulário oculto para enviar o ID do item -->
                    <form id=\"formExcluirItem_" . $item['id'] . "\" action=\"../app/excluir.php\" method=\"post\">
                        <input type=\"hidden\" name=\"id\" value=\"" . $item['id'] . "\">
                    </form>
                </div>
                        </td>";
                    echo "</tr>";
                }
    ?>

            
        </table>
        <a href="./index.php">Voltar para tela de Cadastro</a>
    </div>

    <script src="sweetalert2.min.js"></script>
    <script src="./scripts/script.js">

    </script>
</body>
</html>