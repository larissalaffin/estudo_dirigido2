<?php

print "*******PREÇO PRODUTO********\n";

print "Qual o preço do primeiro produto?\n";
$p1 = fgets(STDIN);

print "Qual o preço do segundo produto?\n";
$p2 = fgets(STDIN);

print "Qual o preço do terceiro produto?\n";
$p3 = fgets(STDIN);

    if($p1<$p2 and $p1<$p3 ){

            print "Você deve comprar o primeiro produto.\n";       
    }
    
    if($p2<$p1 and $p2<$p3) { 

            print "Você deve comprar o segundo produto.\n";    
    }
    
    if($p3<$p2 and $p3<$p1) { 

            print "Você deve comprar o terceiro produto.\n";    
    }