<?php
function tableMultiplication($nbre):void{
    for($i=1;$i<=12;$i++){
        echo $nbre." ". 'x'." ".$i." ". '='." ".$nbre*$i.'<br/>';
    }
}