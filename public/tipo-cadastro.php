<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Cadastro de Tipo</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
</head>
<body>
            <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card h-100 shadow">
            <div class="card-body">
            

                <form action="../app/tipo-action.php" method="post" class="form" id="FormularioTipo">
                <h2>Cadastrar Tipo</h2>

                <div class="mb-3">
                <label for="nome">Nome:</label>
                <input class="input" type="text" name="nome" id="nome">
               </div>
                <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
</div>
</div>
    </div>
    
    <a href="../public/listar.php">Ver Itens no Estoque</a>
                <a href="./tipo.php">Ver Tipos de Itens</a>
</body>
</html>