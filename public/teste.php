<?php

use DadosForm\Controller\ProponenteController;
use DadosForm\Database\ConexaoBanco;
use DadosForm\Model\Proponente;

require_once __DIR__ . '/../vendor/autoload.php';

$pdo                    = ConexaoBanco::criadorConexao();
$proponenteController   = new ProponenteController();

// $data = $proponenteController->selectProponentes($pdo);

// var_dump($data);

//=================
$proponente_nome    = "Teste";
$cnpj               = "1234";
$endereco           = "teste, endereco";
$uf                 = "RJ";
$cidade             = "Rio de Janeiro";
$telefone           = "2121";
$email              = "t@email.com";

$proponenteModel = new Proponente(null, $proponente_nome, $cnpj, $endereco, $cidade, $uf, $telefone, $email);

$resultado = $proponenteController->insertProponente($proponenteModel);

echo $resultado;