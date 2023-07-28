<?php

require_once "../config/config.php";

class Estoque{


    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }


    public function addItem($nome, $quantidade, $preco, $tipoID)
    {
        $sql = "INSERT INTO itens_estoque (nome, quantidade, preco, tipo_id) VALUES (:nome, :quantidade, :preco, :tipo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':tipo', $tipoID);
        var_dump($nome, $quantidade, $preco, $tipoID);
        return $stmt->execute();


        
    }

    public function getItem()
    {
        $sql = "SELECT i.id, i.nome, i.quantidade, i.preco, t.nome AS tipo
                FROM itens_estoque i
                LEFT JOIN tipos_item t ON i.tipo_id = t.id";
                
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}