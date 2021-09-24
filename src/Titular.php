<?php

class Titular
{
    private $nome;
    private $cpf;

    public function __construct(Cpf $cpf, string $nome) {
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
    
    public function mostraNome() : string
    {
        return $this->nome;
    }
    
    public function mostraCpf() : string
    {
        return $this->cpf->mostraCpfa();
    }
    
}