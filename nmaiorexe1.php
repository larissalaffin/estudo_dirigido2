<?php
print "*****MAIOR NÚMERO******\n";


print "Digite um número:\n";
$n1= (int) fgets(STDIN);

print "Digite outro número:\n";
$n2= (int) fgets(STDIN);

if ($n1> $n2) {
    print "Primeiro número é o maior $n1!!!";
}
if ($n2> $n1) {
    print "Segundo número é o maior $n2!!!";
}