<?php

namespace DadosForm\Model;

class Proponente
{
    private ?int    $id;
    private string  $nome; 
    private string  $cnpj;
    private string  $endereco;
    private string  $cidade;
    private string  $uf;
    private string  $telefone;
    private string  $email;

    public function __construct(
        ?int    $id,
        string  $nome,
        string  $cnpj,
        string  $endereco,
        string  $cidade,
        string  $uf,
        string  $telefone,
        string  $email
    ) {
        $this->id       = $id;
        $this->nome     = $nome;
        $this->cnpj     = $cnpj;
        $this->endereco = $endereco;
        $this->cidade   = $cidade;
        $this->uf       = $uf;
        $this->telefone = $telefone;
        $this->email    = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function cnpj(): string
    {
        return $this->cnpj;
    }

    public function endereco(): string
    {
        return $this->endereco;        
    }

    public function cidade(): string
    {
        return $this->cidade;
    }

    public function uf(): string
    {
        return $this->uf;
    }

    public function telefone(): string
    {
        return $this->telefone;
    }

    public function email(): string
    {
        return $this->email;
    }
    
}