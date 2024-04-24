<?php

namespace DadosForm\Model;

class RepresentanteLegal
{
    private ?int    $id;
    private int     $id_proponente;
    private string  $nome; 
    private string  $cpf;
    private string  $cargo;
    private string  $formacao;
    private string  $email;
    private string  $telefone; 

    public function __construct(
        //passando parâmetros para construção da instância da classe
        ?int   $id,
        int    $id_proponente,
        string $nome,
        string $cpf,
        string $cargo,
        string $formacao,
        string $email,
        string $telefone ) {
        //atribuindo os valores passados na contrução da classe RepresentanteLegal 
        // a cada um dos atributos da classe.
        $this->id               = $id;  
        $this->id_proponente    = $id_proponente;
        $this->nome             = $nome;
        $this->cpf              = $cpf;
        $this->cargo            = $cargo;
        $this->formacao         = $formacao;
        $this->email            = $email;
        $this->telefone         = $telefone;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function idPronente(): int
    {
        return $this->id_proponente;     
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function cpf(): string
    {
        return $this->cpf;
    }

    public function cargo(): string
    {
        return $this->cargo;
    }

    public function formacao(): string
    {
        return $this->formacao;
    }

    public function email(): string
    {
        return $this->email;
    }    
    
    public function telefone(): string
    {
        return $this->telefone;
    }
}