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

    public function getUserData(): array
    {
        $userData = [
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "telefone" => $this->telefone,
            "endereco" => $this->endereco
        ];

        return $userData;
    }
}