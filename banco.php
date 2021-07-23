<?php

function depositar($conta, $valor)
{
    ;
}

function exibeMensagem ($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = 
[
    123123213 => [
        "titular" => "Vinícius",
        "saldo" => 1000,
    ], 
    1231212412512 => [
        "titular" => "Alberto",
        "saldo" => 3600,
    ], 
    123125123123123 => [
        "titular" => "Maria", 
        "saldo" => 5000,
    ],  
];  

if ($contasCorrentes[123123213]["saldo"])

foreach ($contasCorrentes as $value => $conta)
{
    
    $conta["saldo"] -= 1500; 
    if ($conta["saldo"] < 0)
    {
        exibeMensagem ("Titular $conta[titular]: Você não pode sacar esse valor pois não permitimos cheque especial.");
    }
    else {
        exibeMensagem ("Chave: $value, nome: $conta[titular], saldo: $conta[saldo]");
    }
}