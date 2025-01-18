<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <input type="text" name="nombre" placeholder="donner un nombre " required>
        <input type="submit" value="calculer">
    </form>

    <?php
    // if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["nbr"])) {
    //     if (is_numeric($_GET["nbr"]) == true) {
    //         echo "la table de multiplication de ", $_GET["nbr"], ": <br>";
    //         echo "<table border='1'>";
    //         for ($i = 1; $i <= 10; $i++) {
    //             echo "<tr> <td>", $i, " * ", $_GET["nbr"], " = ", "</td><td>", $i * $_GET["nbr"], "</td><tr>";
    //         }
    //         echo "</table>";
    //     } else {
    //         echo "Errour";
    //     }
    // }
    // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nombre'])) {
    //     $nombre = $_GET['nombre'];
    //     if (is_numeric($nombre)) {
    //         echo "la table de Multiplication de $nombre :";
    //         echo "<ul>";
    //         for ($i = 1; $i <= 10; $i++) {
    //             echo "<li> $nombre * $i = " . $nombre * $i . "</li>";
    //         }
    //         echo "</ul>";
    //     } else {
    //         echo "invalide";
    //     }
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if (is_numeric($nombre) == true) {

            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>$nombre * $i = " . $nombre * $i . "</li>";
            }
            echo "</ul>";
        } else {
            echo 'invalid !';
        }
    }




    ?>
</body>

</html>