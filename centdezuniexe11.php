<?php

print "*****CENTENA, DEZENA E UNIDADE****";


print"Digite um número menor que 1000: ";
$num = (int) fgets(STDIN);


if ($num < 1000) {

    $qnt_num = strlen($num) ; 

        $centena = floor($num / 100);
        $num = $num - ($centena * 100);
        
        $dezena = floor($num/10);
        $num = $num - ($dezena * 10);

        if ($centena > 1) {

            $centena = $centena . " centenas";

        }

        else {

            $centena = $centena . " centena";

        }

        if ($dezena > 1) {

            $dezena = $dezena . " dezenas";

        }

        else {

            $dezena = $dezena . " dezena";

        }

        if ($num > 1) {

            $num = $num . " unidades";

        }

        else {

            $num = $num . " unidade";

        }

    if ($qnt_num == 3) {

        print "\nO número possui $centena, $dezena e $num. \n\n";

        }

    elseif ($qnt_num == 2) {

        print "\nO número possui $dezena e $num. \n";

        }


    else {

        print "\nO número possui $num. \n";

        }
}

else {

        print "\nNúmero informado é maior que 1000. \n  Fim. \n";

    }
