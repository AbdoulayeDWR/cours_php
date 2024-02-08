<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des noms de fruits</title>
</head>
<body>
    <h1>Noms de fruits :</h1>

    <ul>
        <?php
        // Déclaration du tableau de noms de fruits
        $fruits = array("Pomme", "Banane", "Orange", "Fraise", "Raisin");

        // Boucle pour afficher les noms de fruits un par un
        foreach ($fruits as $fruit) {
            echo "<li>$fruit</li>";
        }
        ?>
    </ul>

</body>
</html>
