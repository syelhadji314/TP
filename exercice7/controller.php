<?php
    include_once 'fonctions.php';
        session_start();
    if (isset($_POST["btn"])) {
        $jour=$_POST["jour"];
        $mois=$_POST["mois"];
        $annee=$_POST["annee"];
        $_SESSION['post']=$_POST;
        $erreur=[];
        saisie($jour,"jour",$erreur);
        saisie($mois,"mois",$erreur);
        saisie($annee,"annee",$erreur);

        if(count($erreur)==0){;
            dateSuivante($jour,$mois,$annee);
            echo'<br>';
            datePrecedente($jour,$mois,$annee);
        } 
        else  {
            $_SESSION['error']=$erreur;
            header('location:index.php');
            exit();
        }
    }else{
        header('location:index.php');
        exit();
    }







?>