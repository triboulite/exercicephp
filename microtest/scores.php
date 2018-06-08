<?php session_start(); ?>

<?php
if (isset($_SESSION['prénom'])) {
    $score = 0;
    $prenom = $_SESSION['prénom'];
    if (isset($_POST['question1'])) {
        if ($_POST['question1'] == 'rep2') {
            $score += 1;
        }
    }
    if (isset($_POST['question2'])) {
        if ($_POST['question2'] == 'rep1') {
            $score += 1;
        }
    }
}
try {
    $bdd = new PDO('mysql:host=localhost;dbname=microtest;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_SESSION['prénom'])) {
    $req = $bdd->prepare('INSERT INTO scores(prenom, score) VALUES(:prenom, :score)');
    $req->execute(array(
        'prenom' => $prenom,
        'score' => $score
    ));
}
$reponse = $bdd->query('SELECT * FROM scores');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Test de langage</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body><img src="logo.png" alt="texte alternatif" title="logo">
<p>
</p>
<table>
    <?php while ($donnees = $reponse->fetch()) {
        ?>
        <tr>
            <td><?php echo $donnees['prenom']; ?></td>
            <td><?php echo $donnees['score']; ?></td>
        </tr>
        <?php
    }

    $reponse->closeCursor();
    session_destroy();
    ?>

</body>
</html>