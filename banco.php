<?php

function sacar (array &$conta, float $valorASacar) : float
{
    if ($valorASacar > $conta["saldo"])
    {
        exibeMensagem("Titular $conta[titular]: Você não pode sacar esse valor pois não permitimos cheque especial."); 
    }
    else 
    {
        $conta["saldo"] -= $valorASacar;
    }
    return $conta["saldo"];
}

function depositar(array &$conta, float $valor) : float
{

    if(0 <= $valor)
    {
        $conta["saldo"] += $valor;
    }
    else {
        exibeMensagem("Valor informado não pode ser depositado.");
    }

    return $conta["saldo"];
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
    exibeMensagem("Saldo após o saque: " . sacar($conta, 1000));
    exibeMensagem("Depositando...");
    exibeMensagem("Saldo após depósito: " . depositar($conta, 3000));
    
}