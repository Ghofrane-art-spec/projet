<?php session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz result</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <h1>The Quiz Result</h1>
    <br>
    <?php
     $a=$_SESSION['place1'];
     $b=$_SESSION['place2'];
     $c=$_SESSION['place3'];
     $d=$_SESSION['chateau'];
     $e=$_SESSION['resto'];
     $f=$_SESSION['ti'];
     $g=$_SESSION['canal'];
     $h=$_SESSION['sell'];
     $i=$_SESSION['q'];
     $j=$_SESSION['q1'];
     $r=0;
     if($a=="Chicago"){
         $r+=1;
     }
     if($b=="Shangai"){
         $r+=1;
     }
     if($c=="Saint-Tropez"){
         $r+=1;
     }
     if($d=="Le Domaine de Lalisse"){
         $r+=1;
     }
     if($e=="Les Deux Compères"){
         $r+=1;
     }
     if($f=="Camille’s Younger Brother"){
         $r+=1;
     }
     if($g=="Canal Saint-Martin"){
         $r+=1;
     }
     if($h=="Gilbert Group"){
         $r+=1;
     }
     if($i=="Gabriel"){
         $r+=1;
     }
     if($j=="Antoine"){
         $r+=1;
     }
     if($r<5){
        header("location: bad.php");
     }
     elseif(($r>=5)&&($r<=7)){
        header("location: meh.php");
     }
     else{
        header("location: good.php");
     }
     $_SESSION['result']=$r;
    ?>
    <br><br>
</body>
</html>