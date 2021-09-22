<?php

class Cpf
{

    private $cpf;

    public function __construct(string $cpf) 
    {
        return $this->cpf = $cpf;
    }

    public function mostraCpf()
    {
        return $this->cpf;
    }
}