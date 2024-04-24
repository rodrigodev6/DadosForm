<?php
require_once 'conexao.php';

$proponente_nome    = $_POST["nome"];
$cnpj               = $_POST["cnpj"];
$endereco           = $_POST["endereco"];
$uf                 = $_POST["uf"];
$cidade             = $_POST["cidade"];
$cidade             = $_POST["cidade"];

// Query SQL com marcadores de parâmetros
$query = "INSERT INTO proponentes(nome, cnpj, endereco, uf, cidade) VALUES(:nome, :cnpj, :endereco, :uf, :cidade)";

// Preparando a declaração
$stmt = $data->prepare($query);

// Substituindo os marcadores de parâmetros pelos valores
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cnpj', $cnpj);
$stmt->bindParam(':endereco', $endereco);
$stmt->bindParam(':uf', $uf);
$stmt->bindParam(':cidade', $cidade);

// Executando a declaração
$resultado = $stmt->execute();

if ($resultado) {
    echo "Inserção realizada com sucesso!";
    echo "<a href=" . "index.php" . ">Voltar</a>";
} else {
    echo "Erro ao inserir os dados.";
}
