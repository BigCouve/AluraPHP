<?php

require_once "src/conta.php";

$primeiraConta = new Conta("123.456.789-10", "Douglas Augusto");
$segundaConta = new Conta("123.456.789-09", "Stella Britto");

$primeiraConta->deposita(1500);
$primeiraConta->saca(300); 

echo $primeiraConta->mostraTitular() . PHP_EOL;
echo $primeiraConta->mostraCpfDoTitular() . PHP_EOL;
echo $primeiraConta->mostraSaldo() . PHP_EOL;

$terceiraConta = new Conta("321.654.987.01", "Barney Cachorro");
//var_dump($terceiraConta);

echo Conta::mostraNumeroDeContas();

