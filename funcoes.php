<?php


function sacar (array &$conta, float $valorASacar) : array
{
    //exibeMensagem("Valor da conta antes do saque: $conta[saldo]");
    
    if ($valorASacar > $conta)
    {
        exibeMensagem("Você não pode sacar esse valor pois não permitimos cheque especial."); 
    }
    else 
    {
        $conta["saldo"] -= $valorASacar;
    }
    //print_r($conta);
    //echo PHP_EOL . "Mostrando o array: $conta" . PHP_EOL;
    return $conta;
}

function depositar(array &$conta, float $valor) : array
{
    if(0 < $valor)
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
    echo $mensagem . "<br>";
}

function titularComLetrasMaisculas(array &$conta)
{
    $conta["titular"] = strtoupper($conta["titular"]);
}

function exibeConta(array $conta)
{
    ["titular" => $titular, "saldo" => $saldo] = $conta;
    echo "<li> Titular:  $titular, Saldo: $saldo </li>";
}
