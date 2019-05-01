<?php

print "*********ORDEM DECRESCENTE*********\n";

print "Informe o primeiro número: ";
$n1 = (int) fgets(STDIN);

print "Informe o segundo número: ";
$n2 = (int) fgets(STDIN);

print "Informe o terceiro número: ";
$n3 = (int) fgets(STDIN);

$num = ["$n1", "$n2", "$n3"];


rsort ($num);
print " $num[0] \n";
print " $num[1] \n";
print " $num[2] \n";