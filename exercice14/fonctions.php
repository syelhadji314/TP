<?php
function saisie($nbre,string $key,array $error):void{
    if (empty($nbre)) {
        $error[$key]="Le champ est obligatoire";
    }else {
        if(!is_numeric($nbre)){
            $error[$key]="veuillez saisir des numeros";
        }
    }
}
function numeros(string $str) {
    $tabon=[];
    $tabmal=[]; 
    $tabnumb[]=$str;
    $tabnumb=array_map('trim',explode("\n",$str));
    
    // print_r($tabnumb);
    $i=0;
    $j=0;
    $k=0;
    foreach ($tabnumb as $key => $value) {
        if (is_numeric($tabnumb[$i]) && strlen($tabnumb[$i])==9 && 
        preg_match("/^[77]/",strlen($tabnumb[$i])) && 
        preg_match("/^[78]/",strlen($tabnumb[$i])) && 
        preg_match("/^[76]/",strlen($tabnumb[$i])) &&
        preg_match("/^[70]/",strlen($tabnumb[$i])) && 
        preg_match("/^[75]/",strlen($tabnumb[$i]))) {
            $tabon[$j]=$tabnumb[$i];
            $i++;
            $j++;
        }
        else{
            $tabmal[$k]=$tabnumb[$i];
            $i++;
            $k++;
            
        }  
    } 
            echo "numeros corrects <br>";
            echo "<textarea name='number' id='text' cols='' rows=''>";
            foreach ($tabon as $key => $value) {
                echo $value.'<br>'; 
            }
            echo "</textarea> <br>" ; 
         
            echo'numeros incorects <br>';
            echo '<textarea style="color:red;" name="number" id="text" cols="" rows="">';
            foreach ($tabmal as $key => $value) {
                echo $value." ";
            }
            echo'</textarea>'; 
}
