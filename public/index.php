<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Cadastro de itens</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="row align-items-center" style="height: 100vh;">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <div class="centralizar">
            <h2>Cadastrar Itens</h2>

                <form action="../app/cadastro-estoque.php" method="post" class="form" id="FormularioCadastro">
                    <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="input" type="text" name="nome" id="nome">
                    </div>
                <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input class="input" type="number" name="quantidade" id="quantidade">
                </div>
                <div class="form-group">
                <label for="preco">Preço:</label>
                <input class="input" type="number" step="0.01" name="preco" id="preco">
                </div>

                <div class="form-group">
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
                <button type="submit" class="submit">Cadastrar</button>
                <a href="../public/listar.php">Ver Itens no Estoque</a>
                <a href="./tipo.php">Ver Tipos de Itens</a>


            </form>
            </div>
            </div>
    </div>

</body>
</html>