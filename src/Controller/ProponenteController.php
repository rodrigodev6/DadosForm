<?php

namespace DadosForm\Controller;

use DadosForm\Database\ConexaoBanco;
use DadosForm\Model\Proponente;
use PDO;

class ProponenteController 
{

    private PDO $pdo;
    
    public function __construct() {
        $this->pdo = ConexaoBanco::criadorConexao();
    }

    public function selectProponentes(PDO $conexao): array
    {
        $query      = "SELECT * FROM form_proponente";
        $statement  = $conexao->query($query);

        // Retorna todos os resultados como um array associativo
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(Proponente $proponente)
    {
        $query = "INSERT INTO form_proponente(id,nome,cnpj,endereco,cidade,uf , telefone , email ) VALUES(:id, :nome, :cnpj, :endereco, :cidade, :uf, :telefone, :email);";

        $stmt = $this->pdo->prepare($query);

        $result = $stmt->execute([
            ':id'       => $proponente->getId(),
            ':nome'     => $proponente->nome(), 
            ':cnpj'     => $proponente->cnpj(), 
            ':endereco' => $proponente->endereco(), 
            ':cidade'   => $proponente->cidade(), 
            ':uf'       => $proponente->uf(), 
            ':telefone' => $proponente->telefone(), 
            ':email'    => $proponente->email()
        ]);

        if ($result) {
            return "Proponente Inserido com sucesso";
        } else {
            return "O proponente não foi inserido";
        }
    }
    
}

