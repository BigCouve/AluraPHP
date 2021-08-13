<?php

function sacar (array $conta, float $valorASacar) : float
{
    //exibeMensagem("Valor da conta antes do saque: $conta[saldo]");
    
    if ($valorASacar > $conta["saldo"])
    {
        exibeMensagem("Titular $conta[titular]: Você não pode sacar esse valor pois não permitimos cheque especial."); 
    }
    else 
    {
        $conta["saldo"] -= $valorASacar;
    }
    //print_r($conta);
    //echo PHP_EOL . "Mostrando o array: $conta" . PHP_EOL;
    return $conta["saldo"];
}

function depositar($conta, $valor)
{
    if(0 <= $valor)
    {
        $conta["saldo"] += $valor;
        //exibeMensagem("Valor a após depositado: $conta[saldo]");
    }
    else {
        exibeMensagem("Valor informado não pode ser depositado.");
    }
    return exibeMensagem("Saldo atual: $conta[saldo]");
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
    exibeMensagem("Saldo Atual: " . sacar($conta, 1000));
    exibeMensagem("Depositando...");
    depositar($conta, 3000);
    
}

