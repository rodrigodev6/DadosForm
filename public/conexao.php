<?php

// criando função para conectar ao banco de dados usando o PDO
function conector(): PDO
{
    $database   = "mysql";
    $host       = "127.0.0.1";
    $port       = "3366"; // Porta que você configurou para o contêiner Docker MySQL
    $dbname     = "dados_form";
    $username   = "root";
    $password   = "root";
    $dsn        = "$database:host={$host};port={$port};dbname={$dbname}";
    
    try {
        $connection = new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        exit(); // Encerra o script em caso de erro de conexão
    }
    
    return $connection;
}

// chamar a função para obter a conexão
try {
    $data = conector();
} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados: " . $e->getMessage();
}
