<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puissance</title>
</head>
<body>
    <form method="post">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre">
        <label for="puissance">Entrez une puissance :</label>
        <input type="text" id="puissance" name="puissance">
        <button type="submit">Envoyer</button>
    </form>

<?php
function puissance($nombre, $puissance) {
    // Vérifier si la puissance est égale à 0
    if ($puissance === 0) {
        return 1; // Toute valeur élevée à la puissance 0 est égale à 1
    }

    // Initialiser le résultat à 1
    $resultat = 1;

    // Si la puissance est positive
    if ($puissance > 0) {
        // Multiplier le nombre par lui-même $puissance fois
        for ($i = 0; $i < $puissance; $i++) {
            $resultat *= $nombre;
        }
    }
    // Si la puissance est négative
    elseif ($puissance < 0) {
        // Inverser le nombre et le calculer avec la puissance positive
        $puissance = abs($puissance); // Convertir la puissance en valeur absolue
        for ($i = 0; $i < $puissance; $i++) {
            $resultat *= $nombre;
        }
        // Diviser 1 par le résultat pour obtenir la puissance négative
        $resultat = 1 / $resultat;
    }

    return $resultat;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le champ "nombre" n'est pas vide
    if (!empty($_POST['nombre']) && !empty($_POST['puissance'])) {
        // Récupérer le nom complet de l'utilisateur
        $nombre = $_POST['nombre'];
        $puissance = $_POST['puissance'];

        
        echo "La puissance de $nombre à la puissance $puissance est : " . puissance($nombre, $puissance);
    } else {
        // Afficher un message d'erreur si le champ nom_complet est vide
        echo "<p>Veuillez entrer un nombre ET une puissance.</p>";
    }
}
?>
