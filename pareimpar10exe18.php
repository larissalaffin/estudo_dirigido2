<?php
 
print "**********PAR E ÍMPAR DE 10*********";

$par = 0;
$impar = 0;


for ($i=1; $i <= 10 ; $i++) { 


    print "Informe o $i º número: ";
    $num = (int) fgets(STDIN);

    if (($num % 2) == 0) {

        $pares += 1;
    }

    else {

        $impares += 1;
    }

}
print  "Entre os 10 números digitados $pares são pares e $impares são impares. ";