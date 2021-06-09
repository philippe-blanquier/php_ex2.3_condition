<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 2.3 condition</title>
    </head>
    <body >
        <p>
            <?php
            $age=21;
            $gender="Homme"; // Femme
            if ($age >= 18)
            {
                if ($gender == "Homme")
                {
                    $maj_min="majeur";
                    $type="un homme";
                }
                else
                {
                    $maj_min="majeure";
                    $type="une femme";
                }
            }
            else
            {
                $maj_min="mineur";
                if ($gender == "Homme")
                {
                    $type="un homme";
                }
                else
                {
                    $type="une femme";
                }
            }
            echo ("Vous êtes ".$type." et vous êtes ".$maj_min)
            ?>
        </p>
    </body>
</html>