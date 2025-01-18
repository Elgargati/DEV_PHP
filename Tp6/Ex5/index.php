<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['visit_count'])) {
        $visit_count = $_COOKIE['visit_count'] + 1;
    } else {
        $visit_count = 1;
    }
    setcookie('visit_count', $visit_count, time() + (60 * 60 * 24), "/");

    echo "Vous avez visite cette page " . $visit_count . " fois.";
    ?>

</body>

</html>