<?php

namespace DadosForm\Model;

class ProponenteDocumento
{
    private ?int    $id;
    private int     $id_proponente; //mudar tipo para int na tabela
    private string  $nome_arquivo;
    private string  $caminho_arquivo;
    private string  $tipo_arquivo;
    private int     $tipo_documento;

    public function __construct(
        ?int    $id,
        int     $id_proponente,
        string  $nome_arquivo,
        string  $caminho_arquivo,
        string  $tipo_arquivo,
        int     $tipo_documento
    ) {
        $this->id               = $id;
        $this->id_proponente    = $id_proponente;
        $this->nome_arquivo     = $nome_arquivo;
        $this->caminho_arquivo  = $caminho_arquivo;
        $this->tipo_arquivo     = $tipo_arquivo;
        $this->tipo_documento   = $tipo_documento;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function proponente(): int
    {
        return $this->id_proponente;
    }

    public function nome_arquivo(): string
    {
        return $this->nome_arquivo;
    }

    public function caminho_arquivo(): string
    {
        return $this->caminho_arquivo;
    }

    public function tipo_arquivo(): string
    {
        return $this->tipo_arquivo;
    }

    public function tipo_documento(): string
    {
        return $this->tipo_documento;
    }
}