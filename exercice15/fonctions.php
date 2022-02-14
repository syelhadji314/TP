<?php
function saise($taille,string $key,array $erros){
    if (empty($taille)) {
        $erros[$key]="Le champ est obligatoire";
    }else {
        if (!is_int($taille)) {
            $erros[$key]="Entrer un nombre entier";
        }else {
            if ($taille<=5) {
            $erros[$key]="Entrer un nombre entier superieur a 5";
                
            }
        }
    }
}