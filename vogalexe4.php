<?php

print "*****VOGAL****\n";


print "Digite uma letra: ";
$letra = (string) fgetc(STDIN);


if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u" 
    or $letra == "A" or $letra == "E" or $letra == "I" or $letra == "O" or $letra == "U") {
        print "\n A letra digitada é uma vogal \n \n";
}
else {
    print "\n A letra digitada é uma consoante. \n \n ";
}