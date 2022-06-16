<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emily In Paris Quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <?php
        if(isset($_POST['btn'])){
            $_SESSION['place1']=$_POST['place1'];
            $_SESSION['place2']=$_POST['place2'];
            $_SESSION['place3']=$_POST['place3'];
            $_SESSION['chateau']=$_POST['chateau'];
            $_SESSION['resto']=$_POST['resto'];
            $_SESSION['ti']=$_POST['ti'];
            $_SESSION['canal']=$_POST['canal'];
            $_SESSION['sell']=$_POST['sell'];
            $_SESSION['q']=$_POST['q'];
            $_SESSION['q1']=$_POST['q1'];
            header("Location: result.php");
            exit();
        }
    ?>
    <h1>Emily In Paris Quiz</h1>
    <img src="https://static1.purebreak.com/articles/6/22/25/46/@/774444-emily-in-paris-saison-2-netflix-devoil-624x0-1.jpg" alt="300dp" width="400dp">
    <h3>Test your knowledge and see if you can answer the questions,you will get a score and the correct answers at the end of the quiz</h3><br>
    <form  method="POST">
        <b><label for="place 1">1/Which American city is Emily from?</label></b><br>
        <input TYPE ="radio" NAME ='place1' value="North Carolina" >North Carolina <br>
        <input TYPE ="radio" NAME ='place1' value="Los Angeles" >Los Angeles <br>
        <input TYPE ="radio" NAME ='place1' value="Chicago" >Chicago<br>
        <input TYPE ="radio" NAME ='place1' value="New Orleans" >New Orleans <br><br><br>
        <img src="https://th.bing.com/th/id/OIP.UTgWTru3_uGNx70ND4WzRgHaJQ?pid=ImgDet&rs=1" alt="300dp" width="300dp"><br><br><br>
        <b><label for="place 2">2/Where is Mindy from?</label></b><br>
        <input TYPE ="radio" NAME ="place2" value="Taïwan" >Taïwan China <br>
        <input TYPE ="radio" NAME ="place2" value="Wuhan" >Wuhan China <br>
        <input TYPE ="radio" NAME ="place2" value="Shangai" >Shangai China <br>
        <input TYPE ="radio" NAME ="place2" value="Hong Kong" >Hong Kong China <br><br><br>
        <img src="https://th.bing.com/th/id/R.2ab14cb96a28e7331725a84195dfb368?rik=%2feQfgPChmTa%2b%2bA&pid=ImgRaw&r=0" alt="300dp" width="300dp"><br><br><br>
        <b><label for="place 3">3/Where does Mathieu Cadault wants to take Emily on holiday?</label></b><br>
        <input TYPE ="radio" NAME ="place3" value="Saint-Raphaël" >Saint-Raphaël<br>
        <input TYPE ="radio" NAME ="place3" value="Saint-Tropez" >Saint-Tropez<br>
        <input TYPE ="radio" NAME ="place3" value="Sainte-Maxime" >Sainte-Maxime <br>
        <input TYPE ="radio" NAME ="place3" value="Nice" >Nice <br><br><br>
        <img src="https://th.bing.com/th/id/R.667ecd3b3f4ef5501e6bd7a0b4aa94ee?rik=ntEGYS02W7s0OA&pid=ImgRaw&r=0" alt="300dp" width="300dp"><br><br><br>
        <b><label for="chateau">4/What is the name of Camille’s parents’ chateau?</label></b><br>
        <input TYPE ="radio" NAME ="chateau" value="Chateau de famille" >Chateau de famille<br>
        <input TYPE ="radio" NAME ="chateau" value="Le Domaine de Lalisse" >Le Domaine de Lalisse<br>
        <input TYPE ="radio" NAME ="chateau" value="le Domaine de Razart" >le Domaine de Razart<br>
        <input TYPE ="radio" NAME ="chateau" value="Chateau Razart" >Chateau Razart <br><br><br>
        <img src="https://hg-images.condecdn.net/image/8vpAvVvjB5D/crop/1020/f/emilyinparis_season1_episode8_00_06_48_1325201.jpg" alt="300dp" width="350dp"><br><br><br>
        <b><label for="resto">5/What is the name of Gabriel’s restaurant?</label></b><br>
        <input TYPE ="radio" NAME ="resto" value="Les Deux Acolytes" >Les Deux Acolytes<br>
        <input TYPE ="radio" NAME ="resto" value="Les Deux Potes" >Les Deux Potes<br>
        <input TYPE ="radio" NAME ="resto" value="Les Deux Compères" >Les Deux Compères<br>
        <input TYPE ="radio" NAME ="resto" value="Les Deux Amis" >Les Deux Amis <br><br><br>
        <img src="https://th.bing.com/th/id/R.5dcf63ebb45c5d2c72f5e183e0f69d13?rik=g6Uo2OxbiaTrtQ&pid=ImgRaw&r=0" alt="300dp" width="350dp"><br><br><br>
        <b><label for="ti">6/Who is Timothée?</label></b><br>
        <input TYPE ="radio" NAME ="ti" value="Camille’s Older Brother" >Camille’s Older Brother<br>
        <input TYPE ="radio" NAME ="ti" value="Camille’s Younger Brother" >Camille’s Younger Brother<br>
        <input TYPE ="radio" NAME ="ti" value="Camille’s Dad" >Camille’s Dad<br>
        <input TYPE ="radio" NAME ="ti" value="Camille’s Cousin" >Camille’s Cousin <br><br><br>
        <img src="https://th.bing.com/th/id/R.cdd4f940e7c3d43ef24a1c7d4c3af33a?rik=7fjbcYvKHsj%2fhw&pid=ImgRaw&r=0" alt="300dp" width="300dp"><br><br><br>
        <b><label for="canal">7/When Emily, Thomas, Camille and Gabriel go on a double date, they walk along a canal. Which one was it?</label></b><br>
        <input TYPE ="radio" NAME ="canal" value="Canal Saint-Denis" >Canal Saint-Denis<br>
        <input TYPE ="radio" NAME ="canal" value="Canal Du Midi" >Canal Du Midi<br>
        <input TYPE ="radio" NAME ="canal" value="Canal De Brienne" >Canal De Brienne<br>
        <input TYPE ="radio" NAME ="canal" value="Canal Saint-Martin" >Canal Saint-Martin <br><br><br>
        <img src="https://th.bing.com/th/id/R.2faa73f50aa2caef3304a22518e7bb4e?rik=5HDqvnRQHqIQ5w&pid=ImgRaw&r=0" alt="300dp" width="350dp"><br><br><br>
        <b><label for="sell">8/Who did Paul Brossard sell Savoir to?</label></b><br>
        <input TYPE ="radio" NAME ="sell" value="Albert Group" >Albert Group<br>
        <input TYPE ="radio" NAME ="sell" value="Gilbert Group" >Gilbert Group<br>
        <input TYPE ="radio" NAME ="sell" value="Robert Group" >Robert Group<br>
        <input TYPE ="radio" NAME ="sell" value="Bernard Group" >Bernard Group <br><br><br>
        <img src="https://th.bing.com/th/id/R.80001bc3d6107b4c78287418f5c8e3f4?rik=RBDIyrvoANbroQ&riu=http%3a%2f%2fwww.nayralaise.it%2fnl%2fwp-content%2fuploads%2f2020%2f10%2femily-in-paris4-980x547.jpg&ehk=kGplzd8D7DRQfRWmxByKCzPWUqnowVLmKnZkLja5Cak%3d&risl=&pid=ImgRaw&r=0" alt="300dp" width="350dp"><br><br><br>
        <b><label for="q">9/who said :“You’re In Paris Now. I’m Sure We Can Find You Something Better Than Peanut Butter.”?</label></b><br>
        <input TYPE ="radio" NAME ="q" value="Camille" >Camille<br>
        <input TYPE ="radio" NAME ="q" value="Gabriel" >Gabriel<br>
        <input TYPE ="radio" NAME ="q" value="Mindy" >Mindy<br>
        <input TYPE ="radio" NAME ="q" value="Sylvie" >Sylvie <br><br><br>
        <img src="https://th.bing.com/th/id/R.6db60466ddde4f26bf166e84b9ebc989?rik=PKTxe%2b3yTYMjVA&pid=ImgRaw&r=0" alt="300dp" width="350dp"><br><br><br>
        <b><label for="q1">10/who said :“Desire Does Not Mean Lack Of Respect. In Fact, Quite The Opposite. It Is A Sign Of Respect.”?</label></b><br>
        <input TYPE ="radio" NAME ="q1" value="Camille" >Camille<br>
        <input TYPE ="radio" NAME ="q1" value="Gabriel" >Gabriel<br>
        <input TYPE ="radio" NAME ="q1" value="Antoine" >Antoine<br>
        <input TYPE ="radio" NAME ="q1" value="Sylvie" >Sylvie <br><br><br>
        <img src="https://th.bing.com/th/id/OIP.LidjJ48EfsDXym4RhUNJkQHaFL?pid=ImgDet&rs=1" alt="300dp" width="350dp"><br><br><br>
        <button TYPE="submit" name="btn">submit my answers</button>
    </form>
</body>
</html>
