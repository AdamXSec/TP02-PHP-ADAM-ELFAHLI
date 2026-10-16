<?php 
$moyenne = 14 ;
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <h1> EXERCICE 5: MENTION SELON LA MOYENNE </h1>
        <P>Moyenne : <?= $moyenne ?></P>
        <p>
            <?php
            if ($moyenne <0 || $moyenne > 20) {
                echo "Note invalide";
            }
            elseif ($moyenne < 10) {
                echo "Non validé";
            }elseif ($moyenne < 12) {
                echo "Passable";
            }elseif ($moyenne < 14) {
                echo "Assez bien";
            }elseif ($moyenne < 16) {
                echo "Bien";
            }else {
                echo "Très bien";
            }
            ?>
        </p>
    </body>
</html>