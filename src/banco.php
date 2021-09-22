<?php

require_once "src/conta.php";
require_once "src/Titular.php";


$primeiraConta = new Conta(new Titular("123.456.789-10", "Douglas Augusto"));
$segundaConta = new Conta(new Titular("123.456.789-09", "Stella Britto"));

$primeiraConta->deposita(1500);
$primeiraConta->saca(300); 

echo $primeiraConta->mostraNomeTitular() . PHP_EOL;
echo $primeiraConta->mostraCpfTitular() . PHP_EOL;
echo $primeiraConta->mostraSaldo() . PHP_EOL;

$terceiraConta = new Conta(new Titular("321.654.987.01", "Barney Cachorro"));
var_dump($terceiraConta);

echo Conta::mostraNumeroDeContas();

