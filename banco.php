<?php

function sacar (array &$conta, float $valorASacar) : array
{
    if ($valorASacar > $conta["saldo"])
    {
        exibeMensagem("Titular $conta[titular]: Você não pode sacar esse valor pois não permitimos cheque especial."); 
    }
    else 
    {
        $conta["saldo"] -= $valorASacar;
    }
    return $conta;
}

function depositar(array &$conta, float $valor) : array
{

    if(0 <= $valor)
    {
        $conta["saldo"] += $valor;
    }
    else {
        exibeMensagem("Valor informado não pode ser depositado.");
    }

    return $conta;
}

function exibeMensagem ($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = 
[
    123123213 => [
        "titular" => "Vinícius",
        "saldo" => 1200,
    ], 
    1231212412512 => [
        "titular" => "Alberto",
        "saldo" => 3600,
    ], 
    123125123123123 => [
        "titular" => "João", 
        "saldo" => 5000,
    ],  
];  



foreach ($contasCorrentes as $value => $conta)
{
    exibeMensagem("Sacando...");
    sacar($conta, 1000);
    exibeMensagem("Saldo após o saque: " . $conta["saldo"]);
    exibeMensagem("Depositando...");
    depositar($conta, 3000);
    exibeMensagem("Saldo após depósito: " . $conta["saldo"]);
    
}