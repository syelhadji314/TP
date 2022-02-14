<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EXERCICE_7</title>
</head>
<body>
    <?php 
        session_start();
    ?>
    <div class="date">
        <h1>Affichage de la date suivante et precedente</h1>
        <div id="content">
            <form action="controller.php" method="POST">
            
                    <label for="">Entrer un jour</label><br>
                        <input type="text" name="jour" id="" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post']) ) echo $_SESSION['post']['jour']; ""?>">
                        <?php if(isset($_SESSION['error']['jour'])):?>
                            <span style="color:red"><?php echo $_SESSION['error']['jour'] ?></span>
                        <?php endif?>
                    
                </p>
                <p>
                    <label for="">Entrer un mois</label><br>
                        <input type="text" name="mois" id="" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) echo $_SESSION['post']['mois']; ""?>">
                        <?php if(isset($_SESSION['error']['mois'])):?>
                            <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
                        <?php endif?>
                </p>
                <p>
                    <label for="">Entrer une annee</label><br>
                        <input type="text" name="annee" id="" value="<?php if(!isset($_SESSION['error']['annee']) && isset($_SESSION['post']) ) echo $_SESSION['post']['annee']; ""?>">
                        <?php if(isset($_SESSION['error']['annee'])):?>
                            <span style="color:red"><?php echo $_SESSION['error']['annee'] ?></span>
                        <?php endif?>
                </p>
                <input type="submit" name="btn" value="envoyer" id="btn">
                <!-- <input typ    $nbre=$_POST['number'];
        saisie($nbre,'number',$erreur);e="submit" name="btn" value="datePrecedente" id="btn"> -->

            </form>
        </div>
    </div>
</body>
</html>