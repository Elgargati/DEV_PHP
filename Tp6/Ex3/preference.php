<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['color'])) {
        $colorCookie = $_COOKIE['color'];
        echo '<script> document.body.style.backgroundColor ="' . $colorCookie . '";  </script>';
    }
    ?>
    <div>
        <form action="" method="post">
            <label for="">Couleurs :</label>
            <input type="radio" name="color" id="Red" value="Red">
            <label for="Red">Red</label>
            <input type="radio" name="color" id="yellow" value="yellow">
            <label for="yellow">yellow</label>
            <input type="radio" name="color" id="black" value="black">
            <label for="black">black</label>
            <input type="submit" value="OK">
        </form>
        <a href="mapage.php">Retour</a>

    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['color'])) {
        $color = $_POST['color'];
        setcookie('color', $color, time() + 60 * 60 * 24, '/');
        echo '<script> document.body.style.backgroundColor ="' . $color . '";  </script>';
    }

    ?>


</body>

</html>