<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EXERCICE14</title>
</head>
<body>
    <?php
    session_start();
    ?>
    
    <div class="container">
        <h1>AFFICHAGE DE NUMEROS</h1>
        <form method="POST" action="controller.php" >
            <p>
                <label for="">Veuillez saisir le nombre de numero que vous voulez</label><br>
                <textarea name="number" id="text" cols="" rows=""></textarea>
            </p>
            <input type="submit" name="btn" value="Envoyer" id="btn" >
        </form>
    </div>
</body>
</html>