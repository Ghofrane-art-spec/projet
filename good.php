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
    <?php
    $a=$_SESSION['result'];
    echo("you result is ".$a."  it's creepy that you know a lot of details ,joe is that you?");
    ?>
    <br><br>
    <img src="https://media3.giphy.com/media/1xloekzXUNIrZNCmlt/source.gif" alt="300dp" width="600dp"><br><br>
    <?php
    echo("just kidding you're good :)");
    ?>
    <br><br><br>
    <img src="https://www.bing.com/th/id/OGC.e32c2da2823c1396b3926cdba60074da?pid=1.7&rurl=https%3a%2f%2f64.media.tumblr.com%2fc2727b845ecf00896d22bf864f5aa2ca%2f0379cb40d7042e0e-f4%2fs500x750%2f17f8eef12ef4e8c6dc36d9291efa3a437d04fdad.gifv&ehk=4DEySM%2fEguQs4JW8%2fvHN%2f5gtp8QnELOIg9teq4UdmGw%3d" alt="300dp" width="600dp"><br>
    <br><br>
    <h3>The correct answers are:</h3>
    <?php
    echo("<b>"."1/Which American city is Emily from?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['place1']."  "."the correct answer is Chicago"."<br><br><br>");
    echo("<b>"."2/Where is Mindy from?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['place2']."  "."the correct answer is Shangai"."<br><br><br>");
    echo("<b>"."3/Where does Mathieu Cadault wants to take Emily on holiday?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['place3']."  "."the correct answer is Saint-Tropez"."<br><br><br>");
    echo("<b>"."4/What is the name of Camille’s parents’ chateau?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['chateau']."  "."the correct answer is Le Domaine de Lalisse"."<br><br><br>");
    echo("<b>"."5/What is the name of Gabriel’s restaurant?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['resto']."  "."the correct answer is Les Deux Compères"."<br><br><br>");
    echo("<b>"."6/Who is Timothée?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['ti']."  "."the correct answer is Camille’s Younger Brother"."<br><br><br>");
    echo("<b>"."7/When Emily, Thomas, Camille and Gabriel go on a double date, they walk along a canal. Which one was it?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['canal']."  "."the correct answer is Canal Saint-Martin"."<br><br><br>");
    echo("<b>"."8/Who did Paul Brossard sell Savoir to?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['sell']."  "."the correct answer is Gilbert Group"."<br><br><br>");
    echo("<b>"."9/who said :“You’re In Paris Now. I’m Sure We Can Find You Something Better Than Peanut Butter.”?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['q']."  "."the correct answer is Gabriel"."<br><br><br>");
    echo("<b>"."10/who said :“Desire Does Not Mean Lack Of Respect. In Fact, Quite The Opposite. It Is A Sign Of Respect.”?"."</b>"."<br><br>");
    echo("you answers was"."  ".$_SESSION['q1']."  "."the correct answer is Antoine"."<br>");

    ?>
</body>
</html>