<?php
$nom = "EL FAHLI";
$prenom = "Adam";
$age = 18;
$formation = "Informatique Appliquée";

$phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ".";

// Ajout avec .=
$phrase .= " J'apprends PHP";

// PHP est sensible à la casse : $note et $Note sont deux variables
$note = 15;
$Note = 19;

?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Exercice 2</title>
        </head>
        <body>
            <h1>Exercice 2 : variables</h1>
            <p><?php echo $phrase; ?></p>
            <p>$note = <?php echo $note; ?></p>
            <p>$Note = <?php echo $Note; ?></p>
        </body>
    </html>