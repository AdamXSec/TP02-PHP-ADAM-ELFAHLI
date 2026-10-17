# TP02-PHP-ADAM-ELFAHLI
TP 02 PHP — Programmation Web 2 — 2026/2027
# TP 02 PHP

- Nom : EL FAHLI
- Prénom : Adam
- Groupe : GR-02
- TP : TP 02 - Programmation Web 2 (2026/2027)

## Exercices
1. Exercice 1
2. Exercice 2
3. Exercice 3
4. Exercice 4
5. Exercice 5
6. Exercice 6
7. Exercice 7
8. Exercice 8
9. Exercice 9
10. Exercice 10 (GET et POST)

## Exécution
php -S localhost:8000
### Exercice 2
- `$note` et `$Note` sont deux variables différentes, car PHP est sensible à la casse pour les noms de variables.
- Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
- Noms invalides : `$a!` (le caractère `!` n'est pas autorisé) et `$1a` (un nom ne peut pas commencer par un chiffre).

### Exercice 4
- Avec `echo`, `false` est converti en chaîne vide : rien ne s'affiche. Avec `var_dump()`, on voit le type et la valeur : `bool(false)`.
### Exercice 5

| Valeur testée | Message obtenu |
 --------------------------------
| -1            | Note invalide  |
| 9             | Non validé     |
| 10            | Passable       |
| 12            | Assez bien     |
| 14            | Bien           |
| 16            | Très bien      |
| 21            | Note invalide  |
 --------------------------------
 ### Exercice 10
- Avec la méthode **GET**, les valeurs apparaissent dans l'URL, après le `?`, par exemple : `ex10_get.php?nom=ELFAHLI&prenom=ADAM&groupe=G1`.
- Avec la méthode **POST**, les valeurs sont envoyées dans le corps de la requête : l'URL reste `ex10_post.php` sans les données.