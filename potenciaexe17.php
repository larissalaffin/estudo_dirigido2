<?php

print "***********EXPOENTE E BASE************\n";

print "Informe a base de sua potência:\n";
$base = (float) fgets(STDIN);

print "Informe o expoente de sua potência:\n ";
$expoente = (float) fgets(STDIN);

$potencia= (float) $base ** $expoente;

print "O resultado da potência é igual a $potencia \n";

print "Tendo como base $base e como expoente $expoente";
