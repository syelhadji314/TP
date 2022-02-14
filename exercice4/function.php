<?php
//  permutation
    function permutation($nbr1,$nbr2):void{

        $val1 = rand(1,1000);
        $val2 = rand(1,1000);

        echo 'Le premier nombre est :'," " .$val1.'<br>';
        echo 'Le deuxieme nombre est :'," ".$val2.'<br>';

        // permutation

        $tmp = $val1;
        $val1 = $val2;
        $val2 = $tmp;

        echo'Leur permutation donne :'," " .$val1," ".$val2;
        

    }









?>