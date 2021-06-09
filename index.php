<!DOCTYPE html>
<html lang="fr">
	<head>
        <title>PHP ex2.3 condition</title>
    </head>
    <body >
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
    </body>
</html>