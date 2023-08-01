<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de itens</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
</head>
<body>
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card h-100 shadow">
            <div class="card-body">
                <form action="../app/cadastro-estoque.php" method="post" class="form" id="FormularioCadastro">
                <h2>CADASTRO ESTOQUE</h2>
                    <div class="mb-3">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome">
                    </div>

                    <div class="mb-3">
                <label for="quantidade">Quantidade:</label>
                <input class="form-control" type="number" name="quantidade" id="quantidade">
                </div>
                
                <div class="mb-3">
                <label for="preco">Preço (Individual):</label>
                <input class="form-control" type="number" step="0.01" name="preco" id="preco">
                </div>

                <div class="mb-3">
                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo">
                    <option value="">Selecione o tipo</option>
                    <?php
                    require_once '../app/Estoque.php';
                    $estoque = new Estoque();
                    $tipos = $estoque->getTiposItem();
                    foreach ($tipos as $tipo) {
                        echo "<option value=\"" . $tipo['id'] . "\">" . $tipo['nome'] . "</option>";
                    }
                    ?>
                    </select>
                </div>
               
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                </div>

                <div class="mb-3 text-center">
                <a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../public/listar.php">VER ITENS NO ESTOQUE</a>
                </div>
                <div class="mb-3 text-center">
                <a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"href="./tipo.php">VER TIPOS DE ITENS</a>
                </div>

            </form>
                </div>
                </div>
         </div>

</body>
</html>