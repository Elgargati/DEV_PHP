<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp5/Ex3/bootstrap.css">
    <title>Accueil</title>
</head>

<body>
    <?php
    $nom = 'user';
    if (isset($_COOKIE['name'])) {
        $nom = $_COOKIE['name'];
    }
    ?>
    <div class="m-3">
        <h1 class="alert alert-success w-50">Bonjour <?php echo $nom ?></h1>

        <a class="btn btn-outline-primary" href="preference.php">Donner le nom</a>
    </div>
</body>

</html>