<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE3</title>
</head>
<body>
    <?php

        include 'function.php';
        $nbr1= rand(1,10);
        $nbr2= rand(1,10);
        echo 'La somme de '.$nbr1," " ,'et' ," ".$nbr2," " ,'est : '.somme($nbr1,$nbr2).'<br>';
        echo 'L exponentielle de '.$nbr1," " ,'et' ," ".$nbr2," " ,'est : '.exponentielle($nbr1,$nbr2).'<br>';
        echo 'La difference de '.$nbr1," " ,'et' ," ".$nbr2," " ,'est : '.difference($nbr1,$nbr2).'<br>';
        echo 'Le produit de '.$nbr1," " ,'et' ," ".$nbr2," " ,'est : '.produit($nbr1,$nbr2).'<br>';
        echo 'Le modulo de '.$nbr1," " ,'et' ," ".$nbr2," " ,'est : '.modulo($nbr1,$nbr2).'<br>';
        echo 'La division de '.$nbr1," " ,'par' ," ".$nbr2," " ,'est : '.division($nbr1,$nbr2).'<br>';
        carre($nbr1,$nbr2);
    ?>
</body>
</html>