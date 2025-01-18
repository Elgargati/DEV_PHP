<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp5/Ex3/bootstrap.css">
    <title>Preference</title>
</head>

<body>
    <div class="m-5 bg-light shadow w-50 rounded-3 m-auto">
        <form action="" method="post" class="d-flex flex-column justify-content-center p-3">
            <label class="form-label my-2" for="nom">Nom :</label>
            <input class="form-control rounded-5 my-2" type="text" name="nom" id="nom" placeholder="donner le nom" required>

            <input class="btn btn-outline-secondary w-50 my-2 m-auto" type="submit" value="Envoyer">
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nom'])) {
        $nom = $_POST['nom'];
        setcookie("name", $nom, time() + 60 * 60 * 24, '/');
        header('location:accueil.php');
    }

    ?>
</body>

</html>