<?php
    function champVide($nbre):bool{
        return empty($nbre); 
    }
    function estNombre($nbre):bool{
        return is_numeric($nbre); 
    }
    function validation($a,$b,$c) :void {
        if (empty($a) && empty($b) && empty($c)) {
            $erreurUn = "Veuillez remplir ce champ";
        }else if (!estNombre($a,$b,$c)) {
            $erreurDeux = "Veuillez ecrire un nombre";
        }
    }








?>