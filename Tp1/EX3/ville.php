<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $list_ville = array("rabat", "tanger", "marrakech");
    // $b = false;
    // foreach ($list_ville as $x) {
    //     if ($x == $_GET['ville']) {
    //         $b = true;
    //         break;
    //     }
    // }
    // if ($b == true) {
    //     echo "La ville est valide";
    // } else {
    //     echo "la ville est invalide";
    // }

    // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['ville'])) {
    //     $ville = $_GET['ville'];
    //     $list_ville = ["rabat", "tanger", "marrakech"];
    //     $b = false;
    //     foreach ($list_ville as $x) {
    //         if ($x == $ville) {
    //             $b = true;
    //             break;
    //         }
    //     }
    //     if ($b == true)
    //         echo "la ville est valide";
    //     else
    //         echo "la ville est invalide";
    // }



    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['ville'])) {
        $ville = $_GET['ville'];
        $tableauVilles = ['rabat', 'tanger', 'marrakech'];
        $check = false;
        foreach ($tableauVilles as $v) {
            if ($v == $ville) {
                $check = true;
                break;
            }
        }
        if ($check)
            echo 'valid';
        else
            echo 'invalid';
    }



    ?>
</body>

</html>