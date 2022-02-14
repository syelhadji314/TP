<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EXERCICE12</title>
</head>
<body>
    <?php 
        session_start();
    ?>
    <div class="container">
        <h1>AFFICHAGES DES MOIS DE L'ANNEE</h1>
        <div class="content">
            <form method="POST" action="controller.php">
                <p>
                    <label for=""></label><br>
                    <input type="text" name="number" value="" placeholder="Veuiller saisir une langue entre francais/anglais" id="inp" >
                    <?php if(isset($_SESSION['error']['number'])):?>
                            <span style="color:red"><?php echo $_SESSION['error']['number'] ?></span>
                    <?php session_unset(); endif?>
                </p>
                <input type="submit" name="btn" value="Envoyer" id="btn" >
                
            </form>
        </div>
    </div>
</body>
</html>
