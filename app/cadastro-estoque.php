<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $tipoID = $_POST["tipo"];

    require_once '../app/Estoque.php';
    require_once '../config/config.php';

    if (empty($nome) || empty($quantidade) || empty($preco) || empty($tipoID)) {
        echo "Por favor, preencha todos os campos do formulário.";
      } else {
        echo "Formulário enviado com sucesso!";
      }

    $estoque = new Estoque();

    $estoque->addItem($nome, $quantidade, $preco, $tipoID);

    header("Location: ../public/index.php");
    exit();
} else {
    header("Location: ../public/index.php");
    exit();
}
