<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pwd'])) {
        $pwd = $_POST['pwd'];
        if ($pwd == 'secret')
            echo "enregistres avec succes";
        else
            echo "Mot de passe invalide";
    }

    ?>
</body>

</html>