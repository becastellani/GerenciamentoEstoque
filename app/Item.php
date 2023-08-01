<?php

require_once "../config/config.php";

class Item{

    private $conn;


    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    
    public function addTipo($nome)
    {
        $sql = "INSERT INTO tipos_item (nome) VALUES (:nome)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        var_dump($nome);
        return $stmt->execute(); 
    }


    public function getTipo()
    {
        $sql = "SELECT id, nome
        FROM tipos_item";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function excluirTipo($id)
    {
        $sql = "DELETE FROM tipos_item WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        try {
            $result = $stmt->execute();
            return $result;
        } catch (PDOException $e) {
             echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }
    
    public function getItemById($id)
    {
        $sql = "SELECT id,nome
                FROM tipos_item
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public function updateTipo($id, $nome)
    {
        $sql = "UPDATE tipos_item SET nome = :nome WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':id', $id);

        try {
            $result = $stmt->execute();
            return $result;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

}