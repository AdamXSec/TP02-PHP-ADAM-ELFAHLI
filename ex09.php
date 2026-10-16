<?php 
$notes =[
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina"=> 14,
    "Adam"=> 10,
];

$somme = 0;
$nbValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

foreach ($notes as $etudiant => $note) {
    $somme += $note;
    if ($note >= 10) {
        $nbValides++;
    }
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }
}
$moyenne = $somme / count($notes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 </title>
    <style>
    table { border-collapse: collapse; }
    th, td { border: 1px solid #333; padding: 6px 14px; }
  </style>
</head>
<body>
    <h1>Exercice 9 : notes des étudiants</h1>
    <table>
        <tr>
            <td>Etudiant</td>
            <td>Note</td>
            <td>Validé</td>
        </tr>
        <?php foreach ($notes as $etudiant => $note) { ?>
        <tr>
            <td><?= $etudiant; ?> </td>
            <td><?= $note; ?></td>
            <td><?= ($note >= 10) ? "Validé " : "Non validé" ?></td>
        </tr>
        <?php } ?>
        </table>
        <p> Somme des notes : <?=  $somme ?></p>
        <p> Moyenne de la classe :<?= $moyenne ?></p>
        <p>Nombre d'etudiant ayant validé : <?= $nbValides ?></p>
        <p> Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>      
</body>
</html>