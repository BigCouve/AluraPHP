<?php

include "funcoes.php";

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
    exibeMensagem("Usuário de ID $value, titular $conta[titular]: ");
    exibeMensagem("Sacando...");
    exibeMensagem("Saldo Atual: " . sacar($conta["saldo"], 1000));
    exibeMensagem("Depositando...");
    exibeMensagem("Saldo atual: " . depositar($conta["saldo"], 3000));
    exibeMensagem("Saldo final: $conta[saldo]");
    
}

