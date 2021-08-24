<?php

require_once "funcoes.php";

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