<?php

function sacar ($conta, $valorASacar)
{
    if ($valorASacar < $conta["saldo"])
    {
        exibeMensagem("Titular $conta[titular]: Você não pode sacar esse valor pois não permitimos cheque especial.");
    }
    else 
    {
        $conta["saldo"] -= $valorASacar;
    }
}
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


foreach ($contasCorrentes as $value => $conta)
{
    sacar($conta["saldo"], 1000);
}