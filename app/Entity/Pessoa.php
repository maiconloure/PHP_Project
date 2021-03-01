<?php

namespace App\Entity;

class Pessoa
{
    private string $nome;
    
    private string $cpf;

    private string $telefone;

    private string $endereco;

    public function __construct(string $nome, string $cpf, string $telefone, string $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }

    public function __get(string $nomeDaPropriedade): string
    {
        return "A propriedade não existe!";
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }
}