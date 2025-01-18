<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required><br>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom" required><br>
        <label for="age">age</label>
        <input type="number" name="age" id="age" required><br>
        <input type="submit" value="envoyer">
    </form>

    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])) {
    //     $nom = $_POST['nom'];
    //     $prenom = $_POST['prenom'];
    //     $age = $_POST['age'];

    //     echo "Bonjeur $prenom $nom age: $age";
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        echo "Bonjour $prenom $nom age : $age";
    }

    ?>
</body>

</html>