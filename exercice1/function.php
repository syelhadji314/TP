<?php
// calcul du perimetre
function perimetre($cote) {
    $perimetre = $cote*4;
    return $perimetre;
}
//calcul de la surface
function surface($cote) {
    $surface = $cote*4;
    return $surface;
}
//calcul du diagonal
function diagonale($cote) {
    $diagonale = sqrt(2*($cote*$cote));
    return $diagonale;
}
?>