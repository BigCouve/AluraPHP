<?php

require_once "src/conta.php";

//$primeiraConta = new Conta();
$primeiraConta->depositar(1500);
$primeiraConta->sacar(300); 
$primeiraConta->sacar(400);
$primeiraConta->mostrarSaldo();
//echo $primeiraConta->saldo;