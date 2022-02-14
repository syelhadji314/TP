<?php
    include_once'fonctions.php'; /* 'fonctionIdent.php'; */
    if(isset($_POST['btn'])){
        $nbre=$_POST['number'];
        /* saisie($nbre,'number',$erreur); */
        listNbre($nbre);
    }else{
        header('location:index.php');
        exit();
    }
?>