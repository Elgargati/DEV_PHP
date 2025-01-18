<?php
$username = "";
if (isset($_COOKIE['remember_me'])) {
    $username = $_COOKIE['remember_me'];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp5/Ex3/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="d-flex flex-column justify-content-center ">
            <form action="preference.php" method="post" class="w-50 m-auto">
                <label class="form-label" for="username">Nom d'utilisateur :</label>
                <input class="form-control" type="text" id="username" name="username" value="<?php echo $username; ?>"><br><br>

                <label class="form-label" for="password">Mot de passe :</label>
                <input class="form-control" type="password" id="password" name="password"><br><br>
                <div class="d-flex">
                    <label class="form-label" for="remember_me">Se souvenir de moi :</label>
                    <input class="form-check" type="checkbox" id="remember_me" name="remember_me"><br>
                </div>

                <input class="btn btn-primary" type="submit" value="Se connecter">
            </form>
        </div>
    </div>
</body>

</html>