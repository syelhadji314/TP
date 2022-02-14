<?php
function saisie($nbre,string $key,array &$erreur):void{
    if (empty($nbre)) {
        $erreur[$key]="Le champ est obligatoire";
    }else
    if (!is_numeric($nbre)) {
        $erreur[$key]="Veuillez saisir un nombre";
    }

}
function bissex($annee): bool {
    if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
        return true;
    }
        return false;
}
function nombreJour(int $mois, $annee) : int {
    
    if ($mois==2){ 
        if (bissex($annee)) {
            $nbj=29;
        }else
            $nbj=28;
}
    elseif (($mois==4)||($mois==6)||($mois==9)||($mois==11)) {
        $nbj= 30;
    }else
    $nbj=31;
    return $nbj;
}
function dateValide($jour,$mois,$annee) : bool {
    if(($jour>0 && $jour<=nombreJour($mois,$annee)) && ($mois>0 && $mois<=12)){
        return true;
    }
    return false;
}
function dateSuivante($jour,$mois,$annee){
    if (dateValide($jour,$mois,$annee)) {
        if ($jour==nombreJour($mois,$annee)) {
            $jour=1;
            if($mois!=12){
                $mois++;
            }else
            $mois=1;
            $annee++;
        }else
        $jour++;
    }
    echo"La date suivante est : ".$jour."/".$mois."/".$annee;
}
function  datePrecedente($jour,$mois,$annee){
    if (dateValide($jour,$mois,$annee)) {
        if ($jour!=1) {
            $jour--;
        }else{
            $jour=nombreJour($mois-1,$annee);
            if ($mois==1) {
                $mois=12;
                $annee--;
            }else{
            $mois--;
            }
        }
        echo"La date precedente est :".$jour,"/",$mois,"/".$annee."\n";
    }
    

}echo dateValide(28,13,2000);