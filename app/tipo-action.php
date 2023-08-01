<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];


    require_once '../app/Item.php';
    require_once '../config/config.php';

    $estoque = new Item();
    $estoque->addTipo($nome);

    header("Location: ../public/tipo.php");
    exit();
} else {
    header("Location: ../public/index.php");
    exit();
}
