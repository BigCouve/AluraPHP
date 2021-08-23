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