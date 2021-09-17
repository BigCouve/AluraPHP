<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    
    public function __construct(string $cpfTitular, string $nomeTitular) 
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    
    }

    public function saca(float $valorASacar)
    {
        if ($this->saldo < $valorASacar)
        {
            echo "Você não pode sacar";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function deposita(float $valorADepositar)
    {
        if ($valorADepositar <= 0)
        {
            echo "Valor precisa ser maior";
            return;
        }
            $this->saldo += $valorADepositar;
    }
    public function transfere(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo)
        {
            echo "Valor a transferir maior do saldo atual.";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
    public function mostraSaldo() : float
    {
        return $this->saldo;
    }
    
    public function mostraTitular() : string
    {
        return $this->nomeTitular;
    }

    public function mostraCpfDoTitular() : string  
    {
        return $this->cpfTitular; 
    }

    public function defineTitular(string $titular)
    {
        $this->nomeTitular = $titular;
    }

    public function defineCpf($cpf)
    {
        $this->cpfTitular = $cpf;
    }

}



// $primeiraConta->cpfTitular = "123.456.789-10";
// $primeiraConta->nomeTitular = "João Silva";
// $primeiraConta->saldo = 1500;
// $segundaConta->cpfTitular = "109.876.543-21";
// $segundaConta->nomeTitular = "Maria Lennon";
// $segundaConta->saldo = 5000;

// $saldoJohn = $primeiraConta->saldo;
// $saldoMaria = $segundaConta->saldo;

// echo "Valor de Maria em conta = $saldoMaria" . PHP_EOL;
// echo "Valor de John em conta = $saldoJohn";