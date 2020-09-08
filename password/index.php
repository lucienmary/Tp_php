<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PASSWORD - Php</title>
    </head>
    <body>
        <h1>Accès - Top secret!</h1>
        <!-- Mdp: admin -->

        <form class="" action="secret.php" method="post">
            <input type="password" name="psw" placeholder="Mdp...">
            <button type="submit" name="validation">Valider</button>
        </form>

        <?php
        if ($_GET["err"] == 1) {
            echo "<p>Mdp invalide.</p>";
        }
         ?>

         <small>Mdp: admin</small>

    </body>
</html>
