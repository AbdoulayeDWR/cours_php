<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <form method="post">
        <label for="prenom">Entrez votre prénom : </label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ "prenom" n'est pas vide
        if (!empty($_POST['prenom'])) {
            // Récupérer le prénom de l'utilisateur
            $prenom = $_POST['prenom'];
            // Afficher un message de bienvenue avec le prénom de l'utilisateur
            echo "<p>Bienvenue, $prenom !</p>";
        } else {
            // Afficher un message d'erreur si le champ prénom est vide
            echo "<p>Veuillez entrer votre prénom.</p>";
        }
    }
    ?>

</body>
</html>
