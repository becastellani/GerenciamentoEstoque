<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../app/Estoque.php';

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $tipoID = $_POST["tipo"];

    $estoque = new Estoque();
    $resultado = $estoque->updateItem($id, $nome, $quantidade, $preco, $tipoID);

    if ($resultado) {
        header("Location: ../public/listar.php");
        exit();
    } else {
        echo "Ocorreu um erro ao atualizar o item.";
    }
} else {
    header("Location: ../public/index.php");
    exit();
}
