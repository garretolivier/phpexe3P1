<!-- Créer une variable km. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu
-->
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PHP Exercice 3 Partie 1</title>
    </head>
    <body>
        <div>
            <?php
            $km = "1";
            echo "$km km";
            ?>
        </div>
        <div>
            <?php
            $km = "3";
            echo "$km km";
            ?>
        </div>
        <div>
            <?php
            $km = "125";
            echo "$km km";
            ?>
        </div>
        <div>
            <?php
            $km = "1";
            echo "$km km";
            $km = "3";
            echo "$km km";
            $km = "125";
            echo "$km km";
            ?>
        </div>
        <div>
            <?php
            $km = "1";
            ?>
            <div>j'ai parcouru<?= $km;?>km</div>
        </div>
        <?=
         /*pas bien*/'Je parcours ' . $km . ' km, puis ' . $km*3 . ' km, et enfin ' . $km*125 . ' km.';?>
    </body>
   </html>

