<?php

require_once "src/conta.php";
require_once "src/Titular.php";
require_once "src/Cpf.php";

$douglas = new Titular("Douglas Augusto");
$cpfDouglas = new Cpf("123.456.789-10");
$primeiraConta = new Conta($cpfDouglas, $douglas);

$stella = new Titular( "Stella Britto");
$cpfStella = new Cpf ("123.456.789-09");
$segundaConta = new Conta($cpfStella, $stella);

$barney = new Titular("Barney Cachorro");
$cpfBarney = new Cpf ("321.654.987.01");
$terceiraConta = new Conta($cpfBarney, $barney);

$primeiraConta->deposita(1500);
$primeiraConta->saca(300); 

echo $primeiraConta->mostraNomeTitular() . PHP_EOL;
echo $primeiraConta->mostraCpfTitular() . PHP_EOL;
echo $primeiraConta->mostraSaldo() . PHP_EOL;


var_dump($terceiraConta);

echo Conta::mostraNumeroDeContas();

