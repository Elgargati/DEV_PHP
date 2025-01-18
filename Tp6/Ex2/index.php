<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp5/Ex3/bootstrap.css">
    <title>EX2</title>
</head>

<body>
    <div class="w-50 m-4">
        <h3 class="text-danger ">Choisissez votre langue et votre devise preferees</h3>

        <form action="" method="post">
            <div class="d-flex my-2">
                <label class="form-label mx-3" for="languageS">Langue :</label>
                <select class="form-select w-25" id="languageS" name="language" required>
                    <option value=""></option>
                    <option value="fr">Francais</option>
                    <option value="en">Anglais</option>
                    <option value="es">Espagnol</option>
                </select><br>
            </div>
            <div class="d-flex my-2">
                <label class="form-label mx-3" for="currencyD">Devise :</label>
                <select class="form-select w-25" id="currencyD" name="currency" required>
                    <option value=""></option>
                    <option value="EUR">Euro</option>
                    <option value="USD">USD </option>
                    <option value="MAD">MAD</option>
                </select><br>
            </div>
            <input class="btn btn-outline-primary w-50" type="submit" value="Enregistrer">
        </form>
    </div>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['language']) && isset($_POST['currency'])) {
        $language = $_POST['language'];
        $currency = $_POST['currency'];
        setcookie("language", $language, time() + 60 * 60 * 24, '/');
        setcookie("currency", $currency, time() + 60 * 60 * 24, '/');
        header('location:preferences.php');
    }
    ?>
</body>

</html>