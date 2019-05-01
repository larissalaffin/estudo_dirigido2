<?php

print "******MAIOR E MENOR********\n";

print "Digite o primeiro número:\n";
$n1 = (int) fgets(STDIN);

print "Digite o segundo número:\n";
$n2 = (int) fgets(STDIN);

print "Digite o terceiro número:\n";
$n3 = (int) fgets(STDIN);


        if($n1>$n2 and $n1>$n3 ){
            print "O 1º número é o maior.\n";       
    }
    
        if($n2>$n1 and $n2>$n3) { 
            print "O 2º número é o maior.\n";    
    }
    
        if($n3>$n2 and $n3>$n1) { 
            print "O 3º número é o maior.\n";    
    }
    
        if($n1<$n2 and $n1<$n3 ){
            print "O 1º número é o menor.\n";       
    }
    
        if($n2<$n1 and $n2<$n3) { 
            print "O 2º número é o menor.\n";    
    }
    
        if($n3<$n2 and $n3<$n1) { 
            print "O 3º número é o menor.\n";    
    }