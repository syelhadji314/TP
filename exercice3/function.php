<?php
//  somme de deux nombres
    function somme($nombre1,$nombre2){
        $somme = $nombre1 + $nombre2;
        return $somme;
    }
//  Exponentielle
    function exponentielle($nombre1,$nombre2){
        $expo = $nombre1 ** $nombre2;
        return $expo;
    }
//  Difference
    function difference($nombre1,$nombre2){
        $diff = $nombre1 - $nombre2;
        return $diff;
    }
//  Produit
    function produit($nombre1,$nombre2){
        $prod = $nombre1 * $nombre2;
        return $prod;
    }
//  modulo
    function modulo($nombre1,$nombre2){
        $mod = $nombre1 % $nombre2;
        return $mod;
    }
//  Division
    function division($nombre1,$nombre2){
        $div = $nombre1 / $nombre2;
        return $div;
    }
//  Carre
    function carre($nombre1,$nombre2){
        $carre1 = $nombre1 * $nombre1;
        $carre2 = $nombre2 * $nombre2;
        echo'Le carre de'," " .$nombre1," " , 'est'," " .$carre1.'<br>';
        echo'Le carre de'," ".$nombre2," " , 'est'," "   .$carre2;
        return null;
    }
    





?>