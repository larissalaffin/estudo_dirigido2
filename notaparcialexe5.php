<?php

print "********NOTA PARCIAL***********\n";

print "Informe a primeira nota:\n";
$nota1 = (int)fgets(STDIN);

print "Informe a segunda nota:\n";
$nota2 = (int)fgets(STDIN);

$media= ($nota1+$nota2)/2;

print "A média do aluno entre as duas notas é $media.\n\n";
    
if ($media>7){
 
    print "O aluno foi aprovado.\n";
    
        }     
       
else
    
if ($media<7){

    print "O aluno foi reprovado.\n";
        }   

else

  
if ($media==10){

    print "O aluno foi aprovado com distinção.\n";
    }