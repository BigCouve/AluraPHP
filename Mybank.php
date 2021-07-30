<?php

function mostrarMensagem ($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasMyBank = 
    [
        "Primeira" => 
        [
            "nome" => "João",
            "saldo" => 500,
        ],
        "Segunda" =>
        [
            "nome" => "Maria",
            "saldo" => 600,
        ],
        "Terceira" =>
        [
            "nome" => "Carlos",
            "saldo" => 1500,
        ],
        "Quarta" => 
        [
            "nome" => "Hazegawa",
            "saldo" => 300,
        ],
    ];



foreach ($contasMyBank as $ind => $base)
{
    $base["saldo"] -= 500;
    if ($base["saldo"] < 0) 
    {
        mostrarMensagem("Você não pode sacar um valor maior do que em conta.");
    }
    else 
    {
        mostrarMensagem("$ind conta: Usuário = $base[nome], saldo atual = $base[saldo]");
    }
}