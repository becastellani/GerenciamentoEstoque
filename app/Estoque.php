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
    
    public function getTiposItem()
    {
        $sql = "SELECT id, nome FROM tipos_item";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




    public function updateItem($id, $nome, $quantidade, $preco, $tipoID)
    {
        $sql = "UPDATE itens_estoque SET nome = :nome, quantidade = :quantidade, preco = :preco, tipo_id = :tipoID WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':tipoID', $tipoID);
        $stmt->bindParam(':id', $id);

        try {
            $result = $stmt->execute();
            return $result;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    public function excluirItem($id)
    {
        $sql = "DELETE FROM itens_estoque WHERE id = :id";
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
    
}