<?php
    include ('function.php');        
    if (isset($_POST['btn'])) {
        $a=$_POST["a"];
        $b=$_POST["b"];
        $c=$_POST["c"];
        $erreurUn="";
        $erreurDeux="";
        validation($a,$b,$c);
       
        if (empty($a) && empty($b) && empty($c)) {
            echo $erreurUn["a,b,c"];
            header('location:index.php');
            exit();
        }
    }
    




?>