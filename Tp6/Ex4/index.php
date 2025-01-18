<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp5/Ex3/bootstrap.css">

    <title>Document</title>
</head>

<body class="bg-info">
    <div class="w-50 m-3 p-4 m-auto mt-5 bg-light shadow rounded-2">
        <form action="preference.php" method="post">
            <label class="form-label" for="username">Nom d'utilisateur :</label>
            <input class="form-control" type="text" id="username" name="username" required>

            <label class="form-label" for="email">Email :</label>
            <input class="form-control" type="email" id="email" name="email" required>

            <label class="form-label" for="theme">Theme :</label>
            <input class="form-control" type="text" id="theme" name="theme" required>

            <label class="form-label" for="language">Langue :</label>
            <input class="form-control" type="text" id="language" name="language" required>

            <input class="btn btn-primary w-100 mt-4 " type="submit" value="Envoyer">
        </form>
    </div>
</body>

</html>