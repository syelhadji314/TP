<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE1</title>
</head>
<body>
    <?php

        include 'function.php';
        echo 'Le perimetre est '.perimetre(rand(1,100)).'<br>';
        echo 'La surface est '.surface(rand(1,100)).'<br>';
        echo 'Le diagonale est '.diagonale(rand(1,100));




    ?>
</body>
</html>