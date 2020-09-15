<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Jeux | trié par console</title>
    </head>
    <body>

        <?php

        if (isset($_GET["console"])) {

            echo '<h1>Jeux de ' . $_GET["console"] . '</h1>';

            $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $req = $db->prepare('SELECT nom, console, prix FROM jeux_video WHERE console = ? ORDER BY prix');
            $req->execute(array($_GET["console"]));

            echo '<ul>';

            while ($data = $req->fetch()) {
                echo '<li><p>' . $data['prix'] . '€ | ' . $data['nom'] . '</p></li>';
            }

            echo '</ul>';
        }else {
            echo '<h1> Aucune console choisie.</h1>';
        }

        ?>
    </body>
</html>
