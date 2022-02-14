<?php
function lesChamps(int $nbre) :void {
    echo'<b> LES N CHAMPS INPUTS SONT</b>'.'<br/>';
    for($i=1;$i<=$nbre;$i++){
        echo'Champ'." ".$i." ".'<input type="text" name="number" value=""/>'.'<br>';
    }
}