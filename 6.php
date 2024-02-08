<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage du nom complet avec première lettre en majuscule</title>
</head>
<body>
    <form method="post">
        <label for="nom_complet">Entrez votre nom complet :</label>
        <input type="text" id="nom_complet" name="nom_complet">
        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ "nom_complet" n'est pas vide
        if (!empty($_POST['nom_complet'])) {
            // Récupérer le nom complet de l'utilisateur
            $nom_complet = $_POST['nom_complet'];

            // Utiliser la fonction ucwords() pour mettre la première lettre de chaque mot en majuscule
            $nom_complet_maj = ucwords($nom_complet);

            // Afficher le nom complet avec la première lettre de chaque mot en majuscule
            echo "<p>Votre nom complet avec la première lettre de chaque mot en majuscule : $nom_complet_maj</p>";
        } else {
            // Afficher un message d'erreur si le champ nom_complet est vide
            echo "<p>Veuillez entrer votre nom complet.</p>";
        }
    }
    ?>

</body>
</html>
