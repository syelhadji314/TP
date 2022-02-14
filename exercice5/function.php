<?php
    
    $dist;
    function distance($abs1,$ord1,$abs2,$ord2){
        echo 'Soient A(',($abs1. ",".$ord1),')'," " ,'et B(',($abs2.",".$ord2),')'.'<br>';
         

        $dist = sqrt(($abs2-$abs1)*($abs2-$abs1)+($ord2-$ord1)*($ord2-$ord1));

        echo 'La distance entre A et B est :'.$dist;











    }
?>