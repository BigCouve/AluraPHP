<?php

$idade = 16;
$numDePessoas = 2;

echo "\n\n\n";
echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado de um maior de idade." . PHP_EOL;

if ($idade < 18)
{
    echo "Você tem $idade anos. \nNão pode entrar";
}
else if ($idade >= 18)
{
    echo "Você tem $idade anos. Pode entrar";   
}
else if ($idade >= 16 && $numDePessoas >= 2)
{
    echo "Você tem $idade anos e está acompanhado, pode entrar!";
}