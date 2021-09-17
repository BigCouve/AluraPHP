<?php

require_once "src/conta.php";

$primeiraConta = new Conta("123.456.789-10", "Douglas Augusto");
var_dump($primeiraConta);
$segundaConta = new Conta("123.456.789-09", "Stella Britto");
$primeiraConta->deposita(1500);
$primeiraConta->saca(300); 
$primeiraConta->saca(400);
echo $primeiraConta->mostraSaldo();

