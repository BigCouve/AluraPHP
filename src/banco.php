<?php

require_once "src/conta.php";
require_once "src/Titular.php";
require_once "src/Cpf.php";

$douglas = new Titular(new Cpf("123.456.789-10"), "Douglas Augusto");
$primeiraConta = new Conta($douglas);

$stella = new Titular(new Cpf("123.456.789-09"), "Stella Britto");
$segundaConta = new Conta($stella);

$barney = new Titular(new Cpf("321.654.987-01"), "Barney Cachorro");
$terceiraConta = new Conta($barney);

$primeiraConta->deposita(1500);
$primeiraConta->saca(300); 

echo $primeiraConta->mostraNomeTitular() . PHP_EOL;
echo $primeiraConta->mostraCpfTitular() . PHP_EOL;
echo $primeiraConta->mostraSaldo() . PHP_EOL;


var_dump($terceiraConta);

echo Conta::mostraNumeroDeContas();

