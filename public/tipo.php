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
<div class="col-8 m-auto pt-3 pb-4 text-center">
        <h2>Listagem Tipos</h2>
        <table class="table">
        <thead class="thead-dark">

            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
            
            </thead>
            <tbody class="table-group-divider">
            <?php
                require_once '../app/Item.php';
                $estoque = new Item();
                $itens = $estoque->getTipo();
                foreach ($itens as $item) {
                    echo "<tr>";
                    echo "<td>" . $item['id'] . "</td>";
                    echo "<td>" . $item['nome'] . "</td>";
                    echo "<td style=\"display = flex\">
                    <div style=\"display: flex; justify-content:center; padding-left: 5px\">
                    <a href=\"./tipo-editar.php?id=" . $item['id'] . "\">
                        <i class=\"fa-solid fa-pen-to-square\" style=\"color: #000000\"></i>
                    </a>
                    <a style=\"margin-left:5px\" type=\"button\" onclick=\"confirmExclusao(" . $item['id'] . ")\">
                        <i class=\"fas fa-trash\" style=\"color: #000000\"></i>
                    </a>
                    <!-- Formulário oculto para enviar o ID do item -->
                    <form id=\"formExcluirItem_" . $item['id'] . "\" action=\"../app/excluir-item.php\" method=\"post\">
                        <input type=\"hidden\" name=\"id\" value=\"" . $item['id'] . "\">
                    </form>
                </div>
                        </td>";
                    echo "</tr>";
                }
    ?>

            </tbody>
        </table>
        <a href="./tipo-cadastro.php">Cadastrar Tipos de Itens</a>
        <a href="../public/listar.php">Ver Itens no Estoque</a>
        <a href="./index.php">Voltar para tela de Cadastro</a>
    </div>

    <script src="sweetalert2.min.js"></script>
    <script src="./scripts/script.js">

    </script>
</body>
</html>