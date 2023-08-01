<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../app/Item.php';

    $id = $_POST["id"];
    $nome = $_POST["nome"];

    $item = new Item();
    $resultado = $item->updateTipo($id, $nome);

    if ($resultado) {
        header("Location: ../public/tipo.php");
        exit();
    } else {
        echo "Ocorreu um erro ao atualizar o tipo.";
    }
} else {
    header("Location: ../public/index.php");
    exit();
}
