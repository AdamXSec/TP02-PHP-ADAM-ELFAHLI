<?php
$numeroMois = (int) date("m");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> EXERCICE 6 </title>
    </head>
    <body>
        <h1> EXERCICE 6: LE NOM DU MOIS </h1>
        <p>
            <?php
            switch ($numeroMois) {
                case 1:
                    echo "Janvier";
                    break;
                case 2:
                    echo "Février";
                    break;
                case 3:
                    echo "Mars";
                    break;
                case 4:
                    echo "Avril";
                    break;
                case 5:
                    echo "Mai";
                    break;
                case 6:
                    echo "Juin";
                    break;
                case 7:
                    echo "Juillet";
                    break;
                case 8:
                    echo "Août";
                    break;
                case 9:
                    echo "Septembre";
                    break;
                case 10:
                    echo "Octobre";
                    break;
                case 11:
                    echo "Novembre";
                    break;
                case 12:
                    echo "Décembre";
                    break;
                default:
                    echo "Numéro de mois invalide";
            }
            ?>
        </p>
    </body>
</html>