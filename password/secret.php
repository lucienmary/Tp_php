<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>SECRET - Php</title>
    </head>
    <body>
        <h1>Top secret!</h1>

        <?php
            $key = "admin";

            $input_psw = htmlspecialchars($_POST['psw']);

            if (isset($input_psw) AND $input_psw == $key) {
                echo '
                    <p>********</p>
                    <p>******</p>
                    <p>**********</p>
                    <p>*************</p>
                    <p>*******</p>';
            }else {
                header('Location: index.php?err=1');
            }

         ?>
         
    </body>

    <a href="index.php"> <= retour index </a>

</html>
