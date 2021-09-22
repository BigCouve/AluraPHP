<?php

class Titular
{
    private $nome;

    public function __construct(string $nome) {
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
    

    
}