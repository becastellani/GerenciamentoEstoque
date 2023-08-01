<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        require_once './Item.php';
        $estoque = new Item();
        $resultado = $estoque->excluirTipo($id);

        if ($resultado) {
            header("Location: ../public/tipo.php");
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