<?php

namespace DadosForm\Model;

class ProponenteAtuacao
{
    private ?int    $id;
    private int     $id_proponente;
    private string  $estado;
    private string  $municipio; 
    private string  $localidade;

    public function __construct(
        ?int    $id,
        int     $id_proponente,
        string  $estado,
        string  $municipio,
        string  $localidade
    ) {
        $this->id               = $id;
        $this->id_proponente    = $id_proponente;
        $this->estado           = $estado;
        $this->municipio        = $municipio;
        $this->localidade       = $localidade;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function proponente(): string
    {
        return $this->id_proponente;
    }

    public function estado(): string
    {
        return $this->estado;
    }

    public function municipio(): string
    {
        return $this->municipio;
    }

    public function localidade(): string
    {
        return $this->localidade;
    }
}