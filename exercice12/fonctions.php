<?php
    function saisie(string $langue,string $key,array &$erreur):void{
    if (empty($langue)) {
        $erreur[$key]="Le champ est obligatoire";
    }else
    if (is_numeric($langue)) {
        $erreur[$key]="Veuillez entrer une langue (francais/anglais)";
    }else{
        if ($langue!='francais' && $langue!='anglais') {
            $erreur[$key]="Veuillez entrer une langue (francais/anglais)"; 
        }
    }
    
    }
function affichageTab(array $tabaff):void{
    $tabl='<table/>';
    $taille=sizeof($tabaff);
    for ($i=1; $i <= $taille ; $i++) { 
        if ($i%3==1) {
            $tabl=$tabl.'<tr>';
        }
        $tabl=$tabl.'<td>'.$tabaff[$i-1].'</td>';
        if ($i%3==0) {
            $tabl=$tabl.'</tr>';
        }
    }
    echo '<p>'.$tabl.'</p>';
    
    }
function langue(string $langue):void{
    $tabfr=array('janvier','fevrier','mars','avril','mais','juin','juiller','aout','septembre','octobre','novembre','decembre');
    $taben=array('january','february','marsh','april','may','june','july','august','september','october','november','december');
    $tab=array('french'=> $tabfr, 'english'=> $taben);
    if ($langue=='francais') {
        affichageTab($tab['french']);
        
    }
    else {
        if ($langue=='anglais') {
            affichageTab($tab['english']);
        }
    }
}
// function french("francais");