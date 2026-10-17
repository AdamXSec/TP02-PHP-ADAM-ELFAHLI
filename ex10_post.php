<?php 
$message = "";
if (!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["groupe"])) {
    $message = "aucune données reçues";
}else{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $groupe = trim($_POST["groupe"]);
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
        <title> Resultats POST </title>
    </head>
    <body>
        <h1>Resultats de la requête POST</h1>
        <p><?= $message; ?></p>
    </body>
</html>