<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

    public function sacar(float $valorASacar)
    {
        if ($this->saldo < $valorASacar)
        {
            echo "Você não pode sacar";
        }
        else
        {
            $this->saldo -= $valorASacar;
        }
    }
}

$primeiraConta = new Conta();
$segundaConta = new Conta();

$primeiraConta->cpfTitular = "123.456.789-10";
$primeiraConta->nomeTitular = "João Silva";
$primeiraConta->saldo = 1500;
$segundaConta->cpfTitular = "109.876.543-21";
$segundaConta->nomeTitular = "Maria Lennon";
$segundaConta->saldo = 5000;

$saldoJohn = $primeiraConta->saldo;
$saldoMaria = $segundaConta->saldo;

echo "Valor de Maria em conta = $saldoMaria" . PHP_EOL;
echo "Valor de John em conta = $saldoJohn";