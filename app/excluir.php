<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        require_once '../app/Estoque.php';
        $estoque = new Estoque();
        $resultado = $estoque->excluirItem($id);

        if ($resultado) {
            header("Location: ../public/listar.php");
            exit();
        } else {
            echo "Ocorreu um erro ao excluir o item.";
        }
    } else {
        echo "ID do item não fornecido.";
    }
} else {
    header("Location: ../public/index.php");
    exit();
}
?>