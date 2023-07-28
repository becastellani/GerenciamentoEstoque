<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">

    <script src="../node_modules/jquery/dist/jquery.js"></script> 
    <script src="../node_modules/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <link rel="stylesheet" href="../node_modules/jquery-toast-plugin//dist/jquery.toast.min.css">
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


    <script>
$(document).ready(function() {
  // Evento para lidar com o envio do formulário
  $('form').submit(function(e) {
    e.preventDefault(); // Previne o envio normal do formulário

    // Validar se todos os campos estão preenchidos
    var name = $('#nome').val();
    var quantity = $('#quantidade').val();
    var price = $('#preco').val();
    var option = $('#tipo').val();

    if (name === '' || quantity === '' || price === '' || option === '') {
      // Exibir mensagem de erro com o toast
      $.toast({
        heading: 'Erro',
        text: 'Por favor, preencha todos os campos!',
        icon: 'error',
        showHideTransition: 'fade',
        position: 'top-right'
      });
    } else {
      // Se todos os campos estiverem preenchidos, você pode enviar o formulário aqui, se necessário
      // Exemplo: $(this).submit();
      // Ou pode exibir uma mensagem de sucesso com o toast
      $.toast({
        heading: 'Sucesso',
        text: 'Formulário enviado com sucesso!',
        icon: 'success',
        showHideTransition: 'slide',
        position: 'top-right'
      });
    }
  });
});
</script>

</body>
</html>