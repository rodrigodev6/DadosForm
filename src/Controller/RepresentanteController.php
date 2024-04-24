<?php

namespace DadosForm\Controller;

use DadosForm\Database\ConexaoBanco;
use DadosForm\Model\RepresentanteLegal;
use PDO;

class RepresentanteController 
{

    private PDO $pdo;
    
    public function __construct() {
        $this->pdo = ConexaoBanco::criadorConexao();
    }

    public function selectRepresentates(): array
    {
        $query      = "SELECT * FROM representante_legal";
        $statement  = $this->pdo->query($query);

        // Retorna todos os resultados como um array associativo
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(RepresentanteLegal $representante)
    {
        $query = "INSERT INTO representante_legal (id,id_proponente,nome,cpf,cargo,formacao,email,telefone) VALUES ( :id, :id_proponente, :nome, :cpf, :cargo, :formacao, :email, :telefone);";

        $stmt = $this->pdo->prepare($query);

        $result = $stmt->execute([
            ':id'               => $representante->getId(),
            ':id_proponente'    => $representante->idPronente(), 
            ':nome'             => $representante->nome(), 
            ':cpf'              => $representante->cpf(), 
            ':cargo'            => $representante->cargo(), 
            ':formacao'         => $representante->formacao(), 
            ':email'            => $representante->email(), 
            ':telefone'         => $representante->telefone()
        ]);

        if ($result) {
            return "Representante Inserido com sucesso";
        } else {
            return "O representante não foi inserido";
        }
    }
    
}

