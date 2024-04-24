<?php

use DadosForm\Controller\ProponenteController;
use DadosForm\Controller\RepresentanteController;
use DadosForm\Database\ConexaoBanco;
use DadosForm\Model\Proponente;
use DadosForm\Model\RepresentanteLegal;

require_once __DIR__ . '/../vendor/autoload.php';

$pdo                        = ConexaoBanco::criadorConexao();
$proponenteController       = new ProponenteController();
$representanteController    = new RepresentanteController();

//=========Inserindo Proponente
$id_proponenete     = substr(preg_replace("/[^0-9]/", "", uniqid() . mt_rand()), 0, 10);;
$proponente_nome    = $_POST["proponente-nome"];
$cnpj               = $_POST["proponente-cnpj"];
$endereco           = $_POST["proponente-endereco"];
$uf                 = $_POST["proponente-uf"];
$cidade             = $_POST["proponente-cidade"];
$telefone           = $_POST["proponente-telefone"];
$email              = $_POST["proponente-email"];

$proponenteModel = new Proponente($id_proponenete, $proponente_nome, $cnpj, $endereco, $cidade, $uf, $telefone, $email);
$proponenteController->insert($proponenteModel);

//========Inserindo Representante
$representante_nome     = $_POST["representante-nome"];
$representante_cpf      = $_POST["representante-cpf"];
$representante_cargo    = $_POST["representante-cargo"];
$representante_formacao = $_POST["representante-formacao"];
$representante_email    = $_POST["representante-email"];
$representante_telefone = $_POST["representante-telefone"];

$representanteModel = new RepresentanteLegal(null,$id_proponenete, $representante_nome, $representante_cpf, $representante_cargo, $representante_formacao, $representante_email, $representante_telefone);

$resultado = $representanteController->insert($representanteModel);

$resultado = $proponenteController->insert($proponenteModel);
echo '<a href="index.php">' . $resultado . '</a>';