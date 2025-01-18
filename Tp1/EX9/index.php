<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Number 1</label>
        <input type="number" name="entier1" required><br>
        <label for="">Number 2</label>
        <input type="number" name="entier2" required><br>
        <select name="select">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="envoyer">
    </form>

    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['entier1']) && isset($_POST['entier2']) && isset($_POST['select'])) {
    //     $num1 = $_POST['entier1'];
    //     $num2 = $_POST['entier2'];
    //     $select = $_POST['select'];
    //     foreach ($select as $x)
    //         switch ($x) {
    //             case '+':
    //                 echo (" $num1 + $num2 = " . $num1 + $num2);
    //                 break;
    //             case '-':
    //                 echo (" $num1 - $num2 = " . $num1 - $num2);
    //                 break;
    //             case '*':
    //                 echo (" $num1 * $num2 = " . $num1 * $num2);
    //                 break;
    //             case '/':
    //                 if ($num2 != 0) {
    //                     echo (" $num1 / $num2 = " . $num1 / $num2);
    //                 } else {
    //                     echo "devision par 0 impossible";
    //                 }
    //         }
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['entier1']) && isset($_POST['entier2']) && isset($_POST['select'])) {
        $num1 = $_POST['entier1'];
        $num2 = $_POST['entier2'];
        $select = $_POST['select'];

        switch ($select) {
            case '+':
                echo (" $num1 + $num2 = " . $num1 + $num2);
                break;
            case '-':
                echo (" $num1 - $num2 = " . $num1 - $num2);
                break;
            case '*':
                echo (" $num1 * $num2 = " . $num1 * $num2);
                break;
            case '/':
                if ($num2 != 0) {
                    echo (" $num1 / $num2 = " . $num1 / $num2);
                } else {
                    echo "devision par 0 impossible";
                }
        }
    }













    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["entier1"]) && isset($_POST["entier2"]) && isset($_POST['select'])) {
    //     $select = $_POST['select'];
    //     foreach ($select as $x) {
    //         switch ($x) {
    //             case "+":
    //                 echo ($_POST["entier1"] . "+" . $_POST["entier2"] . "=" . $_POST["entier1"] + $_POST["entier2"]);
    //                 break;
    //             case "-":
    //                 echo ($_POST["entier1"] . "-" . $_POST["entier2"] . "=" . $_POST["entier1"] - $_POST["entier2"]);
    //                 break;
    //             case "*":
    //                 echo ($_POST["entier1"] . "*" . $_POST["entier2"] . "=" . $_POST["entier1"] * $_POST["entier2"]);
    //                 break;
    //             case "/":
    //                 if ($_POST["entier2"] != 0) {
    //                     echo ($_POST["entier1"] . "/" . $_POST["entier2"] . "=" . $_POST["entier1"] / $_POST["entier2"]);
    //                 } else {
    //                     echo "devision par 0 impossible";
    //                 }
    //         }
    //     }
    // } else {
    //     echo ("erreur");
    // }
    ?>
</body>

</html>