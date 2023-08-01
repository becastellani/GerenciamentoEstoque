<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Cadastro de Tipo</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
            <h2>Cadastrar Tipo</h2>

                <form action="../app/tipo-action.php" method="post" class="form" id="FormularioTipo">
                <label for="nome">Nome:</label>
                <input class="input" type="text" name="nome" id="nome">
                <button type="submit" class="submit">Cadastrar</button>
            </form>

    </div>
    
    <a href="../public/listar.php">Ver Itens no Estoque</a>
                <a href="./tipo.php">Ver Tipos de Itens</a>
</body>
</html>