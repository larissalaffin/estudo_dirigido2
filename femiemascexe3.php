<?php
 
 print "********LETRA F OU M?******** \n";
 
 print "Informe seu sexo: \n";
 $sexo= (string) fgetc(STDIN);
  

 if ($sexo == "F" or $sexo == "f") {

     print "Feminino";
 }

 elseif ($sexo == "M" or $sexo == "m") {
     print "Masculino";
 }
  
 else {
       print "SEXO INVÁLIDO";
 }
 

 

