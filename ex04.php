<?php
$entier = 42;
$chaine = "42";
$flottant = 15.8;
$vrai = true;
$faux = false;
$vide = null;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
  </head>
  <body>
    <h1>Exercice 4 : types et conversions</h1>
    <h2> Types et valeurs avec var_dump</h2>
    <pre>
      <?php
      echo "<br>";
      echo "entier : "; var_dump($entier);
      echo "chaine : "; var_dump($chaine);
      echo "flottant : "; var_dump($flottant);
      echo "vrai : "; var_dump($vrai);
      echo "faux : "; var_dump($faux);
      echo "vide : "; var_dump($vide);
      ?>
      </pre>
      
      <h2>3. Conversions de type</h2>
      <pre>
        <?php
        echo "<br>";
        echo 'int "42"  : '; var_dump((int) $chaine);
        echo 'int 15.8  : '; var_dump((int) $flottant);
        echo 'string 42 : '; var_dump((string) $entier);
        ?>
        </pre>
          <h2>4. true et false avec echo, puis var_dump()</h2>
          <pre>
            <?php
            echo "<br>";
            echo "echo true  : [" . $vrai . "]\n";
            echo "echo false : [" . $faux . "]\n";
            echo "var_dump true  : "; var_dump($vrai);
            echo "var_dump false : "; var_dump($faux);
            ?>
            </pre>
            <h2>5. Conversion en booléen</h2>
            <pre>
              <?php
              echo "<br>";
              echo 'bool 0     : '; var_dump((bool) 0);
              echo 'bool "0"   : '; var_dump((bool) "0");
              echo 'bool "PHP" : '; var_dump((bool) "PHP");
              echo 'bool []    : '; var_dump((bool) []);
              ?>
              </pre>
    </body>
</html>