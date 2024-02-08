<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Additionner</title>
</head>
<body>
    <form method="post">
        <label for="a">Entrez un nombre :</label>
        <input type="text" id="a" name="a">
        <label for="b">Entrez un deuxieme nombre :</label>
        <input type="text" id="b" name="b">
        <button type="submit">Envoyer</button>
    </form>

<?php
function additionner($a, $b) {
    // Initialisation du résultat à 0
    $resultat = 0;

    // Ajout de $a à $resultat $b fois
    if ($a == 1 || $b == 1) {
        for ($i = 0; $i <= $b; $i++) {
            $resultat += $a;
    }}else {
        for ($i = 0; $i < $b; $i++) {
            $resultat += $a;
    }
    }

    // Retourner le résultat de l'addition
    return $resultat;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le champ "nombre" n'est pas vide
    if (!empty($_POST['a']) && !empty($_POST['b'])) {
        // Récupérer le nom complet de l'utilisateur
        $a = $_POST['a'];
        $b = $_POST['b'];

        
        echo "L'addition de $a avec $b est : " . additionner($a, $b);
    } else {
        // Afficher un message d'erreur si le champ nom_complet est vide
        echo "<p>Veuillez entrer deux nombres.</p>";
    }
}
?>
