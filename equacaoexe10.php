<?php

print "Digite o valor de a: ";
$a = (int) fgets(STDIN);

print "Digite o valor de b: ";
$b = (int) fgets(STDIN);

print "Digite o valor de c: ";
$c = (int) fgets(STDIN);


if ($a == 0) {

    print "A equação não é do segundo grau. \n Fim. \n";
    exit;
}


$delta = pow($b,2) - 4 * $a * $c;
if ($delta < 0) {

    print "A equação não possui raizes iguais pois delta é negativo.\n Fim. \n";
}


if ($delta == 0) {

    $x = (-$b + sqrt($delta)) / (2*$a);
    print "A equação possui uma raiz real: $x \n";
}


if ($delta > 0) {

    $x1 = (-$b + sqrt($delta)) / 2*$a;
    $x2 = (-$b - sqrt($delta)) / 2*$a;

    print "A equação possui duas raizes reais, as quais são: $x1 e $x2 \n";
}