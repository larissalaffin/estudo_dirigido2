<?php

print "**********SEQUÊNCIA DE FIBONACCI***********";

$t1 = 1;
$t2 = 0;


print "\n";


    do {
        $t1 = $t2 + $t1;
        $t2 = $t1 - $t2;

        print $t1 . "\n";


    } while ($t1 <= 500);