<?php
// calcul perimetre d'un rectangle
    function perimetre($longueur,$largeur){
        $perimetre = ($longueur + $largeur)*2;
        return $perimetre;

    }
    function surface($longueur,$largeur){
        $surface = ($longueur * $largeur);
        return $surface;

    }
    function diagonale($longueur,$largeur){
        $diagonale = sqrt($longueur*$longueur + $largeur*$largeur);
        return $diagonale;

    }








?>