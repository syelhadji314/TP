    <?php
        function saisie(string $phrase,string $key,array &$erreur):void{
            if (empty($phrase)) {
                $erreur[$key]="Le champ est obligatoire";
            }else
            if (is_numeric($phrase)) {
                $erreur[$key]="Veuillez saisir une phrase";
            }
        
        }
    ?>
    