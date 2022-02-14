<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE2</title>
</head>
<body>
    <?php
        include 'function.php';
        $long = rand(1,100);
        $larg = rand(1,100);
        echo 'Le perimetre est : '.perimetre($long,$larg).'<br>';
        echo 'La surface est : '.surface($long,$larg).'<br>';
        echo 'Le diagonale est : '.diagonale($long,$larg);

    ?>
</body>
</html>