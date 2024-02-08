<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification d'âge</title>
</head>
<body>
    <form method="post">
        <label for="age">Quel est votre âge ?</label>
        <input type="number" id="age" name="age">
        <button type="submit">Vérifier</button>
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ "age" n'est pas vide
        if (!empty($_POST['age'])) {
            // Récupérer l'âge de l'utilisateur
            $age = $_POST['age'];

            // Vérifier si l'utilisateur est mineur ou majeur
            if ($age < 18) {
                echo "<p>Vous êtes mineur.</p>";
            } else {
                echo "<p>Vous êtes majeur.</p>";
            }
        } else {
            // Afficher un message d'erreur si le champ âge est vide
            echo "<p>Veuillez entrer votre âge.</p>";
        }
    }
    ?>

</body>
</html>
