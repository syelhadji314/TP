<link rel="stylesheet" href="css/style.css">
<?php
include_once'../exercice11/fonctions.php';
session_start();
if (isset($_POST['btn'])){
    $nbre=$_POST['number'];
    $erreur=[];
    $_SESSION['post']=$_POST;
    saisie($nbre,"number",$erreur);
    if(empty($erreur)){
        tabPremier($nbre);
    }
    else{
        $_SESSION['error']=$erreur;
        header('location:index.php');
        exit();
    }
}else{
    header('location:index.php');
    exit();
}