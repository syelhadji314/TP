<?php
     function saisie($nbre,string $key,array &$erreur):void{
        if (empty($nbre)) {
            $erreur[$key]="Le champ est obligatoire";
        }else
            if (is_int($nbre)) {
                $erreur[$key]="Veuillez saisir un nombre entier superieur à 10000";
            } else{
                if($nbre <= 10000) {
                $erreur[$key]="Veuillez saisir un nombre superieur à 10000";

                }
            }            
    }

    /*---------------fonction_nombre_premier----------------*/

    function premier($nbre):bool{
        $nbrdiv=1;
        for($i=2;$i<=$nbre;$i++){
            if($nbre%$i==0){
                $nbrdiv++;
            }
        }
            if($nbrdiv==2){
            return true;
            }
             return false;
    }

    /*-------affichage du tableau HTML--------*/

    function affichageTab(array $tabaff,$tail):void{
        $tabl='<table/>';
        $taille=sizeof($tabaff);
        for ($i=1; $i <= $taille ; $i++) { 
            if ($i%$tail==1) {
                $tabl=$tabl.'<tr/>';
            }
            $tabl=$tabl.'<td>'.$tabaff[$i-1].'</td>';
            if ($i%$tail==0) {
                $tabl=$tabl.'</tr>';
            }
        }
        echo '<p>'.$tabl.'</p>';
        
    }

    /*-----------tableau associatif----------*/

    function tabPremier($nbre){
        $tab=[];
        for ($i=1; $i <= $nbre ; $i++) {
            if (premier($i)) {
                $tab[]=$i;
            }
        }

        $som=0;
        $tailletab=sizeof($tab);

        for ($i=0; $i < $tailletab ; $i++) { 
            $som=$som+$tab[$i];
        }
        $moy=$som/$tailletab;
        $tabsup=[];
        $tabinf=[];
        for ($i=0; $i < $tailletab ; $i++) { 
            if ($moy>$tab[$i]) {
                $tabinf[]=$tab[$i];
            }else
                $tabsup[]=$tab[$i];
        }
        $tab = array('premier' => $tab,'inferieur' => $tabinf,'superieur' => $tabsup );
        affichageTab($tab['premier'],12);
        affichageTab($tab['inferieur'],12);
        affichageTab($tab['superieur'],12);

    }

    

