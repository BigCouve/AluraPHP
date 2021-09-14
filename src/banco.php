<?php

require_once "src/conta.php";

//$primeiraConta = new Conta();
$primeiraConta = new Conta();
$segundaConta = new Conta();
$primeiraConta->deposita(1500);
$primeiraConta->saca(300); 
$primeiraConta->saca(400);
echo $primeiraConta->mostraSaldo();
//echo $primeiraConta->saldo;