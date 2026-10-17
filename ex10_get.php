<?php
$message = "";
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    $message = "aucune données reçues";
}else{
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $groupe = trim($_GET["groupe"]);
 if ($nom == "" || $prenom == "" || $groupe == "") {
        $message = "Veuillez remplir tous les champs.";
    } else {
        $message = "Bienvenue "
            . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " "
            . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
            . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . ".";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Resultats GET </title>
    </head>
    <body>
        <h1>Resultats de la requête GET</h1>
        <p><?= $message; ?></p>
    </body>
</html>