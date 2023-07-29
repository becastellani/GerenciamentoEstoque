<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Cadastro de itens</title>
</head>
<body>
    <div class="container">
            <h2>Cadastrar Itens</h2>

                <form action="../app/cadastro-estoque.php" method="post" class="form" id="FormularioCadastro">
                <label for="nome">Nome:</label>
                <input class="input" type="text" name="nome" id="nome">

                <label for="quantidade">Quantidade:</label>
                <input class="input" type="number" name="quantidade" id="quantidade">

                <label for="preco">Preço:</label>
                <input class="input" type="number" step="0.01" name="preco" id="preco">

                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo">
                    <option value="">Selecione o tipo</option>
                    <option value="1">Alimento</option>
                    <option value="2">Ferramentas</option>
                    <option value="3">Casa&Lar</option>
                </select>

                <button type="submit" class="submit">Cadastrar</button>
                <a href="../public/listar.php">Ver Itens no Estoque</a>


            </form>
    </div>

</body>
</html>