<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EXERCICE15</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="POST">
            <label for="">Saisissez la taille de la matrice</label><br>
            <input type="text" name="taille" id="taille"><br>
            <select name="" id="">
                <option value="">Bleu</option>
                <option value="">Rouge</option>
            </select><br>
            <div>
            <input type="radio" id="haut" name="color" value="haut"
                    checked>
            <label for="haut">HAUT</label>
            </div>

            <div>
            <input type="radio" id="bas" name="color" value="bas">
            <label for="bas">BAS</label>
            </div>

            <input type="submit" name="btn" id="btn" value="Dessiner">
        </form>
    </div>
</body>
</html>