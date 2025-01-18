<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Q1
    // $notes_apprenants = [
    //     "Mohamed" => "16",
    //     "Rafika" => "13",
    //     "Aicha" => "15",
    //     "Samir" => "13",
    //     "Ahmed" => "14",
    //     "Samar" => "13",
    //     "Rafik" => "10",
    //     "Samiha" => "09",
    //     "Fourat" => "07",
    //     "Sami" => "07",
    //     "Noura" => "14"
    // ];
    // echo "<table border='1'><tr><td>Nom</td><td>notes</td></tr>";

    // foreach ($notes_apprenants as $k => $v) {
    //     echo " <tr><td>$k</td><td>$v</td><tr>";
    // }
    // echo "</table>";

    // Q2
    // asort($notes_apprenants);
    // echo "<table border='1'><caption>le tableau trier on order croissante</caption><tr><td>Nom</td><td>notes</td></tr>";
    // foreach ($notes_apprenants as $k => $v) {
    //     echo " <tr><td>$k</td><td>$v</td><tr>";
    // }
    // echo "</table>";

    // arsort($notes_apprenants);
    // echo "<table border='1'><caption>le tableau trier on order decoissant</caption><tr><td>Nom</td><td>notes</td></tr>";
    // foreach ($notes_apprenants as $k => $v) {
    //     echo " <tr><td>$k</td><td>$v</td><tr>";
    // }
    // echo "</table>";



    // // Q1
    // $notes_apprenants = [
    //     "Mohamed" => "16",
    //     "Rafika" => "13",
    //     "Aicha" => "15",
    //     "Samir" => "13",
    //     "Ahmed" => "14",
    //     "Samar" => "13",
    //     "Rafik" => "10",
    //     "Samiha" => "09",
    //     "Fourat" => "07",
    //     "Sami" => "07",
    //     "Noura" => "14"
    // ];
    // echo "<table border='1'>";
    // echo "<tr><td>Nom</td><td>Age</td></tr>";
    // foreach ($notes_apprenants as $nom => $note) {
    //     echo "<tr>";
    //     echo "<td>" . $nom . "</td><td>" . $note . "</td>";
    //     echo "</tr>";
    // }

    // asort($notes_apprenants);
    // echo "<table border='1'><caption>le tableau trier on order croissante</caption><tr><td>Nom</td><td>notes</td></tr>";
    // echo "<tr><td>Nom</td><td>Age</td></tr>";
    // foreach ($notes_apprenants as $nom => $note) {
    //     echo "<tr>";
    //     echo "<td>" . $nom . "</td><td>" . $note . "</td>";
    //     echo "</tr>";
    // }


    // arsort($notes_apprenants);
    // echo "<table border='1'><caption>le tableau trier on order decoissant</caption><tr><td>Nom</td><td>notes</td></tr>";
    // echo "<tr><td>Nom</td><td>Age</td></tr>";
    // foreach ($notes_apprenants as $nom => $note) {
    //     echo "<tr>";
    //     echo "<td>" . $nom . "</td><td>" . $note . "</td>";
    //     echo "</tr>";
    // }






    // _________________________________________________________________________________________________________________________________________
    // Q1
    $notes_apprenants = [
        "Mohamed" => "16",
        "Rafika" => "13",
        "Aicha" => "15",
        "Samir" => "13",
        "Ahmed" => "14",
        "Samar" => "13",
        "Rafik" => "10",
        "Samiha" => "09",
        "Fourat" => "07",
        "Sami" => "07",
        "Noura" => "14",
    ];

    // Q1
    // echo "<table border='1'>";
    // echo "<tr><td>Nom</td><td>Age</td></tr>";
    // foreach ($notes_apprenants as $k => $v) {
    //     echo "<tr><td>$k</td><td>$v</td></tr>";
    // }
    // echo "</table>";

    // Q2
    asort($notes_apprenants);
    echo "<table border='1'>";
    echo "<tr><td>Nom</td><td>Age</td></tr>";
    foreach ($notes_apprenants as $k => $v) {
        echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo "</table>";

    arsort($notes_apprenants);
    echo "<table border='1'>";
    echo "<tr><td>Nom</td><td>Age</td></tr>";
    foreach ($notes_apprenants as $k => $v) {
        echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo "</table>";






































    ?>
</body>

</html>