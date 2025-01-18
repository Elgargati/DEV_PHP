<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['langages'])) {
    //     $langauge = $_POST['langages'];
    //     foreach ($langauge as $x)
    //         switch ($x) {
    //             case 'C';
    //                 echo " language C <br>";
    //                 break;
    //             case 'java';
    //                 echo " language java <br>";
    //                 break;
    //             case 'python';
    //                 echo " language python <br>";
    //                 break;
    //             case 'php';
    //                 echo " language php <br>";
    //                 break;
    //         }
    // } else
    //     header('location:index.html');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['langages'])) {
            $langauge = $_POST['langages'];
            foreach ($langauge as $x) {
                switch ($x) {
                    case 'C':
                        echo "Language C <br>";
                        break;
                    case 'java':
                        echo "Language java <br>";
                        break;
                    case 'python':
                        echo "Language python <br>";
                        break;
                    case 'php':
                        echo "Language php <br>";
                        break;
                }
            }
        } else {
            echo "choisir un langage svp !!";
        }
    }

    ?>
</body>

</html>