<?php

function sacar (float $conta, float $valorASacar) : float
{
    //exibeMensagem("Valor da conta antes do saque: $conta[saldo]");
    
    if ($valorASacar > $conta)
    {
        exibeMensagem("Titular $conta[titular]: Você não pode sacar esse valor pois não permitimos cheque especial."); 
    }
    else 
    {
        $conta -= $valorASacar;
    }
    //print_r($conta);
    //echo PHP_EOL . "Mostrando o array: $conta" . PHP_EOL;
    return $conta;
}

function depositar(float $conta, float $valor) : float
{
    if(0 <= $valor)
    {
        $conta["saldo"] += $valor;
        //exibeMensagem("Valor a após depositado: $conta[saldo]");
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
    exibeMensagem("Usuário de ID $value, titular $conta[titular]: ");
    exibeMensagem("Sacando...");
    exibeMensagem("Saldo Atual: " . sacar($conta["saldo"], 1000));
    exibeMensagem("Depositando...");
    exibeMensagem("Saldo atual: " . depositar($conta["saldo"], 3000));
    exibeMensagem("Saldo final: $conta[saldo]");
    
}

