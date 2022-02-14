    <?php
        function saisie($nbre,string $key,array &$erreur):void{
            if (empty($nbre)) {
                $erreur[$key]="Le champ est obligatoire";
            }else
            if (!is_numeric($nbre)) {
                $erreur[$key]="Veuillez saisir un nombre";
            }
        
        }
    ?>