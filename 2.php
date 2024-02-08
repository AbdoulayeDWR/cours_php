<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des nombres de 1 à 10</title>
</head>
<body>
    <h1>Nombres de 1 à 10 :</h1>

    <ul>
        <?php
        // Boucle pour afficher les nombres de 1 à 10
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>

</body>
</html>
