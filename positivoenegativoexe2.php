<?php

print "*******POSITIVO E NEGATIVO**********\n";

print "Informe um valor:\n";
$val1= (int) fgets(STDIN);


if ($val1 >=0 ) {
    print "Valor positivo!";
}

if ($val1 <=0) {
    print "Valor negativo!";
}
