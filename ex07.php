<?php
$nombre = 7;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Exercice 7</title>
</head>
<body>
  <h1>Exercice 7 : boucles for</h1>

  <!-- Section 1 : table de multiplication -->
  <section>
    <h2>Table de multiplication de <?= $nombre ?></h2>
    <pre>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " x " . $i . " = " . ($nombre * $i) . "\n";
}
?>
    </pre>
  </section>

  <!-- Section 2 : pyramide de 6 lignes -->
  <section>
    <h2>Pyramide de 6 lignes</h2>
    <pre>
<?php
for ($ligne = 1; $ligne <= 6; $ligne++) {

    for ($j = 1; $j <= $ligne; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
    </pre>
  </section>
</body>
</html>