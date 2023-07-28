<?php

require_once 'config.php';

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} else {
    echo "Erro ao conectar-se ao banco de dados.";
}