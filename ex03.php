<?php
define("TAUX_TVA",20);
define("DEVISE","MAD");

$prix_Unitaire_HT = 60;
$quantite = 10;
$total_HT = $prix_Unitaire_HT * $quantite;
$montant_TVA = $total_HT * TAUX_TVA / 100;
$total_TTC = $total_HT + $montant_TVA;

$frais_Livraison = 15;
$total_TTC_Livraison = $total_TTC + $frais_Livraison;
$total_TTC_Livraison += $frais_Livraison;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>Exercice 3 : calculs</h1>
        <ul>
            <li>Prix unitaire HT : <?= $prix_Unitaire_HT ?> <?= DEVISE ?></li>
            <li>Quantité : <?= $quantite ?></li>
            <li>Total HT : <?= $total_HT ?> <?= DEVISE ?></li>
            <li>Montant TVA (<?= TAUX_TVA ?>%) : <?= $montant_TVA ?> <?= DEVISE ?></li>
            <li>Total TTC : <?= $total_TTC ?> <?= DEVISE ?></li>
            <li>Frais de livraison : <?= $frais_Livraison ?> <?= DEVISE ?></li>
            <li>Total TTC avec livraison : <?= $total_TTC_Livraison ?> <?= DEVISE ?></li>
        </ul>
        <P>
            <?php
            if (defined("TAUX_TVA")) {
                echo "La constante TAUX_TVA est définie avec la valeur : " . TAUX_TVA . "<br>";
            }else{
                echo "La constante TAUX_TVA n'est pas définie.<br>";
            }
             ?>
        </P>
    </body> 
</html>
