<?php session_start();
$_SESSION['prénom']=$_POST['prenom']?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Test de langage</title>
</head>
<body>
<img src="logo.png" alt="texte alternatif" title="logo">
<form action="scores.php" method="post" >
    <p>
        <b>Question 1</b><br>
        J'ai mangé. Je
    </p>

    <input type="radio" name="question1" value="rep1"/> n'a plus faim<br />
    <input type="radio" name="question1" value="rep2"/> n'ai plus faim<br />

    <p>
        <br>
        <b>Question 2</b><br>
        Il mesure deux mètres. Il est
    </p>

    <input type="radio" name="question2" value="rep1"/> grand<br />
    <input type="radio" name="question2" value="rep2"/> grande<br />
    <br><br>
    <input type="submit" value="Valider">

</form>


</body>
</html>