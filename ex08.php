<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Exercice 8</title>
</head>
<body> 
    <h1>Exercice 8 : boucles </h1>
    <!-- P1 : N pairs de 0 a 20-->
    <section>
      <h2> P1 : N pairs de 0 a 20</h2>
      <p>
        <?php
        $n = 0;
        while ($n <= 20) { 
            if ($n == 10 ) {
                echo "<strong>" . $n . "</strong> ";
        }else {
                echo $n . " ";
            }
            $n += 2;
        }
        ?>
      </p>
    </section>
    <!-- P2 : while et do-while -->
     <section>
        <h2> P2 : while et do-while </h2>
        <p>
            <?php
            $compteur = 5 ; 
            $executionswhile = 0;
            while ($compteur < 5 ) {
                $executionswhile++;
                $compteur++;
            }
            echo "while : " .$executionswhile. " exécutions <br>";
            $compteur = 5 ;
            $executionswhile = 0;
            do {
                $executionswhile++;
                $compteur++;
            } while ($compteur < 5 );
            echo "do-while : " .$executionswhile. " exécutions <br>";
            ?>
        </p>
     </section>
     <!-- P3 : continue et break -->
      <section> 
        <h2> P3 : continue et break </h2>
        <p>
            <?php
            for ($i = 1; $i <= 20; $i++) {
                if ($i%3 == 0) {
                    continue;
                }
                if ($i >= 16) {
                    break;
                }
                echo $i . " ";
            }
            ?>
      </section>
</body>
</html>