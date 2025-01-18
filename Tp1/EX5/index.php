<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<form action="" method="post">
    <label for="num1">Entier 1 :</label><br>
    <input type="text" id="num1" name="num1" required placeholder="donner num 1"><br>

    <label for="num2">Entier 2 :</label><br>
    <input type="text" id="num2" name="num2" required placeholder="donner num2"><br>
    <input type="submit" value="Calculer la somme">
</form>

<?php
// if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["num1"]) == True && isset($_POST["num2"]) == true) {
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     if (is_numeric($num1) == true && is_numeric($num2) == true) {
//         echo "la somme est ", $_POST["num1"] + $_POST["num2"];
//     } else {
//         echo "Errour";
//     }
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if (is_numeric($num1) == true && is_numeric($num2) == true) {
        echo "La somme est " . $num1 + $num2;
    } else {
        echo 'erreur';
    }
}
?>
</body>

</html>