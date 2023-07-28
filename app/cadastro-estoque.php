<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $tipoId = $_POST["tipo"];

    require_once '../app/Estoque.php';
    require_once '../config/config.php';


    $estoque = new Estoque();

    $estoque->addItem($nome, $quantidade, $preco, $tipoId);

    header("Location: ../public/index.php");
    exit();
} else {
    header("Location: ../public/index.php");
    exit();
}
