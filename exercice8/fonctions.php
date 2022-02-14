<?php
    function listNbre(int $nbre) :void{
        echo '<b>'. 'Les'." " .$nbre." ".'nombre compris entre 1 et ' .$nbre. ' sont :<br/>'. '</b>';
        
        for($i=1;$i<=$nbre;$i++){
            echo '<li> Le nombre : ' .$i.' </li> <br/>';
        };
    }    