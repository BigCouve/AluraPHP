<?php

class Titular
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome) {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;        
    }   

    private function validaNomeTitular($titular)
    {
        if (strlen($titular) < 5) {
            echo "Nome precisa ter mais que 4 caracteres";
            exit();
        }
    }

    public function mostraCpf() : string
    {
        return $this->cpf;
    }

    public function mostraNome() : string
    {
        return $this->nome;
    }
    

    
}