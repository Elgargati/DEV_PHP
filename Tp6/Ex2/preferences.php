<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp5/Ex3/bootstrap.css">

    <title>Preferences enregistrees</title>
</head>

<body>
    <h1>Vos preferences enregistrees</h1>
    <?php

    if (isset($_COOKIE['language']) && isset($_COOKIE['currency'])) {
        $language = $_COOKIE['language'];
        $currency = $_COOKIE['currency'];

        echo "<p>Votre langue preferee est : $language</p>";
        echo "<p>Votre devise preferee est : $currency</p>";
    } else {
        echo "<p>Vos preferences n'ont pas ete enregistrees.</p>";
    }
    ?>
    <a href="index.php">page acceuil</a>
</body>

</html>