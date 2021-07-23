<?php

$conta1 = ["titular" => "Vinícius", "saldo" => 1000];

$conta2 = ["titular" => "Maria", "saldo" => 5000];

$conta3 = ["titular" => "Alberto", "saldo" => 3600];

echo $conta1["titular"];

$contasCorrentes = 
[
    123123213 => $conta1, 
    1231212412512 => $conta2, 
    123125123123123 => $conta3
];  

foreach ($contasCorrentes as $numLoco => $conta)
{
    echo $numLoco . PHP_EOL;
}