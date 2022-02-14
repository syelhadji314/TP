<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EXERCICE6</title>
</head>
<body>
    <h1>Resolution d'une equation du second degre</h1>
    <form method="POST" action="controller.php">
        <p>
            <label for="">Veuiller saisir la valeur de a</label><br>
                <input type="text" name="a" value="" id="a">
                <span>
                    <?php if (isset($erreurUn)): ?>
                    <?= $erreurUn?>
                    <?php endif ?>
                </span>
        </p>
        <p>
            <label for="">Veuiller saisir la valeur de b</label><br>
                <input type="text" name="b" id="">
        </p>
        <p>
            <label for="">Veuiller saisir la valeur de c</label><br>
                <input type="text" name="c" id="">
        </p>
            <input type="submit" value="Envoyer" name="bnt" id="bnt" style="background-color: green; border:none ">
    </form>
    <?php
        



    ?>
</body>
</html>