<link rel="stylesheet" href="css/style.css">
<?php
include_once'fonctions.php';
session_start();
if (isset($_POST['btn'])){
    $langue=$_POST['number'];
    $erreur=[];
    $_SESSION['post']=$_POST;
    saisie($langue,"number",$erreur);
    if(empty($erreur)){
        langue($langue);
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