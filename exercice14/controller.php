<?php
session_start();
include_once 'fonctions.php';
if (isset($_POST['btn'])) {
    $number=$_POST['number'];
    $error=[];
    $_SESSION['click']=$_POST;
    saisie($number,"number",$error);
    if (count($error)==0) {
        numeros($number);
        
    }
    else{
        $_SESSION['err']=$error;
        header('location:index.php');
        exit();
        
    }
    
}