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

unset($contasCorrentes[1231212412512]);

titularComLetrasMaisculas($contasCorrentes[123123213]);


// echo "<ul>";

// foreach ($contasCorrentes as $value => $conta)
// {
//     // ["saldo" => &$saldo , "titular" => &$titular] = $conta;
//     // exibeMensagem("Titular: $titular, processo iniciado.");
//     // exibeMensagem("Sacando...");
//     // sacar($conta, 1000);
//     // exibeMensagem("Saldo após o saque: $saldo");
//     // exibeMensagem("Depositando...");
//     // depositar($conta, 3000);
//     // exibeMensagem("Saldo após depósito: " . $saldo);
//     exibeConta($conta);
// }

// echo "</ul>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</body>
</html>