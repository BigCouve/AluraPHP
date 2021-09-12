<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    private $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($this->saldo < $valorASacar)
        {
            echo "Você não pode sacar";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar <= 0)
        {
            echo "Valor precisa ser maior";
            return;
        }
            $this->saldo += $valorADepositar;
    }
    public function transferir(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo)
        {
            echo "Valor a transferir maior do saldo atual.";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    public function mostrarSaldo()
    {
        echo "Valor em conta: $this->saldo" . PHP_EOL;
    }
}

$primeiraConta = new Conta();
$segundaConta = new Conta();

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